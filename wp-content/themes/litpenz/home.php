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
                <div class="catalog">
                    <button class="сatalog__button" id="сatalog__button">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/catalog.svg" alt="" />
                        Список
                    </button>
                    <div class="catalog__pop-up" id="catalog__pop-up" style="display: none;">
                        <?php
                        global $post;

                        $myposts = get_posts([
                            'numberposts' => 5,
                            'category'    => 3
                        ]);

                        if ($myposts) {
                            foreach ($myposts as $post) {
                                setup_postdata($post);
                        ?>
                                <div class="catalog__pop-up__item"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                        <?php
                            }
                        }
                        wp_reset_postdata(); ?>

                    </div>
                </div>
                <form class="search__items" role="search" method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>">
                    <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Искать здесь..." class="search__input" />
                    <button type="submit" id="searchsubmit" class="search__button">Поиск</button>
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

                <?php
                global $post;

                $myposts = get_posts([
                    'numberposts' => 3,
                    'category'    => 2
                ]);

                if ($myposts) {
                    foreach ($myposts as $post) {
                        setup_postdata($post);
                ?>
                        <a href="<?php the_permalink(); ?>" class="section__item-o">
                            <?php the_post_thumbnail(array(276, 409)); ?>
                            <h3 class="section__name"><?php the_title(); ?></h3>
                        </a>
                <?php
                    }
                }
                wp_reset_postdata(); ?>

            </div>
        </div>
    </section>
    <section class="section" id="section-2">
        <div class="container">
            <h2 class="section__title">Авторы</h2>
            <div class="section__block">

                <?php
                global $post;

                $myposts = get_posts([
                    'numberposts' => 5,
                    'category'    => 3
                ]);

                if ($myposts) {
                    foreach ($myposts as $post) {
                        setup_postdata($post);
                ?>
                        <a href="<?php the_permalink(); ?>" class="section__item-o">
                            <?php the_post_thumbnail(); ?>
                            <h3 class="section__name"><?php the_title(); ?></h3>
                        </a>
                <?php
                    }
                }
                wp_reset_postdata(); ?>

            </div>
        </div>
    </section>
    <section class="section" id="section-3">
        <h3 class="section__title">Отзывы</h3>
        <div class="container">

            <?php
            global $post;

            $myposts = get_posts([
                'numberposts' => 4,
                'category'    => 4
            ]);

            if ($myposts) {
                foreach ($myposts as $post) {
                    setup_postdata($post);
            ?>
                    <div class="reviews__main">
                        <div class="reviews__info">
                            <span class="nickname"><?php the_field('nickname'); ?></span>
                            <span>•</span>
                            <span class="book__title"><?php the_field('book_title'); ?></span>
                        </div>
                        <span class="reviews__text"><?php the_content(); ?></span>
                    </div>
            <?php
                }
            }
            wp_reset_postdata(); ?>

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