<?php

namespace App\Entity\EntitiesPartNo;

use App\Repository\AvailabilityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AvailabilityRepository::class)]
class Availability
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 4, nullable: true)]
    private ?string $in_stock = null;

    #[ORM\OneToMany(mappedBy: 'id_in_stock', targetEntity: IdDetailsManufacturer::class)]
    private Collection $idDetailsManufacturersAvailability;

    public function __construct()
    {
        $this->idDetailsManufacturersAvailability = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getInStock(): ?string
    {
        return $this->in_stock;
    }

    public function setInStock(?string $in_stock): static
    {
        $this->in_stock = $in_stock;

        return $this;
    }

    /**
     * @return Collection<int, IdDetailsManufacturer>
     */
    public function getIdDetailsManufacturersAvailability(): Collection
    {
        return $this->idDetailsManufacturersAvailability;
    }

    public function addIdDetailsManufacturersAvailability(IdDetailsManufacturer $idDetailsManufacturersAvailability): static
    {
        if (!$this->idDetailsManufacturersAvailability->contains($idDetailsManufacturersAvailability)) {
            $this->idDetailsManufacturersAvailability->add($idDetailsManufacturersAvailability);
            $idDetailsManufacturersAvailability->setIdInStock($this);
        }

        return $this;
    }

    public function removeIdDetailsManufacturersAvailability(IdDetailsManufacturer $idDetailsManufacturersAvailability): static
    {
        if ($this->idDetailsManufacturersAvailability->removeElement($idDetailsManufacturersAvailability)) {
            // set the owning side to null (unless already changed)
            if ($idDetailsManufacturersAvailability->getIdInStock() === $this) {
                $idDetailsManufacturersAvailability->setIdInStock(null);
            }
        }

        return $this;
    }
}
