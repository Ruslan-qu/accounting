<?php

namespace App\Entity;

use App\Repository\SearchInvoiceRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SearchInvoiceRepository::class)]
class SearchInvoice
{
    private ?\DateTimeInterface $s_data_invoice = null;

    private ?\DateTimeInterface $po_data_invoice = null;

    private ?int $s_price = null;

    private ?int $po_price = null;

    private ?int $number_document = null;

    private ?Counterparty $id_counterparty = null;

    private ?string $id_details = null;

    private ?string $id_manufacturer = null;

    private ?int $refund = null;

    public function getSDataInvoice(): ?\DateTimeInterface
    {
        return $this->s_data_invoice;
    }

    public function setSDataInvoice(?\DateTimeInterface $s_data_invoice): static
    {
        $this->s_data_invoice = $s_data_invoice;

        return $this;
    }

    public function getPoDataInvoice(): ?\DateTimeInterface
    {
        return $this->po_data_invoice;
    }

    public function setPoDataInvoice(?\DateTimeInterface $po_data_invoice): static
    {
        $this->po_data_invoice = $po_data_invoice;

        return $this;
    }

    public function getSPrice(): ?int
    {
        return $this->s_price;
    }

    public function setSPrice(?int $s_price): static
    {
        $this->s_price = $s_price;

        return $this;
    }

    public function getPoPrice(): ?int
    {
        return $this->po_price;
    }

    public function setPoPrice(?int $po_price): static
    {
        $this->po_price = $po_price;

        return $this;
    }

    public function getNumberDocument(): ?int
    {
        return $this->number_document;
    }

    public function setNumberDocument(?int $number_document): static
    {
        $this->number_document = $number_document;

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

    public function getIdDetails(): ?string
    {
        return $this->id_details;
    }

    public function setIdDetails(?string $id_details): static
    {
        $this->id_details = $id_details;

        return $this;
    }

    public function getIdManufacturer(): ?string
    {
        return $this->id_manufacturer;
    }

    public function setIdManufacturer(?string $id_manufacturer): static
    {
        $this->id_manufacturer = $id_manufacturer;

        return $this;
    }

    public function getRefund(): ?int
    {
        return $this->refund;
    }

    public function setRefund(?int $refund): static
    {
        $this->refund = $refund;

        return $this;
    }
}