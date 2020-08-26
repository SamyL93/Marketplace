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
    public $username;

    /**
     * @ORM\Column(type="string", length=64)
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
     * @ORM\OneToMany(targetEntity="App\Entity\Achat", mappedBy="id_user_fk")
     */
    private $achats;



    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $roles;

    public function __construct()
    {
        $this->achats = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getMail()
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
        return array('ROLE_USER');    }

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

    public function setRoles(?string $roles): self
    {
        $this->roles = $roles;

        return $this;
    }
}
