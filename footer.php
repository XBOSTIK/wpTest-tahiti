<?php wp_footer(); ?>

    <footer class="footer">
        <div class="container">
            <div class="row pb-3">
                <div class="col-xs-12 col-md-12 col-xl-3 pb-4 footer__logo">
                    <?= the_custom_logo(); ?>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-xl-2 pb-5 menu-wrapper">
                    <p class="menus-title"><span>Islands</span></p>
                    <?php wp_nav_menu([
                        'theme_location' => 'secondary',
                        'menu' => 'islands',
                        'menu_class' => '',
                        'menu_id' => '',
                    ]); ?>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-xl-2 pb-5 menu-wrapper">
                <p class="menus-title"><span>Packages</span></p>
                    <?php wp_nav_menu([
                        'theme_location' => 'secondary',
                        'menu' => 'packages',
                        'menu_class' => '',
                        'menu_id' => '',
                    ]); ?>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-xl-2 pb-5 menu-wrapper">
                    <p class="menus-title"><span>Tahiti</span></p>
                    <?php wp_nav_menu([
                        'theme_location' => 'secondary',
                        'menu' => 'Tahiti',
                        'menu_class' => '',
                        'menu_id' => '',
                    ]); ?>
                </div>
                <div class="col-xs-12 col-md-12 col-xl-3 footer-social__links">
                    <a href="<?php echo get_field('facebook-link'); ?>"><i class="fa-brands fa-facebook facebook"></i></a>
                    <a href="<?php echo get_field('pinterest-link'); ?>"><i class="fa-brands fa-pinterest pinterest"></i></a>
                    <a href="<?php echo get_field('twitter-link'); ?>"><i class="fa-brands fa-twitter twitter"></i></a>
                    <a href="<?php echo get_field('instagram-link'); ?>"><i class="fa-brands fa-instagram instagram"></i></a>
                    <a href="<?php echo get_field('youtube-link'); ?>"><i class="fa-brands fa-youtube youtube"></i></a>
                </div>
            </div>
        </div>
    </footer>



</body>
</html>