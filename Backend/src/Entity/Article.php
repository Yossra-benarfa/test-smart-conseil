<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ArticleRepository::class)
 */
class Article
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=1000)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $headerImage;

    /**
     * @ORM\Column(type="text")
     */
    private $introduction;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="datetime", options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastMod;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $language;

    /**
     * @ORM\Column(type="string", length=1000)
     */
    private $keyWords;

    /**
     * @ORM\Column(type="integer")
     */
    private $state;

    /**
     * @ORM\Column(type="integer")
     */
    private $numVisit;

    /**
     * @ORM\Column(type="integer")
     */
    private $itTheme;

    /**
     * @ORM\Column(type="integer")
     */
    private $idUser;

    /**
     * @ORM\Column(type="integer")
     */
    private $idHost;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getHeaderImage(): ?string
    {
        return $this->headerImage;
    }

    public function setHeaderImage(string $headerImage): self
    {
        $this->headerImage = $headerImage;

        return $this;
    }

    public function getIntroduction(): ?string
    {
        return $this->introduction;
    }

    public function setIntroduction(string $introduction): self
    {
        $this->introduction = $introduction;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getLastMod(): ?\DateTimeInterface
    {
        return $this->lastMod;
    }

    public function setLastMod(\DateTimeInterface $lastMod): self
    {
        $this->lastMod = $lastMod;

        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(string $language): self
    {
        $this->language = $language;

        return $this;
    }

    public function getKeyWords(): ?string
    {
        return $this->keyWords;
    }

    public function setKeyWords(string $keyWords): self
    {
        $this->keyWords = $keyWords;

        return $this;
    }

    public function getState(): ?int
    {
        return $this->state;
    }

    public function setState(int $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getNumVisit(): ?int
    {
        return $this->numVisit;
    }

    public function setNumVisit(int $numVisit): self
    {
        $this->numVisit = $numVisit;

        return $this;
    }

    public function getItTheme(): ?int
    {
        return $this->itTheme;
    }

    public function setItTheme(int $itTheme): self
    {
        $this->itTheme = $itTheme;

        return $this;
    }

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function setIdUser(int $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getIdHost(): ?int
    {
        return $this->idHost;
    }

    public function setIdHost(int $idHost): self
    {
        $this->idHost = $idHost;

        return $this;
    }
}
