<?php

namespace App\Entity;

use App\Repository\AtelierRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AtelierRepository::class)]
class Atelier
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToMany(targetEntity: Metier::class, inversedBy: 'ateliers')]
    private Collection $metier;

    #[ORM\OneToMany(mappedBy: 'atelier', targetEntity: Ressource::class)]
    private Collection $ressource;

    #[ORM\OneToMany(mappedBy: 'atelier', targetEntity: Secteur::class)]
    private Collection $secteur;

    #[ORM\OneToMany(mappedBy: 'atelier', targetEntity: Salle::class)]
    private Collection $salle;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    public function __construct()
    {
        $this->metier = new ArrayCollection();
        $this->ressource = new ArrayCollection();
        $this->secteur = new ArrayCollection();
        $this->salle = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, Metier>
     */
    public function getMetier(): Collection
    {
        return $this->metier;
    }

    public function addMetier(Metier $metier): static
    {
        if (!$this->metier->contains($metier)) {
            $this->metier->add($metier);
        }

        return $this;
    }

    public function removeMetier(Metier $metier): static
    {
        $this->metier->removeElement($metier);

        return $this;
    }

    /**
     * @return Collection<int, Ressource>
     */
    public function getRessource(): Collection
    {
        return $this->ressource;
    }

    public function addRessource(Ressource $ressource): static
    {
        if (!$this->ressource->contains($ressource)) {
            $this->ressource->add($ressource);
            $ressource->setAtelier($this);
        }

        return $this;
    }

    public function removeRessource(Ressource $ressource): static
    {
        if ($this->ressource->removeElement($ressource)) {
            // set the owning side to null (unless already changed)
            if ($ressource->getAtelier() === $this) {
                $ressource->setAtelier(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Secteur>
     */
    public function getSecteur(): Collection
    {
        return $this->secteur;
    }

    public function addSecteur(Secteur $secteur): static
    {
        if (!$this->secteur->contains($secteur)) {
            $this->secteur->add($secteur);
            $secteur->setAtelier($this);
        }

        return $this;
    }

    public function removeSecteur(Secteur $secteur): static
    {
        if ($this->secteur->removeElement($secteur)) {
            // set the owning side to null (unless already changed)
            if ($secteur->getAtelier() === $this) {
                $secteur->setAtelier(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Secteur>
     */
    public function getSalle(): Collection
    {
        return $this->salle;
    }

    public function addSalle(Salle $salle): static
    {
        if (!$this->salle->contains($salle)) {
            $this->salle->add($salle);
            $salle->setAtelier($this);
        }

        return $this;
    }

    public function removeSalle(Salle $salle): static
    {
        if ($this->salle->removeElement($salle)) {
            // set the owning side to null (unless already changed)
            if ($salle->getAtelier() === $this) {
                $salle->setAtelier(null);
            }
        }

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

}
