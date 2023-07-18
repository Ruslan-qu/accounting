<?php

namespace App\Entity;

use App\Repository\InvoiceRepository;
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

    #[ORM\Column]
    private ?int $data_invoice = null;

    #[ORM\ManyToOne(inversedBy: 'invoices')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Counterparty $id_counterparty = null;

    #[ORM\ManyToOne(inversedBy: 'invoices')]
    private ?IdDetailsManufacturer $Id_id_details = null;

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
        return $this->Id_id_details;
    }

    public function setIdIdDetails(int $Id_id_details): static
    {
        $this->Id_id_details = $Id_id_details;

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
}
