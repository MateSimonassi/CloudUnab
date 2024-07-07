<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\CloudUNABRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CloudUNABRepository::class)]
#[ApiResource]
class CloudUNAB
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $String = null;

    #[ORM\Column(length: 255)]
    private ?string $isbn = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getString(): ?string
    {
        return $this->String;
    }

    public function setString(string $String): static
    {
        $this->String = $String;

        return $this;
    }

    public function getIsbn(): ?string
    {
        return $this->isbn;
    }

    public function setIsbn(string $isbn): static
    {
        $this->isbn = $isbn;

        return $this;
    }
}
