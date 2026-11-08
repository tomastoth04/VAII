<?php

namespace App\Models;

use Framework\Core\Model;

class Game extends Model
{
    protected static ?string $tableName = 'games';
    protected static ?array $fillable = ['title', 'description', 'release_date', 'developer', 'publisher', 'added_at', 'cover_image'];

    protected ?int $id = null;
    protected string $title = '';
    protected ?string $description = null;
    protected ?string $release_date = null;
    protected ?string $developer = null;
    protected ?string $publisher = null;
    protected string $added_at = '';
    protected ?string $cover_image = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getReleaseDate(): ?string
    {
        return $this->release_date;
    }

    public function getDeveloper(): ?string
    {
        return $this->developer;
    }

    public function getPublisher(): ?string
    {
        return $this->publisher;
    }

    public function getCoverImage(): ?string
    {
        return $this->cover_image;
    }

    public function getAddedAt(): string
    {
        return $this->added_at;
    }


    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function setReleaseDate(?string $releaseDate): void
    {
        $this->release_date = $releaseDate;
    }

    public function setDeveloper(?string $developer): void
    {
        $this->developer = $developer;
    }

    public function setPublisher(?string $publisher): void
    {
        $this->publisher = $publisher;
    }

    public function setCoverImage(?string $coverImage): void
    {
        $this->cover_image = $coverImage;
    }

    public function setAddedAt(string $addedAt): void
    {
        $this->added_at = $addedAt;
    }


}