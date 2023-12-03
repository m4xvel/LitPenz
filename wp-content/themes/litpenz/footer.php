<footer class="footer">
    <div class="container">
        <nav class="nav">
            <div class="support__service">
                <span class="support__service-text">Служба поддежрки</span>
                <ul class="contacts">
                    <li class="contacts__list">
                        <p class="contacts__link">8 800 555 35 35</a>
                    </li>
                    <li class="contacts__list">
                        <p class="contacts__link">litpenz@gmail.com</a>
                    </li>
                </ul>
            </div>
            <p href="" class="logo">
                <?php the_custom_logo();
                bloginfo('name'); ?>
            </p>
            <div class="social__network">
                <span class="social__network-text">Следите за новостями</span>
                <div class="social__network-container">
                    <a href="https://vk.com/m4xvel" class="social__network-link">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/VK.svg" alt="VK" />
                    </a>
                    <a href="https://t.me/+BuQp9YBhnZJlYTIy" class="social__network-link">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/TG.svg" alt="TG" />
                    </a>
                </div>
            </div>
        </nav>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>