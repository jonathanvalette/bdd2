<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Editeur
 *
 * @ORM\Table(name="editeur")
 * @ORM\Entity
 */
class Editeur
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDEDITEUR", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idediteur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOMEDITEUR", type="text", length=65535, nullable=true)
     */
    private $nomediteur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="VILLEEDITEUR", type="text", length=65535, nullable=true)
     */
    private $villeediteur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PAYSCLIENT", type="text", length=65535, nullable=true)
     */
    private $paysclient;

    public function getIdediteur(): ?int
    {
        return $this->idediteur;
    }

    public function getNomediteur(): ?string
    {
        return $this->nomediteur;
    }

    public function setNomediteur(?string $nomediteur): self
    {
        $this->nomediteur = $nomediteur;

        return $this;
    }

    public function getVilleediteur(): ?string
    {
        return $this->villeediteur;
    }

    public function setVilleediteur(?string $villeediteur): self
    {
        $this->villeediteur = $villeediteur;

        return $this;
    }

    public function getPaysclient(): ?string
    {
        return $this->paysclient;
    }

    public function setPaysclient(?string $paysclient): self
    {
        $this->paysclient = $paysclient;

        return $this;
    }


}
