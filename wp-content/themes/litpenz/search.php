<?php
get_header();

$search_query = get_search_query();

$args = array(
    'post_type' => array('post'),
    's' => $search_query,
    'category_name' => 'avtory, proizvedeniya',
);

$query = new WP_Query($args);

?>
<div class="container__search">
    <?php

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
    ?>
            <a href="<?php the_permalink(); ?>" class="section__item-o">
                <?php the_post_thumbnail(array(276, 409)); ?>
                <h3 class="section__name"><?php the_title(); ?></h3>
            </a>
    <?php
        endwhile;
    else :
        echo '<p>Ничего не найдено</p>';
    endif;

    ?>
</div>
<?php

wp_reset_postdata(); // Сбрасываем данные запроса

get_footer();
