<?php

namespace App\Entity;

use App\Repository\SnipUsersRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SnipUsersRepository::class)]
class SnipUsers
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 64)]
    private ?string $user_login = null;

    #[ORM\Column(length: 255)]
    private ?string $user_pass = null;

    #[ORM\Column(length: 255)]
    private ?string $user_surname = null;

    #[ORM\Column(length: 255)]
    private ?string $user_email = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $user_recovery = null;

    #[ORM\Column(type: Types::SMALLINT, options: ['default' => 0])]
    private ?int $user_permissions = 0;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserLogin(): ?string
    {
        return $this->user_login;
    }

    public function setUserLogin(string $user_login): static
    {
        $this->user_login = $user_login;

        return $this;
    }

    public function getUserPass(): ?string
    {
        return $this->user_pass;
    }

    public function setUserPass(string $user_pass): static
    {
        $this->user_pass = $user_pass;

        return $this;
    }

    public function getUserSurname(): ?string
    {
        return $this->user_surname;
    }

    public function setUserSurname(string $user_surname): static
    {
        $this->user_surname = $user_surname;

        return $this;
    }

    public function getUserEmail(): ?string
    {
        return $this->user_email;
    }

    public function setUserEmail(string $user_email): static
    {
        $this->user_email = $user_email;

        return $this;
    }

    public function getUserRecovery(): ?string
    {
        return $this->user_recovery;
    }

    public function setUserRecovery(?string $user_recovery): static
    {
        $this->user_recovery = $user_recovery;

        return $this;
    }

    public function getUserPermissions(): ?int
    {
        return $this->user_permissions;
    }

    public function setUserPermissions(int $user_permissions): static
    {
        $this->user_permissions = $user_permissions;

        return $this;
    }
}
