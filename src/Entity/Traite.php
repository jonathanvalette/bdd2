<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Traite
 *
 * @ORM\Table(name="traite", indexes={@ORM\Index(name="FK_TRAITE2", columns={"IDLIVRE"})})
 * @ORM\Entity
 */
class Traite
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDTHEME", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idtheme;

    /**
     * @var int
     *
     * @ORM\Column(name="IDLIVRE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idlivre;

    public function getIdtheme(): ?int
    {
        return $this->idtheme;
    }

    public function getIdlivre(): ?int
    {
        return $this->idlivre;
    }


}
