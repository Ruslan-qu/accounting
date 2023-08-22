<?php

namespace App\Entity;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use App\Repository\IdDetailsManufacturerRepository;

#[ORM\Entity(repositoryClass: IdDetailsManufacturerRepository::class)]
class IdDetailsManufacturer
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToMany(mappedBy: 'id_details', targetEntity: Invoice::class)]
    private Collection $part_number;

    #[ORM\OneToMany(mappedBy: 'id_manufacturer', targetEntity: Invoice::class)]
    private Collection $manufacturer;

    #[ORM\Column(length: 33, nullable: true)]
    private ?string $part_numbers = null;

    #[ORM\Column(length: 33, nullable: true)]
    private ?string $manufacturers = null;

    public function __construct()
    {
        $this->part_number = new ArrayCollection();
        $this->manufacturer = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, Invoice>
     */
    public function getPartNumber(): Collection
    {
        return $this->part_number;
    }

    public function addPartNumber(Invoice $partNumber): static
    {
        if (!$this->part_number->contains($partNumber)) {
            $this->part_number->add($partNumber);
            $partNumber->setIdDetails($this);
        }

        return $this;
    }

    public function removePartNumber(Invoice $partNumber): static
    {
        if ($this->part_number->removeElement($partNumber)) {
            // set the owning side to null (unless already changed)
            if ($partNumber->getIdDetails() === $this) {
                $partNumber->setIdDetails(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Invoice>
     */
    public function getManufacturer(): Collection
    {
        return $this->manufacturer;
    }

    public function addManufacturer(Invoice $manufacturer): static
    {
        if (!$this->manufacturer->contains($manufacturer)) {
            $this->manufacturer->add($manufacturer);
            $manufacturer->setIdManufacturer($this);
        }

        return $this;
    }

    public function removeManufacturer(Invoice $manufacturer): static
    {
        if ($this->manufacturer->removeElement($manufacturer)) {
            // set the owning side to null (unless already changed)
            if ($manufacturer->getIdManufacturer() === $this) {
                $manufacturer->setIdManufacturer(null);
            }
        }

        return $this;
    }

    public function getPartNumbers(): ?string
    {
        return $this->part_numbers;
    }

    public function setPartNumbers(?string $part_numbers): static
    {
        $this->part_numbers = $part_numbers;

        return $this;
    }

    public function getManufacturers(): ?string
    {
        return $this->manufacturers;
    }

    public function setManufacturers(?string $manufacturers): static
    {
        $this->manufacturers = $manufacturers;

        return $this;
    }
}
