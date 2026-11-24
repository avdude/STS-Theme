<?php
/**
 * Sermon to Site Showcase theme.
 *
 * @package sts-theme
 */

defined( 'ABSPATH' ) || exit;

define( 'STS_THEME_VERSION', wp_get_theme( get_template() )->get( 'Version' ) );

/** The brand's accent for the plugin's blocks (navy), used while the plugin still has its default accent. */
const STS_THEME_ACCENT = '#0B2D50';

add_action( 'after_setup_theme', 'sts_theme_setup' );
/** Theme supports. */
function sts_theme_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'style.css' );
}

add_action( 'wp_enqueue_scripts', 'sts_theme_styles', 20 );
/** Fonts, the theme's styles and the plugin's accent. */
function sts_theme_styles() {
	wp_enqueue_style( 'sts-theme-fonts', sts_theme_fonts_url(), array(), null ); // phpcs:ignore WordPress.WP.EnqueuedResourceParameters.MissingVersion -- Google Fonts.
	wp_enqueue_style( 'sts-theme', get_stylesheet_uri(), array(), STS_THEME_VERSION );

	// The plugin's blocks take their color from its "Accent color" setting. While that is still the
	// plugin's default (indigo), use the brand's navy so the demo matches; a color set in the plugin wins.
	if ( wp_style_is( 'sermontosite-front', 'registered' ) && sts_theme_plugin_uses_default_accent() ) {
		wp_add_inline_style( 'sermontosite-front', '.sts{--sts-accent:' . STS_THEME_ACCENT . ';--sts-on-accent:#fff}' );
	}
}

add_action( 'enqueue_block_editor_assets', 'sts_theme_editor_fonts' );
/** Montserrat in the editor too. */
function sts_theme_editor_fonts() {
	wp_enqueue_style( 'sts-theme-fonts', sts_theme_fonts_url(), array(), null ); // phpcs:ignore WordPress.WP.EnqueuedResourceParameters.MissingVersion -- Google Fonts.
}

/** Montserrat from Google Fonts (the brand's typeface). */
function sts_theme_fonts_url() {
	return 'https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&display=swap';
}

/** Whether Sermon to Site's accent color is unset or still its default. */
function sts_theme_plugin_uses_default_accent() {
	if ( ! class_exists( '\SermonToSite\Plugin' ) ) {
		return false;
	}
	try {
		$accent = (string) \SermonToSite\Plugin::instance()->settings->get( 'accent_color' );
	} catch ( \Throwable $e ) {
		return false;
	}
	return '' === $accent || 0 === strcasecmp( $accent, '#4338CA' );
}

/** Whether the Sermon to Site plugin is active. */
function sts_theme_plugin_active() {
	return defined( 'SERMONTOSITE_VERSION' );
}

add_action( 'init', 'sts_theme_pattern_category' );
/** A pattern category for the showcase sections. */
function sts_theme_pattern_category() {
	register_block_pattern_category( 'sts-theme', array( 'label' => __( 'Sermon to Site', 'sts-theme' ) ) );
}

add_filter( 'render_block', 'sts_theme_missing_plugin_note', 10, 2 );
/**
 * Without the plugin, its blocks on the home page would show nothing. Show administrators a note in
 * their place; visitors see nothing.
 *
 * @param string $html  Block output.
 * @param array  $block Block.
 * @return string
 */
function sts_theme_missing_plugin_note( $html, $block ) {
	if ( empty( $block['blockName'] ) || 0 !== strpos( $block['blockName'], 'sermon-to-site/' ) || sts_theme_plugin_active() ) {
		return $html;
	}
	if ( ! current_user_can( 'activate_plugins' ) ) {
		return '';
	}
	return '<div class="sts-missing"><strong>' . esc_html__( 'Sermon to Site isn\'t active.', 'sts-theme' ) . '</strong> '
		. esc_html__( 'Install and activate the plugin to show this section. Only administrators see this note.', 'sts-theme' )
		. ' <a href="' . esc_url( admin_url( 'plugins.php' ) ) . '">' . esc_html__( 'Go to Plugins', 'sts-theme' ) . '</a></div>';
}

/** The library's address: the plugin's sermon archive, or /sermons/. */
function sts_theme_library_url() {
	if ( post_type_exists( 'sermontosite_sermon' ) ) {
		$url = get_post_type_archive_link( 'sermontosite_sermon' );
		if ( $url ) {
			return $url;
		}
	}
	return home_url( '/sermons/' );
}
