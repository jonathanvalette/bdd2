<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity
 */
class Users
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDUSER", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iduser;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM", type="string", length=50, nullable=false, options={"fixed"=true})
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="PRENOM", type="string", length=50, nullable=false, options={"fixed"=true})
     */
    private $prenom;

    /**
     * @var bool
     *
     * @ORM\Column(name="ADMINISTRATEUR", type="boolean", nullable=false)
     */
    private $administrateur;

    public function getIduser(): ?int
    {
        return $this->iduser;
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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAdministrateur(): ?bool
    {
        return $this->administrateur;
    }

    public function setAdministrateur(bool $administrateur): self
    {
        $this->administrateur = $administrateur;

        return $this;
    }


}
