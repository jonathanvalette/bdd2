<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facture
 *
 * @ORM\Table(name="facture", indexes={@ORM\Index(name="FK_COMMANDE", columns={"IDCLIENT"})})
 * @ORM\Entity
 */
class Facture
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDFACTURE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfacture;

    /**
     * @var int
     *
     * @ORM\Column(name="IDCLIENT", type="integer", nullable=false)
     */
    private $idclient;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATEFACTURE", type="date", nullable=false)
     */
    private $datefacture;

    /**
     * @var string
     *
     * @ORM\Column(name="DATEPAIEMENT", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $datepaiement;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="STATUTCMDE", type="boolean", nullable=true)
     */
    private $statutcmde;

    /**
     * @var Livres
     *
     * @ORM\OneToMany(
     *      targetEntity="livres",
     *      mappedBy="facture",
     * )
     *
     */
    private $livres;

    public function getIdfacture(): ?int
    {
        return $this->idfacture;
    }

    public function getIdclient(): ?int
    {
        return $this->idclient;
    }

    public function setIdclient(int $idclient): self
    {
        $this->idclient = $idclient;

        return $this;
    }

    public function getDatefacture(): ?\DateTimeInterface
    {
        return $this->datefacture;
    }

    public function setDatefacture(\DateTimeInterface $datefacture): self
    {
        $this->datefacture = $datefacture;

        return $this;
    }

    public function getDatepaiement(): ?string
    {
        return $this->datepaiement;
    }

    public function setDatepaiement(string $datepaiement): self
    {
        $this->datepaiement = $datepaiement;

        return $this;
    }

    public function getStatutcmde(): ?bool
    {
        return $this->statutcmde;
    }

    public function setStatutcmde(?bool $statutcmde): self
    {
        $this->statutcmde = $statutcmde;

        return $this;
    }

    public function getLivres(): ?Livre
    {
        return $this->livres;
    }

    public function addLivre(Livre $livre): void
    {
        $livre->setFacture($this);
        if (!$this->livres->contains($livre)) {
            $this->livres->add($livre);
        }
    }

    public function removeLivre(Livre $livre): void
    {
        $this->livres->removeElement($livre);
    }

}
