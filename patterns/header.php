<?php
/**
 * Title: Header
 * Slug: sts-theme/header
 * Categories: header
 * Block Types: core/template-part/header
 * Inserter: no
 *
 * @package sts-theme
 */

$sts_library = function_exists( 'sts_theme_library_url' ) ? sts_theme_library_url() : home_url( '/sermons/' );
?>
<!-- wp:group {"tagName":"div","align":"full","className":"sts-demo-bar","style":{"spacing":{"padding":{"top":"8px","bottom":"8px"}}},"backgroundColor":"gold","textColor":"navy","fontSize":"small","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull sts-demo-bar has-navy-color has-gold-background-color has-text-color has-background has-small-font-size" style="padding-top:8px;padding-bottom:8px"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo wp_kses_post( __( '<strong>Demo site.</strong> Every sermon page here was built by Sermon to Site, with no data entry.', 'sts-theme' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"sts-header","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull sts-header"><!-- wp:group {"className":"sts-bar","style":{"spacing":{"padding":{"top":"14px","bottom":"14px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group sts-bar" style="padding-top:14px;padding-bottom:14px"><!-- wp:image {"sizeSlug":"full","linkDestination":"custom","className":"sts-logo"} -->
<figure class="wp-block-image size-full sts-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/logo-horizontal.svg' ) ); ?>" alt="<?php esc_attr_e( 'Sermon to Site home', 'sts-theme' ); ?>"/></a></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"28px"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:navigation {"overlayMenu":"mobile","layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"blockGap":"26px"}}} -->
<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'How it works', 'sts-theme' ); ?>","url":"<?php echo esc_url( home_url( '/#how-it-works' ) ); ?>","kind":"custom"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Sermons', 'sts-theme' ); ?>","url":"<?php echo esc_url( $sts_library ); ?>","kind":"custom"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Podcast', 'sts-theme' ); ?>","url":"<?php echo esc_url( home_url( '/#podcast' ) ); ?>","kind":"custom"} /-->
<!-- /wp:navigation -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://sermontosite.com"><?php esc_html_e( 'Get Sermon to Site', 'sts-theme' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
