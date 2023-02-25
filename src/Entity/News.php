<?php

namespace App\Entity;

use App\Repository\NewsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NewsRepository::class)]
class News
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(length: 255, nullable:true)]
    private ?string $urlToImage = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $date_added = null;

    #[ORM\Column(length: 255)]
    private ?string $date_updated = null;

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
    

    public function geturlToImage(): ?string
    {
        return $this->urlToImage;
    }

    public function seturlToImage(?string $urlToImage): self
    {
        $this->urlToImage = $urlToImage;

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

    public function getDateAdded(): ?string
    {
        return $this->date_added;
    }

    public function getLastUpdated(): ?string
    {
        return $this->date_updated;
    }

    public function setDateAdded(string $date_added): self
    {
        $this->date_added = $date_added;

        return $this;
    }

    public function setLastUpdated(string $date_updated): self
    {
        $this->date_updated = $date_updated;

        return $this;
    }
}
