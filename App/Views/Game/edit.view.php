<?php

/** @var \App\Models\Game $game */
/** @var \Framework\Support\LinkGenerator $link */
?>

<main id="main-content" class="page-shell">
    <section class="section-block" aria-labelledby="edit-game-title">
        <div class="section-heading">
            <div>
                <h1 id="edit-game-title">Edit game</h1>
            </div>
        </div>

        <div class="game-form-panel">
            <div class="game-card edit-game-preview">
                <div class="cover-wrap">
                    <?php if ($game->getCoverImage()) : ?>
                        <img class="game-cover-image"
                             src="<?= $link->asset('images/games/' . $game->getCoverImage()) ?>"
                             alt="<?= htmlspecialchars($game->getTitle(), ENT_QUOTES, 'UTF-8') ?> cover art">
                    <?php endif; ?>
                </div>
                <div class="game-card-info">
                    <div>
                        <h3><?= htmlspecialchars($game->getTitle(), ENT_QUOTES, 'UTF-8') ?></h3>
                        <?php if ($game->getDeveloper()) : ?>
                            <p class="game-meta"><?= htmlspecialchars($game->getDeveloper(), ENT_QUOTES, 'UTF-8') ?></p>
                        <?php endif; ?>
                        <?php if ($game->getReleaseDate()) : ?>
                            <p class="game-year"><?= htmlspecialchars($game->getReleaseDate(), ENT_QUOTES, 'UTF-8') ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <?php if ($game->getPublisher()) : ?>
                    <div class="game-card-footer">
                        <span><?= htmlspecialchars($game->getPublisher(), ENT_QUOTES, 'UTF-8') ?></span>
                    </div>
                <?php endif; ?>
            </div>

            <form class="game-form" action="<?= $link->url('game.save') ?>" method="post">
                <input type="hidden" name="id" value="<?= $game->getId() ?>">

                <div class="game-form-field">
                    <label for="title">Game title *</label>
                    <input type="text" id="title" name="title"
                           value="<?= htmlspecialchars($game->getTitle(), ENT_QUOTES, 'UTF-8') ?>" required>
                </div>

                <div class="game-form-field">
                    <label for="description">Description</label>
                    <textarea id="description" name="description" rows="5">
                        <?= htmlspecialchars($game->getDescription() ?? '', ENT_QUOTES, 'UTF-8') ?>
                    </textarea>
                </div>

                <div class="game-form-field">
                    <label for="release_date">Release date</label>
                    <input type="date" id="release_date" name="release_date"
                           value="<?= htmlspecialchars($game->getReleaseDate() ?? '', ENT_QUOTES, 'UTF-8') ?>">
                </div>

                <div class="game-form-field">
                    <label for="developer">Developer</label>
                    <input type="text" id="developer" name="developer"
                           value="<?= htmlspecialchars($game->getDeveloper() ?? '', ENT_QUOTES, 'UTF-8') ?>">
                </div>

                <div class="game-form-field">
                    <label for="publisher">Publisher</label>
                    <input type="text" id="publisher" name="publisher"
                           value="<?= htmlspecialchars($game->getPublisher() ?? '', ENT_QUOTES, 'UTF-8') ?>">
                </div>

                <div class="game-form-field">
                    <label for="cover_image">Cover image filename</label>
                    <input type="text" id="cover_image" name="cover_image"
                           value="<?= htmlspecialchars($game->getCoverImage() ?? '', ENT_QUOTES, 'UTF-8') ?>"
                           placeholder="For example, cyberpunk.jpg">
                </div>

                <div class="game-form-actions">
                    <a href="<?= $link->url('game.manage') ?>" class="button button-outline">Cancel</a>
                    <button type="submit" class="button button-primary">Save changes</button>
                </div>
            </form>
        </div>
    </section>
</main>
