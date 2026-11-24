<?php
/**
 * Title: Series and recent sermons (live plugin blocks)
 * Slug: sts-theme/library
 * Categories: sts-theme
 * Description: The plugin's Sermon series and Sermon library blocks, with a link to the full library.
 *
 * @package sts-theme
 */

$sts_library = function_exists( 'sts_theme_library_url' ) ? sts_theme_library_url() : home_url( '/sermons/' );
?>
<!-- wp:group {"anchor":"library","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div id="library" class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"stt-eyebrow on-light"} -->
<p class="stt-eyebrow on-light"><?php esc_html_e( 'The library', 'sts-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Browse by series', 'sts-theme' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( $sts_library ); ?>"><?php esc_html_e( 'See every sermon', 'sts-theme' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:sermon-to-site/series {"limit":3,"align":"wide"} /-->

<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:sermon-to-site/library {"perPage":6,"showLatest":false,"showSeries":false,"showSubscribe":false,"align":"wide"} /--></div>
<!-- /wp:group -->
