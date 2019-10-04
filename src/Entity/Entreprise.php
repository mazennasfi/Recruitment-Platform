<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EntrepriseRepository")
 */
class Entreprise
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adress;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adressEmail;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $numTel;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    public function getAdressEmail(): ?string
    {
        return $this->adressEmail;
    }

    public function setAdressEmail(?string $adressEmail): self
    {
        $this->adressEmail = $adressEmail;

        return $this;
    }

    public function getNumTel(): ?float
    {
        return $this->numTel;
    }

    public function setNumTel(?float $numTel): self
    {
        $this->numTel = $numTel;

        return $this;
    }
}
