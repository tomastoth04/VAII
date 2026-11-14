<?php

namespace App\Models;

use Framework\Core\Model;

class Genre extends Model
{
    protected static ?string $tableName = 'genres';
    protected static ?array $fillable = ['name', 'description', 'added_at'];
    protected ?int $id = null;
    protected string $name = '';
    protected ?string $description = null;
    protected string $added_at = '';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getAddedAt(): string
    {
        return $this->added_at;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function setAddedAt(string $added_at): void
    {
        $this->added_at = $added_at;
    }
}
