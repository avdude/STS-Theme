<?php
/**
 * Title: Import page
 * Slug: sts-theme/import
 * Categories: sts-theme
 * Description: Importing sermons: moving from Sermon Manager (steps, what comes across, what stays safe) and every way to add sermons by hand.
 *
 * @package sts-theme
 */

?>
<!-- wp:group {"align":"full","className":"stt-hero","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"gradient":"night","textColor":"white","layout":{"type":"constrained","contentSize":"820px"}} -->
<div class="wp-block-group alignfull stt-hero has-white-color has-night-gradient-background has-text-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"className":"stt-eyebrow on-dark"} -->
<p class="stt-eyebrow on-dark"><?php esc_html_e( 'Import', 'sts-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"textColor":"white"} -->
<h1 class="wp-block-heading has-white-color has-text-color"><?php echo wp_kses_post( __( 'Bring every sermon <span style="color:#F4B400">you’ve already preached.</span>', 'sts-theme' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#D7E2EC"}},"fontSize":"large"} -->
<p class="has-text-color has-large-font-size" style="color:#D7E2EC"><?php esc_html_e( 'Move a whole Sermon Manager library in one click, or add sermons by hand from the recordings and links you already have. Either way, they land in the same library, with the same sermon pages and podcast.', 'sts-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#sermon-manager"><?php esc_html_e( 'Moving from Sermon Manager', 'sts-theme' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#add-by-hand"><?php esc_html_e( 'Adding sermons by hand', 'sts-theme' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"sermon-manager","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div id="sermon-manager" class="wp-block-group alignfull has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"720px","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"className":"stt-eyebrow on-light"} -->
<p class="stt-eyebrow on-light"><?php esc_html_e( 'Moving from Sermon Manager', 'sts-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Your whole library, in one click', 'sts-theme' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted"} -->
<p class="has-muted-color has-text-color"><?php esc_html_e( 'Sermon Manager was closed on WordPress.org in December 2025 for unpatched security issues. Sermon to Site reads its sermons right where they are, so moving doesn’t mean a weekend of copying and pasting.', 'sts-theme' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:list {"align":"wide","className":"stt-pipeline stt-steps-3"} -->
<ul class="wp-block-list alignwide stt-pipeline stt-steps-3"><!-- wp:list-item -->
<li><strong><?php esc_html_e( 'Open Import', 'sts-theme' ); ?></strong><?php esc_html_e( 'Go to Sermons → Import, or step 3 of Setup.', 'sts-theme' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong><?php esc_html_e( 'Choose Sermon Manager', 'sts-theme' ); ?></strong><?php esc_html_e( 'Click Import. Nothing needs to be exported or uploaded first.', 'sts-theme' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong><?php esc_html_e( 'Watch it come across', 'sts-theme' ); ?></strong><?php esc_html_e( 'Sermons arrive in small batches with a progress bar, so even a large library imports on ordinary hosting.', 'sts-theme' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading {"level":3,"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
<h3 class="wp-block-heading alignwide" style="margin-top:var(--wp--preset--spacing--50)"><?php esc_html_e( 'What comes across', 'sts-theme' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:list {"align":"wide","className":"stt-checks stt-checks-2"} -->
<ul class="wp-block-list alignwide stt-checks stt-checks-2"><!-- wp:list-item -->
<li><?php esc_html_e( 'Each sermon’s title, address, date, description and page content, with its published, draft or scheduled status.', 'sts-theme' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Preachers become speakers, and series, topics, Bible books and service types come across with their images.', 'sts-theme' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Audio: the uploaded MP3, or the audio link when there was no upload.', 'sts-theme' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Video: the link or embed code. YouTube and Vimeo embeds become their video’s page, so the player works.', 'sts-theme' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Bible passages become the sermon’s Scripture list, ready for the verse pop-ups.', 'sts-theme' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Duration, featured image, notes and bulletin files.', 'sts-theme' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading {"level":3,"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
<h3 class="wp-block-heading alignwide" style="margin-top:var(--wp--preset--spacing--50)"><?php esc_html_e( 'Nothing to lose', 'sts-theme' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"align":"wide","className":"stt-cards stt-cards-3","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide stt-cards stt-cards-3"><!-- wp:group {"className":"stt-card","layout":{"type":"default"}} -->
<div class="wp-block-group stt-card"><!-- wp:paragraph {"className":"stt-icon"} -->
<p class="stt-icon" aria-hidden="true">&#10003;</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'Your originals stay put', 'sts-theme' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Sermon Manager’s sermons are never changed or deleted. Keep it installed and compare the two side by side until you’re happy.', 'sts-theme' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"stt-card","layout":{"type":"default"}} -->
<div class="wp-block-group stt-card"><!-- wp:paragraph {"className":"stt-icon"} -->
<p class="stt-icon" aria-hidden="true">&#8635;</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'Safe to run again', 'sts-theme' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Running the import again skips sermons already brought over, so a second pass only picks up what’s new.', 'sts-theme' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"stt-card","layout":{"type":"default"}} -->
<div class="wp-block-group stt-card"><!-- wp:paragraph {"className":"stt-icon"} -->
<p class="stt-icon" aria-hidden="true">&#8618;</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'Old links keep working', 'sts-theme' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'When you switch Sermon Manager off, links to its sermon pages redirect (301) to the same sermons, so links in emails, posts and search results still land.', 'sts-theme' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"wide","className":"stt-chips","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<p class="alignwide stt-chips" style="margin-top:var(--wp--preset--spacing--40)"><strong><?php esc_html_e( 'Also imports from', 'sts-theme' ); ?></strong> <span>Mattytap Sermons</span> <span>Advanced Sermons</span> <span>Church Content</span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"wide","className":"stt-note"} -->
<p class="alignwide stt-note"><?php esc_html_e( 'Imported sermons start without a transcript or summary. Start them from the Transcripts screen when you’re ready, or upload caption files you already have.', 'sts-theme' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"add-by-hand","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div id="add-by-hand" class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"720px","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"className":"stt-eyebrow on-light"} -->
<p class="stt-eyebrow on-light"><?php esc_html_e( 'By hand', 'sts-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Add sermons from what you already have', 'sts-theme' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted"} -->
<p class="has-muted-color has-text-color"><?php esc_html_e( 'No livestream, or a box of old recordings? Bring sermons in by hand from the Import screen, or from step 3 of Setup.', 'sts-theme' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"stt-cards stt-cards-3","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide stt-cards stt-cards-3"><!-- wp:group {"className":"stt-card","layout":{"type":"default"}} -->
<div class="wp-block-group stt-card"><!-- wp:paragraph {"className":"stt-icon"} -->
<p class="stt-icon" aria-hidden="true">&#8679;</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'Upload files', 'sts-theme' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Drop in MP3 or MP4 recordings from your computer. Each file becomes a sermon, or joins the one for the same service.', 'sts-theme' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"stt-card","layout":{"type":"default"}} -->
<div class="wp-block-group stt-card"><!-- wp:paragraph {"className":"stt-icon"} -->
<p class="stt-icon" aria-hidden="true">&#9638;</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'From the Media Library', 'sts-theme' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Already uploaded your recordings to WordPress? Choose them from the Media Library.', 'sts-theme' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"stt-card","layout":{"type":"default"}} -->
<div class="wp-block-group stt-card"><!-- wp:paragraph {"className":"stt-icon"} -->
<p class="stt-icon" aria-hidden="true">&#9707;</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'Files already on your server', 'sts-theme' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Pick from a checklist which audio and video files in a folder, such as your uploads folder, become sermons. Files a sermon already uses are skipped.', 'sts-theme' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"stt-card","layout":{"type":"default"}} -->
<div class="wp-block-group stt-card"><!-- wp:paragraph {"className":"stt-icon"} -->
<p class="stt-icon" aria-hidden="true">&#8734;</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'From a link', 'sts-theme' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Paste YouTube, Vimeo or Facebook links, or links to audio and video files, one per line. Other video sites WordPress can embed work too.', 'sts-theme' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"stt-card","layout":{"type":"default"}} -->
<div class="wp-block-group stt-card"><!-- wp:paragraph {"className":"stt-icon"} -->
<p class="stt-icon" aria-hidden="true">&#9835;</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'On any sermon', 'sts-theme' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'The Audio and video box on a sermon takes an MP3 from the Media Library or any audio or video link, to add what’s missing.', 'sts-theme' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"stt-card","layout":{"type":"default"}} -->
<div class="wp-block-group stt-card"><!-- wp:paragraph {"className":"stt-icon"} -->
<p class="stt-icon" aria-hidden="true">&#9776;</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'Your own transcripts', 'sts-theme' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Upload captions or a transcript (.srt, .vtt, or a .txt with times, such as a TurboScribe export), and the summary is written from it.', 'sts-theme' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"details","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"teal-soft","layout":{"type":"constrained"}} -->
<div id="details" class="wp-block-group alignfull has-teal-soft-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:paragraph {"className":"stt-eyebrow on-light","style":{"color":{"background":"#FFFFFF"}}} -->
<p class="stt-eyebrow on-light has-background" style="background-color:#FFFFFF"><?php esc_html_e( 'Less typing', 'sts-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'It fills in what it can', 'sts-theme' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted"} -->
<p class="has-muted-color has-text-color"><?php esc_html_e( 'Adding by hand doesn’t mean typing everything. Sermon to Site reads what it can from each file and link, and you check the rest.', 'sts-theme' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:list {"className":"stt-checks"} -->
<ul class="wp-block-list stt-checks"><!-- wp:list-item -->
<li><?php esc_html_e( 'Titles come from the recording’s title tag or its file name, with the date taken off the end.', 'sts-theme' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Dates come from the file name or title, written almost any way: 04262026, 2026-04-26, Christmas Eve 2025.', 'sts-theme' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'The recording’s artist is matched to a speaker you already have.', 'sts-theme' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'A recording from the same service joins that sermon instead of making a second one, and it asks when it isn’t sure.', 'sts-theme' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Running it again is safe: files and links already in a sermon are skipped.', 'sts-theme' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'With your keys added, the transcript and summary start by themselves.', 'sts-theme' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Video files get an audio copy made from their sound, so they join the podcast, with no ffmpeg needed.', 'sts-theme' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
