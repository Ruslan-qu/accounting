<?php

namespace App\Entity;

use App\Repository\CounterpartyRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CounterpartyRepository::class)]
class Counterparty
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 33)]
    private ?string $counterparty = null;

    #[ORM\OneToMany(mappedBy: 'id_counterparty', targetEntity: Invoice::class)]
    private Collection $invoices;

    public function __construct()
    {
        $this->invoices = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCounterparty(): ?string
    {
        return $this->counterparty;
    }

    public function setCounterparty(string $counterparty): static
    {
        $this->counterparty = $counterparty;

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
            $invoice->setIdCounterparty($this);
        }

        return $this;
    }

    public function removeInvoice(Invoice $invoice): static
    {
        if ($this->invoices->removeElement($invoice)) {
            // set the owning side to null (unless already changed)
            if ($invoice->getIdCounterparty() === $this) {
                $invoice->setIdCounterparty(null);
            }
        }

        return $this;
    }
}
