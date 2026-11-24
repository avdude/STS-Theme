<?php
/**
 * Title: See it working (screenshots)
 * Slug: sts-theme/screens
 * Categories: sts-theme
 * Description: Screenshots of the plugin's sermon page, library, sermon editor, Sermons screen and phone view, each with a short explanation.
 *
 * @package sts-theme
 */

?>
<!-- wp:group {"anchor":"see-it","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div id="see-it" class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"720px","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"className":"stt-eyebrow on-light"} -->
<p class="stt-eyebrow on-light"><?php esc_html_e( 'See it working', 'sts-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Real screens from the plugin', 'sts-theme' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted"} -->
<p class="has-muted-color has-text-color"><?php esc_html_e( 'What visitors see on your site, and what you see in WordPress. Shown with a sample church.', 'sts-theme' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"verticalAlignment":"center","align":"wide","className":"stt-row","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"},"margin":{"top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center stt-row" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:paragraph {"className":"stt-eyebrow on-light"} -->
<p class="stt-eyebrow on-light"><?php esc_html_e( 'On your site', 'sts-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size"><?php esc_html_e( 'A sermon page that starts at the sermon', 'sts-theme' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted"} -->
<p class="has-muted-color has-text-color"><?php esc_html_e( 'The player opens where the message begins, with the summary, key points that jump to their moment in the recording, and the Scripture list beside it.', 'sts-theme' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"stt-shot"} -->
<figure class="wp-block-image size-full stt-shot"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/screens/sermon-page.jpg' ) ); ?>" alt="<?php esc_attr_e( 'A sermon page with a Start at the sermon button under the video', 'sts-theme' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- wp:columns {"verticalAlignment":"center","align":"wide","className":"stt-row stt-row-flip","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"},"margin":{"top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center stt-row stt-row-flip" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"stt-shot"} -->
<figure class="wp-block-image size-full stt-shot"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/screens/library.jpg' ) ); ?>" alt="<?php esc_attr_e( 'The public sermon library with the newest sermon, search, filters and series', 'sts-theme' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:paragraph {"className":"stt-eyebrow on-light"} -->
<p class="stt-eyebrow on-light"><?php esc_html_e( 'The library', 'sts-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size"><?php esc_html_e( 'A library people can actually search', 'sts-theme' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted"} -->
<p class="has-muted-color has-text-color"><?php esc_html_e( 'The newest sermon up top, search that looks inside every transcript, filters for series, speaker, book and topic, and series cards.', 'sts-theme' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- wp:columns {"verticalAlignment":"center","align":"wide","className":"stt-row","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"},"margin":{"top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center stt-row" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:paragraph {"className":"stt-eyebrow on-light"} -->
<p class="stt-eyebrow on-light"><?php esc_html_e( 'In WordPress', 'sts-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size"><?php esc_html_e( 'Everything on one screen', 'sts-theme' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted"} -->
<p class="has-muted-color has-text-color"><?php esc_html_e( 'The sermon editor holds the summary, key points, Scripture, discussion questions, media, speaker, series and topics, so checking a sermon takes a minute.', 'sts-theme' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"stt-shot"} -->
<figure class="wp-block-image size-full stt-shot"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/screens/editor.jpg' ) ); ?>" alt="<?php esc_attr_e( 'The sermon editor with the summary, key points, Scripture, media, speaker and series', 'sts-theme' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- wp:columns {"verticalAlignment":"center","align":"wide","className":"stt-row stt-row-flip","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"},"margin":{"top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center stt-row stt-row-flip" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"stt-shot"} -->
<figure class="wp-block-image size-full stt-shot"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/screens/sermons.jpg' ) ); ?>" alt="<?php esc_attr_e( 'The Sermons screen listing each sermon with its transcript and summary status', 'sts-theme' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:paragraph {"className":"stt-eyebrow on-light"} -->
<p class="stt-eyebrow on-light"><?php esc_html_e( 'In WordPress', 'sts-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size"><?php esc_html_e( 'See where every sermon stands', 'sts-theme' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted"} -->
<p class="has-muted-color has-text-color"><?php esc_html_e( 'The Sermons screen shows each sermon’s source, transcript and summary status, with search, filters and bulk actions.', 'sts-theme' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- wp:columns {"verticalAlignment":"center","align":"wide","className":"stt-row stt-row-flip","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"},"margin":{"top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center stt-row stt-row-flip" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:column {"verticalAlignment":"center","width":"35%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:35%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"stt-shot stt-shot-phone"} -->
<figure class="wp-block-image size-full stt-shot stt-shot-phone"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/screens/phone.jpg' ) ); ?>" alt="<?php esc_attr_e( 'A sermon page on a phone', 'sts-theme' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"65%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:65%"><!-- wp:paragraph {"className":"stt-eyebrow on-light"} -->
<p class="stt-eyebrow on-light"><?php esc_html_e( 'On a phone', 'sts-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size"><?php esc_html_e( 'Made for the phone in their pocket', 'sts-theme' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted"} -->
<p class="has-muted-color has-text-color"><?php esc_html_e( 'Sermon pages work on phones, with the same Start at the sermon button, summary and transcript.', 'sts-theme' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
