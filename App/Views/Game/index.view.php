<?php

/** @var \App\Models\Game[] $games */
/** @var \Framework\Support\LinkGenerator $link */
?>

<main id="main-content" class="page-shell catalog-page">
    <section class="catalog-intro" aria-labelledby="catalog-title">
        <div><p class="eyebrow">FIND YOUR NEXT ADVENTURE</p><h1 id="catalog-title">Game Catalog</h1><p class="hero-description">Discover your next favorite game.</p></div>
        <div class="catalog-stat">
            <span class="stat-number"><?= count($games) ?></span>
            <span class="stat-label">games to explore</span>
        </div>
    </section>

    <form class="catalog-toolbar" action="<?= $link->url('game.index') ?>" method="get" role="search">
        <input type="hidden" name="c" value="game">
        <label class="search-field"><span class="search-icon" aria-hidden="true">⌕</span><span class="visually-hidden">Search games</span><input type="search" name="q" placeholder="Search by game title..." autocomplete="off"></label>
        <label class="sort-field"><span>Sort by</span><select name="sort"><option>Most popular</option><option>Top rated</option><option>Recently added</option><option>Title A–Z</option></select></label>
        <button class="button button-primary" type="submit">Search</button>
    </form>

    <div class="catalog-layout">
        <aside class="filter-panel" aria-labelledby="filters-title">
            <form id="catalog-filter-form" action="<?= $link->url('game.index') ?>" method="get" aria-label="Apply catalog filters">
                <!--
                    Framework používa parametre c a a na určenie kontroléra a akcie.
                    Keďže formulár používa metódu GET, tieto parametre musia byť súčasťou
                    formulára, inak ich prehliadač pri odoslaní nahradí ostatnými hodnotami
                    formulára a router by zobrazil predvolenú akciu HomeController::index().
                -->
                <input type="hidden" name="c" value="game">
                <div class="filter-header"><h2 id="filters-title">Filters</h2><a class="reset-link" href="<?= $link->url('game.index') ?>">Reset</a></div>
                <fieldset class="filter-group"><legend>Genre</legend>
                    <label class="check-row"><input type="checkbox" name="genre" value="action"><span>Action</span></label>
                    <label class="check-row"><input type="checkbox" name="genre" value="fps"><span>First-Person Shooter</span></label>
                    <label class="check-row"><input type="checkbox" name="genre" value="adventure"><span>Adventure</span></label>
                    <label class="check-row"><input type="checkbox" name="genre" value="rpg"><span>RPG</span></label>
                    <label class="check-row"><input type="checkbox" name="genre" value="horror"><span>Horror</span></label>
                    <label class="check-row"><input type="checkbox" name="genre" value="roguelike"><span>Roguelike</span></label>
                </fieldset>
                <fieldset class="filter-group"><legend>Platform</legend>
                    <label class="check-row"><input type="checkbox" name="platform" value="pc"><span>PC</span></label>
                    <label class="check-row"><input type="checkbox" name="platform" value="playstation"><span>PlayStation</span></label>
                    <label class="check-row"><input type="checkbox" name="platform" value="xbox"><span>Xbox</span></label>
                    <label class="check-row"><input type="checkbox" name="platform" value="switch"><span>Nintendo Switch</span></label>
                </fieldset>
                <fieldset class="filter-group rating-filter"><legend>Minimum rating</legend>
                    <label class="check-row"><input type="radio" name="rating" value="9"><span>★★★★★ 9.0+</span></label>
                    <label class="check-row"><input type="radio" name="rating" value="8"><span>★★★★☆ 8.0+</span></label>
                    <label class="check-row"><input type="radio" name="rating" value="7"><span>★★★☆☆ 7.0+</span></label>
                </fieldset>
                <button class="button button-outline filter-apply" type="submit">Apply filters</button>
            </form>
        </aside>

        <section class="results-section" aria-labelledby="results-title">
            <div class="results-heading"><div><h2 id="results-title">Explore games</h2><p>Showing <strong><?= count($games) ?></strong> games</p></div><span class="results-view-label"><span class="view-grid-icon" aria-hidden="true">▪</span> All games</span></div>
            <div class="game-grid catalog-game-grid">
                <?php foreach ($games as $game): ?>
                    <article class="game-card">
                        <div class="cover-wrap">
                            <?php if ($game->getCoverImage()): ?>
                                <img class="game-cover-image" src="<?= $link->asset('images/games/' . $game->getCoverImage()) ?>" alt="<?= htmlspecialchars($game->getTitle()) ?> cover art">
                            <?php endif; ?>
                        </div>
                        <div class="game-card-info"><div>
                            <h3><?= htmlspecialchars($game->getTitle()) ?></h3>
                            <?php if ($game->getDeveloper()): ?><p class="game-meta"><?= htmlspecialchars($game->getDeveloper()) ?></p><?php endif; ?>
                            <?php if ($game->getReleaseDate()): ?><p class="game-year"><?= htmlspecialchars($game->getReleaseDate()) ?></p><?php endif; ?>
                        </div></div>
                        <?php if ($game->getPublisher()): ?><div class="game-card-footer"><span><?= htmlspecialchars($game->getPublisher()) ?></span></div><?php endif; ?>
                    </article>
                <?php endforeach; ?>
            </div>
            <!--            <nav class="pagination" aria-label="Catalog pagination">-->
            <!-- tieto boli zakomentovane aj predtym-->
            <!--          <span class="pagination-status">Page 1 of 6</span>-->
            <!--          <a class="page-number current" href="games.html" aria-current="page">1</a>-->
            <!--          <a class="page-number" href="#page-2">2</a>-->
            <!--          <a class="page-number" href="#page-3">3</a>-->
            <!--          <span class="pagination-ellipsis" aria-hidden="true">…</span>-->
            <!--          <a class="page-number" href="#page-6">6</a>-->
            <!--          <a class="button button-outline button-small" href="#next-page">Next <span aria-hidden="true">→</span></a>-->

            <!--                <span class="pagination-status">Page 1 of 6</span>-->
            <!--                <a class="page-number current" href="--><?php //= $link->url('home.games') ?><!--" aria-current="page">1</a>-->
            <!--                <a class="page-number" aria-disabled="true">2</a>-->
            <!--                <a class="page-number" aria-disabled="true">3</a>-->
            <!--                <span class="pagination-ellipsis" aria-hidden="true">…</span>-->
            <!--                <a class="page-number" aria-disabled="true">6</a>-->
            <!--                <a class="button button-outline button-small" aria-disabled="true">Next <span aria-hidden="true">→</span></a>-->
            <!--            </nav>-->
        </section>
    </div>

    <!--    <section class="hidden-anchor" id="library" aria-label="My Library section placeholder"><h2>My Library</h2><p>Your saved games will appear here when this feature is implemented.</p></section>-->
    <!--    <section class="hidden-anchor" id="wishlist" aria-label="Wishlist section placeholder"><h2>Wishlist</h2><p>Your wishlist will appear here when this feature is implemented.</p></section>-->
    <!--    <div id="sign-in" class="visually-hidden">Sign-in placeholder</div><div id="register" class="visually-hidden">Registration placeholder</div>-->

</main>
