<?php

namespace App\Entity;

use App\Repository\SnipHtmlRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SnipHtmlRepository::class)]
class SnipHtml
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 128)]
    private ?string $html_title = null;

    #[ORM\Column(length: 255)]
    private ?string $html_desc = null;

    #[ORM\Column(length: 128, nullable: true)]
    private ?string $html_img = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $html_code = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHtmlTitle(): ?string
    {
        return $this->html_title;
    }

    public function setHtmlTitle(string $html_title): static
    {
        $this->html_title = $html_title;

        return $this;
    }

    public function getHtmlDesc(): ?string
    {
        return $this->html_desc;
    }

    public function setHtmlDesc(string $html_desc): static
    {
        $this->html_desc = $html_desc;

        return $this;
    }

    public function getHtmlImg(): ?string
    {
        return $this->html_img;
    }

    public function setHtmlImg(string $html_img): static
    {
        $this->html_img = $html_img;

        return $this;
    }

    public function getHtmlCode(): ?string
    {
        return $this->html_code;
    }

    public function setHtmlCode(string $html_code): static
    {
        $this->html_code = $html_code;

        return $this;
    }

    public function getTest(): ?string
    {
        return $this->test;
    }

    public function setTest(?string $test): static
    {
        $this->test = $test;

        return $this;
    }
}
