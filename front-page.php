
<?php get_header(); ?>

<div class="content">

    <div class="wrap">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <section class="home-start">
            
                <?php
                $content = get_the_content();
                if( !empty( $content ) ) : ?>

                    <?php if( is_page('Home') ) : ?>

                        <?php get_template_part( 'partials/content', 'home' ); ?>

                    <?php else : ?>

                        <?php get_template_part( 'partials/loop', 'home' ); ?>

                    <?php endif; ?>
        
                <?php endif; ?>

            </section>

            <?php wp_reset_postdata(); ?>

        <?php endwhile; endif; ?>

        <section class="home-modules">
            <?php // Widgets

            dynamic_sidebar( 'home-modules' ); ?>

            <?php ?>
        </section>

    </div>

</div>

<?php get_footer(); ?>
