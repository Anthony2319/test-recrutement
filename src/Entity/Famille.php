<?php

namespace App\Entity;

use App\Repository\FamilleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FamilleRepository::class)
 */
class Famille
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=90, nullable=true)
     */
    private $nom;

    /**
     * @ORM\OneToMany(targetEntity=Semence::class, mappedBy="famille")
     */
    private $semences;

    public function __construct()
    {
        $this->semences = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return Collection<int, Semence>
     */
    public function getSemences(): Collection
    {
        return $this->semences;
    }

    public function addSemence(Semence $semence): self
    {
        if (!$this->semences->contains($semence)) {
            $this->semences[] = $semence;
            $semence->setFamille($this);
        }

        return $this;
    }

    public function removeSemence(Semence $semence): self
    {
        if ($this->semences->removeElement($semence)) {
            // set the owning side to null (unless already changed)
            if ($semence->getFamille() === $this) {
                $semence->setFamille(null);
            }
        }

        return $this;
    }
}
