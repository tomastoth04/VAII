<?php

/** @var \Framework\Support\LinkGenerator $link */
?>

<main id="main-content" class="page-shell">
    <section class="hero" aria-labelledby="hero-title">
        <div class="hero-copy">
            <h1 id="hero-title">All your games<br><span class="text-gradient">in one place.</span></h1>
            <p class="hero-description">Discover new worlds, keep track of the games you love, and build your own gaming collection.</p>
            <div class="hero-actions">
                <a class="button button-primary" href="<?= $link->url('home.games') ?>">Explore the catalog <span aria-hidden="true">→</span></a>
                <!--          <a class="button button-outline" href="games.html#library">View my library</a>-->
            </div>
        </div>
    </section>

    <section class="section-block" aria-labelledby="recent-title">
        <div class="section-heading">
            <div><p class="eyebrow">RECENTLY ADDED GAMES</p><h2 id="recent-title">Fresh into the Vault</h2></div>
            <a class="text-link" href="<?= $link->url('home.games') ?>">Browse all games <span aria-hidden="true">→</span></a>
        </div>
        <div class="game-grid home-game-grid">
            <article class="game-card">
                <div class="cover-wrap">
                    <img class="game-cover-image" src="<?= $link->asset('images/games/silent-hill-townfall.jpg') ?>" alt="Silent Hill: Townfall cover art">
<!--                    <div class="game-actions">-->
<!--                        <button class="game-actions-toggle" type="button" aria-label="Actions for game placeholder 1" aria-haspopup="menu" aria-expanded="false">-->
<!--                            <span aria-hidden="true">⋮</span>-->
<!--                        </button>-->
<!--                        <div class="game-actions-menu" role="menu" hidden>-->
<!--                            <button class="game-action-option" type="button" role="menuitem" data-game-action="library">Add to My Library</button>-->
<!--                            <button class="game-action-option" type="button" role="menuitem" data-game-action="wishlist">Add to Wishlist</button>-->
<!--                        </div>-->
<!--                    </div>-->
                </div>
                <div class="game-card-info">
                    <div>
                        <h3><a aria-disabled="true" id="game-1">Silent Hill: Townfall</a></h3>
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
                        <h3><a aria-disabled="true" id="game-2">Hades 2</a></h3>
                        <p class="game-meta">Roguelike · Action · RPG</p>
                        <p class="game-year">2025</p>
                    </div>
                    <span class="rating"><span aria-hidden="true">★</span> 9.2</span>
                </div>
                <div class="game-card-footer"><span>PC · PlayStation · Xbox · Nintendo Switch</span><span class="tag">Indie</span></div>
            </article>
            <article class="game-card">
                <div class="cover-wrap">
                    <img class="game-cover-image" src="<?= $link->asset('images/games/kcd2.jpg') ?>" alt="Kingdom Come: Deliverance II cover art">
                </div>
                <div class="game-card-info">
                    <div>
                        <h3><a aria-disabled="true" id="game-3">Kingdom Come: Deliverance II</a></h3>
                        <p class="game-meta">RPG · Action</p>
                        <p class="game-year">2025</p>
                    </div>
                    <span class="rating"><span aria-hidden="true">★</span> 8.8</span>
                </div>
                <div class="game-card-footer"><span>PC · PlayStation · Xbox</span><span class="tag">Popular</span></div>
            </article>
            <article class="game-card">
                <div class="cover-wrap">
                    <img class="game-cover-image" src="<?= $link->asset('images/games/gow-ragnarok.jpg') ?>" alt="God of War Ragnarök cover art">
                </div>
                <div class="game-card-info">
                    <div>
                        <h3><a aria-disabled="true" id="game-4">God of War Ragnarök</a></h3>
                        <p class="game-meta">Action · Adventure</p>
                        <p class="game-year">2022</p>
                    </div>
                    <span class="rating"><span aria-hidden="true">★</span> 9.0</span>
                </div>
                <div class="game-card-footer"><span>PC · PlayStation</span><span class="tag">Popular</span></div>
            </article>
        </div>
    </section>

    <section class="section-block" aria-labelledby="top-rated-title">
        <div class="section-heading">
            <div><p class="eyebrow">TOP RATED GAMES</p><h2 id="top-rated-title">Best in the Vault</h2></div>
            <a class="text-link" href="<?= $link->url('home.games') ?>">Browse all games <span aria-hidden="true">→</span></a>
        </div>
        <div class="game-grid home-game-grid">
            <article class="game-card">
                <div class="cover-wrap">
                    <img class="game-cover-image" src="<?= $link->asset('images/games/witcher-3.jpg') ?>" alt="The Witcher 3: Wild Hunt cover art">
                </div>
                <div class="game-card-info">
                    <div>
                        <h3><a aria-disabled="true" id="game-5">The Witcher 3: Wild Hunt</a></h3>
                        <p class="game-meta">RPG · Action</p>
                        <p class="game-year">2015</p>
                    </div>
                    <span class="rating"><span aria-hidden="true">★</span> 9.5</span>
                </div>
                <div class="game-card-footer"><span>PC · PlayStation · Xbox · Nintendo Switch</span><span class="tag">Top Rated</span></div>
            </article>
            <article class="game-card">
                <div class="cover-wrap">
                    <img class="game-cover-image" src="<?= $link->asset('images/games/rdr2.jpg') ?>" alt="Red Dead Redemption 2 cover art">
                </div>
                <div class="game-card-info">
                    <div>
                        <h3><a aria-disabled="true" id="game-6">Red Dead Redemption 2</a></h3>
                        <p class="game-meta">Action · Adventure</p>
                        <p class="game-year">2019</p>
                    </div>
                    <span class="rating"><span aria-hidden="true">★</span> 9.4</span>
                </div>
                <div class="game-card-footer"><span>PC · PlayStation · Xbox · Nintendo Switch</span><span class="tag">Top Rated</span></div>
            </article>
            <article class="game-card">
                <div class="cover-wrap">
                    <img class="game-cover-image" src="<?= $link->asset('images/games/cyberpunk.jpg') ?>" alt="Cyberpunk 2077 cover art">
                </div>
                <div class="game-card-info">
                    <div>
                        <h3><a aria-disabled="true" id="game-7">Cyberpunk 2077</a></h3>
                        <p class="game-meta">Action · RPG · FPS</p>
                        <p class="game-year">2020</p>
                    </div>
                    <span class="rating"><span aria-hidden="true">★</span> 9.3</span>
                </div>
                <div class="game-card-footer"><span>PC · PlayStation · Xbox · Nintendo Switch</span><span class="tag">Trending</span></div>
            </article>
            <article class="game-card">
                <div class="cover-wrap">
                    <img class="game-cover-image" src="<?= $link->asset('images/games/hades-2.jpg') ?>" alt="Hades 2 cover art">
                </div>
                <div class="game-card-info">
                    <div>
                        <h3><a aria-disabled="true" id="game-8">Hades 2</a></h3>
                        <p class="game-meta">Roguelike · Action · RPG</p>
                        <p class="game-year">2025</p>
                    </div>
                    <span class="rating"><span aria-hidden="true">★</span> 9.2</span>
                </div>
                <div class="game-card-footer"><span>PC · PlayStation · Xbox · Nintendo Switch</span><span class="tag">Indie</span></div>
            </article>
        </div>
    </section>

    <section class="cta-panel" id="sign-in" aria-labelledby="cta-title">
        <div><p class="eyebrow">MAKE IT YOURS</p><h2 id="cta-title">Your next favorite game is waiting.</h2><p>Create your personal collection and keep your gaming plans organized.</p></div>
        <a class="button button-primary" id="register" href="<?= $link->url('home.games') ?>">Get started <span aria-hidden="true">→</span></a>
    </section>
</main>
