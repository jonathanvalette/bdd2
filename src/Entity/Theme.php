<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Theme
 *
 * @ORM\Table(name="theme")
 * @ORM\Entity
 */
class Theme
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDTHEME", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtheme;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CODECLASSE", type="text", length=65535, nullable=true)
     */
    private $codeclasse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LIBCLASSE", type="text", length=65535, nullable=true)
     */
    private $libclasse;

    public function getIdtheme(): ?int
    {
        return $this->idtheme;
    }

    public function getCodeclasse(): ?string
    {
        return $this->codeclasse;
    }

    public function setCodeclasse(?string $codeclasse): self
    {
        $this->codeclasse = $codeclasse;

        return $this;
    }

    public function getLibclasse(): ?string
    {
        return $this->libclasse;
    }

    public function setLibclasse(?string $libclasse): self
    {
        $this->libclasse = $libclasse;

        return $this;
    }


}
