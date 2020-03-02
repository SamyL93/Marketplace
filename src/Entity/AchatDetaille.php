<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AchatDetailleRepository")
 */
class AchatDetaille
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Achat", inversedBy="achatDetailles")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_achat_fk;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Produit", inversedBy="achatDetailles")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_produit_fk;

    /**
     * @ORM\Column(type="integer")
     */
    private $montant;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdAchatFk(): ?Achat
    {
        return $this->id_achat_fk;
    }

    public function setIdAchatFk(?Achat $id_achat_fk): self
    {
        $this->id_achat_fk = $id_achat_fk;

        return $this;
    }

    public function getIdProduitFk(): ?Produit
    {
        return $this->id_produit_fk;
    }

    public function setIdProduitFk(?Produit $id_produit_fk): self
    {
        $this->id_produit_fk = $id_produit_fk;

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
}
