<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contient
 *
 * @ORM\Table(name="contient", indexes={@ORM\Index(name="FK_CONTIENT2", columns={"IDFACTURE"})})
 * @ORM\Entity
 */
class Contient
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
     * @ORM\Column(name="IDFACTURE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idfacture;

    public function getIdlivre(): ?int
    {
        return $this->idlivre;
    }

    public function getIdfacture(): ?int
    {
        return $this->idfacture;
    }


}
