<?php
/*
Template Name: home
*/
?>

<?php get_header(); ?>

<main class="main">
    <section class="penza">
        <div class="container">
            <h1 class="title">Онлайн-библиотека Пензенского края</h1>
            <div class="search">
                <button class="сatalog">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/catalog.svg" alt="" />
                    Каталог
                </button>
                <form class="search__items">
                    <input type="text" placeholder="Искать здесь..." class="search__input" />
                    <button type="submit" class="search__button">Поиск</button>
                </form>
            </div>
            <div class="border"></div>
            <div class="main__block">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/penza.jpg" alt="penza" class="main__img" />
                <h2 class="main__text">
                    Пензенский край не случайно называют «второй литературной
                    столицей» России — здесь родились и провели значительную часть
                    своей жизни Куприн, Лесков, Салтыков-Щедрин, Михаил Загоскин —
                    основоположник русского исторического романа, а еще Радищев,
                    Лермонтов, Белинский и другие классики отечественной и мировой
                    литературы. Денис Давыдов называл Пензу Парнасом, Лев Толстой —
                    русской Швейцарией, а Вяземский в письме к Тургеневу отмечал, что
                    в городе на Суре интеллектуальной жизни «немногим менее чем в
                    Москве». Гении русской литературы навсегда связаны с Пензенским
                    краем. Строка «Люблю Отчизну я», вышедшая из-под пера Михаила
                    Лермонтова, сказана и о его родных Тарханах, где он провел
                    половину своей столь короткой жизни.
                </h2>
            </div>
        </div>
    </section>
    <section class="section" id="section-1">
        <div class="container">
            <h2 class="section__title">Произведения</h2>
            <div class="section__block">
                <a href="#" class="section__item-o">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/geroi-nashego-vremeny.jpg" alt="" />
                    <h3 class="section__name">Герой нашего времени</h3>
                </a>
                <a href="#" class="section__item-o">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/askaldova-mogila.jpg" alt="" />
                    <h3 class="section__name">Аскольдова могила</h3>
                </a>
                <a href="#" class="section__item-o">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/oprokinuti-kupol.jpg" alt="" />
                    <h3 class="section__name">Опрокинутый купол</h3>
                </a>
            </div>
        </div>
    </section>
    <section class="section" id="section-2">
        <div class="container">
            <h2 class="section__title">Авторы</h2>
            <div class="section__block">
                <a href="#" class="section__item-o">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/lermontov.jpg" alt="" />
                    <h3 class="section__name">Лермонтов Михаил Юрьевич</h3>
                </a>
                <a href="#" class="section__item-o">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/zagoskin.jpg" alt="" />
                    <h3 class="section__name">Загоскин Михаил Николаевич</h3>
                </a>
                <a href="#" class="section__item-o">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/buyanov.jpg" alt="" />
                    <h3 class="section__name">Буянов Николай Анатольевич</h3>
                </a>
            </div>
        </div>
    </section>
    <section class="section" id="section-3">
        <h3 class="section__title">Отзывы</h3>
        <div class="container">
            <div class="reviews__main">
                <div class="reviews__info">
                    <span class="nickname">Никнейм</span>
                    <span>•</span>
                    <span class="book__title">Название книги</span>
                </div>
                <span class="reviews__text">Текст отзыва текст отзыва текст отзыва текст отзыва текст отзыва
                    текст отзыва текст отзыва текст отзыва текст отзыва</span>
            </div>
            <div class="reviews__main">
                <div class="reviews__info">
                    <span class="nickname">Никнейм</span>
                    <span>•</span>
                    <span class="book__title">Название книги</span>
                </div>
                <span class="reviews__text">Текст отзыва текст отзыва текст отзыва текст отзыва текст отзыва
                    текст отзыва текст отзыва текст отзыва текст отзыва</span>
            </div>
            <div class="reviews__main">
                <div class="reviews__info">
                    <span class="nickname">Никнейм</span>
                    <span>•</span>
                    <span class="book__title">Название книги</span>
                </div>
                <span class="reviews__text">Текст отзыва текст отзыва текст отзыва текст отзыва текст отзыва
                    текст отзыва текст отзыва текст отзыва текст отзыва</span>
            </div>
            <div class="reviews__main">
                <div class="reviews__info">
                    <span class="nickname">Никнейм</span>
                    <span>•</span>
                    <span class="book__title">Название книги</span>
                </div>
                <span class="reviews__text">Текст отзыва текст отзыва текст отзыва текст отзыва текст отзыва
                    текст отзыва текст отзыва текст отзыва текст отзыва</span>
            </div>
        </div>
    </section>
    <section class="section" id="section-4">
        <div class="container">
            <h3 class="section__title">О проекте</h3>
            <div class="section__block">
                <div class="section__item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/books.svg" alt="" />
                    <span class="section__name-no__link">Разнообразие литературного наследия Пензенской области
                    </span>
                </div>
                <div class="section__item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/derevo.svg" alt="" />
                    <span class="section__name-no__link">Вдохновение талантом местных писателей
                    </span>
                </div>
                <div class="section__item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/planeta.svg" alt="" />
                    <span class="section__name-no__link">Путешествие по страницам уникальной культуры региона
                    </span>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>