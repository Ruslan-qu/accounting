<?php

namespace App\Entity;

use App\Repository\InvoiceRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InvoiceRepository::class)]
class Invoice
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_invoice = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $data_invoice = null;

    #[ORM\ManyToOne(inversedBy: 'invoices')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Counterparty $id_counterparty = null;

    #[ORM\ManyToOne(inversedBy: 'invoices')]
    private ?IdDetailsManufacturer $id_details = null;

    #[ORM\ManyToOne(inversedBy: 'invoices')]
    private ?IdDetailsManufacturer $id_manufacturer = null;

    #[ORM\Column(length: 33)]
    private ?string $name_detail = null;

    #[ORM\Column]
    private ?int $quantity = null;

    #[ORM\Column]
    private ?int $price = null;

    #[ORM\Column]
    private ?int $unit_price = null;

    #[ORM\Column]
    private ?int $quantity_sold = null;

    #[ORM\Column]
    private ?int $price_sold = null;

    #[ORM\Column]
    private ?int $Sales = null;

    #[ORM\Column]
    private ?int $refund = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $today_date = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdInvoice(): ?int
    {
        return $this->id_invoice;
    }

    public function setIdInvoice(int $id_invoice): static
    {
        $this->id_invoice = $id_invoice;

        return $this;
    }

    public function getDataInvoice(): ?int
    {
        return $this->data_invoice;
    }

    public function setDataInvoice(int $data_invoice): static
    {
        $this->data_invoice = $data_invoice;

        return $this;
    }

    public function getIdCounterparty(): ?Counterparty
    {
        return $this->id_counterparty;
    }

    public function setIdCounterparty(?Counterparty $id_counterparty): static
    {
        $this->id_counterparty = $id_counterparty;

        return $this;
    }

    public function getIdIdDetails(): ?int
    {
        return $this->id_details;
    }

    public function setIdIdDetails(int $id_details): static
    {
        $this->id_details = $id_details;

        return $this;
    }

    public function getIdManufacturer(): ?IdDetailsManufacturer
    {
        return $this->id_manufacturer;
    }

    public function setIdManufacturer(?IdDetailsManufacturer $id_manufacturer): static
    {
        $this->id_manufacturer = $id_manufacturer;

        return $this;
    }

    public function getNameDetail(): ?string
    {
        return $this->name_detail;
    }

    public function setNameDetail(string $name_detail): static
    {
        $this->name_detail = $name_detail;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function getUnitPrice(): ?int
    {
        return $this->unit_price;
    }

    public function setUnitPrice(int $unit_price): static
    {
        $this->unit_price = $unit_price;

        return $this;
    }

    public function getQuantitySold(): ?int
    {
        return $this->quantity_sold;
    }

    public function setQuantitySold(int $quantity_sold): static
    {
        $this->quantity_sold = $quantity_sold;

        return $this;
    }

    public function getPriceSold(): ?int
    {
        return $this->price_sold;
    }

    public function setPriceSold(int $price_sold): static
    {
        $this->price_sold = $price_sold;

        return $this;
    }

    public function getSales(): ?int
    {
        return $this->Sales;
    }

    public function setSales(int $Sales): static
    {
        $this->Sales = $Sales;

        return $this;
    }

    public function getRefund(): ?int
    {
        return $this->refund;
    }

    public function setRefund(int $refund): static
    {
        $this->refund = $refund;

        return $this;
    }

    public function getTodayDate(): ?\DateTimeInterface
    {
        return $this->today_date;
    }

    public function setTodayDate(\DateTimeInterface $today_date): static
    {
        $this->today_date = $today_date;

        return $this;
    }
}
