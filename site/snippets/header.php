<?php
   require('site/functions.php');

?>
<!DOCTYPE html>
<html lang="de">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <?php

    snippet('meta_information');
    snippet('robots');
    ?>
    <?= css([
        'assets/Css/main.css',
        '@auto'
    ]) ?>

    <?= js([
        'assets/JavaScript/lib/jquery-3.6.4.min.js'
    ]) ?>

    <link rel="shortcut icon" type="image/x-icon" href="<?= url('favicon.ico') ?>">
    <link rel="apple-touch-icon" sizes="57x57" href="<?= $kirby->url('assets') ?>/Favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= $kirby->url('assets') ?>/Favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= $kirby->url('assets') ?>/Favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= $kirby->url('assets') ?>/Favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= $kirby->url('assets') ?>/Favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= $kirby->url('assets') ?>/Favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= $kirby->url('assets') ?>/Favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= $kirby->url('assets') ?>/Favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= $kirby->url('assets') ?>/Favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= $kirby->url('assets') ?>/Favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= $kirby->url('assets') ?>/Favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= $kirby->url('assets') ?>/Favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= $kirby->url('assets') ?>/Favicons/favicon-16x16.png">
    <link rel="manifest" href="<?= $kirby->url('assets') ?>/Favicons//manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?= $kirby->url('assets') ?>/Favicons//ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


<body class="t_<?= $page->template() ?>">

    <?PHP
    //snippet('gridtester')
    ?>

    <div id="overlay"></div>

    <header id="header">
        <div class="container">
            <div class="inner-header">
                <div class="logo">
                    <a href="<?= $site->url() ?>">
                        <img src="<?= $kirby->url('assets') ?>/Images/logo.svg" alt="Praxis Kapuzinerplanken Logo">
                        <img class="logo_bild" src="<?= $kirby->url('assets') ?>/Icons/logo_bild.svg" alt="Praxis Kapuzinerplanken Logo nur Bild">
                    </a>
                </div>

                <nav class="main-nav">
                    <ul>
                        <?php
                        $items = $site->links()->toStructure();
                        foreach ($items as $item) : ?>
                            <li>
                                <a class="" href="<?= $site->url() ?><?= $item->slug() ?>" title="<?= $item->title() ?>"><?= $item->title() ?></a>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </nav>

                <a class="smart-menu-btn">
                    <div class="inner">
                        <span class="line pos-top"></span>
                        <span class="line pos-middle"></span>
                        <span class="line pos-bottom"></span>
                    </div>
                </a>

                <nav id="smartmenu" class="">
                    <div class="mn-menu">
                        <ul>
                            <?php
                            $items = $site->links()->toStructure();
                            foreach ($items as $item) : ?>
                                <li>
                                    <a class="" href="<?= $site->url() ?><?= $item->slug() ?>" title="<?= $item->title() ?>"><?= $item->title() ?></a>
                                </li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </nav>

            </div>
        </div>
    </header>

    <main class="main" id="content">
