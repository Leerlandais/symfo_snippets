<?php

namespace App\Entity;

use App\Repository\SnipCodeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SnipCodeRepository::class)]
class SnipCode
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $code_title = null;

    #[ORM\Column(length: 255)]
    private ?string $code_desc = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $code_code = null;

    #[ORM\Column(length: 32)]
    private ?string $code_type = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeTitle(): ?string
    {
        return $this->code_title;
    }

    public function setCodeTitle(string $code_title): static
    {
        $this->code_title = $code_title;

        return $this;
    }

    public function getCodeDesc(): ?string
    {
        return $this->code_desc;
    }

    public function setCodeDesc(string $code_desc): static
    {
        $this->code_desc = $code_desc;

        return $this;
    }

    public function getCodeCode(): ?string
    {
        return $this->code_code;
    }

    public function setCodeCode(string $code_code): static
    {
        $this->code_code = $code_code;

        return $this;
    }

    public function getCodeType(): ?string
    {
        return $this->code_type;
    }

    public function setCodeType(string $code_type): static
    {
        $this->code_type = $code_type;

        return $this;
    }
}
