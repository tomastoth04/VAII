<?php

/** @var string $contentHTML */
/** @var \Framework\Auth\AppUser $user */
/** @var \Framework\Support\LinkGenerator $link */

/*
 * Router frameworku určuje aktuálnu akciu pomocou GET parametra "a".
 * Ak parameter chýba, ide o predvolenú akciu index(), teda domovskú stránku.
 * Hodnota $currentAction sa používa na vizuálne označenie aktívneho odkazu
 * triedou "active" a na nastavenie atribútu aria-current pre prístupnosť.
 */
$currentAction = $_GET['a'] ?? 'index';
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MyGameVault — keep your games, ratings and wishlist in one place.">
    <title><?= App\Configuration::APP_NAME ?></title>
    <!-- Favicons -->
<!--    <link rel="apple-touch-icon" sizes="180x180" href="--><?php //= $link->asset('favicons/apple-touch-icon.png') ?><!--">-->
<!--    <link rel="icon" type="image/png" sizes="32x32" href="--><?php //= $link->asset('favicons/favicon-32x32.png') ?><!--">-->
<!--    <link rel="icon" type="image/png" sizes="16x16" href="--><?php //= $link->asset('favicons/favicon-16x16.png') ?><!--">-->
<!--    <link rel="manifest" href="--><?php //= $link->asset('favicons/site.webmanifest') ?><!--">-->
<!--    <link rel="shortcut icon" href="--><?php //= $link->asset('favicons/favicon.ico') ?><!--">-->
    <link rel="icon" type="image/png" href="<?= $link->asset('images/logo.png') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= $link->asset('css/style.css') ?>">
    <script src="<?= $link->asset('js/script.js') ?>"></script>
</head>
<body>
<header class="site-header">
    <div class="header-inner">
        <a class="brand" href="<?= $link->url('home.index') ?>" aria-label="MyGameVault home">
            <img class="brand-logo" src="<?= $link->asset('images/logo.png') ?>" alt="MyGameVault logo">
            <span>MyGame<span class="brand-accent">Vault</span></span>
        </a>
        <nav class="primary-nav" aria-label="Main navigation">
<!--            <a class="nav-link active" href="--><?php //= $link->url('home.index') ?><!--" aria-current="page">Home</a>-->
<!--            <a class="nav-link" href="--><?php //= $link->url('home.games') ?><!--">Game Catalog</a>-->
            <a class="nav-link <?= $currentAction === 'index' ? 'active' : '' ?>"
               href="<?= $link->url('home.index') ?>"
                    <?= $currentAction === 'index' ? 'aria-current="page"' : '' ?>>
                Home
            </a>

            <a class="nav-link <?= $currentAction === 'games' ? 'active' : '' ?>"
               href="<?= $link->url('home.games') ?>"
                    <?= $currentAction === 'games' ? 'aria-current="page"' : '' ?>>
                Game Catalog
            </a>

<!--            <a class="nav-link" aria-disabled="true">My Library</a>-->
<!--            <a class="nav-link" aria-disabled="true">Wishlist</a>-->
        </nav>
        <div class="header-actions">
<!--            <a class="button button-quiet button-small" aria-disabled="true">Log in</a>-->
<!--            <a class="button button-primary button-small" aria-disabled="true">Register</a>-->
        </div>
    </div>
</header>
<div class="container-fluid mt-3">
    <div class="web-content">
        <?= $contentHTML ?>
    </div>
</div>

<footer class="site-footer">
    <div class="footer-inner">
        <a class="brand footer-brand" href="<?= $link->url('home.index') ?>">
            <img class="brand-logo" src="<?= $link->asset('images/logo.png') ?>" alt="MyGameVault logo">
            <span>MyGame<span class="brand-accent">Vault</span></span>
        </a>
        <p>Keep your gaming world together.</p>
        <span class="footer-copy">© 2026 MyGameVault</span>
    </div>
</footer>
</body>
</html>
