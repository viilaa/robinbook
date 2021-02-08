<?php

namespace App\Entity;

use App\Repository\BookRepository;
use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\Column(type="string", length=255)
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
     * @ORM\Column(type="integer")
     */
    private $book_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $user_id;

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

    public function getPdf(): ?string
    {
        return $this->pdf;
    }

    public function setPdf(string $pdf): self
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

    public function getBookId(): ?int
    {
        return $this->book_id;
    }

    public function setBookId(int $book_id): self
    {
        $this->book_id = $book_id;

        return $this;
    }

    public function getUserId(): ?int
    {
        return $this->user_id;
    }

    public function setUserId(int $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }
}
