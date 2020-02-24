<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Format
 *
 * @ORM\Table(name="format")
 * @ORM\Entity
 */
class Format
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDFORMAT", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idformat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LIBELLEFORMAT", type="text", length=65535, nullable=true)
     */
    private $libelleformat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="POIDS", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $poids;

    public function getIdformat(): ?int
    {
        return $this->idformat;
    }

    public function getLibelleformat(): ?string
    {
        return $this->libelleformat;
    }

    public function setLibelleformat(?string $libelleformat): self
    {
        $this->libelleformat = $libelleformat;

        return $this;
    }

    public function getPoids(): ?string
    {
        return $this->poids;
    }

    public function setPoids(?string $poids): self
    {
        $this->poids = $poids;

        return $this;
    }


}
