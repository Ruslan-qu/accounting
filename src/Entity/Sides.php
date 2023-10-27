<?php

namespace App\Entity;

use App\Repository\SideRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SideRepository::class)]
class Sides
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 17, nullable: true)]
    private ?string $side = null;

    #[ORM\OneToMany(mappedBy: 'id_Side', targetEntity: IdDetailsManufacturer::class)]
    private Collection $idDetailsManufacturersSides;

    public function __construct()
    {
        $this->idDetailsManufacturersSides = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSide(): ?string
    {
        return $this->side;
    }

    public function setSide(?string $side): static
    {
        $this->side = $side;

        return $this;
    }

    /**
     * @return Collection<int, IdDetailsManufacturer>
     */
    public function getIdDetailsManufacturersSides(): Collection
    {
        return $this->idDetailsManufacturersSides;
    }

    public function addIdDetailsManufacturersSide(IdDetailsManufacturer $idDetailsManufacturersSide): static
    {
        if (!$this->idDetailsManufacturersSides->contains($idDetailsManufacturersSide)) {
            $this->idDetailsManufacturersSides->add($idDetailsManufacturersSide);
            $idDetailsManufacturersSide->setIdSide($this);
        }

        return $this;
    }

    public function removeIdDetailsManufacturersSide(IdDetailsManufacturer $idDetailsManufacturersSide): static
    {
        if ($this->idDetailsManufacturersSides->removeElement($idDetailsManufacturersSide)) {
            // set the owning side to null (unless already changed)
            if ($idDetailsManufacturersSide->getIdSide() === $this) {
                $idDetailsManufacturersSide->setIdSide(null);
            }
        }

        return $this;
    }
}
