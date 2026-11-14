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

    /**
     * Ak hra ešte nemá ID, vráti prázdne pole
     * Z tabuľky game_genres načíta všetky genre_id patriace ku hre
     * Výsledok prevedie na pole čísel
     *
     * @return int[] An array of genre IDs.
     */
    public function getGenreIds(): array
    {
        if ($this->id === null) {
            return [];
        }

        $rows = self::executeRawSQL(
            'SELECT genre_id FROM game_genres WHERE game_id = :game_id',
            ['game_id' => $this->id]
        );

        return array_map(
            fn($row) => (int)$row['genre_id'],
            $rows
        );
    }

    /**
     * Overí, či je hra uložená
     * Odstráni všetky staré väzby hry
     * Vyčistí prijaté ID žánrov:
     * - prevedie ich na celé čísla,
     * - odstráni neplatné hodnoty,
     * - odstráni duplicity.
     * Vloží nové väzby do game_genres
     *
     * @param int[] $genreIds Pole ID žánrov, ktoré sa majú priradiť hre.
     * @throws \LogicException Ak hra ešte nemá ID (t.j. nebola uložená).
     */
    public function syncGenres(array $genreIds): void
    {
        if ($this->id === null) {
            throw new \LogicException('Game must be saved before assigning genres.');
        }

        // Odstránenie starých prepojení
        self::executeRawSQL(
            'DELETE FROM game_genres WHERE game_id = :game_id',
            ['game_id' => $this->id]
        );

        // Odstránenie duplicitných a neplatných ID
        $genreIds = array_unique(
            array_filter(
                array_map('intval', $genreIds),
                fn($id) => $id > 0
            )
        );

        // Vytvorenie nových prepojení
        foreach ($genreIds as $genreId) {
            self::executeRawSQL(
                'INSERT INTO game_genres (game_id, genre_id)
             VALUES (:game_id, :genre_id)',
                [
                    'game_id' => $this->id,
                    'genre_id' => $genreId
                ]
            );
        }
    }
}
