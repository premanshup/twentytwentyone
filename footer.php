<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */

?>
			</main><!-- #main -->
		</section><!-- #primary -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>

		<div class="site-info">
			<div class="site-name">
				<?php
				$blog_info = get_bloginfo( 'name' );
				if ( ! empty( $blog_info ) ) {
					?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					<?php
				}
				?>
			</div>
			<div class="copyright">
				<?php
				/* translators: 1: Copyright date format, see https://www.php.net/date, 2: Site name */
				printf(
					/* Translators: %1$s: Copyright date. %2$s: Site name. */
					__( '&copy; %1$s %2$s', 'twentytwentyone' ),
					esc_html( date_i18n( _x( 'Y', 'copyright date format', 'twentytwentyone' ) ) ),
					esc_html( get_bloginfo( 'name' ) . '.' )
				);

				/*
				Remove or add spacing?
				if ( function_exists( 'the_privacy_policy_link' ) ) {
					the_privacy_policy_link();
				}
				*/
				?>
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentytwentyone' ) ); ?>"  class="imprint">
				<?php /* translators: %s: WordPress. */ printf( __( 'Proudly powered by %s.', 'twentytwentyone' ), 'WordPress' ); ?>
				</a>
			</div>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
