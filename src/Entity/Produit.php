<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @ORM\Column(type="string", length=60)
     */
    public $categorie;


    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string", length=60)
     */
    private $title;

    /**
     * @ORM\Column(type="integer")
     */
    private $price;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $image;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\AchatDetaille", mappedBy="id_produit_fk")
     */
    private $achatDetailles;

    /**
     * @ORM\ManyToOne(targetEntity=revendeur::class, inversedBy="produits")
     * @ORM\JoinColumn(nullable=false)
     */
    private $revendeur;

    /**
     * @return mixed
     */
    public function getRevendeur()
    {
        return $this->revendeur;
    }

    /**
     * @param mixed $revendeur
     */
    public function setRevendeur($revendeur)
    {
        $this->revendeur = $revendeur;
    }





    public function __construct()
    {
        $this->achatDetailles = new ArrayCollection();
    }





    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

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

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

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




