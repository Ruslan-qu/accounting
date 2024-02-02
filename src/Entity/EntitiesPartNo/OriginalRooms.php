<?php

namespace App\Entity\EntitiesPartNo;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use App\Repository\RepositoryPartNo\OriginalRoomsRepository;

#[ORM\Entity(repositoryClass: OriginalRoomsRepository::class)]
class OriginalRooms
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 33, nullable: true)]
    private ?string $original_number = null;

    #[ORM\OneToMany(mappedBy: 'id_original_number', targetEntity: IdDetailsManufacturer::class)]
    private Collection $idDetailsManufacturersOriginalRooms;

    public function __construct()
    {
        $this->idDetailsManufacturersOriginalRooms = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOriginalNumber(): ?string
    {
        return $this->original_number;
    }

    public function setOriginalNumber(?string $original_number): static
    {
        $this->original_number = $original_number;

        return $this;
    }

    /**
     * @return Collection<int, IdDetailsManufacturer>
     */
    public function getIdDetailsManufacturersOriginalRooms(): Collection
    {
        return $this->idDetailsManufacturersOriginalRooms;
    }

    public function addIdDetailsManufacturersOriginalRoom(IdDetailsManufacturer $idDetailsManufacturersOriginalRoom): static
    {
        if (!$this->idDetailsManufacturersOriginalRooms->contains($idDetailsManufacturersOriginalRoom)) {
            $this->idDetailsManufacturersOriginalRooms->add($idDetailsManufacturersOriginalRoom);
            $idDetailsManufacturersOriginalRoom->setIdOriginalNumber($this);
        }

        return $this;
    }

    public function removeIdDetailsManufacturersOriginalRoom(IdDetailsManufacturer $idDetailsManufacturersOriginalRoom): static
    {
        if ($this->idDetailsManufacturersOriginalRooms->removeElement($idDetailsManufacturersOriginalRoom)) {
            // set the owning side to null (unless already changed)
            if ($idDetailsManufacturersOriginalRoom->getIdOriginalNumber() === $this) {
                $idDetailsManufacturersOriginalRoom->setIdOriginalNumber(null);
            }
        }

        return $this;
    }
}
