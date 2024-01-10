<?php

namespace App\Entity;

use App\Repository\SoldRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SoldRepository::class)]
class Sold
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'solds')]
    private ?Invoice $id_invoice = null;

    #[ORM\Column(nullable: true)]
    private ?int $quantity_sold = null;

    #[ORM\Column(nullable: true)]
    private ?int $price_sold = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date_sold = null;

    private ?int $hidden_sold = null;

    #[ORM\OneToMany(mappedBy: 'id_sold', targetEntity: KuDir::class)]
    private Collection $KuDirSold;

    public function __construct()
    {
        $this->KuDirSold = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdInvoice(): ?Invoice
    {
        return $this->id_invoice;
    }

    public function setIdInvoice(?Invoice $id_invoice): static
    {
        $this->id_invoice = $id_invoice;

        return $this;
    }

    public function getQuantitySold(): ?int
    {
        return $this->quantity_sold;
    }

    public function setQuantitySold(?int $quantity_sold): static
    {
        $this->quantity_sold = $quantity_sold;

        return $this;
    }

    public function getPriceSold(): ?int
    {
        return $this->price_sold;
    }

    public function setPriceSold(?int $price_sold): static
    {
        $this->price_sold = $price_sold;

        return $this;
    }

    public function getDateSold(): ?\DateTimeInterface
    {
        return $this->date_sold;
    }

    public function setDateSold(?\DateTimeInterface $date_sold): static
    {
        $this->date_sold = $date_sold;

        return $this;
    }

    public function getHiddenSold(): ?int
    {
        return $this->hidden_sold;
    }

    public function setHiddenSold(?int $hidden_sold): static
    {
        $this->hidden_sold = $hidden_sold;

        return $this;
    }

    /**
     * @return Collection<int, KuDir>
     */
    public function getKuDirSold(): Collection
    {
        return $this->KuDirSold;
    }

    public function addKuDirSold(KuDir $kuDirSold): static
    {
        if (!$this->KuDirSold->contains($kuDirSold)) {
            $this->KuDirSold->add($kuDirSold);
            $kuDirSold->setIdSold($this);
        }

        return $this;
    }

    public function removeKuDirSold(KuDir $kuDirSold): static
    {
        if ($this->KuDirSold->removeElement($kuDirSold)) {
            // set the owning side to null (unless already changed)
            if ($kuDirSold->getIdSold() === $this) {
                $kuDirSold->setIdSold(null);
            }
        }

        return $this;
    }
}
