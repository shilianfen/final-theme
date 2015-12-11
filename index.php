<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package final_theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>


				<div class="ls-post-container">
					<h2><font color="#ff0066"><?php the_title(); ?></font></h2>
					<?php the_content(); ?>
				</div>

			

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php //get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

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
