<?php

namespace App\Entity;

use App\Repository\TypeEnseigneRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TypeEnseigneRepository::class)
 */
class TypeEnseigne
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
    private $libelle;

    /**
     * @ORM\OneToMany(targetEntity=Enseigne::class, mappedBy="typeEnseigne")
     */
    private $enseignes;

    public function __construct()
    {
        $this->enseignes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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
     * @return Collection|Enseigne[]
     */
    public function getEnseignes(): Collection
    {
        return $this->enseignes;
    }

    public function addEnseigne(Enseigne $enseigne): self
    {
        if (!$this->enseignes->contains($enseigne)) {
            $this->enseignes[] = $enseigne;
            $enseigne->setTypeEnseigne($this);
        }

        return $this;
    }

    public function removeEnseigne(Enseigne $enseigne): self
    {
        if ($this->enseignes->removeElement($enseigne)) {
            // set the owning side to null (unless already changed)
            if ($enseigne->getTypeEnseigne() === $this) {
                $enseigne->setTypeEnseigne(null);
            }
        }

        return $this;
    }
}
