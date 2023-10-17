<?php

namespace App\Entity;

use App\Repository\SoldRepository;
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
    private ?Invoice $invoice = null;

    #[ORM\Column(nullable: true)]
    private ?int $quantity_sold = null;

    #[ORM\Column(nullable: true)]
    private ?int $price_sold = null;

    #[ORM\Column(type: Types::DATE_IMMUTABLE, nullable: true)]
    private ?\DateTimeImmutable $date_sold = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getInvoice(): ?Invoice
    {
        return $this->invoice;
    }

    public function setInvoice(?Invoice $invoice): static
    {
        $this->invoice = $invoice;

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

    public function getDateSold(): ?\DateTimeImmutable
    {
        return $this->date_sold;
    }

    public function setDateSold(?\DateTimeImmutable $date_sold): static
    {
        $this->date_sold = $date_sold;

        return $this;
    }
}
