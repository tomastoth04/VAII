<?php
/** @var \Framework\Support\LinkGenerator $link */
?>

<main id="main-content" class="page-shell catalog-page">
    <section class="catalog-intro" aria-labelledby="catalog-title">
        <div><p class="eyebrow">FIND YOUR NEXT ADVENTURE</p><h1 id="catalog-title">Game Catalog</h1><p class="hero-description">Discover your next favorite game.</p></div>
        <div class="catalog-stat"><span class="stat-number">48</span><span class="stat-label">games to explore</span></div>
    </section>

    <form class="catalog-toolbar" action="<?= $link->url('home.games') ?>" method="get" role="search">
        <input type="hidden" name="c" value="home">
        <input type="hidden" name="a" value="games">
        <label class="search-field"><span class="search-icon" aria-hidden="true">⌕</span><span class="visually-hidden">Search games</span><input type="search" name="q" placeholder="Search by game title..." autocomplete="off"></label>
        <label class="sort-field"><span>Sort by</span><select name="sort"><option>Most popular</option><option>Top rated</option><option>Recently added</option><option>Title A–Z</option></select></label>
        <button class="button button-primary" type="submit">Search</button>
    </form>

    <div class="catalog-layout">
        <aside class="filter-panel" aria-labelledby="filters-title">
            <form id="catalog-filter-form" action="<?= $link->url('home.games') ?>" method="get" aria-label="Apply catalog filters">
                <!--
                    Framework používa parametre c a a na určenie kontroléra a akcie.
                    Keďže formulár používa metódu GET, tieto parametre musia byť súčasťou
                    formulára, inak ich prehliadač pri odoslaní nahradí ostatnými hodnotami
                    formulára a router by zobrazil predvolenú akciu HomeController::index().
                -->
                <input type="hidden" name="c" value="home">
                <input type="hidden" name="a" value="games">

                <div class="filter-header"><h2 id="filters-title">Filters</h2><a class="reset-link" href="<?= $link->url('home.games') ?>">Reset</a></div>
                <fieldset class="filter-group"><legend>Genre</legend>
                    <label class="check-row"><input type="checkbox" name="genre" value="action"><span>Action</span><span class="filter-count">12</span></label>
                    <label class="check-row"><input type="checkbox" name="genre" value="fps"><span>First-Person Shooter</span><span class="filter-count">10</span></label>
                    <label class="check-row"><input type="checkbox" name="genre" value="adventure"><span>Adventure</span><span class="filter-count">9</span></label>
                    <label class="check-row"><input type="checkbox" name="genre" value="rpg"><span>RPG</span><span class="filter-count">8</span></label>
                    <label class="check-row"><input type="checkbox" name="genre" value="horror"><span>Horror</span><span class="filter-count">6</span></label>
                    <label class="check-row"><input type="checkbox" name="genre" value="roguelike"><span>Roguelike</span><span class="filter-count">5</span></label>
                </fieldset>
                <fieldset class="filter-group"><legend>Platform</legend>
                    <label class="check-row"><input type="checkbox" name="platform" value="pc"><span>PC</span></label>
                    <label class="check-row"><input type="checkbox" name="platform" value="playstation"><span>PlayStation</span></label>
                    <label class="check-row"><input type="checkbox" name="platform" value="xbox"><span>Xbox</span></label>
                    <label class="check-row"><input type="checkbox" name="platform" value="switch"><span>Nintendo Switch</span></label>
                </fieldset>
                <fieldset class="filter-group rating-filter"><legend>Minimum rating</legend>
                    <label class="check-row"><input type="radio" name="rating" value="9"><span><span class="stars" aria-label="5 out of 5 stars">★★★★★</span> 9.0+</span></label>
                    <label class="check-row"><input type="radio" name="rating" value="8"><span><span class="stars" aria-label="4 out of 5 stars">★★★★<span class="star-muted">★</span></span> 8.0+</span></label>
                    <label class="check-row"><input type="radio" name="rating" value="7"><span><span class="stars" aria-label="3 out of 5 stars">★★★<span class="star-muted">★★</span></span> 7.0+</span></label>
                </fieldset>
                <button class="button button-outline filter-apply" type="submit">Apply filters</button>
            </form>
        </aside>

        <section class="results-section" aria-labelledby="results-title">
            <div class="results-heading"><div><h2 id="results-title">Explore games</h2><p>Showing <strong>9</strong> of <strong>48</strong> games</p></div><span class="results-view-label"><span class="view-grid-icon" aria-hidden="true">▦</span> All games</span></div>
            <div class="game-grid catalog-game-grid">
                <article class="game-card">
                    <div class="cover-wrap">
                        <img class="game-cover-image" src="<?= $link->asset('images/games/cyberpunk.jpg') ?>" alt="Cyberpunk 2077 cover art">
<!--                        <div class="game-actions">-->
<!--                            <button class="game-actions-toggle" type="button" aria-label="Actions for game placeholder 1" aria-haspopup="menu" aria-expanded="false">-->
<!--                                <span aria-hidden="true">⋮</span>-->
<!--                            </button>-->
<!--                            <div class="game-actions-menu" role="menu" hidden>-->
<!--                                <button class="game-action-option" type="button" role="menuitem" data-game-action="library">Add to My Library</button>-->
<!--                                <button class="game-action-option" type="button" role="menuitem" data-game-action="wishlist">Add to Wishlist</button>-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>
                    <div class="game-card-info">
                        <div>
                            <h3><a aria-disabled="true" id="game-1">Cyberpunk 2077</a></h3>
                            <p class="game-meta">Action · RPG · FPS</p>
                            <p class="game-year">2020</p>
                        </div>
                        <!--              <span class="rating" aria-label="Rating not set"><span aria-hidden="true">★</span> —</span>-->
                        <span class="rating"><span aria-hidden="true">★</span> 9.3</span>
                    </div>
                    <div class="game-card-footer"><span>PC · PlayStation · Xbox · Nintendo Switch</span><span class="tag">Trending</span></div>
                </article>
                <article class="game-card">
                    <div class="cover-wrap">
                        <img class="game-cover-image" src="<?= $link->asset('images/games/silent-hill-townfall.jpg') ?>" alt="Silent Hill: Townfall cover art">
                    </div>
                    <div class="game-card-info">
                        <div>
                            <h3><a aria-disabled="true" id="game-2">Silent Hill: Townfall</a></h3>
                            <p class="game-meta">Horror · Survival</p>
                            <p class="game-year">2026</p>
                        </div>
                        <span class="rating"><span aria-hidden="true">★</span> 8.1</span>
                    </div>
                    <div class="game-card-footer"><span>PC · PlayStation</span><span class="tag">New</span></div>
                </article>
                <article class="game-card">
                    <div class="cover-wrap">
                        <img class="game-cover-image" src="<?= $link->asset('images/games/hades-2.jpg') ?>" alt="Hades 2 cover art">
                    </div>
                    <div class="game-card-info">
                        <div>
                            <h3><a aria-disabled="true" id="game-3">Hades 2</a></h3>
                            <p class="game-meta">Roguelike · Action · RPG</p>
                            <p class="game-year">2025</p>
                        </div>
                        <span class="rating"><span aria-hidden="true">★</span> 9.2</span>
                    </div>
                    <div class="game-card-footer"><span>PC · PlayStation · Xbox · Nintendo Switch</span><span class="tag">Indie</span></div>
                </article>
                <article class="game-card">
                    <div class="cover-wrap">
                        <img class="game-cover-image" src="<?= $link->asset('images/games/far-cry-3.jpg') ?>" alt="Far Cry 3 cover art">
                    </div>
                    <div class="game-card-info">
                        <div>
                            <h3><a aria-disabled="true" id="game-4">Far Cry 3</a></h3>
                            <p class="game-meta">FPS · Action · Adventure</p>
                            <p class="game-year">2012</p>
                        </div>
                        <span class="rating"><span aria-hidden="true">★</span> 8.6</span>
                    </div>
                    <div class="game-card-footer"><span>PC · PlayStation · Xbox</span><span class="tag">Classic</span></div>
                </article>
                <article class="game-card">
                    <div class="cover-wrap">
                        <img class="game-cover-image" src="<?= $link->asset('images/games/witcher-3.jpg') ?>" alt="The Witcher 3: Wild Hunt cover art">
                    </div>
                    <div class="game-card-info">
                        <div>
                            <h3><a aria-disabled="true" id="game-5">The Witcher 3: Wild Hunt</a></h3>
                            <p class="game-meta">RPG · Action · Adventure</p>
                            <p class="game-year">2015</p>
                        </div>
                        <span class="rating"><span aria-hidden="true">★</span> 9.5</span>
                    </div>
                    <div class="game-card-footer"><span>PC · PlayStation · Xbox · Nintendo Switch</span><span class="tag">Top Rated</span></div>
                </article>
                <article class="game-card">
                    <div class="cover-wrap">
                        <img class="game-cover-image" src="<?= $link->asset('images/games/metro-exodus.jpg') ?>" alt="Metro Exodus cover art">
                    </div>
                    <div class="game-card-info">
                        <div>
                            <h3><a aria-disabled="true" id="game-6">Metro Exodus</a></h3>
                            <p class="game-meta">FPS · Survival · Action</p>
                            <p class="game-year">2019</p>
                        </div>
                        <span class="rating"><span aria-hidden="true">★</span> 8.2</span>
                    </div>
                    <div class="game-card-footer"><span>PC · PlayStation · Xbox</span><span class="tag">Popular</span></div>
                </article>
                <article class="game-card">
                    <div class="cover-wrap">
                        <img class="game-cover-image" src="<?= $link->asset('images/games/kcd2.jpg') ?>" alt="Kingdom Come: Deliverance II cover art">
                    </div>
                    <div class="game-card-info">
                        <div>
                            <h3><a aria-disabled="true" id="game-7">Kingdom Come: Deliverance II</a></h3>
                            <p class="game-meta">RPG · Action</p>
                            <p class="game-year">2025</p>
                        </div>
                        <span class="rating"><span aria-hidden="true">★</span> 8.8</span>
                    </div>
                    <div class="game-card-footer"><span>PC · PlayStation · Xbox</span><span class="tag">Popular</span></div>
                </article>
                <article class="game-card">
                    <div class="cover-wrap">
                        <img class="game-cover-image" src="<?= $link->asset('images/games/rdr2.jpg') ?>" alt="Red Dead Redemption 2 cover art">
                    </div>
                    <div class="game-card-info">
                        <div>
                            <h3><a aria-disabled="true" id="game-8">Red Dead Redemption 2</a></h3>
                            <p class="game-meta">Action · Adventure</p>
                            <p class="game-year">2018</p>
                        </div>
                        <span class="rating"><span aria-hidden="true">★</span> 9.4</span>
                    </div>
                    <div class="game-card-footer"><span>PC · PlayStation · Xbox · Nintendo Switch</span><span class="tag">Top Rated</span></div>
                </article>
                <article class="game-card">
                    <div class="cover-wrap">
                        <img class="game-cover-image" src="<?= $link->asset('images/games/gow-ragnarok.jpg') ?>" alt="God of War Ragnarök cover art">
                    </div>
                    <div class="game-card-info">
                        <div>
                            <h3><a aria-disabled="true" id="game-9">God of War Ragnarök</a></h3>
                            <p class="game-meta">Action · Adventure</p>
                            <p class="game-year">2022</p>
                        </div>
                        <span class="rating"><span aria-hidden="true">★</span> 9.0</span>
                    </div>
                    <div class="game-card-footer"><span>PC · PlayStation</span><span class="tag">Popular</span></div>
                </article>
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
