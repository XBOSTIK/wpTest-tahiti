<?php
    add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
    add_action('after_setup_theme', 'theme_name_scripts');

   
    function theme_name_scripts() {
        // Add styles
        wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v6.0.0/css/all.css' );
        wp_enqueue_style( 'bootstrap-grid', get_template_directory_uri(  ) . '/assets/css/bootstrap-grid.min.css' );

        wp_enqueue_style( 'fonts', get_template_directory_uri(  ) . '/assets/css/fonts.css' );

        wp_enqueue_style( 'slick-css', get_template_directory_uri(  ) . '/assets/css/slick.css');

        wp_enqueue_style( 'custom', get_template_directory_uri(  ) . '/assets/css/custom.css' );

        wp_enqueue_style( 'main-style', get_stylesheet_uri(), array('bootstrap-grid', 'fonts', 'slick-css','custom' ) );

        //Add scripts
        wp_enqueue_script('jquery');
        wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.4.min.js', array(), '1.0.0', true );

        wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/assets/js/slick.min.js', array(), '1.0.0', true );

        wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '5.0.0', true );

        wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery', 'slick-js'), '1.0.0', true );



        // logo
        add_theme_support( 'custom-logo', array(
            'height'=> 100,
            'width'=> 400,
            'flex-height'=> true,
            'flex-width'=> true,
        ) ); 
        // Menu
        add_theme_support('menus');
        // register_nav_menu('primary', 'Primary Header Navigation');
        register_nav_menus(
            array(
                'primary' => esc_html__( 'Primary menu', 'tahiti' ),
                'footer'  => esc_html__( 'Secondary menu', 'tahiti' ),
            )
        );
        
    }

    add_theme_support( 'post-thumbnails', 
        array( 'MyPosts', 'page', 'discover-post') 
    );
    function wporg_custom_post_type() {
        register_post_type('discover-post',
            array(
                'labels'=> array(
                    'name'=> __( 'MyPosts', 'textdomain' ),
                    'singular_name'=> __( 'MyPost', 'textdomain' ),
                ),
                'menu_position' => 5,
                'public'=> true,
                'has_archive'=> true,
                'rewrite'=> array( 'slug' => 'posts' ), // my custom slug
                'supports'=> array( 'title', 'editor', 'excerpt', 'post-formats', 'thumbnail','custom-fields', ),
            )
        );
    }
    add_action('init', 'wporg_custom_post_type');
?>