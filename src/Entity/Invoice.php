<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\InvoiceRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

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

    /*#[ORM\ManyToOne(inversedBy: 'name_detail')]
    private ?IdDetailsManufacturer $id_name_detail = null;*/

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

    public function __construct()
    {
        $this->solds = new ArrayCollection();
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

    /* public function getIdNameDetail(): ?IdDetailsManufacturer
    {
        return $this->id_name_detail;
    }

    public function setIdNameDetail(?IdDetailsManufacturer $id_name_detail): static
    {
        $this->id_name_detail = $id_name_detail;

        return $this;
    }*/

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
            $sold->setInvoice($this);
        }

        return $this;
    }

    public function removeSold(Sold $sold): static
    {
        if ($this->solds->removeElement($sold)) {
            // set the owning side to null (unless already changed)
            if ($sold->getInvoice() === $this) {
                $sold->setInvoice(null);
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
}
