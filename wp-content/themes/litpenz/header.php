<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LitPenz</title>

    <?php wp_head(); ?>

</head>

<body>
    <header class="header">
        <div class="container">
            <nav class="nav">
                <ul class="menu menu__left">
                    <li class="menu__list">
                        <a href="#section-1" class="menu__link"> Произведения </a>
                    </li>
                    <li class="menu__list">
                        <a href="#section-2" class="menu__link"> Авторы </a>
                    </li>
                </ul>
                <a href="" class="logo">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.svg" alt="" />
                    LitPenz
                </a>
                <ul class="menu menu__right">
                    <li class="menu__list">
                        <a href="#section-3" class="menu__link"> Отзывы </a>
                    </li>
                    <li class="menu__list">
                        <a href="#section-4" class="menu__link"> О проекте </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>