<?php

namespace App\Entity;

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
class User implements UserInterface
{
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
}
