<?php

namespace App\Entity\EntitiesPartNo;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\EntitiesPartNo\Sides;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use App\Entity\EntitiesIncomingDocuments\Invoice;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use App\Repository\RepositoryPartNo\IdDetailsManufacturerRepository;

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

    #[ORM\ManyToOne(inversedBy: 'idDetailsManufacturersDetailsList')]
    private ?DetailsList $id_part_name = null;

    #[ORM\ManyToOne(inversedBy: 'idDetailsManufacturersCarBrands')]
    private ?CarBrands $id_car_brand = null;

    #[ORM\ManyToOne(inversedBy: 'idDetailsManufacturersBodies')]
    private ?Bodies $id_body = null;

    #[ORM\ManyToOne(inversedBy: 'idDetailsManufacturersAvailability')]
    private ?Availability $id_in_stock = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $name_detail = null;

    #[ORM\ManyToOne(inversedBy: 'AxlesIdDetailsManufacturer')]
    private ?Axles $id_axle = null;

    #[ORM\ManyToOne(inversedBy: 'SidesIdDetailsManufacturers')]
    private ?Sides $id_side = null;

    private ?string $hidden = null;

    #[ORM\ManyToOne(inversedBy: 'idDetailsManufacturersOriginalRooms')]
    private ?OriginalRooms $id_original_number = null;

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

    public function getIdPartName(): ?DetailsList
    {
        return $this->id_part_name;
    }

    public function setIdPartName(?DetailsList $id_part_name): static
    {
        $this->id_part_name = $id_part_name;

        return $this;
    }

    public function getIdCarBrand(): ?CarBrands
    {
        return $this->id_car_brand;
    }

    public function setIdCarBrand(?CarBrands $id_car_brand): static
    {
        $this->id_car_brand = $id_car_brand;

        return $this;
    }

    public function getIdBody(): ?Bodies
    {
        return $this->id_body;
    }

    public function setIdBody(?Bodies $id_body): static
    {
        $this->id_body = $id_body;

        return $this;
    }

    public function getIdInStock(): ?Availability
    {
        return $this->id_in_stock;
    }

    public function setIdInStock(?Availability $id_in_stock): static
    {
        $this->id_in_stock = $id_in_stock;

        return $this;
    }

    public function getNameDetail(): ?string
    {
        return $this->name_detail;
    }

    public function setNameDetail(?string $name_detail): static
    {
        $this->name_detail = $name_detail;

        return $this;
    }

    public function getIdAxle(): ?Axles
    {
        return $this->id_axle;
    }

    public function setIdAxle(?Axles $id_axle): static
    {
        $this->id_axle = $id_axle;

        return $this;
    }

    public function getIdSide(): ?Sides
    {
        return $this->id_side;
    }

    public function setIdSide(?Sides $id_side): static
    {
        $this->id_side = $id_side;

        return $this;
    }

    public function getHidden(): ?string
    {
        return $this->hidden;
    }

    public function setHidden(string $hidden): static
    {
        $this->hidden = $hidden;

        return $this;
    }

    public function getIdOriginalNumber(): ?OriginalRooms
    {
        return $this->id_original_number;
    }

    public function setIdOriginalNumber(?OriginalRooms $id_original_number): static
    {
        $this->id_original_number = $id_original_number;

        return $this;
    }
}
