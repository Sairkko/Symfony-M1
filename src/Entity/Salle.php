<?php

namespace App\Entity;

use App\Repository\SalleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SalleRepository::class)]
class Salle
{
    public function __toString()
    {
        return $this->nom;
    }

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $etage = null;

    #[ORM\Column]
    private ?int $capacite_maximum = null;

    #[ORM\OneToMany(mappedBy: 'salle', targetEntity: Atelier::class)]
    private Collection $atelier;

    public function __construct()
    {
        $this->atelier = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getEtage(): ?string
    {
        return $this->etage;
    }

    public function setEtage(string $etage): static
    {
        $this->etage = $etage;

        return $this;
    }

    public function getCapaciteMaximum(): ?int
    {
        return $this->capacite_maximum;
    }

    public function setCapaciteMaximum(int $capacite_maximum): static
    {
        $this->capacite_maximum = $capacite_maximum;

        return $this;
    }

    /**
     * @return Collection<int, Atelier>
     */
    public function getAtelier(): Collection
    {
        return $this->atelier;
    }

    public function addAtelier(Atelier $atelier): static
    {
        if (!$this->atelier->contains($atelier)) {
            $this->atelier->add($atelier);
            $atelier->setSalle($this);
        }

        return $this;
    }

    public function removeAtelier(Atelier $atelier): static
    {
        if ($this->atelier->removeElement($atelier)) {
            // set the owning side to null (unless already changed)
            if ($atelier->getSalle() === $this) {
                $atelier->setSalle(null);
            }
        }

        return $this;
    }
}
