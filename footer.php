<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package projectsoul
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<section class="theme-dark">
			<div class="l-container">
				<div class="site-info">
					<p>604.862.7286</p>
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'pivot&pilot' ) ); ?>"><?php
						/* translators: %s: CMS name, i.e. WordPress. */
						printf( esc_html__( 'kim@projectsoul.com' ) );
					?></a>
					<p>2017 © Project Soul</p>
					<?php
						/* translators: 1: Theme name, 2: Theme author. */
						printf( esc_html__( 'Web Design by %2$s.', 'pivot&pilot' ), 'pivot&pilot', '<a href="http://underscores.me/">Pivot & Pilot</a>' );
					?>
				</div><!-- .site-info -->
			</div>
		</section>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
