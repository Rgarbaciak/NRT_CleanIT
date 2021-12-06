<?php

namespace App\Entity;

use App\Repository\CarteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CarteRepository::class)
 */
class Carte
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $numero;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $qrCode;

    /**
     * @ORM\ManyToOne(targetEntity=Client::class, inversedBy="cartes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $client;

    /**
     * @ORM\ManyToOne(targetEntity=Enseigne::class, inversedBy="cartes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $enseigne;

    /**
     * @ORM\ManyToOne(targetEntity=Magasin::class, inversedBy="cartes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $magasin;

    /**
     * @ORM\OneToMany(targetEntity=Fidelite::class, mappedBy="carte", orphanRemoval=true)
     */
    private $fidelites;

    public function __construct()
    {
        $this->fidelites = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumero(): ?string
    {
        return $this->numero;
    }

    public function setNumero(string $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getQrCode(): ?string
    {
        return $this->qrCode;
    }

    public function setQrCode(string $qrCode): self
    {
        $this->qrCode = $qrCode;

        return $this;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): self
    {
        $this->client = $client;

        return $this;
    }

    public function getEnseigne(): ?Enseigne
    {
        return $this->enseigne;
    }

    public function setEnseigne(?Enseigne $enseigne): self
    {
        $this->enseigne = $enseigne;

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

    /**
     * @return Collection|Fidelite[]
     */
    public function getFidelites(): Collection
    {
        return $this->fidelites;
    }

    public function addFidelite(Fidelite $fidelite): self
    {
        if (!$this->fidelites->contains($fidelite)) {
            $this->fidelites[] = $fidelite;
            $fidelite->setCarte($this);
        }

        return $this;
    }

    public function removeFidelite(Fidelite $fidelite): self
    {
        if ($this->fidelites->removeElement($fidelite)) {
            // set the owning side to null (unless already changed)
            if ($fidelite->getCarte() === $this) {
                $fidelite->setCarte(null);
            }
        }

        return $this;
    }
}
