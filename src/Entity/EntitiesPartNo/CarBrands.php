<?php

namespace App\Entity\EntitiesPartNo;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use App\Repository\RepositoryPartNo\CarBrandsRepository;

#[ORM\Entity(repositoryClass: CarBrandsRepository::class)]
class CarBrands
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 33, nullable: true)]
    private ?string $car_brand = null;

    #[ORM\OneToMany(mappedBy: 'id_car_brand', targetEntity: IdDetailsManufacturer::class)]
    private Collection $idDetailsManufacturersCarBrands;

    public function __construct()
    {
        $this->idDetailsManufacturersCarBrands = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCarBrand(): ?string
    {
        return $this->car_brand;
    }

    public function setCarBrand(?string $car_brand): static
    {
        $this->car_brand = $car_brand;

        return $this;
    }

    /**
     * @return Collection<int, IdDetailsManufacturer>
     */
    public function getIdDetailsManufacturersCarBrands(): Collection
    {
        return $this->idDetailsManufacturersCarBrands;
    }

    public function addIdDetailsManufacturersCarBrand(IdDetailsManufacturer $idDetailsManufacturersCarBrand): static
    {
        if (!$this->idDetailsManufacturersCarBrands->contains($idDetailsManufacturersCarBrand)) {
            $this->idDetailsManufacturersCarBrands->add($idDetailsManufacturersCarBrand);
            $idDetailsManufacturersCarBrand->setIdCarBrand($this);
        }

        return $this;
    }

    public function removeIdDetailsManufacturersCarBrand(IdDetailsManufacturer $idDetailsManufacturersCarBrand): static
    {
        if ($this->idDetailsManufacturersCarBrands->removeElement($idDetailsManufacturersCarBrand)) {
            // set the owning side to null (unless already changed)
            if ($idDetailsManufacturersCarBrand->getIdCarBrand() === $this) {
                $idDetailsManufacturersCarBrand->setIdCarBrand(null);
            }
        }

        return $this;
    }
}
