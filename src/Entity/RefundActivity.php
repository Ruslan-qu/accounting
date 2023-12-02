<?php

namespace App\Entity;

use App\Repository\RefundActivityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RefundActivityRepository::class)]
class RefundActivity
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 33)]
    private ?string $activity = null;

    #[ORM\OneToMany(mappedBy: 'id_refund_activity', targetEntity: Invoice::class)]
    private Collection $invoicesRefundActivity;

    public function __construct()
    {
        $this->invoicesRefundActivity = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getActivity(): ?string
    {
        return $this->activity;
    }

    public function setActivity(string $activity): static
    {
        $this->activity = $activity;

        return $this;
    }

    /**
     * @return Collection<int, Invoice>
     */
    public function getInvoicesRefundActivity(): Collection
    {
        return $this->invoicesRefundActivity;
    }

    public function addInvoicesRefundActivity(Invoice $invoicesRefundActivity): static
    {
        if (!$this->invoicesRefundActivity->contains($invoicesRefundActivity)) {
            $this->invoicesRefundActivity->add($invoicesRefundActivity);
            $invoicesRefundActivity->setIdRefundActivity($this);
        }

        return $this;
    }

    public function removeInvoicesRefundActivity(Invoice $invoicesRefundActivity): static
    {
        if ($this->invoicesRefundActivity->removeElement($invoicesRefundActivity)) {
            // set the owning side to null (unless already changed)
            if ($invoicesRefundActivity->getIdRefundActivity() === $this) {
                $invoicesRefundActivity->setIdRefundActivity(null);
            }
        }

        return $this;
    }
}
