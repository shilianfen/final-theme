<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package final_theme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<p>Reference</p>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'final-theme' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'final-theme' ), 'WordPress' ); ?></a>
		</div>	
		<div class="site-info2">
			<a href="<?php echo esc_url( __( 'https://cpc-nyc.org/', 'cpc-nyc' ) ); ?>"><?php printf( esc_html__( 'cpc-nyc', 'cpc' ), '' ); ?></a>
			<span class="sep">  </span>
			<?php //printf( esc_html__( 'Theme: %1$s by %2$s.', 'final-theme' ), 'final-theme', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
