<?php

/** @var \App\Models\Genre $genre */
/** @var \Framework\Support\LinkGenerator $link */
?>

<main id="main-content" class="page-shell">
    <section class="section-block" aria-labelledby="edit-genre-title">
        <div class="section-heading">
            <div>
                <h1 id="edit-genre-title">Edit genre</h1>
            </div>
        </div>
        <div>
            <form class="game-form" action="<?= $link->url('genre.save') ?>" method="post">
                <input type="hidden" name="id" value="<?= $genre->getId() ?>">

                <div class="game-form-field">
                    <label for="title">Genre name *</label>
                    <input type="text" id="title" name="title"
                           value="<?= htmlspecialchars($genre->getName(), ENT_QUOTES, 'UTF-8') ?>" required>
                </div>

                <div class="game-form-field">
                    <label for="description">Description</label>
                    <textarea id="description" name="description" rows="5"><?= htmlspecialchars($genre->getDescription() ?? '', ENT_QUOTES, 'UTF-8') ?></textarea>
                </div>

                <div class="game-form-actions">
                    <a href="<?= $link->url('genre.index') ?>" class="button button-outline">Cancel</a>
                    <button type="submit" class="button button-primary">Save changes</button>
                </div>
            </form>
        </div>
    </section>
</main>
