<?php

namespace App\Entity;

use App\Repository\KuDirRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: KuDirRepository::class)]
class KuDir
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'KuDirSold')]
    private ?Sold $id_sold = null;

    #[ORM\Column(nullable: true)]
    private ?int $receipt_change = null;

    #[ORM\Column(nullable: true)]
    private ?int $receipt_number = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $receipt_date = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdSold(): ?Sold
    {
        return $this->id_sold;
    }

    public function setIdSold(?Sold $id_sold): static
    {
        $this->id_sold = $id_sold;

        return $this;
    }

    public function getReceiptChange(): ?int
    {
        return $this->receipt_change;
    }

    public function setReceiptChange(?int $receipt_change): static
    {
        $this->receipt_change = $receipt_change;

        return $this;
    }

    public function getReceiptNumber(): ?int
    {
        return $this->receipt_number;
    }

    public function setReceiptNumber(?int $receipt_number): static
    {
        $this->receipt_number = $receipt_number;

        return $this;
    }

    public function getReceiptDate(): ?\DateTimeInterface
    {
        return $this->receipt_date;
    }

    public function setReceiptDate(?\DateTimeInterface $receipt_date): static
    {
        $this->receipt_date = $receipt_date;

        return $this;
    }
}
