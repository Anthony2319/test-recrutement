<?php

namespace App\Entity;

use App\Repository\SemenceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SemenceRepository::class)
 */
class Semence
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=90)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=90, nullable=true)
     */
    private $periodeplantation;

    /**
     * @ORM\Column(type="string", length=90, nullable=true)
     */
    private $perioderecolte;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $conseils;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $img;

    /**
     * @ORM\ManyToOne(targetEntity=Famille::class, inversedBy="semences")
     */
    private $famille;

    /**
     * @ORM\OneToOne(targetEntity=Stock::class, cascade={"persist", "remove"})
     */
    private $stock;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPeriodeplantation(): ?string
    {
        return $this->periodeplantation;
    }

    public function setPeriodeplantation(string $periode): self
    {
        $this->periodeplantation = $periode;

        return $this;
    }

    public function getPerioderecolte(): ?string
    {
        return $this->perioderecolte;
    }

    public function setPerioderecolte(string $periodederecolte): self
    {
        $this->perioderecolte = $periodederecolte;

        return $this;
    }

    public function getConseils(): ?string
    {
        return $this->conseils;
    }

    public function setConseils(?string $conseils): self
    {
        $this->conseils = $conseils;

        return $this;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(string $img): self
    {
        $this->img = $img;

        return $this;
    }

    public function getFamille(): ?Famille
    {
        return $this->famille;
    }

    public function setFamille(?Famille $famille): self
    {
        $this->famille = $famille;

        return $this;
    }

    public function getStock(): ?Stock
    {
        return $this->stock;
    }

    public function setStock(?Stock $stock): self
    {
        $this->stock = $stock;

        return $this;
    }
}
