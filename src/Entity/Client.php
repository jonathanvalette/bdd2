<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity
 */
class Client
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDCLIENT", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idclient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOMCLIENT", type="text", length=65535, nullable=true)
     */
    private $nomclient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PNCLIENT", type="text", length=65535, nullable=true)
     */
    private $pnclient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOMRUECLIENT", type="text", length=65535, nullable=true)
     */
    private $nomrueclient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NURUECLIENT", type="text", length=65535, nullable=true)
     */
    private $nurueclient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CODEPOSTALCLIENT", type="text", length=65535, nullable=true)
     */
    private $codepostalclient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="VILLECLIENT", type="text", length=65535, nullable=true)
     */
    private $villeclient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PAYSCLIENT", type="text", length=65535, nullable=true)
     */
    private $paysclient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOMRUERUELIVRAISON", type="text", length=65535, nullable=true)
     */
    private $nomrueruelivraison;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NURUELIVRAISON", type="text", length=65535, nullable=true)
     */
    private $nuruelivraison;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CODEPOSTALLIVRAISON", type="text", length=65535, nullable=true)
     */
    private $codepostallivraison;

    /**
     * @var string|null
     *
     * @ORM\Column(name="VILLELIVRAISON", type="text", length=65535, nullable=true)
     */
    private $villelivraison;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PAYSLIVRAISON", type="text", length=65535, nullable=true)
     */
    private $payslivraison;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TELEPHONECLIENT", type="text", length=65535, nullable=true)
     */
    private $telephoneclient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MAILCLIENT", type="string", length=20, nullable=true, options={"fixed"=true})
     */
    private $mailclient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MDPCLIENT", type="text", length=65535, nullable=true)
     */
    private $mdpclient;

    public function getIdclient(): ?int
    {
        return $this->idclient;
    }

    public function getNomclient(): ?string
    {
        return $this->nomclient;
    }

    public function setNomclient(?string $nomclient): self
    {
        $this->nomclient = $nomclient;

        return $this;
    }

    public function getPnclient(): ?string
    {
        return $this->pnclient;
    }

    public function setPnclient(?string $pnclient): self
    {
        $this->pnclient = $pnclient;

        return $this;
    }

    public function getNomrueclient(): ?string
    {
        return $this->nomrueclient;
    }

    public function setNomrueclient(?string $nomrueclient): self
    {
        $this->nomrueclient = $nomrueclient;

        return $this;
    }

    public function getNurueclient(): ?string
    {
        return $this->nurueclient;
    }

    public function setNurueclient(?string $nurueclient): self
    {
        $this->nurueclient = $nurueclient;

        return $this;
    }

    public function getCodepostalclient(): ?string
    {
        return $this->codepostalclient;
    }

    public function setCodepostalclient(?string $codepostalclient): self
    {
        $this->codepostalclient = $codepostalclient;

        return $this;
    }

    public function getVilleclient(): ?string
    {
        return $this->villeclient;
    }

    public function setVilleclient(?string $villeclient): self
    {
        $this->villeclient = $villeclient;

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

    public function getNomrueruelivraison(): ?string
    {
        return $this->nomrueruelivraison;
    }

    public function setNomrueruelivraison(?string $nomrueruelivraison): self
    {
        $this->nomrueruelivraison = $nomrueruelivraison;

        return $this;
    }

    public function getNuruelivraison(): ?string
    {
        return $this->nuruelivraison;
    }

    public function setNuruelivraison(?string $nuruelivraison): self
    {
        $this->nuruelivraison = $nuruelivraison;

        return $this;
    }

    public function getCodepostallivraison(): ?string
    {
        return $this->codepostallivraison;
    }

    public function setCodepostallivraison(?string $codepostallivraison): self
    {
        $this->codepostallivraison = $codepostallivraison;

        return $this;
    }

    public function getVillelivraison(): ?string
    {
        return $this->villelivraison;
    }

    public function setVillelivraison(?string $villelivraison): self
    {
        $this->villelivraison = $villelivraison;

        return $this;
    }

    public function getPayslivraison(): ?string
    {
        return $this->payslivraison;
    }

    public function setPayslivraison(?string $payslivraison): self
    {
        $this->payslivraison = $payslivraison;

        return $this;
    }

    public function getTelephoneclient(): ?string
    {
        return $this->telephoneclient;
    }

    public function setTelephoneclient(?string $telephoneclient): self
    {
        $this->telephoneclient = $telephoneclient;

        return $this;
    }

    public function getMailclient(): ?string
    {
        return $this->mailclient;
    }

    public function setMailclient(?string $mailclient): self
    {
        $this->mailclient = $mailclient;

        return $this;
    }

    public function getMdpclient(): ?string
    {
        return $this->mdpclient;
    }

    public function setMdpclient(?string $mdpclient): self
    {
        $this->mdpclient = $mdpclient;

        return $this;
    }


}
