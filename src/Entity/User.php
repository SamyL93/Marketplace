<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @UniqueEntity(
 *     fields={"mail"},
 *     message="This email is already used"
 * )
 */
//table user
class User implements UserInterface
{//
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $username;

    /**
     * @ORM\Column(type="string")
     * @Assert\Length(min="8",minMessage="your password must be at least 8 characters")
     */
    private $password;
    /**
     * @Assert\EqualTo(propertyPath="password",message="Password not equal")
     */
    private $confirm_password;

    /**
     * @ORM\Column(type="string")
     * @Assert\Email()
     */
    private $mail;



    /**
     * @ORM\Column(type="date", nullable=true)
     */

    private $date_naissance;

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private $date_inscription;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Achat", mappedBy="id_user_fk")
     */
    private $achats;

    public function __construct()
    {
        $this->achats = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function getConfirmPassword(): ?string
    {
        return $this->confirm_password;
    }

    public function setUserName($name)
    {
        $this->username = $name;
    }

    public function setMail($mail)
    {
        $this->mail = $mail;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setConfirmPassword($confirm)
    {
        $this->confirm_password = $confirm;
    }

    /**
     * @inheritDoc
     */
    public function getRoles()
    {
        // TODO: Implement getRoles() method.
    }

    /**
     * @inheritDoc
     */
    public function getSalt()
    {
        // TODO: Implement getSalt() method.
    }

    /**
     * @inheritDoc
     */
    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }



    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->date_naissance;
    }

    public function setDateNaissance(?\DateTimeInterface $date_naissance): self
    {
        $this->date_naissance = $date_naissance;

        return $this;
    }

    public function getDateInscription(): ?\DateTimeImmutable
    {
        return $this->date_inscription;
    }

    public function setDateNInscription(\DateTimeImmutable $date_inscription): self
    {
        $this->date_inscription = $date_inscription;

        return $this;
    }

    /**
     * @return Collection|Achat[]
     */
    public function getAchats(): Collection
    {
        return $this->achats;
    }

    public function addAchat(Achat $achat): self
    {
        if (!$this->achats->contains($achat)) {
            $this->achats[] = $achat;
            $achat->setIdUserFk($this);
        }

        return $this;
    }

    public function removeAchat(Achat $achat): self
    {
        if ($this->achats->contains($achat)) {
            $this->achats->removeElement($achat);
            // set the owning side to null (unless already changed)
            if ($achat->getIdUserFk() === $this) {
                $achat->setIdUserFk(null);
            }
        }

        return $this;
    }
}
