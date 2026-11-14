<?php

/** @var \App\Models\Genre $genre */
/** @var \Framework\Support\LinkGenerator $link */
?>

<main id="main-content" class="page-shell">
    <section class="section-block" aria-labelledby="add-genre-title">
        <div class="section-heading">
            <div>
                <h1 id="add-genre-title">Add a new genre</h1>
            </div>
        </div>

        <div class="game-form-panel">
            <form class="game-form" action="<?= $link->url('genre.save') ?>" method="post">
                <div class="game-form-field">
                    <label for="name">Genre name *</label>
                    <input type="text" id="name" name="name"
                           value="<?= htmlspecialchars($genre->getName(), ENT_QUOTES, 'UTF-8') ?>"
                           placeholder="For example, Action" required>
                </div>

                <div class="game-form-field">
                    <label for="description">Description</label>
                    <textarea id="description" name="description" rows="5"
                              placeholder="Write a short description..."><?= htmlspecialchars($genre->getDescription() ?? '', ENT_QUOTES, 'UTF-8') ?></textarea>
                </div>

                <div class="game-form-actions">
                    <a href="<?= $link->url('genre.index') ?>" class="button button-outline">Cancel</a>
                    <button type="submit" class="button button-primary">+ Add Genre</button>
                </div>
            </form>
        </div>
    </section>
</main>
