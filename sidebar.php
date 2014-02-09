<?php
/**
 * The sidebar containing the main widget area.
 *
 * If no active widgets in sidebar, let's hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
 if ( class_exists('xili_language') ) {
 	$options = get_theme_xili_options();
 	$curlang = ( the_curlang() == 'en_us' || the_curlang() == "" ) ? '' : '_'.the_curlang()  ; 

 	if ( $curlang != '' && !isset( $options['sidebar_'.'sidebar-1'] ) ) $curlang = '' ; //display default  - no clone
 
 } else {
 	$curlang = '' ;
 }
?>

	<?php if ( is_active_sidebar( 'sidebar-1' . $curlang ) ) : ?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' . $curlang ); ?>
		</div><!-- #secondary -->
	<?php endif; ?>