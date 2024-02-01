<?php

namespace App\Entity\EntitiesRefund;

use App\Repository\RefundDateRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RefundDateRepository::class)]
class RefundDate
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'RefundDateInvoice')]
    private ?Invoice $id_invoice_refund_date = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $refund_date = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdInvoiceRefundDate(): ?Invoice
    {
        return $this->id_invoice_refund_date;
    }

    public function setIdInvoiceRefundDate(?Invoice $id_invoice_refund_date): static
    {
        $this->id_invoice_refund_date = $id_invoice_refund_date;

        return $this;
    }

    public function getRefundDate(): ?\DateTimeInterface
    {
        return $this->refund_date;
    }

    public function setRefundDate(?\DateTimeInterface $refund_date): static
    {
        $this->refund_date = $refund_date;

        return $this;
    }
}
