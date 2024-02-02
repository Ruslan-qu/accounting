<?php

namespace App\Entity\EntitiesIncomingDocuments;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\EntitiesPrice\Sold;
use App\Entity\EntitiesKuDir\KuDir;
use App\Entity\EntitiesRefund\RefundDate;
use Doctrine\Common\Collections\Collection;
use App\Entity\EntitiesRefund\RefundActivity;
use Doctrine\Common\Collections\ArrayCollection;
use App\Entity\EntitiesCounterparty\Counterparty;
use App\Entity\EntitiesPartNo\IdDetailsManufacturer;
use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\RepositoryIncomingDocuments\InvoiceRepository;

#[ORM\Entity(repositoryClass: InvoiceRepository::class)]
class Invoice
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $data_invoice = null;

    #[ORM\ManyToOne(inversedBy: 'invoices')]
    #[ORM\JoinColumn(nullable: true)]
    private ?Counterparty $id_counterparty = null;

    #[ORM\Column(nullable: true)]
    private ?int $quantity = null;


    #[ORM\Column(nullable: true)]
    private ?int $price = null;

    #[ORM\Column(nullable: true)]
    private ?int $quantity_sold = null;

    #[ORM\Column(nullable: true)]
    private ?int $Sales = null;

    #[ORM\Column(nullable: true)]
    private ?int $refund = null;

    #[ORM\ManyToOne(inversedBy: 'part_number')]
    private ?IdDetailsManufacturer $id_details = null;

    #[ORM\ManyToOne(inversedBy: 'manufacturer')]
    private ?IdDetailsManufacturer $id_manufacturer = null;

    #[ORM\Column(nullable: true)]
    private ?int $number_document = null;

    #[ORM\OneToMany(mappedBy: 'invoice', targetEntity: Sold::class)]
    private Collection $solds;

    #[ORM\ManyToOne(inversedBy: 'invoices_payment_method')]
    private ?PaymentMethod $id_payment_method = null;

    #[ORM\ManyToOne(inversedBy: 'invoicesRefundActivity')]
    private ?RefundActivity $id_refund_activity = null;

    #[ORM\Column(nullable: true)]
    private ?int $ku_dir_status = null;

    #[ORM\OneToMany(mappedBy: 'id_invoice_refund_date', targetEntity: RefundDate::class, cascade: ['remove'])]
    private Collection $RefundDateInvoice;

    #[ORM\ManyToOne(inversedBy: 'invoiceKuDir')]
    private ?KuDir $id_ku_dir = null;

    public function __construct()
    {
        $this->solds = new ArrayCollection();
        $this->RefundDateInvoice = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDataInvoice(): ?\DateTimeInterface
    {
        return $this->data_invoice;
    }

    public function setDataInvoice(\DateTimeInterface $data_invoice): static
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

    public function getQuantitySold(): ?int
    {
        return $this->quantity_sold;
    }

    public function setQuantitySold(int $quantity_sold): static
    {
        $this->quantity_sold = $quantity_sold;

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

    public function getIdDetails(): ?IdDetailsManufacturer
    {
        return $this->id_details;
    }

    public function setIdDetails(?IdDetailsManufacturer $id_details): static
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

    public function getNumberDocument(): ?int
    {
        return $this->number_document;
    }

    public function setNumberDocument(?int $number_document): static
    {
        $this->number_document = $number_document;

        return $this;
    }

    /**
     * @return Collection<int, Sold>
     */
    public function getSolds(): Collection
    {
        return $this->solds;
    }

    public function addSold(Sold $sold): static
    {
        if (!$this->solds->contains($sold)) {
            $this->solds->add($sold);
            $sold->setIdInvoice($this);
        }

        return $this;
    }

    public function removeSold(Sold $sold): static
    {
        if ($this->solds->removeElement($sold)) {
            // set the owning side to null (unless already changed)
            if ($sold->getIdInvoice() === $this) {
                $sold->setIdInvoice(null);
            }
        }

        return $this;
    }

    public function getIdPaymentMethod(): ?PaymentMethod
    {
        return $this->id_payment_method;
    }

    public function setIdPaymentMethod(?PaymentMethod $id_payment_method): static
    {
        $this->id_payment_method = $id_payment_method;

        return $this;
    }

    public function getIdRefundActivity(): ?RefundActivity
    {
        return $this->id_refund_activity;
    }

    public function setIdRefundActivity(?RefundActivity $id_refund_activity): static
    {
        $this->id_refund_activity = $id_refund_activity;

        return $this;
    }

    public function getKuDirStatus(): ?int
    {
        return $this->ku_dir_status;
    }

    public function setKuDirStatus(?int $ku_dir_status): static
    {
        $this->ku_dir_status = $ku_dir_status;

        return $this;
    }

    /**
     * @return Collection<int, RefundDate>
     */
    public function getRefundDateInvoice(): Collection
    {
        return $this->RefundDateInvoice;
    }

    public function addRefundDateInvoice(RefundDate $refundDateInvoice): static
    {
        if (!$this->RefundDateInvoice->contains($refundDateInvoice)) {
            $this->RefundDateInvoice->add($refundDateInvoice);
            $refundDateInvoice->setIdInvoiceRefundDate($this);
        }

        return $this;
    }

    public function removeRefundDateInvoice(RefundDate $refundDateInvoice): static
    {
        if ($this->RefundDateInvoice->removeElement($refundDateInvoice)) {
            // set the owning side to null (unless already changed)
            if ($refundDateInvoice->getIdInvoiceRefundDate() === $this) {
                $refundDateInvoice->setIdInvoiceRefundDate(null);
            }
        }

        return $this;
    }

    public function getIdKuDir(): ?KuDir
    {
        return $this->id_ku_dir;
    }

    public function setIdKuDir(?KuDir $id_ku_dir): static
    {
        $this->id_ku_dir = $id_ku_dir;

        return $this;
    }
}
