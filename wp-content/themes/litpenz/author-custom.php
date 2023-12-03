<?php
/*
Template Name: author
Template Post Type: post
*/
get_header();
?>

<main class="main">
  <section class="author">
    <div class="container">
      <div class="container__position">
        <div class="fio__container">
          <h1 class="fio"><?php the_field('fio'); ?></h1>
          <button class="bio" id="bio" onclick="scrollToSection()">
            Биография
          </button>
        </div>

        <?php $image = get_field('photo_backg'); ?>

        <img src="<?php echo $image['url']; ?>" alt="" />
        <div class="swiper">
          <div class="swiper-wrapper">

            <?php
            global $post;

            $post_id = $post->ID;

            $myposts = get_posts([
              'numberposts' => -1,
              'category'    => 2
            ]);

            if ($myposts) {
              foreach ($myposts as $post) {
                setup_postdata($post);
                $author_id = get_field('author_id');

                if ($author_id == $post_id) {
            ?>
                  <div class="swiper-slide" data-link="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail(); ?>
                    <?php the_field('book__title'); ?>
                  </div>
            <?php
                }
              }
            }
            wp_reset_postdata(); ?>
          </div>
          <div class="swiper-button">
            <a id="buttonLink" href="#" target="_blank"><button>Подробнее</button></a>
          </div>
        </div>
      </div>
  </section>
  <section class="biography" id="biography" style="display: none">
    <div class="container">
      <div class="biography__border">
        <span class="title">Биография</span>
        <div class="border"></div>
      </div>
      <div class="text__container">
        <span class="text"><?php the_field('text') ?></span>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>