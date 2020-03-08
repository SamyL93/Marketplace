<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProduitRepository")
 */
class Product
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Categorie", inversedBy="produits")
     * @ORM\JoinColumn(nullable=false, referencedColumnName="nom")
     */
    private $categorie_fk;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $nom;

    /**
     * @ORM\Column(type="integer")
     */
    private $prix;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $lien_image;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\AchatDetaille", mappedBy="id_produit_fk")
     */
    private $achatDetailles;

    public function __construct()
    {
        $this->achatDetailles = new ArrayCollection();
    }

    public function getCategorieFk(): ?Categorie
    {
        return $this->categorie_fk;
    }

    public function setCategorieFk(?Categorie $categorie_fk): self
    {
        $this->categorie_fk = $categorie_fk;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getLienImage(): ?string
    {
        return $this->lien_image;
    }

    public function setLienImage(?string $lien_image): self
    {
        $this->lien_image = $lien_image;

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
            $achatDetaille->setIdProduitFk($this);
        }

        return $this;
    }

    public function removeAchatDetaille(AchatDetaille $achatDetaille): self
    {
        if ($this->achatDetailles->contains($achatDetaille)) {
            $this->achatDetailles->removeElement($achatDetaille);
            // set the owning side to null (unless already changed)
            if ($achatDetaille->getIdProduitFk() === $this) {
                $achatDetaille->setIdProduitFk(null);
            }
        }

        return $this;
    }


}
