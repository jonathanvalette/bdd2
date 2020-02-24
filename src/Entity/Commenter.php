<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commenter
 *
 * @ORM\Table(name="commenter", indexes={@ORM\Index(name="FK_COMMENTER2", columns={"IDCLIENT"})})
 * @ORM\Entity
 */
class Commenter
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDLIVRE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idlivre;

    /**
     * @var int
     *
     * @ORM\Column(name="IDCLIENT", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idclient;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     *
     */
    private $content;

    /**
     * @var Livres
     *
     * @ORM\ManyToOne(targetEntity="Livres", inversedBy="commenter")
     * @ORM\JoinColumn(name="idlivre", referencedColumnName="idlivre")
     */
    private $livre;

    public function getIdlivre(): ?int
    {
        return $this->idlivre;
    }

    public function getIdclient(): ?int
    {
        return $this->idclient;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function getLivre(): ?Livre
    {
        return $this->livre;
    }

    public function setLivre(Livre $livre): void
    {
        $this->livre = $livre;
    }

}
