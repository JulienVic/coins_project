<?php

namespace App\Entity;

use App\Repository\PiecesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PiecesRepository::class)]
class Pieces
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(nullable: true)]
    private ?float $taille = null;

    #[ORM\Column(length: 255)]
    private ?string $Metal = null;

    #[ORM\Column(length: 255)]
    private ?string $Continent = null;

    #[ORM\Column(length: 255)]
    private ?string $Pays = null;

    #[ORM\Column]
    private ?int $Annee = null;

    #[ORM\Column(length: 500)]
    private ?string $imagePath = null;

    #[ORM\Column(length: 255)]
    private ?string $Qualite = null;

    #[ORM\Column(length: 255)]
    private ?string $Appartenance = null;

    #[ORM\Column]
    private ?float $prixPublic = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getTaille(): ?float
    {
        return $this->taille;
    }

    public function setTaille(?float $taille): static
    {
        $this->taille = $taille;

        return $this;
    }

    public function getMetal(): ?string
    {
        return $this->Metal;
    }

    public function setMetal(string $Metal): static
    {
        $this->Metal = $Metal;

        return $this;
    }

    public function getContinent(): ?string
    {
        return $this->Continent;
    }

    public function setContinent(string $Continent): static
    {
        $this->Continent = $Continent;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->Pays;
    }

    public function setPays(string $Pays): static
    {
        $this->Pays = $Pays;

        return $this;
    }

    public function getAnnee(): ?int
    {
        return $this->Annee;
    }

    public function setAnnee(int $Annee): static
    {
        $this->Annee = $Annee;

        return $this;
    }

    public function getImagePath(): ?string
    {
        return $this->imagePath;
    }

    public function setImagePath(string $imagePath): static
    {
        $this->imagePath = $imagePath;

        return $this;
    }

    public function getQualite(): ?string
    {
        return $this->Qualite;
    }

    public function setQualite(string $Qualite): static
    {
        $this->Qualite = $Qualite;

        return $this;
    }

    public function getAppartenance(): ?string
    {
        return $this->Appartenance;
    }

    public function setAppartenance(string $Appartenance): static
    {
        $this->Appartenance = $Appartenance;

        return $this;
    }

    public function getPrixPublic(): ?float
    {
        return $this->prixPublic;
    }

    public function setPrixPublic(float $prixPublic): static
    {
        $this->prixPublic = $prixPublic;

        return $this;
    }
}