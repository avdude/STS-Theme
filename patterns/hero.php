<?php
/**
 * Title: Showcase hero
 * Slug: sts-theme/hero
 * Categories: sts-theme, banner
 * Description: The tagline, two buttons and the brand mark on navy.
 *
 * @package sts-theme
 */

$sts_library = function_exists( 'sts_theme_library_url' ) ? sts_theme_library_url() : home_url( '/sermons/' );
?>
<!-- wp:group {"align":"full","className":"sts-hero","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"gradient":"night","textColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull sts-hero has-white-color has-night-gradient-background has-text-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"58%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:58%"><!-- wp:paragraph {"className":"sts-eyebrow on-dark"} -->
<p class="sts-eyebrow on-dark"><?php esc_html_e( 'Zero data entry', 'sts-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"textColor":"white"} -->
<h1 class="wp-block-heading has-white-color has-text-color"><?php echo wp_kses_post( __( 'From your service to your website. <span style="color:#F4B400">Automatically.</span>', 'sts-theme' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#D7E2EC"}},"fontSize":"large"} -->
<p class="has-text-color has-large-font-size" style="color:#D7E2EC"><?php esc_html_e( 'Stream on Sunday like you always do. Sermon to Site finds the service, saves it, and fills in the speaker, series, scripture, summary and transcript, so your sermon page is finished before lunch.', 'sts-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#latest"><?php esc_html_e( 'Watch this week’s sermon', 'sts-theme' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( $sts_library ); ?>"><?php esc_html_e( 'Browse the library', 'sts-theme' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"42%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:42%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sts-hero-art"} -->
<figure class="wp-block-image size-full sts-hero-art"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/symbol-on-dark.svg' ) ); ?>" alt="<?php esc_attr_e( 'A sound wave becomes a web page', 'sts-theme' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
