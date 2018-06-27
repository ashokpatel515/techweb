<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-info">
	<?php
	if ( function_exists( 'the_privacy_policy_link' ) ) {
		the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
	}
	?>
	© 2018 designed & developed by | <a href="<?php echo esc_url( __( 'https://marvelwebtech.com/', 'twentyseventeen' ) ); ?>" class="imprint">
		<?php printf( __( 'Marvel Webtech' ), 'Marvel Webtech' ); ?>
	</a>
</div><!-- .site-info -->
