<?php
/**
 * Title: Call to action
 * Slug: sts-theme/cta
 * Categories: sts-theme, call-to-action
 * Description: A navy band that sends visitors to sermontosite.com.
 *
 * @package sts-theme
 */

?>
<!-- wp:group {"align":"full","className":"sts-hero","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"gradient":"night","textColor":"white","layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group alignfull sts-hero has-white-color has-night-gradient-background has-text-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"textAlign":"center","textColor":"white"} -->
<h2 class="wp-block-heading has-text-align-center has-white-color has-text-color"><?php esc_html_e( 'Let Sunday’s service build the page.', 'sts-theme' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#D7E2EC"}},"fontSize":"large"} -->
<p class="has-text-align-center has-text-color has-large-font-size" style="color:#D7E2EC"><?php esc_html_e( 'Sermon to Site is a WordPress plugin. Connect your stream once, and your sermon archive keeps itself up to date.', 'sts-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://sermontosite.com"><?php esc_html_e( 'Get Sermon to Site', 'sts-theme' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
