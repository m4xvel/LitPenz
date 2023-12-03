<?php
/*
Template Name: book
Template Post Type: post
*/
get_header();
?>

<main class="main">
  <section class="information">
    <div class="container">
      <div class="container__image">
        <?php the_post_thumbnail(); ?>
        <nav class="nav">
          <ul class="navigation">
            <li class="navigation__item">
              <p class="navigation__link" id="navigation__item-1">Читать</p>
            </li>
            <li class="navigation__item">
              <p class="navigation__link" id="navigation__item-2">Отзывы</p>
            </li>
          </ul>
          <div id="underline"></div>
        </nav>
      </div>
      <div class="information__text">
        <span class="book__title"><?php the_field('book__title'); ?></span>
        <div class="book__information">
          <span class="book__author">
            <h2>Автор:</h2> <?php the_field('book_author'); ?>
          </span>
          <span class="book__year">
            <h2>Год написания:</h2> <?php the_field('book__year'); ?>
          </span>
          <span class="book__description">
            <h2>Описание:</h2> <?php the_field('book__description'); ?>
          </span>
        </div>
      </div>
    </div>
    <hr />
    <div class="text__container" id="text_book">
      <span class="title">Предисловие</span>
      <span class="text"><?php the_field('text'); ?></span>
      <a href="<?php the_field('next__read'); ?>" class="next__read">Продолжить читать</a>
    </div>
  </section>
  <section class="reviews" id="reviews" style="display: none">

    <?php
    global $post;

    $post_id = $post->ID;

    $myposts = get_posts([
      'numberposts' => -1,
      'category'    => 4
    ]);

    if ($myposts) {
      foreach ($myposts as $post) {
        setup_postdata($post);
        $book_id = get_field('book_id');

        if ($book_id == $post_id) {
    ?>
          <div class="container">
            <div class="reviews__profile">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/profile.svg" alt="" />
              <span class="name__user"><?php the_field('nickname'); ?> •</span>
              <div class="star">
                <?php
                $rating = get_field('rating');

                if ($rating >= 1 && $rating <= 5) {
                  for ($i = 1; $i <= $rating; $i++) {
                    echo '<div class="star__item filled"><img src="' . get_template_directory_uri() . '/assets/img/star_full.svg" alt="" /></div>';
                  }

                  for ($i = $rating + 1; $i <= 5; $i++) {
                    echo '<div class="star__item empty"><img src="' . get_template_directory_uri() . '/assets/img/star.svg" alt="" /></div>';
                  }
                } else {
                  echo 'Неверное значение рейтинга';
                }
                ?>
              </div>
            </div>
            <span class="reviews__text"><?php the_content(); ?></span>
          </div>

    <?php
        }
      }
    }
    wp_reset_postdata();
    ?>


  </section>
</main>

<?php get_footer(); ?>