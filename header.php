<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>
    <?= wp_head();?>
</head>
<body>
    
    <header class="header">
        <div class="container-md">
            <div class="row">
                <div class="col-2 header__logo">
                    <?= the_custom_logo(); ?>
                </div>

                <!-- Menu Desktop -->
                <?php
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'menu_class' => 'menu-list',
                        'container' => 'div',
                        'container_id' => 'anchors',
                        'container_class' =>"col-10 menu",
                    ) );
                ?>

                <div class="col header__btn">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/menu.svg" class="header__btn-open" alt="open btn">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/close.svg" class="header__btn-close" alt="close btn">
                </div>
            </div>
        </div>
    </header>

 