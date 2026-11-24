<?php
/**
 * Title: Footer
 * Slug: sts-theme/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Inserter: no
 *
 * @package sts-theme
 */

$sts_library = function_exists( 'sts_theme_library_url' ) ? sts_theme_library_url() : home_url( '/sermons/' );
?>
<!-- wp:group {"align":"full","className":"stt-footer","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|40"}},"elements":{"link":{"color":{"text":"#D7E2EC"}}}},"backgroundColor":"navy-deep","textColor":"white","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull stt-footer has-white-color has-navy-deep-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"className":"stt-footer-row","layout":{"type":"default"}} -->
<div class="wp-block-group stt-footer-row"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"46%"} -->
<div class="wp-block-column" style="flex-basis:46%"><!-- wp:image {"sizeSlug":"full","linkDestination":"custom","className":"stt-logo"} -->
<figure class="wp-block-image size-full stt-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/logo-horizontal-white.svg' ) ); ?>" alt="<?php esc_attr_e( 'Sermon to Site home', 'sts-theme' ); ?>"/></a></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"color":{"text":"#B9C7D2"}}} -->
<p class="has-text-color" style="color:#B9C7D2"><?php esc_html_e( 'From your service to your website. Automatically.', 'sts-theme' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"textColor":"gold","fontSize":"small"} -->
<h3 class="wp-block-heading has-gold-color has-text-color has-small-font-size"><?php esc_html_e( 'Explore', 'sts-theme' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-default","style":{"spacing":{"padding":{"left":"0"}},"typography":{"lineHeight":"2"}}} -->
<ul style="padding-left:0;line-height:2;list-style:none" class="wp-block-list is-style-default"><!-- wp:list-item -->
<li><a href="<?php echo esc_url( $sts_library ); ?>"><?php esc_html_e( 'Sermon library', 'sts-theme' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/#how-it-works' ) ); ?>"><?php esc_html_e( 'How it works', 'sts-theme' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/#podcast' ) ); ?>"><?php esc_html_e( 'Podcast', 'sts-theme' ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"textColor":"gold","fontSize":"small"} -->
<h3 class="wp-block-heading has-gold-color has-text-color has-small-font-size"><?php esc_html_e( 'The plugin', 'sts-theme' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-default","style":{"spacing":{"padding":{"left":"0"}},"typography":{"lineHeight":"2"}}} -->
<ul style="padding-left:0;line-height:2;list-style:none" class="wp-block-list is-style-default"><!-- wp:list-item -->
<li><a href="https://sermontosite.com">sermontosite.com</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="https://avdude.com"><?php esc_html_e( 'Made by AVDude', 'sts-theme' ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"style":{"color":{"background":"#1E4166"}},"className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:#1E4166;color:#1E4166"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"color":{"text":"#8FA3B8"}},"fontSize":"small"} -->
<p class="has-text-color has-small-font-size" style="color:#8FA3B8">&copy; <?php echo esc_html( wp_date( 'Y' ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?> &middot; <?php esc_html_e( 'Sermon pages built by Sermon to Site', 'sts-theme' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
