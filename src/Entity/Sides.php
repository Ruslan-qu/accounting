<?php

namespace App\Entity;

use App\Repository\SidesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SidesRepository::class)]
class Sides
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 33, nullable: true)]
    private ?string $side = null;

    #[ORM\OneToMany(mappedBy: 'id_side', targetEntity: IdDetailsManufacturer::class)]
    private Collection $SidesIdDetailsManufacturers;

    public function __construct()
    {
        $this->SidesIdDetailsManufacturers = new ArrayCollection();
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
    public function getSidesIdDetailsManufacturers(): Collection
    {
        return $this->SidesIdDetailsManufacturers;
    }

    public function addSidesIdDetailsManufacturer(IdDetailsManufacturer $sidesIdDetailsManufacturer): static
    {
        if (!$this->SidesIdDetailsManufacturers->contains($sidesIdDetailsManufacturer)) {
            $this->SidesIdDetailsManufacturers->add($sidesIdDetailsManufacturer);
            $sidesIdDetailsManufacturer->setIdSide($this);
        }

        return $this;
    }

    public function removeSidesIdDetailsManufacturer(IdDetailsManufacturer $sidesIdDetailsManufacturer): static
    {
        if ($this->SidesIdDetailsManufacturers->removeElement($sidesIdDetailsManufacturer)) {
            // set the owning side to null (unless already changed)
            if ($sidesIdDetailsManufacturer->getIdSide() === $this) {
                $sidesIdDetailsManufacturer->setIdSide(null);
            }
        }

        return $this;
    }
}
