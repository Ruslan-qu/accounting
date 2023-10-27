<?php

namespace App\Entity;

use App\Repository\DetailsListRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DetailsListRepository::class)]
class DetailsList
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 33, nullable: true)]
    private ?string $part_name = null;

    #[ORM\OneToMany(mappedBy: 'id_part_name', targetEntity: IdDetailsManufacturer::class)]
    private Collection $idDetailsManufacturersDetailsList;

    public function __construct()
    {
        $this->idDetailsManufacturersDetailsList = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPartName(): ?string
    {
        return $this->part_name;
    }

    public function setPartName(?string $part_name): static
    {
        $this->part_name = $part_name;

        return $this;
    }

    /**
     * @return Collection<int, IdDetailsManufacturer>
     */
    public function getIdDetailsManufacturersDetailsList(): Collection
    {
        return $this->idDetailsManufacturersDetailsList;
    }

    public function addIdDetailsManufacturersDetailsList(IdDetailsManufacturer $idDetailsManufacturersDetailsList): static
    {
        if (!$this->idDetailsManufacturersDetailsList->contains($idDetailsManufacturersDetailsList)) {
            $this->idDetailsManufacturersDetailsList->add($idDetailsManufacturersDetailsList);
            $idDetailsManufacturersDetailsList->setIdPartName($this);
        }

        return $this;
    }

    public function removeIdDetailsManufacturersDetailsList(IdDetailsManufacturer $idDetailsManufacturersDetailsList): static
    {
        if ($this->idDetailsManufacturersDetailsList->removeElement($idDetailsManufacturersDetailsList)) {
            // set the owning side to null (unless already changed)
            if ($idDetailsManufacturersDetailsList->getIdPartName() === $this) {
                $idDetailsManufacturersDetailsList->setIdPartName(null);
            }
        }

        return $this;
    }
}
