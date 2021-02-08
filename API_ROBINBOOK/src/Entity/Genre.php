<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GenreRepository::class)
 */
class Genre
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
    private $type_genre;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeGenre(): ?string
    {
        return $this->type_genre;
    }

    public function setTypeGenre(string $type_genre): self
    {
        $this->type_genre = $type_genre;

        return $this;
    }
}
