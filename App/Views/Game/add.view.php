<?php

/** @var \App\Models\Game $game */
/** @var \Framework\Support\LinkGenerator $link */
?>

<main id="main-content" class="page-shell">
    <section class="section-block" aria-labelledby="add-game-title">
        <div class="section-heading">
            <div>
                <h1 id="add-game-title">Add a new game</h1>
            </div>
        </div>

        <div class="game-form-panel">
            <form class="game-form" action="<?= $link->url('game.save') ?>" method="post">
            <div class="game-form-field">
                <label for="title">Game title *</label>
                <input type="text" id="title" name="title"
                       value="<?= htmlspecialchars($game->getTitle(), ENT_QUOTES, 'UTF-8') ?>"
                       placeholder="For example, Cyberpunk 2077" required>
            </div>

            <div class="game-form-field">
                <label for="description">Description</label>
                <textarea id="description" name="description" rows="5"
                          placeholder="Write a short description..."><?= htmlspecialchars($game->getDescription() ?? '', ENT_QUOTES, 'UTF-8') ?></textarea>
            </div>

            <div class="game-form-field">
                <label for="release_date">Release date</label>
                <input type="date" id="release_date" name="release_date"
                       value="<?= htmlspecialchars($game->getReleaseDate() ?? '', ENT_QUOTES, 'UTF-8') ?>">
            </div>

            <div class="game-form-field">
                <label for="developer">Developer</label>
                <input type="text" id="developer" name="developer"
                       value="<?= htmlspecialchars($game->getDeveloper() ?? '', ENT_QUOTES, 'UTF-8') ?>"
                       placeholder="For example, CD Projekt Red">
            </div>

            <div class="game-form-field">
                <label for="publisher">Publisher</label>
                <input type="text" id="publisher" name="publisher"
                       value="<?= htmlspecialchars($game->getPublisher() ?? '', ENT_QUOTES, 'UTF-8') ?>"
                       placeholder="For example, CD Projekt">
            </div>

            <div class="game-form-field">
                <label for="cover_image">Cover image filename</label>
                <input type="text" id="cover_image" name="cover_image"
                       value="<?= htmlspecialchars($game->getCoverImage() ?? '', ENT_QUOTES, 'UTF-8') ?>"
                       placeholder="For example, cyberpunk.jpg">
            </div>

            <div class="game-form-actions">
                <a href="<?= $link->url('game.index') ?>" class="button button-outline">Cancel</a>
                <button type="submit" class="button button-primary">+ Add game</button>
            </div>
            </form>
        </div>
    </section>
</main>
