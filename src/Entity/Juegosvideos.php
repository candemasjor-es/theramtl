<?php

namespace App\Entity;

use App\Repository\JuegosvideosRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: JuegosvideosRepository::class)]
class Juegosvideos
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $destacadas = null;

    #[ORM\Column(length: 255)]
    private ?string $titulos = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $textos = null;

    #[ORM\Column(length: 255)]
    private ?string $boton = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDestacadas(): ?string
    {
        return $this->destacadas;
    }

    public function setDestacadas(string $destacadas): self
    {
        $this->destacadas = $destacadas;

        return $this;
    }

    public function getTitulos(): ?string
    {
        return $this->titulos;
    }

    public function setTitulos(string $titulos): self
    {
        $this->titulos = $titulos;

        return $this;
    }

    public function getTextos(): ?string
    {
        return $this->textos;
    }

    public function setTextos(string $textos): self
    {
        $this->textos = $textos;

        return $this;
    }

    public function getBoton(): ?string
    {
        return $this->boton;
    }

    public function setBoton(string $boton): self
    {
        $this->boton = $boton;

        return $this;
    }
}
