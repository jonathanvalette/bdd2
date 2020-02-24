<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Livres
 *
 * @ORM\Table(name="livres", indexes={@ORM\Index(name="FK_EDITE", columns={"IDEDITEUR"}), @ORM\Index(name="FK_MESURE", columns={"IDFORMAT"})})
 * @ORM\Entity
 */
class Livres
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDLIVRE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idlivre;

    /**
     * @var int
     *
     * @ORM\Column(name="IDEDITEUR", type="integer", nullable=false)
     */
    private $idediteur;

    /**
     * @var int
     *
     * @ORM\Column(name="IDFORMAT", type="integer", nullable=false)
     */
    private $idformat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TITRE", type="text", length=65535, nullable=true)
     */
    private $titre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PRIXTTCUNIT", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $prixttcunit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PRIXHTUNIT", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $prixhtunit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PREFACE", type="text", length=65535, nullable=true)
     */
    private $preface;


    /**
     * @var string|null
     *
     * @ORM\Column(name="JACKET", type="blob", length=0, nullable=true)
     * @Assert\File(mimeTypes={ "application/pdf", "image/jpeg", "image/png", "image/gif" })
     */
    private $jacket;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DATEPUBLICATION", type="text", length=65535, nullable=true)
     */
    private $datepublication;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ISBN", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $isbn;

    /**
     * @var Livres
     *
     * @ORM\ManyToOne(targetEntity="Facture", inversedBy="livres")
     * @ORM\JoinColumn(name="idfacture", referencedColumnName="idfacture")
     */
    private $factures;

    /**
     * @var Commenter
     *
     * @ORM\OneToMany(
     *      targetEntity="commenter",
     *      mappedBy="livres",
     * )
     *
     */
    private $commenters;

    public function getIdlivre(): ?int
    {
        return $this->idlivre;
    }

    public function getIdediteur(): ?int
    {
        return $this->idediteur;
    }

    public function setIdediteur(int $idediteur): self
    {
        $this->idediteur = $idediteur;

        return $this;
    }

    public function getIdformat(): ?int
    {
        return $this->idformat;
    }

    public function setIdformat(int $idformat): self
    {
        $this->idformat = $idformat;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(?string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getPrixttcunit(): ?string
    {
        return $this->prixttcunit;
    }

    public function setPrixttcunit(?string $prixttcunit): self
    {
        $this->prixttcunit = $prixttcunit;

        return $this;
    }

    public function getPrixhtunit(): ?string
    {
        return $this->prixhtunit;
    }

    public function setPrixhtunit(?string $prixhtunit): self
    {
        $this->prixhtunit = $prixhtunit;

        return $this;
    }

    public function getPreface(): ?string
    {
        return $this->preface;
    }

    public function setPreface(?string $preface): self
    {
        $this->preface = $preface;

        return $this;
    }

    public function getJacket()
    {
        return $this->jacket;
    }

    public function setJacket($jacket): self
    {
        $this->jacket = $jacket;

        return $this;
    }

    public function getDatepublication(): ?string
    {
        return $this->datepublication;
    }

    public function setDatepublication(?string $datepublication): self
    {
        $this->datepublication = $datepublication;

        return $this;
    }

    public function getIsbn(): ?string
    {
        return $this->isbn;
    }

    public function setIsbn(?string $isbn): self
    {
        $this->isbn = $isbn;

        return $this;
    }

    public function getFactures(): ?Factures
    {
        return $this->factures;
    }

    public function setFactures(Factures $factures): void
    {
        $this->factures = $factures;
    }

    public function getCommenters(): ?Commenter
    {
        return $this->commenters;
    }

    public function addCommenter(Commenter $commenter): void
    {
        $commenter->setLivres($this);
        if (!$this->commenters->contains($commenter)) {
            $this->commenters->add($commenter);
        }
    }

    public function removeCommenter(Commenter $commenter): void
    {
        $this->commenters->removeElement($commenter);
    }

}
