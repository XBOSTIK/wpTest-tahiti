<?php get_header(); ?>
<main class="main">
    <?php 
        function generate_h4_with_span($string, $tag) {
            $words = explode(' ', $string);
            $first_word = array_shift($words);
            $rest_of_words = implode(' ', $words);
            echo "<$tag><span>$first_word</span> $rest_of_words</$tag>";
        }
    ?>   

    <section class="promo">
            <div class="slider-single">
                <?php 
                    $array = get_field('promo-slider-repeater');
                    if(!have_rows($array)) {
                        foreach($array as $value) { ?>
                            <div class="single-slider" style="background-image: url(<?= $value[slider_image][url]?>)">
                                <div class="single-slider__content">
                                    <?php generate_h4_with_span($value[slider_title], 'h1');?>
                                    <p><?= $value[slider_subtitle]?></p>
                                </div>
                            </div>
                        <?php    
                        }
                    } 
                ?>
            </div>
        </section>

        <section class="discover" id="discover">
            <div class="container">
                <div class="discover__inner">
                    <div class="discover__header">
                        <?php generate_h4_with_span(get_field('posts-main-title'), 'h4');?>
                        <p><?= get_field('posts-main-subtitle') ?></p>
                    </div>

                    <div class="row responsive">
                        <?php
                            $args = array('post_type' => 'discover-post');
                            $the_query = new WP_Query( $args );

                            if ( $the_query->have_posts() ) {
                                
                                while ( $the_query->have_posts() ) {
                                    $the_query->the_post(); ?>
                                    <div class="col-3 post-wrapper">
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="post image">
                                        <div class="post-texts">
                                            <h5><?= the_title();?></h5>
                                            <?= the_content(); ?>
                                        </div>
                                        <a class="post-link" href="<?= the_permalink();?>">
                                            <div>
                                                <?= get_field('button-text'); ?>
                                                <span> <?= get_field('post-price'); ?></span>
                                            </div>
                                            <i class="fa-solid fa-arrow-right-long" style="color: #ffffff;"></i>
                                        </a>
                                    </div>
                                    <?php
                                }
                            } else {
                                echo wpautop( 'Постов для вывода не найдено.' );
                            }
                            wp_reset_postdata();
                        ?>
                    </div>
                </div>
                <div class="explore">
                    <h4><?= get_field('explore-label');?></h4>
                    <form action="" class="explore-form">
                        <select name="" id="explore-select">
                            <option disabled selected>Select an island</option>
                            <?php 
                                if ( $the_query->have_posts() ) {
                                    while ( $the_query->have_posts() ) {
                                        $the_query->the_post(); ?>
                                        <option value="<?= the_title();?>"><?= the_title(); ?></option>
                                    <?php
                                    }
                                }
                                wp_reset_postdata();
                            ?>
                        </select>
                        <button>SEARCH</button>
                    </form>
                </div>
            </div>
        </section>


        <section class="experience" id="experience" style="background-image: url('<?php echo esc_url(get_field('experience-img'))?>')">
            <div class="container experience__inner">
                <div class="experience__header">
                    <?php generate_h4_with_span(get_field('experience-title'), 'h4');?>
                    <p><?= get_field('experience-subtitle');?></p>
                </div> 
                <div class="experience__bottom">
                    <p><?= get_field('experience-desc');?></p>
                    <a href="#about"><?= get_field('btn-text');?></a>
                </div>      
            </div>
        </section>



        <section class="why">
            <div class="container">
                <?php generate_h4_with_span(get_field('why-title'), 'h4');?>
                <div class="row why__content">
                    <?php 
                        $array = get_field('why-repeater');
                        if(!have_rows($array)) {
                            foreach($array as $value) { ?>
                                <div class="col-xs-12 col-md-6 col-lg-4 py-3">
                                    <p><?= $value[why_text]?></p>
                                </div>
                            <?php    
                            }
                        } 
                    ?>
                </div>
            </div>
        </section>

    <section class="book" style="background-image: url('<?php echo esc_url(get_field('book-img'))?>')">
            <div class="container">
                <div class="row book__inner">
                    <div class="col-10 mx-auto book__content">
                        <h4><?= get_field('book-title');?></h4>
                        <p><?= get_field('book-desc');?></p>
                        <a href=""><?= get_field('book-btn-text');?></a>
                    </div>
                </div>
            </div>
    </section>
</main>
<?php get_footer(); ?>
