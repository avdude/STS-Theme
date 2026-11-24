<?php
/**
 * Beta tester sign-up: the [stt_beta_form] form, saving each sign-up as a
 * private "Beta tester" entry (Beta testers in the admin menu), an email to
 * the site's admin address, and a CSV download.
 *
 * @package sts-theme
 */

defined( 'ABSPATH' ) || exit;

const STT_BETA_TYPE   = 'stt_beta_signup';
const STT_BETA_ACTION = 'stt_beta_signup';

/**
 * The support address: beta sign-up notices go to it, and the thank-you email
 * comes from it. Change it with the sts_theme_support_email filter.
 *
 * @return string
 */
function sts_theme_support_email() {
	$email = (string) apply_filters( 'sts_theme_support_email', 'support@sermontosite.com' );
	return is_email( $email ) ? $email : (string) get_option( 'admin_email' );
}

add_action( 'init', 'stt_beta_register' );
/** The private post type that holds sign-ups. */
function stt_beta_register() {
	register_post_type(
		STT_BETA_TYPE,
		array(
			'labels'          => array(
				'name'          => __( 'Beta testers', 'sts-theme' ),
				'singular_name' => __( 'Beta tester', 'sts-theme' ),
				'menu_name'     => __( 'Beta testers', 'sts-theme' ),
				'all_items'     => __( 'Beta testers', 'sts-theme' ),
				'edit_item'     => __( 'Beta tester', 'sts-theme' ),
				'search_items'  => __( 'Search beta testers', 'sts-theme' ),
				'not_found'     => __( 'No sign-ups yet.', 'sts-theme' ),
			),
			'public'          => false,
			'show_ui'         => true,
			'show_in_menu'    => true,
			'menu_position'   => 26,
			'menu_icon'       => 'dashicons-groups',
			'supports'        => array( 'title' ),
			'capability_type' => 'post',
			'capabilities'    => array( 'create_posts' => 'do_not_allow' ),
			'map_meta_cap'    => true,
			'show_in_rest'    => false,
		)
	);
}

/**
 * The form's fields: key => array( label, type, required, autocomplete ).
 *
 * @return array<string,array{0:string,1:string,2:bool,3:string}>
 */
function stt_beta_fields() {
	return array(
		'name'    => array( __( 'Name', 'sts-theme' ), 'text', true, 'name' ),
		'email'   => array( __( 'Email', 'sts-theme' ), 'email', true, 'email' ),
		'phone'   => array( __( 'Phone', 'sts-theme' ), 'tel', false, 'tel' ),
		'website' => array( __( 'Church or ministry website', 'sts-theme' ), 'url', true, 'url' ),
	);
}

add_shortcode( 'stt_beta_form', 'stt_beta_form' );
/**
 * The sign-up form.
 *
 * @return string
 */
function stt_beta_form() {
	$state  = isset( $_GET['signup'] ) ? sanitize_key( wp_unslash( $_GET['signup'] ) ) : ''; // phpcs:ignore WordPress.Security.NonceVerification.Recommended -- only picks a message.
	$token  = isset( $_GET['st'] ) ? sanitize_key( wp_unslash( $_GET['st'] ) ) : ''; // phpcs:ignore WordPress.Security.NonceVerification.Recommended -- key for refilling the form.
	$values = $token ? get_transient( 'stt_beta_' . $token ) : false;
	$values = is_array( $values ) ? $values : array();
	$errors = isset( $values['_errors'] ) && is_array( $values['_errors'] ) ? $values['_errors'] : array();

	if ( 'thanks' === $state ) {
		return '<div class="stt-form-done" role="status" tabindex="-1" id="stt-beta-done"><strong>' . esc_html__( 'You\'re on the list. Thank you!', 'sts-theme' ) . '</strong><p>' . esc_html__( 'We\'ll email you as soon as the pre-release copy is ready to install.', 'sts-theme' ) . '</p></div>';
	}

	$out = '<form class="stt-form" method="post" action="' . esc_url( admin_url( 'admin-post.php' ) ) . '" novalidate>';
	if ( 'error' === $state && ! $errors ) {
		$errors['_form'] = __( 'Something went wrong. Please try again.', 'sts-theme' );
	}
	if ( $errors ) {
		$out .= '<div class="stt-form-errors" role="alert"><p>' . esc_html__( 'Please check the form:', 'sts-theme' ) . '</p><ul>';
		foreach ( $errors as $msg ) {
			$out .= '<li>' . esc_html( $msg ) . '</li>';
		}
		$out .= '</ul></div>';
	}
	foreach ( stt_beta_fields() as $key => list( $label, $type, $required, $auto ) ) {
		$id   = 'stt-beta-' . $key;
		$bad  = isset( $errors[ $key ] );
		$out .= '<p class="stt-field' . ( $bad ? ' has-error' : '' ) . '"><label for="' . esc_attr( $id ) . '">' . esc_html( $label ) . ( $required ? ' <span class="stt-req" aria-hidden="true">*</span>' : ' <span class="stt-opt">' . esc_html__( '(optional)', 'sts-theme' ) . '</span>' ) . '</label>';
		$out .= '<input id="' . esc_attr( $id ) . '" name="' . esc_attr( $key ) . '" type="' . esc_attr( $type ) . '" autocomplete="' . esc_attr( $auto ) . '" value="' . esc_attr( (string) ( $values[ $key ] ?? '' ) ) . '"' . ( $required ? ' required aria-required="true"' : '' ) . ( $bad ? ' aria-invalid="true"' : '' ) . ( 'url' === $type ? ' placeholder="example.org"' : '' ) . ' /></p>';
	}
	// Spam trap: people never see or fill this field.
	$out    .= '<p class="stt-hp" aria-hidden="true"><label for="stt-beta-company">' . esc_html__( 'Leave this empty', 'sts-theme' ) . '</label><input id="stt-beta-company" name="company" type="text" tabindex="-1" autocomplete="off" value="" /></p>';
	$out    .= '<input type="hidden" name="action" value="' . esc_attr( STT_BETA_ACTION ) . '" />';
	$out    .= '<input type="hidden" name="stt_t" value="' . esc_attr( (string) time() ) . '" />';
	$out    .= '<input type="hidden" name="stt_back" value="' . esc_url( get_permalink() ? get_permalink() : home_url( '/beta/' ) ) . '" />';
	$out    .= wp_nonce_field( STT_BETA_ACTION, '_stt_nonce', false, false );
	$out    .= '<p class="stt-form-submit"><button type="submit" class="wp-element-button">' . esc_html__( 'Sign me up', 'sts-theme' ) . '</button></p>';
	$privacy = get_privacy_policy_url();
	$out    .= '<p class="stt-form-note">' . esc_html__( 'We\'ll only use this to send you the pre-release and news about it.', 'sts-theme' ) . ( $privacy ? ' <a href="' . esc_url( $privacy ) . '">' . esc_html__( 'Privacy policy', 'sts-theme' ) . '</a>' : '' ) . '</p>';
	return $out . '</form>';
}

add_action( 'admin_post_nopriv_' . STT_BETA_ACTION, 'stt_beta_submit' );
add_action( 'admin_post_' . STT_BETA_ACTION, 'stt_beta_submit' );
/** Handles a sign-up. */
function stt_beta_submit() {
	$back = isset( $_POST['stt_back'] ) ? wp_validate_redirect( esc_url_raw( wp_unslash( $_POST['stt_back'] ) ), home_url( '/beta/' ) ) : home_url( '/beta/' );
	$back = remove_query_arg( array( 'signup', 'st' ), $back );

	// Spam: a filled trap, a form sent within 3 seconds, or too many tries from one address.
	$time = isset( $_POST['stt_t'] ) ? (int) $_POST['stt_t'] : 0;
	$ip   = isset( $_SERVER['REMOTE_ADDR'] ) ? sanitize_text_field( wp_unslash( $_SERVER['REMOTE_ADDR'] ) ) : '';
	$rate = 'stt_beta_rate_' . md5( $ip );
	$hits = (int) get_transient( $rate );
	if ( ! empty( $_POST['company'] ) || ( $time && time() - $time < 3 ) || $hits >= 5 ) {
		wp_safe_redirect( add_query_arg( 'signup', 'thanks', $back ) . '#signup' ); // Looks the same to a bot.
		exit;
	}
	set_transient( $rate, $hits + 1, HOUR_IN_SECONDS );

	if ( ! isset( $_POST['_stt_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['_stt_nonce'] ) ), STT_BETA_ACTION ) ) {
		wp_safe_redirect( add_query_arg( 'signup', 'error', $back ) . '#signup' );
		exit;
	}

	$v = array(
		'name'    => isset( $_POST['name'] ) ? sanitize_text_field( wp_unslash( $_POST['name'] ) ) : '',
		'email'   => isset( $_POST['email'] ) ? sanitize_email( wp_unslash( $_POST['email'] ) ) : '',
		'phone'   => isset( $_POST['phone'] ) ? sanitize_text_field( wp_unslash( $_POST['phone'] ) ) : '',
		'website' => isset( $_POST['website'] ) ? trim( sanitize_text_field( wp_unslash( $_POST['website'] ) ) ) : '',
	);
	if ( '' !== $v['website'] && ! preg_match( '#^https?://#i', $v['website'] ) ) {
		$v['website'] = 'https://' . $v['website'];
	}
	$v['website'] = '' !== $v['website'] ? esc_url_raw( $v['website'] ) : '';

	$errors = array();
	if ( '' === $v['name'] || mb_strlen( $v['name'] ) > 120 ) {
		$errors['name'] = __( 'Enter your name.', 'sts-theme' );
	}
	if ( ! is_email( $v['email'] ) ) {
		$errors['email'] = __( 'Enter a valid email address.', 'sts-theme' );
	}
	if ( '' !== $v['phone'] && ! preg_match( '/^[0-9+().\-\s]{7,25}$/', $v['phone'] ) ) {
		$errors['phone'] = __( 'Enter a phone number, or leave it empty.', 'sts-theme' );
	}
	if ( '' === $v['website'] || ! wp_http_validate_url( $v['website'] ) || ! str_contains( (string) wp_parse_url( $v['website'], PHP_URL_HOST ), '.' ) ) {
		$errors['website'] = __( 'Enter your church or ministry website, like example.org.', 'sts-theme' );
	}
	if ( $errors ) {
		$token = strtolower( wp_generate_password( 12, false ) );
		set_transient( 'stt_beta_' . $token, $v + array( '_errors' => $errors ), 15 * MINUTE_IN_SECONDS );
		wp_safe_redirect(
			add_query_arg(
				array(
					'signup' => 'fix',
					'st'     => $token,
				),
				$back
			) . '#signup'
		);
		exit;
	}

	// One entry per email: signing up again updates it.
	$existing = get_posts(
		array(
			'post_type'      => STT_BETA_TYPE,
			'post_status'    => 'private',
			'posts_per_page' => 1,
			'fields'         => 'ids',
			'meta_key'       => '_stt_email', // phpcs:ignore WordPress.DB.SlowDBQuery.slow_db_query_meta_key -- small list.
			'meta_value'     => strtolower( $v['email'] ), // phpcs:ignore WordPress.DB.SlowDBQuery.slow_db_query_meta_value -- small list.
		)
	);
	$id       = wp_insert_post(
		array(
			'ID'          => $existing ? (int) $existing[0] : 0,
			'post_type'   => STT_BETA_TYPE,
			'post_status' => 'private',
			'post_title'  => $v['name'],
		),
		true
	);
	if ( is_wp_error( $id ) || ! $id ) {
		wp_safe_redirect( add_query_arg( 'signup', 'error', $back ) . '#signup' );
		exit;
	}
	update_post_meta( $id, '_stt_email', strtolower( $v['email'] ) );
	update_post_meta( $id, '_stt_phone', $v['phone'] );
	update_post_meta( $id, '_stt_website', $v['website'] );

	$support = sts_theme_support_email();
	$from    = 'From: ' . wp_specialchars_decode( get_bloginfo( 'name' ), ENT_QUOTES ) . ' <' . $support . '>';

	// To the support address: who signed up.
	$body  = __( 'A new beta tester signed up on', 'sts-theme' ) . ' ' . home_url( '/' ) . "\n\n";
	$body .= __( 'Name', 'sts-theme' ) . ': ' . $v['name'] . "\n";
	$body .= __( 'Email', 'sts-theme' ) . ': ' . $v['email'] . "\n";
	$body .= __( 'Phone', 'sts-theme' ) . ': ' . ( '' !== $v['phone'] ? $v['phone'] : '—' ) . "\n";
	$body .= __( 'Website', 'sts-theme' ) . ': ' . $v['website'] . "\n\n";
	$body .= __( 'Everyone who signed up:', 'sts-theme' ) . ' ' . admin_url( 'edit.php?post_type=' . STT_BETA_TYPE );
	wp_mail(
		$support,
		/* translators: %s: name. */
		sprintf( __( 'New beta tester: %s', 'sts-theme' ), $v['name'] ),
		$body,
		array( $from, 'Reply-To: ' . $v['name'] . ' <' . $v['email'] . '>' )
	);

	// To the person, the first time they sign up: a thank-you they can reply to.
	if ( ! $existing ) {
		/* translators: %s: first name or full name. */
		$thanks  = sprintf( __( 'Hi %s,', 'sts-theme' ), $v['name'] ) . "\n\n";
		$thanks .= __( 'Thanks for signing up to be a Sermon to Site beta tester. We\'ll email you a pre-release copy as soon as it\'s ready to install on your WordPress site.', 'sts-theme' ) . "\n\n";
		$thanks .= __( 'Questions in the meantime? Just reply to this email.', 'sts-theme' ) . "\n\n";
		$thanks .= __( 'Sermon to Site', 'sts-theme' ) . "\n" . home_url( '/' ) . "\n";
		wp_mail(
			$v['email'],
			__( 'You\'re on the Sermon to Site beta list', 'sts-theme' ),
			$thanks,
			array( $from, 'Reply-To: ' . $support )
		);
	}

	wp_safe_redirect( add_query_arg( 'signup', 'thanks', $back ) . '#signup' );
	exit;
}

add_filter( 'manage_' . STT_BETA_TYPE . '_posts_columns', 'stt_beta_columns' );
/**
 * Columns on the Beta testers list.
 *
 * @param array<string,string> $cols Columns.
 * @return array<string,string>
 */
function stt_beta_columns( $cols ) {
	return array(
		'cb'          => $cols['cb'] ?? '',
		'title'       => __( 'Name', 'sts-theme' ),
		'stt_email'   => __( 'Email', 'sts-theme' ),
		'stt_phone'   => __( 'Phone', 'sts-theme' ),
		'stt_website' => __( 'Website', 'sts-theme' ),
		'date'        => __( 'Signed up', 'sts-theme' ),
	);
}

add_action( 'manage_' . STT_BETA_TYPE . '_posts_custom_column', 'stt_beta_column', 10, 2 );
/**
 * A column's value.
 *
 * @param string $col     Column.
 * @param int    $post_id Sign-up.
 */
function stt_beta_column( $col, $post_id ) {
	$val = (string) get_post_meta( $post_id, '_' . $col, true );
	if ( 'stt_email' === $col && '' !== $val ) {
		echo '<a href="' . esc_url( 'mailto:' . $val ) . '">' . esc_html( $val ) . '</a>';
	} elseif ( 'stt_website' === $col && '' !== $val ) {
		echo '<a href="' . esc_url( $val ) . '" target="_blank" rel="noopener noreferrer">' . esc_html( (string) wp_parse_url( $val, PHP_URL_HOST ) ) . '</a>';
	} else {
		echo esc_html( '' !== $val ? $val : '—' );
	}
}

add_filter( 'post_row_actions', 'stt_beta_row_actions', 10, 2 );
/**
 * Only "Trash" on each row: sign-ups aren't edited or viewed on the site.
 *
 * @param array<string,string> $actions Actions.
 * @param WP_Post              $post    Post.
 * @return array<string,string>
 */
function stt_beta_row_actions( $actions, $post ) {
	return STT_BETA_TYPE === $post->post_type ? array_intersect_key( $actions, array( 'trash' => 1 ) ) : $actions;
}

add_action( 'manage_posts_extra_tablenav', 'stt_beta_csv_button' );
/**
 * "Download CSV" above the list.
 *
 * @param string $which top or bottom.
 */
function stt_beta_csv_button( $which ) {
	$screen = get_current_screen();
	if ( 'top' !== $which || ! $screen || 'edit-' . STT_BETA_TYPE !== $screen->id ) {
		return;
	}
	$url = wp_nonce_url( admin_url( 'admin-post.php?action=stt_beta_csv' ), 'stt_beta_csv' );
	echo '<div class="alignleft actions"><a class="button" href="' . esc_url( $url ) . '">' . esc_html__( 'Download CSV', 'sts-theme' ) . '</a></div>';
}

add_action( 'admin_post_stt_beta_csv', 'stt_beta_csv' );
/** Every sign-up as a CSV file. */
function stt_beta_csv() {
	if ( ! current_user_can( 'edit_others_posts' ) ) {
		wp_die( esc_html__( 'Sorry, you can\'t download this.', 'sts-theme' ), 403 );
	}
	check_admin_referer( 'stt_beta_csv' );
	$ids = get_posts(
		array(
			'post_type'      => STT_BETA_TYPE,
			'post_status'    => 'private',
			'posts_per_page' => 5000, // phpcs:ignore WordPress.WP.PostsPerPage.posts_per_page_posts_per_page -- an export of every sign-up.
			'fields'         => 'ids',
			'orderby'        => 'date',
			'order'          => 'ASC',
		)
	);
	nocache_headers();
	header( 'Content-Type: text/csv; charset=utf-8' );
	header( 'Content-Disposition: attachment; filename="beta-testers-' . gmdate( 'Y-m-d' ) . '.csv"' );
	$out = fopen( 'php://output', 'w' ); // phpcs:ignore WordPress.WP.AlternativeFunctions.file_system_operations_fopen -- streaming the download.
	fputcsv( $out, array( 'Name', 'Email', 'Phone', 'Website', 'Signed up' ) );
	foreach ( $ids as $id ) {
		$row = array( get_the_title( $id ), get_post_meta( $id, '_stt_email', true ), get_post_meta( $id, '_stt_phone', true ), get_post_meta( $id, '_stt_website', true ), get_the_date( 'Y-m-d H:i', $id ) );
		// A cell starting with = + - @ could run as a formula in a spreadsheet.
		fputcsv( $out, array_map( static fn( $c ) => preg_match( '/^[=+\-@]/', (string) $c ) ? "'" . $c : (string) $c, $row ) );
	}
	fclose( $out ); // phpcs:ignore WordPress.WP.AlternativeFunctions.file_system_operations_fclose -- streaming the download.
	exit;
}
