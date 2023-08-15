<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use App\Repository\IdDetailsManufacturerRepository;

#[ORM\Entity(repositoryClass: IdDetailsManufacturerRepository::class)]
class IdDetailsManufacturer
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[Assert\Unique]
    #[ORM\Column(length: 33, nullable: false)]
    private ?string $part_number = null;

    #[Assert\Unique]
    #[ORM\Column(length: 33, nullable: false)]
    private ?string $manufacturer = null;

    #[ORM\OneToMany(mappedBy: 'id_manufacturer', targetEntity: Invoice::class)]
    private Collection $invoices;

    public function __construct()
    {
        $this->invoices = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPartNumber(): ?string
    {
        return $this->part_number;
    }

    public function setPartNumber(string $part_number): static
    {
        $this->part_number = $part_number;

        return $this;
    }

    public function getManufacturer(): ?string
    {
        return $this->manufacturer;
    }

    public function setManufacturer(string $manufacturer): static
    {
        $this->manufacturer = $manufacturer;

        return $this;
    }

    /**
     * @return Collection<int, Invoice>
     */
    public function getInvoices(): Collection
    {
        return $this->invoices;
    }

    public function addInvoice(Invoice $invoice): static
    {
        if (!$this->invoices->contains($invoice)) {
            $this->invoices->add($invoice);
            $invoice->setIdManufacturer($this);
        }

        return $this;
    }

    public function removeInvoice(Invoice $invoice): static
    {
        if ($this->invoices->removeElement($invoice)) {
            // set the owning side to null (unless already changed)
            if ($invoice->getIdManufacturer() === $this) {
                $invoice->setIdManufacturer(null);
            }
        }

        return $this;
    }
}
