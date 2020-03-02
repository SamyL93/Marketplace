<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProduitRepository")
 */
class Produit
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Categorie", inversedBy="produits")
     * @ORM\JoinColumn(nullable=false)
     */
    private $categorie_fk;

    public function getCategorieFk(): ?Categorie
    {
        return $this->categorie_fk;
    }

    public function setCategorieFk(?Categorie $categorie_fk): self
    {
        $this->categorie_fk = $categorie_fk;

        return $this;
    }


}
