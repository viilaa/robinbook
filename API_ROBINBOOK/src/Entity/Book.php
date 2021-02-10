<?php

namespace App\Entity;

use App\Repository\BookRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=BookRepository::class)
 */
class Book
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
    private $age_classification;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cover_page;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $illustrations;

     /**
     * @ORM\Column(type="string")
     *
     * @Assert\NotBlank(message="Por favor inserta tu pdf")
     * @Assert\File(mimeTypes={"aplication/pdf"})
     */
    private $pdf;

    /**
     * @ORM\Column(type="datetime")
     */
    private $release_date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $synopsis;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\ManyToMany(targetEntity=Users::class, mappedBy="book")
     */
    private $users;

    /**
     * @ORM\ManyToMany(targetEntity=Genre::class, inversedBy="books")
     */
    private $Genre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $public_date;

    public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->Genre = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAgeClassification(): ?string
    {
        return $this->age_classification;
    }

    public function setAgeClassification(string $age_classification): self
    {
        $this->age_classification = $age_classification;

        return $this;
    }

    public function getCoverPage(): ?string
    {
        return $this->cover_page;
    }

    public function setCoverPage(string $cover_page): self
    {
        $this->cover_page = $cover_page;

        return $this;
    }

    public function getIllustrations(): ?string
    {
        return $this->illustrations;
    }

    public function setIllustrations(string $illustrations): self
    {
        $this->illustrations = $illustrations;

        return $this;
    }
    private $pdf;
    
    public function getPdf()
    {
        return $this->pdf;
    }

    public function setPdf($pdf)
    {
        $this->pdf = $pdf;

        return $this;
    }

    public function getReleaseDate(): ?\DateTimeInterface
    {
        return $this->release_date;
    }

    public function setReleaseDate(\DateTimeInterface $release_date): self
    {
        $this->release_date = $release_date;

        return $this;
    }

    public function getSynopsis(): ?string
    {
        return $this->synopsis;
    }

    public function setSynopsis(string $synopsis): self
    {
        $this->synopsis = $synopsis;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return Collection|Users[]
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(Users $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
            $user->addBook($this);
        }

        return $this;
    }

    public function removeUser(Users $user): self
    {
        if ($this->users->removeElement($user)) {
            $user->removeBook($this);
        }

        return $this;
    }

    /**
     * @return Collection|Genre[]
     */
    public function getGenre(): Collection
    {
        return $this->Genre;
    }

    public function addGenre(Genre $genre): self
    {
        if (!$this->Genre->contains($genre)) {
            $this->Genre[] = $genre;
        }

        return $this;
    }

    public function removeGenre(Genre $genre): self
    {
        $this->Genre->removeElement($genre);

        return $this;
    }

    public function getPublicDate(): ?string
    {
        return $this->public_date;
    }

    public function setPublicDate(?string $public_date): self
    {
        $this->public_date = $public_date;

        return $this;
    }

}
