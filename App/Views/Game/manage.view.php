<?php

/** @var \App\Models\Game[] $games */
/** @var \Framework\Support\LinkGenerator $link */
?>

<main id="main-content" class="page-shell manage-page">
    <section class="section-block" aria-labelledby="manage-games-title">
        <div class="section-heading">
            <div>
                <h1 id="manage-games-title">Manage games</h1>
            </div>
            <a class="button button-primary" href="<?= $link->url('game.add') ?>">+ Add game</a>
        </div>

    <?php if (empty($games)) : ?>
        <section class="section-block">
            <h2>No games found</h2>
            <p class="hero-description">Your catalog is empty. Add the first game to get started.</p>
            <a class="button button-primary" href="<?= $link->url('game.add') ?>">+ Add game</a>
        </section>
    <?php else : ?>
        <section aria-labelledby="game-list-title">
            <div class="results-heading">
                <div>
                    <h2 id="game-list-title">Game catalog</h2>
                    <p><?= count($games) ?> games currently stored in the database.</p>
                </div>
            </div>

            <div style="border-top: 1px solid var(--line);">
                <?php foreach ($games as $game) : ?>
                    <div style="display: flex; align-items: center; justify-content: space-between; gap: 16px; padding: 17px 0; border-bottom: 1px solid var(--line);">
                        <div style="min-width: 0;">
                            <h3 style="margin: 0 0 4px; font-size: 1rem;">
                                <?= htmlspecialchars($game->getTitle(), ENT_QUOTES, 'UTF-8') ?>
                            </h3>
                            <?php if ($game->getDeveloper()) : ?>
                                <p class="game-meta" style="margin: 0;">
                                    <?= htmlspecialchars($game->getDeveloper(), ENT_QUOTES, 'UTF-8') ?>
                                </p>
                            <?php endif; ?>
                        </div>
                        <div style="display: flex; flex-shrink: 0; gap: 8px;">
                            <a class="button button-outline button-small"
                               href="<?= $link->url('game.edit', ['id' => $game->getId()]) ?>">Edit</a>
                            <form method="post" action="<?= $link->url('game.delete') ?>">
                                <input type="hidden" name="id" value="<?= $game->getId() ?>">
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
