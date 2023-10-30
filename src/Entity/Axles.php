<?php

namespace App\Entity;

use App\Repository\AxlesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AxlesRepository::class)]
class Axles
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 13, nullable: true)]
    private ?string $axle = null;

    #[ORM\OneToMany(mappedBy: 'id_axle', targetEntity: IdDetailsManufacturer::class)]
    private Collection $AxlesIdDetailsManufacturer;

    public function __construct()
    {
        $this->AxlesIdDetailsManufacturer = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAxle(): ?string
    {
        return $this->axle;
    }

    public function setAxle(?string $axle): static
    {
        $this->axle = $axle;

        return $this;
    }

    /**
     * @return Collection<int, IdDetailsManufacturer>
     */
    public function getAxlesIdDetailsManufacturer(): Collection
    {
        return $this->AxlesIdDetailsManufacturer;
    }

    public function addAxlesIdDetailsManufacturer(IdDetailsManufacturer $axlesIdDetailsManufacturer): static
    {
        if (!$this->AxlesIdDetailsManufacturer->contains($axlesIdDetailsManufacturer)) {
            $this->AxlesIdDetailsManufacturer->add($axlesIdDetailsManufacturer);
            $axlesIdDetailsManufacturer->setIdAxle($this);
        }

        return $this;
    }

    public function removeAxlesIdDetailsManufacturer(IdDetailsManufacturer $axlesIdDetailsManufacturer): static
    {
        if ($this->AxlesIdDetailsManufacturer->removeElement($axlesIdDetailsManufacturer)) {
            // set the owning side to null (unless already changed)
            if ($axlesIdDetailsManufacturer->getIdAxle() === $this) {
                $axlesIdDetailsManufacturer->setIdAxle(null);
            }
        }

        return $this;
    }
}
