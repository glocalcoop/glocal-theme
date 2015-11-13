<article id="post-<?php the_ID(); ?>" <?php post_class( 'home-posts standard' ); ?> role="article">

	<header class="article-header">

		<h2 class="post-title"><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h2>

	</header>

	<div class="entry-content">

        <?php if( has_post_thumbnail( ) ) : ?>

            <figure class="post-thumbnail">

                <?php the_post_thumbnail( 'full' ); ?>

            </figure>

        <?php endif; ?>

		<?php the_content(); ?>

	</div>

</article>