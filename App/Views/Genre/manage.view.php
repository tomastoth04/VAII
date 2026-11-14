<?php

/** @var \App\Models\Genre[] $genres */
/** @var \Framework\Support\LinkGenerator $link */
?>

<main id="main-content" class="page-shell manage-page">
    <section class="section-block" aria-labelledby="manage-genre-title">
        <div class="section-heading">
            <div>
                <h1 id="manage-genre-title">Manage genres</h1>
            </div>
            <a class="button button-primary" href="<?= $link->url('genre.add') ?>">+ Add Genre</a>
        </div>

    <?php if (empty($genres)) : ?>
        <section class="section-block">
            <h2>No genres found</h2>
            <p class="hero-description">Your catalog is empty. Add the first genre to get started.</p>
            <a class="button button-primary" href="<?= $link->url('genre.add') ?>">+ Add Genre</a>
        </section>
    <?php else : ?>
        <section aria-labelledby="genre-list-title">
            <div class="results-heading">
                <div>
                    <h2 id="genre-list-title">Genre catalog</h2>
                    <p><?= count($genres) ?> genres currently stored in the database.</p>
                </div>
            </div>

            <div style="border-top: 1px solid var(--line);">
                <?php foreach ($genres as $genre) : ?>
                    <div style="display: flex; align-items: center; justify-content: space-between; gap: 16px; padding: 17px 0; border-bottom: 1px solid var(--line);">
                        <div style="min-width: 0;">
                            <h3 style="margin: 0 0 4px; font-size: 1rem;">
                                <?= htmlspecialchars($genre->getName(), ENT_QUOTES, 'UTF-8') ?>
                            </h3>
                            <?php if ($genre->getDescription()) : ?>
                                <p class="game-meta" style="margin: 0;">
                                    <?= htmlspecialchars($genre->getDescription(), ENT_QUOTES, 'UTF-8') ?>
                                </p>
                            <?php endif; ?>
                        </div>
                        <div style="display: flex; flex-shrink: 0; gap: 8px;">
                            <a class="button button-outline button-small"
                               href="<?= $link->url('genre.edit', ['id' => $genre->getId()]) ?>">Edit</a>
                            <form method="post" action="<?= $link->url('genre.delete') ?>">
                                <input type="hidden" name="id" value="<?= $genre->getId() ?>">
                                <button class="button button-danger button-small" type="submit">Delete</button>
                            </form>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    <?php endif; ?>
    </section>
</main>
