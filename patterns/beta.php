<?php
/**
 * Title: Beta tester sign-up page
 * Slug: sts-theme/beta
 * Categories: sts-theme
 * Description: Get a pre-release copy: a hero, what beta testers get, and the sign-up form.
 *
 * @package sts-theme
 */

?>
<!-- wp:group {"align":"full","className":"stt-hero","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50"}}},"gradient":"night","textColor":"white","layout":{"type":"constrained","contentSize":"820px"}} -->
<div class="wp-block-group alignfull stt-hero has-white-color has-night-gradient-background has-text-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"className":"stt-eyebrow on-dark"} -->
<p class="stt-eyebrow on-dark"><?php esc_html_e( 'Beta testers wanted', 'sts-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"textColor":"white"} -->
<h1 class="wp-block-heading has-white-color has-text-color"><?php echo wp_kses_post( __( 'Get a pre-release copy. <span style="color:#F4B400">Be a beta tester.</span>', 'sts-theme' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#D7E2EC"}},"fontSize":"large"} -->
<p class="has-text-color has-large-font-size" style="color:#D7E2EC"><?php esc_html_e( 'Sermon to Site is almost ready for churches. Sign up today, and we\'ll send you a pre-release copy to try on your own WordPress site before it\'s released.', 'sts-theme' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"signup","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div id="signup" class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"42%"} -->
<div class="wp-block-column" style="flex-basis:42%"><!-- wp:paragraph {"className":"stt-eyebrow on-light"} -->
<p class="stt-eyebrow on-light"><?php esc_html_e( 'What you get', 'sts-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Help shape it before everyone else', 'sts-theme' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"className":"stt-checks"} -->
<ul class="wp-block-list stt-checks"><!-- wp:list-item -->
<li><?php esc_html_e( 'A pre-release copy of the plugin to install on your WordPress site.', 'sts-theme' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'New versions as they\'re ready.', 'sts-theme' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'A say in what comes next: your feedback shapes the plugin.', 'sts-theme' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
<p class="has-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Needs WordPress 6.4 or later and PHP 8.1 or later.', 'sts-theme' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"58%"} -->
<div class="wp-block-column" style="flex-basis:58%"><!-- wp:group {"className":"stt-form-card","layout":{"type":"default"}} -->
<div class="wp-block-group stt-form-card"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'Sign up today', 'sts-theme' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:shortcode -->
[stt_beta_form]
<!-- /wp:shortcode --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
