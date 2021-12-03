<?php

namespace App\Entity;

use App\Repository\MagasinRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MagasinRepository::class)
 */
class Magasin
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $rue;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $copos;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $pays;

    /**
     * @ORM\Column(type="string", length=225, nullable=true)
     */
    private $horaires;

    /**
     * @ORM\ManyToOne(targetEntity=Enseigne::class, inversedBy="magasins")
     * @ORM\JoinColumn(nullable=false)
     */
    private $enseigne;

    /**
     * @ORM\Column(type="string", length=120)
     */
    private $libelle;

    /**
     * @ORM\OneToMany(targetEntity=Interlocuteur::class, mappedBy="magasin", orphanRemoval=true)
     */
    private $interlocuteurs;

    /**
     * @ORM\OneToMany(targetEntity=Carte::class, mappedBy="magasin")
     */
    private $cartes;

    /**
     * @ORM\OneToMany(targetEntity=Fidelite::class, mappedBy="magasin")
     */
    private $fidelites;

    public function __construct()
    {
        $this->interlocuteurs = new ArrayCollection();
        $this->cartes = new ArrayCollection();
        $this->fidelites = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRue(): ?string
    {
        return $this->rue;
    }

    public function setRue(string $rue): self
    {
        $this->rue = $rue;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getCopos(): ?string
    {
        return $this->copos;
    }

    public function setCopos(string $copos): self
    {
        $this->copos = $copos;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(string $pays): self
    {
        $this->pays = $pays;

        return $this;
    }

    public function getHoraires(): ?string
    {
        return $this->horaires;
    }

    public function setHoraires(?string $horaires): self
    {
        $this->horaires = $horaires;

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

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * @return Collection|Interlocuteur[]
     */
    public function getInterlocuteurs(): Collection
    {
        return $this->interlocuteurs;
    }

    public function addInterlocuteur(Interlocuteur $interlocuteur): self
    {
        if (!$this->interlocuteurs->contains($interlocuteur)) {
            $this->interlocuteurs[] = $interlocuteur;
            $interlocuteur->setMagasin($this);
        }

        return $this;
    }

    public function removeInterlocuteur(Interlocuteur $interlocuteur): self
    {
        if ($this->interlocuteurs->removeElement($interlocuteur)) {
            // set the owning side to null (unless already changed)
            if ($interlocuteur->getMagasin() === $this) {
                $interlocuteur->setMagasin(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Carte[]
     */
    public function getCartes(): Collection
    {
        return $this->cartes;
    }

    public function addCarte(Carte $carte): self
    {
        if (!$this->cartes->contains($carte)) {
            $this->cartes[] = $carte;
            $carte->setMagasin($this);
        }

        return $this;
    }

    public function removeCarte(Carte $carte): self
    {
        if ($this->cartes->removeElement($carte)) {
            // set the owning side to null (unless already changed)
            if ($carte->getMagasin() === $this) {
                $carte->setMagasin(null);
            }
        }

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
            $fidelite->setMagasin($this);
        }

        return $this;
    }

    public function removeFidelite(Fidelite $fidelite): self
    {
        if ($this->fidelites->removeElement($fidelite)) {
            // set the owning side to null (unless already changed)
            if ($fidelite->getMagasin() === $this) {
                $fidelite->setMagasin(null);
            }
        }

        return $this;
    }
}
