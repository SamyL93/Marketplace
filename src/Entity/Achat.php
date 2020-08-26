<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AchatRepository")
 */
class Achat
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="achats")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_user_fk;



    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\Column(type="integer")
     */
    private $montant;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\AchatDetaille", mappedBy="id_achat_fk")
     */
    private $achatDetailles;

    public function __construct()
    {
        $this->achatDetailles = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdUserFk(): ?User
    {
        return $this->id_user_fk;
    }

    public function setIdUserFk(?User $id_user_fk): self
    {
        $this->id_user_fk = $id_user_fk;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getMontant(): ?int
    {
        return $this->montant;
    }

    public function setMontant(int $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * @return Collection|AchatDetaille[]
     */
    public function getAchatDetailles(): Collection
    {
        return $this->achatDetailles;
    }

    public function addAchatDetaille(AchatDetaille $achatDetaille): self
    {
        if (!$this->achatDetailles->contains($achatDetaille)) {
            $this->achatDetailles[] = $achatDetaille;
            $achatDetaille->setIdAchatFk($this);
        }

        return $this;
    }

    public function removeAchatDetaille(AchatDetaille $achatDetaille): self
    {
        if ($this->achatDetailles->contains($achatDetaille)) {
            $this->achatDetailles->removeElement($achatDetaille);
            // set the owning side to null (unless already changed)
            if ($achatDetaille->getIdAchatFk() === $this) {
                $achatDetaille->setIdAchatFk(null);
            }
        }

        return $this;
    }
}
