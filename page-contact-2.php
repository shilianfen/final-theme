<?php
/**
 * The template for displaying all about me page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package final_theme
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->

		<div class="contact-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'final-theme' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->

		<!--<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'final-theme' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	</article><!-- #post-## -->

<?php endwhile; // End of the loop. ?>

<?php rewind_posts(); ?>

<?php

	//$args = array( ‘post_type’ => ‘cpc_item’, ‘posts_per_page’ => 10 );
	$args = array('post_type' => 'cpc_item', 'posts_per_page' => 10);
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
		
		echo    '<button>Call us</button>';
		echo '<div class="plugin-content">';

		for ($i = 0; $i<1; $i++){
			
				the_content();
			echo '</div>';
		}
		  
		// echo    '<button>Call us</button>';
		// 	the_content();
		// echo '</div>';
		
		echo '<p class="ring">Ring!!!</p>';
	endwhile;

?>


<script type="text/javascript">

  jQuery( "button" ).click(function() {
      jQuery( ".plugin-content" ).slideToggle( "slow" );
  });

</script>

	</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>
