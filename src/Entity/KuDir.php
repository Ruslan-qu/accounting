<?php

namespace App\Entity;

use App\Repository\KuDirRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: KuDirRepository::class)]
class KuDir
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $receipt_change = null;

    #[ORM\Column(nullable: true)]
    private ?int $receipt_number = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $receipt_date = null;

    #[ORM\Column(nullable: true)]
    private ?int $coming = null;

    #[ORM\Column(nullable: true)]
    private ?int $expenditure = null;

    #[ORM\OneToMany(mappedBy: 'id_ku_dir', targetEntity: Invoice::class)]
    private Collection $invoiceKuDir;

    public function __construct()
    {
        $this->invoiceKuDir = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getComing(): ?int
    {
        return $this->coming;
    }

    public function setComing(?int $coming): static
    {
        $this->coming = $coming;

        return $this;
    }

    public function getExpenditure(): ?int
    {
        return $this->expenditure;
    }

    public function setExpenditure(?int $expenditure): static
    {
        $this->expenditure = $expenditure;

        return $this;
    }

    /**
     * @return Collection<int, Invoice>
     */
    public function getInvoiceKuDir(): Collection
    {
        return $this->invoiceKuDir;
    }

    public function addInvoiceKuDir(Invoice $invoiceKuDir): static
    {
        if (!$this->invoiceKuDir->contains($invoiceKuDir)) {
            $this->invoiceKuDir->add($invoiceKuDir);
            $invoiceKuDir->setIdKuDir($this);
        }

        return $this;
    }

    public function removeInvoiceKuDir(Invoice $invoiceKuDir): static
    {
        if ($this->invoiceKuDir->removeElement($invoiceKuDir)) {
            // set the owning side to null (unless already changed)
            if ($invoiceKuDir->getIdKuDir() === $this) {
                $invoiceKuDir->setIdKuDir(null);
            }
        }

        return $this;
    }
}
