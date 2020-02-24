<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Auteur
 *
 * @ORM\Table(name="auteur")
 * @ORM\Entity
 */
class Auteur
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDAUTEUR", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idauteur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOMAUTEUR", type="text", length=65535, nullable=true)
     */
    private $nomauteur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PNAUTEUR", type="text", length=65535, nullable=true)
     */
    private $pnauteur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TELEPHONE", type="text", length=65535, nullable=true)
     */
    private $telephone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ADRESSE", type="text", length=65535, nullable=true)
     */
    private $adresse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="VILLE", type="text", length=65535, nullable=true)
     */
    private $ville;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CODEPOSTAL", type="text", length=65535, nullable=true)
     */
    private $codepostal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CONTRAT", type="text", length=65535, nullable=true)
     */
    private $contrat;

    public function getIdauteur(): ?int
    {
        return $this->idauteur;
    }

    public function getNomauteur(): ?string
    {
        return $this->nomauteur;
    }

    public function setNomauteur(?string $nomauteur): self
    {
        $this->nomauteur = $nomauteur;

        return $this;
    }

    public function getPnauteur(): ?string
    {
        return $this->pnauteur;
    }

    public function setPnauteur(?string $pnauteur): self
    {
        $this->pnauteur = $pnauteur;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getCodepostal(): ?string
    {
        return $this->codepostal;
    }

    public function setCodepostal(?string $codepostal): self
    {
        $this->codepostal = $codepostal;

        return $this;
    }

    public function getContrat(): ?string
    {
        return $this->contrat;
    }

    public function setContrat(?string $contrat): self
    {
        $this->contrat = $contrat;

        return $this;
    }


}
