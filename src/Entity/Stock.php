<?php

namespace App\Entity;

use App\Repository\StockRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StockRepository::class)
 */
class Stock
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nbregraines;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbregraines(): ?int
    {
        return $this->nbregraines;
    }

    public function setNbregraines(?int $nbregraines): self
    {
        $this->nbregraines = $nbregraines;

        return $this;
    }
}
