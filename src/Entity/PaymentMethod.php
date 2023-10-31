<?php

namespace App\Entity;

use App\Repository\PaymentMethodRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PaymentMethodRepository::class)]
class PaymentMethod
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 17, nullable: true)]
    private ?string $method = null;

    #[ORM\OneToMany(mappedBy: 'id_payment_method', targetEntity: Invoice::class)]
    private Collection $invoices_payment_method;

    public function __construct()
    {
        $this->invoices_payment_method = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMethod(): ?string
    {
        return $this->method;
    }

    public function setMethod(?string $method): static
    {
        $this->method = $method;

        return $this;
    }

    /**
     * @return Collection<int, Invoice>
     */
    public function getInvoicesPaymentMethod(): Collection
    {
        return $this->invoices_payment_method;
    }

    public function addInvoicesPaymentMethod(Invoice $invoicesPaymentMethod): static
    {
        if (!$this->invoices_payment_method->contains($invoicesPaymentMethod)) {
            $this->invoices_payment_method->add($invoicesPaymentMethod);
            $invoicesPaymentMethod->setIdPaymentMethod($this);
        }

        return $this;
    }

    public function removeInvoicesPaymentMethod(Invoice $invoicesPaymentMethod): static
    {
        if ($this->invoices_payment_method->removeElement($invoicesPaymentMethod)) {
            // set the owning side to null (unless already changed)
            if ($invoicesPaymentMethod->getIdPaymentMethod() === $this) {
                $invoicesPaymentMethod->setIdPaymentMethod(null);
            }
        }

        return $this;
    }
}
