<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'description' ); ?></title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <?php wp_head(); ?>
</head>

<body>

    <!-- HEADER -->

    <header class="header">
        <div class="header__bg">
            <img src="  <?php the_field('header__bg-img') ?>" alt="" class="header__bg-img">
            <!-- <div class="header__bg-decor">
                <img src="images/confetti.png" alt="" class="header__bg-decor__img">
            </div> -->
        </div>
        <div class="container">
            <div class="header__inner">
                <div class="contacts">
                    <a class="contacts__tel" href="tel:<?php the_field('contacts__tel') ?>"><?php the_field('contacts__tel-page') ?></a>
                </div>
                <div class="header__main">
                    <div class="logo">
                        <img class="logo__img" src="  <?php the_field('header__logo') ?>" alt="logo">
                    </div>
                    <div class="header-text">
                        <span class="header-text__title">
                            <?php the_field('header-text__title') ?>
                        </span>
                        <span class="header-text__money">
                            <?php the_field('header-text__money') ?>
                        </span>
                            <?php the_field('header-text') ?>
                    </div>
                </div>
            </div>
        </div>
    </header>