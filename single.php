<?php
/**
 * The Template for displaying all single posts.
 *
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php sombrero_content_nav( 'nav-above' ); ?>

				<?php get_template_part( 'content', 'single' ); ?>

				<?php sombrero_content_nav( 'nav-below' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template( '', true );
				?>

			<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
