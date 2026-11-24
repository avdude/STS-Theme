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
	return '<div class="stt-missing"><strong>' . esc_html__( 'Sermon to Site isn\'t active.', 'sts-theme' ) . '</strong> '
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

add_action( 'after_setup_theme', 'sts_theme_page_excerpts', 11 );
/** Pages get an excerpt box, used as their description in search results and link previews. */
function sts_theme_page_excerpts() {
	add_post_type_support( 'page', 'excerpt' );
}

/** Whether an SEO plugin that writes its own description and social tags is active. */
function sts_theme_seo_plugin_active() {
	return defined( 'WPSEO_VERSION' ) || defined( 'RANK_MATH_VERSION' ) || defined( 'AIOSEO_VERSION' ) || defined( 'SEOPRESS_VERSION' ) || class_exists( 'The_SEO_Framework\Load' );
}

add_filter( 'jetpack_enable_open_graph', 'sts_theme_jetpack_open_graph' );
/**
 * Jetpack's social tags stay off while the theme writes its own, so a page never has two sets.
 *
 * @param bool $enabled Jetpack's choice.
 * @return bool
 */
function sts_theme_jetpack_open_graph( $enabled ) {
	return sts_theme_seo_plugin_active() ? $enabled : false;
}

/**
 * A description no longer than search engines show (about 155 characters):
 * whole sentences while they fit, otherwise cut at a word with "…".
 *
 * @param string $text Text.
 * @param int    $max  Most characters.
 * @return string
 */
function sts_theme_trim_description( $text, $max = 155 ) {
	$text = trim( (string) preg_replace( '/\s+/u', ' ', wp_strip_all_tags( (string) $text ) ) );
	if ( mb_strlen( $text ) <= $max ) {
		return $text;
	}
	$out = '';
	foreach ( (array) preg_split( '/(?<=[.!?])\s+/u', $text ) as $sentence ) {
		$next = trim( $out . ' ' . $sentence );
		if ( mb_strlen( $next ) > $max ) {
			break;
		}
		$out = $next;
	}
	if ( mb_strlen( $out ) >= 50 ) {
		return $out;
	}
	$cut = (string) preg_replace( '/\s+\S*$/u', '', mb_substr( $text, 0, $max - 1 ) );
	return rtrim( $cut, " ,;:-\u{2013}\u{2014}" ) . '…';
}

/**
 * The description for the current page, at most about 155 characters: the
 * page's excerpt or text, a sermon's summary, a description written for a
 * series, speaker or topic (or one made from its name), or the site's.
 *
 * @return string
 */
function sts_theme_description() {
	return sts_theme_trim_description( sts_theme_description_text() );
}

/**
 * The description before trimming.
 *
 * @return string
 */
function sts_theme_description_text() {
	$site = __( 'Sermon to Site turns your church\'s livestream into a finished sermon page on your WordPress site: speaker, series, scripture, summary and transcript.', 'sts-theme' );
	if ( is_front_page() || is_home() ) {
		return $site;
	}
	if ( is_singular() ) {
		$post = get_queried_object();
		if ( $post instanceof WP_Post ) {
			if ( has_excerpt( $post ) ) {
				return get_the_excerpt( $post );
			}
			$templates = array(
				'page-hands-on' => __( 'Everything Sermon to Site lets you do by hand: add sermons, upload audio, edit what AI wrote, bring your own transcript and approve before publishing.', 'sts-theme' ),
				'page-import'   => __( 'Move your Sermon Manager library in one click, or add sermons by hand from recordings, the Media Library, files on your server or links.', 'sts-theme' ),
			);
			$slug = get_page_template_slug( $post );
			if ( isset( $templates[ $slug ] ) ) {
				return $templates[ $slug ];
			}
			$text = wp_strip_all_tags( strip_shortcodes( excerpt_remove_blocks( $post->post_content ) ) );
			if ( '' !== trim( $text ) ) {
				return $text;
			}
		}
	}
	if ( is_post_type_archive( 'sermontosite_sermon' ) ) {
		return __( 'Every sermon in one place: watch or listen, read summaries and transcripts, and search by series, speaker, Bible book or topic.', 'sts-theme' );
	}
	if ( is_tax() || is_category() || is_tag() ) {
		$term = get_queried_object();
		$desc = wp_strip_all_tags( (string) term_description() );
		if ( '' !== trim( $desc ) ) {
			return $desc;
		}
		if ( $term instanceof WP_Term ) {
			$count = (int) $term->count;
			/* translators: %d: number of sermons. */
			$many = sprintf( _n( '%d sermon', '%d sermons', $count, 'sts-theme' ), $count );
			switch ( $term->taxonomy ) {
				case 'sermontosite_series':
					/* translators: 1: series name, 2: "3 sermons". */
					return sprintf( __( 'The %1$s sermon series: %2$s to watch or listen to, with summaries, key points and full transcripts.', 'sts-theme' ), $term->name, $many );
				case 'sermontosite_speaker':
					/* translators: 1: speaker name, 2: "3 sermons". */
					return sprintf( __( 'Sermons by %1$s: %2$s to watch or listen to, with summaries, key points and full transcripts.', 'sts-theme' ), $term->name, $many );
				case 'sermontosite_book':
					/* translators: 1: Bible book, 2: "3 sermons". */
					return sprintf( __( 'Sermons from the book of %1$s: %2$s to watch or listen to, with summaries, key points and full transcripts.', 'sts-theme' ), $term->name, $many );
				case 'sermontosite_topic':
					/* translators: 1: topic, 2: "3 sermons". */
					return sprintf( __( 'Sermons about %1$s: %2$s to watch or listen to, with summaries, key points and full transcripts.', 'sts-theme' ), $term->name, $many );
			}
		}
	}
	if ( is_post_type_archive() || is_archive() ) {
		$desc = wp_strip_all_tags( (string) get_the_archive_description() );
		if ( '' !== trim( $desc ) ) {
			return $desc;
		}
	}
	return $site;
}

add_action( 'wp_head', 'sts_theme_social_tags', 5 );
/** Description and social preview tags (Open Graph and X/Twitter), unless an SEO plugin writes them. */
function sts_theme_social_tags() {
	if ( sts_theme_seo_plugin_active() || is_404() || is_search() ) {
		return;
	}
	$desc  = sts_theme_description();
	$title = wp_get_document_title();
	global $wp;
	$url   = is_singular() ? get_permalink() : user_trailingslashit( home_url( $wp->request ) );
	$image = get_theme_file_uri( 'assets/images/og-image.jpg' );
	$w     = 1200;
	$h     = 630;
	if ( is_singular() && has_post_thumbnail() ) {
		$src = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
		if ( $src ) {
			list( $image, $w, $h ) = $src;
		}
	}
	$tags = array(
		array( 'name', 'description', $desc ),
		array( 'property', 'og:type', is_singular( 'post' ) || is_singular( 'sermontosite_sermon' ) ? 'article' : 'website' ),
		array( 'property', 'og:site_name', get_bloginfo( 'name' ) ),
		array( 'property', 'og:title', $title ),
		array( 'property', 'og:description', $desc ),
		array( 'property', 'og:url', $url ),
		array( 'property', 'og:image', $image ),
		array( 'property', 'og:image:width', (string) $w ),
		array( 'property', 'og:image:height', (string) $h ),
		array( 'name', 'twitter:card', 'summary_large_image' ),
		array( 'name', 'twitter:title', $title ),
		array( 'name', 'twitter:description', $desc ),
		array( 'name', 'twitter:image', $image ),
	);
	foreach ( $tags as $t ) {
		printf( '<meta %s="%s" content="%s" />' . "\n", esc_attr( $t[0] ), esc_attr( $t[1] ), 'og:url' === $t[1] || 'og:image' === $t[1] || 'twitter:image' === $t[1] ? esc_url( $t[2] ) : esc_attr( $t[2] ) );
	}
}
