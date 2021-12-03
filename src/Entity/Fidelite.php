<?php

namespace App\Entity;

use App\Repository\FideliteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FideliteRepository::class)
 */
class Fidelite
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $avantage;

    /**
     * @ORM\Column(type="float")
     */
    private $montantAchat;

    /**
     * @ORM\Column(type="datetime")
     */
    private $datePassage;

    /**
     * @ORM\ManyToOne(targetEntity=Carte::class, inversedBy="fidelites")
     * @ORM\JoinColumn(nullable=false)
     */
    private $carte;

    /**
     * @ORM\ManyToOne(targetEntity=Magasin::class, inversedBy="fidelites")
     * @ORM\JoinColumn(nullable=false)
     */
    private $magasin;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAvantage(): ?float
    {
        return $this->avantage;
    }

    public function setAvantage(float $avantage): self
    {
        $this->avantage = $avantage;

        return $this;
    }

    public function getMontantAchat(): ?float
    {
        return $this->montantAchat;
    }

    public function setMontantAchat(float $montantAchat): self
    {
        $this->montantAchat = $montantAchat;

        return $this;
    }

    public function getDatePassage(): ?\DateTimeInterface
    {
        return $this->datePassage;
    }

    public function setDatePassage(\DateTimeInterface $datePassage): self
    {
        $this->datePassage = $datePassage;

        return $this;
    }

    public function getCarte(): ?Carte
    {
        return $this->carte;
    }

    public function setCarte(?Carte $carte): self
    {
        $this->carte = $carte;

        return $this;
    }

    public function getMagasin(): ?Magasin
    {
        return $this->magasin;
    }

    public function setMagasin(?Magasin $magasin): self
    {
        $this->magasin = $magasin;

        return $this;
    }
}
