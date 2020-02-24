<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ecrire
 *
 * @ORM\Table(name="ecrire", indexes={@ORM\Index(name="FK_ECRIRE2", columns={"IDAUTEUR"})})
 * @ORM\Entity
 */
class Ecrire
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
     * @ORM\Column(name="IDAUTEUR", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idauteur;

    public function getIdlivre(): ?int
    {
        return $this->idlivre;
    }

    public function getIdauteur(): ?int
    {
        return $this->idauteur;
    }


}
