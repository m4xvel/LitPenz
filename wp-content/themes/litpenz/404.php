<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <title>Ошибка 404</title>
  <?php wp_head(); ?>
</head>

<body>
  <main class="main">
    <div class="container">
      <h1>
        Была без радости <span class="yellow">любовь</span>,
        <span class="yellow">разлука</span> будет без печали...
      </h1>
      <div class="error">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/4.svg" alt="" class="error__404" />
        <img src="<?php bloginfo('template_url'); ?>/assets/img/error.png" alt="" />
        <img src="<?php bloginfo('template_url'); ?>/assets/img/4.svg" alt="" class="error__404" />
      </div>
      <div class="form__button">
        <h2>Страница не найдена</h2>
        <?php
        echo '<a href="' . esc_url(home_url('/')) . '" class="button">' . esc_html__('На главную') . '</a>';
        ?>
      </div>
    </div>
  </main>
</body>

</html>