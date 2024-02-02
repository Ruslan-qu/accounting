<?php

namespace App\Entity\EntitiesPartNo;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use App\Repository\RepositoryPartNo\BodiesRepository;

#[ORM\Entity(repositoryClass: BodiesRepository::class)]
class Bodies
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 13, nullable: true)]
    private ?string $body = null;

    #[ORM\OneToMany(mappedBy: 'id_body', targetEntity: IdDetailsManufacturer::class)]
    private Collection $idDetailsManufacturersBodies;

    public function __construct()
    {
        $this->idDetailsManufacturersBodies = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBody(): ?string
    {
        return $this->body;
    }

    public function setBody(?string $body): static
    {
        $this->body = $body;

        return $this;
    }

    /**
     * @return Collection<int, IdDetailsManufacturer>
     */
    public function getIdDetailsManufacturersBodies(): Collection
    {
        return $this->idDetailsManufacturersBodies;
    }

    public function addIdDetailsManufacturersBody(IdDetailsManufacturer $idDetailsManufacturersBody): static
    {
        if (!$this->idDetailsManufacturersBodies->contains($idDetailsManufacturersBody)) {
            $this->idDetailsManufacturersBodies->add($idDetailsManufacturersBody);
            $idDetailsManufacturersBody->setIdBody($this);
        }

        return $this;
    }

    public function removeIdDetailsManufacturersBody(IdDetailsManufacturer $idDetailsManufacturersBody): static
    {
        if ($this->idDetailsManufacturersBodies->removeElement($idDetailsManufacturersBody)) {
            // set the owning side to null (unless already changed)
            if ($idDetailsManufacturersBody->getIdBody() === $this) {
                $idDetailsManufacturersBody->setIdBody(null);
            }
        }

        return $this;
    }
}
