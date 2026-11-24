<?php
/**
 * Title: Podcast (live plugin block)
 * Slug: sts-theme/podcast
 * Categories: sts-theme
 * Description: The plugin's Sermon podcast block on a teal band.
 *
 * @package sts-theme
 */

?>
<!-- wp:group {"anchor":"podcast","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"teal-soft","layout":{"type":"constrained"}} -->
<div id="podcast" class="wp-block-group alignfull has-teal-soft-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:paragraph {"className":"sts-eyebrow on-light","style":{"color":{"background":"#FFFFFF"}}} -->
<p class="sts-eyebrow on-light has-background" style="background-color:#FFFFFF"><?php esc_html_e( 'Podcast', 'sts-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Listen on the way to work', 'sts-theme' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted"} -->
<p class="has-muted-color has-text-color"><?php esc_html_e( 'The podcast feed fills itself as each sermon is published. Subscribe once and every new message arrives on its own.', 'sts-theme' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:sermon-to-site/subscribe /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
