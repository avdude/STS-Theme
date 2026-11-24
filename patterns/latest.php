<?php
/**
 * Title: This week's sermon (live plugin blocks)
 * Slug: sts-theme/latest
 * Categories: sts-theme
 * Description: The plugin's Live service and Latest sermon blocks in a framed section.
 *
 * @package sts-theme
 */

?>
<!-- wp:group {"anchor":"latest","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div id="latest" class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"720px","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"className":"stt-eyebrow on-light"} -->
<p class="stt-eyebrow on-light"><?php esc_html_e( 'Built by itself', 'sts-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'This week’s sermon', 'sts-theme' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted"} -->
<p class="has-muted-color has-text-color"><?php echo wp_kses_post( __( 'Nobody typed this in. The video, title, speaker and scripture below came straight from the stream, with details marked <span class="stt-ai">Filled in by AI</span> in the admin so they can be checked.', 'sts-theme' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:sermon-to-site/live {"align":"wide"} /-->

<!-- wp:group {"align":"wide","className":"stt-live-frame","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide stt-live-frame"><!-- wp:sermon-to-site/latest /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
