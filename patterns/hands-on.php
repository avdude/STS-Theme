<?php
/**
 * Title: Hands-on features page
 * Slug: sts-theme/hands-on
 * Categories: sts-theme
 * Description: Everything Sermon to Site lets you do by hand: a hero, a two-way comparison, nine feature cards, privacy controls and the blocks and shortcodes.
 *
 * @package sts-theme
 */

$sts_library = function_exists( 'sts_theme_library_url' ) ? sts_theme_library_url() : home_url( '/sermons/' );
?>
<!-- wp:group {"align":"full","className":"stt-hero","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"gradient":"night","textColor":"white","layout":{"type":"constrained","contentSize":"820px"}} -->
<div class="wp-block-group alignfull stt-hero has-white-color has-night-gradient-background has-text-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"className":"stt-eyebrow on-dark"} -->
<p class="stt-eyebrow on-dark"><?php esc_html_e( 'Hands-on, whenever you want', 'sts-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"textColor":"white"} -->
<h1 class="wp-block-heading has-white-color has-text-color"><?php echo wp_kses_post( __( 'Automatic by default. <span style="color:#F4B400">Yours to steer.</span>', 'sts-theme' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#D7E2EC"}},"fontSize":"large"} -->
<p class="has-text-color has-large-font-size" style="color:#D7E2EC"><?php esc_html_e( 'Sermon to Site does the work on its own, and every step also has a way in by hand. Add a sermon yourself, upload the audio, write the summary, and decide what goes live. Without any AI keys, it still runs your whole sermon library, sermon pages and podcast.', 'sts-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#by-hand"><?php esc_html_e( 'See what you can do', 'sts-theme' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/#how-it-works' ) ); ?>"><?php esc_html_e( 'How the automatic side works', 'sts-theme' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"two-ways","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div id="two-ways" class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"720px","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"className":"stt-eyebrow on-light"} -->
<p class="stt-eyebrow on-light"><?php esc_html_e( 'Every step, two ways', 'sts-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Let it run, or take the wheel', 'sts-theme' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted"} -->
<p class="has-muted-color has-text-color"><?php esc_html_e( 'Mix and match week to week. A sermon you add by hand gets the same page, transcript search and podcast episode as one the plugin found on its own.', 'sts-theme' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:table {"align":"wide","className":"stt-compare"} -->
<figure class="wp-block-table alignwide stt-compare"><table><thead><tr><th><?php esc_html_e( 'Step', 'sts-theme' ); ?></th><th><?php esc_html_e( 'On autopilot', 'sts-theme' ); ?></th><th><?php esc_html_e( 'By hand', 'sts-theme' ); ?></th></tr></thead><tbody><tr><td><strong><?php esc_html_e( 'Find the service', 'sts-theme' ); ?></strong></td><td><?php esc_html_e( 'Checks Facebook, YouTube, Vimeo and podcast feeds every hour', 'sts-theme' ); ?></td><td><?php esc_html_e( 'Upload the file or paste a link yourself, or click Check now', 'sts-theme' ); ?></td></tr><tr><td><strong><?php esc_html_e( 'Fill in the details', 'sts-theme' ); ?></strong></td><td><?php esc_html_e( 'AI writes the summary, key points, scripture and questions', 'sts-theme' ); ?></td><td><?php esc_html_e( 'Choose Enter it myself, or edit what AI wrote; hand edits are never rewritten', 'sts-theme' ); ?></td></tr><tr><td><strong><?php esc_html_e( 'Transcript', 'sts-theme' ); ?></strong></td><td><?php esc_html_e( 'Transcribed in the background with your AssemblyAI key', 'sts-theme' ); ?></td><td><?php esc_html_e( 'Upload captions or a timed transcript, and correct any line', 'sts-theme' ); ?></td></tr><tr><td><strong><?php esc_html_e( 'Publish', 'sts-theme' ); ?></strong></td><td><?php esc_html_e( 'Goes live as soon as it’s ready', 'sts-theme' ); ?></td><td><?php esc_html_e( 'Hold for review, then approve it on the Review screen', 'sts-theme' ); ?></td></tr><tr><td><strong><?php esc_html_e( 'Organize', 'sts-theme' ); ?></strong></td><td><?php esc_html_e( 'AI suggests speakers and series for you to confirm', 'sts-theme' ); ?></td><td><?php esc_html_e( 'Add speakers, series and topics by name', 'sts-theme' ); ?></td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"by-hand","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div id="by-hand" class="wp-block-group alignfull has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"720px","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"className":"stt-eyebrow on-light"} -->
<p class="stt-eyebrow on-light"><?php esc_html_e( 'By hand', 'sts-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'What you can do yourself', 'sts-theme' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"stt-cards stt-cards-3","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide stt-cards stt-cards-3"><!-- wp:group {"className":"stt-card","layout":{"type":"default"}} -->
<div class="wp-block-group stt-card"><!-- wp:paragraph {"className":"stt-icon"} -->
<p class="stt-icon" aria-hidden="true">&#43;</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'Add a sermon yourself', 'sts-theme' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Click Add sermon and choose Enter it myself. Type the title, date, speaker, series and scripture, and add a new speaker or series by name without leaving the editor.', 'sts-theme' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"stt-card","layout":{"type":"default"}} -->
<div class="wp-block-group stt-card"><!-- wp:paragraph {"className":"stt-icon"} -->
<p class="stt-icon" aria-hidden="true">&#8679;</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'Upload the audio or video', 'sts-theme' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Add an MP3 or MP4 from your computer, the Media Library or a folder on your server, or paste a YouTube, Vimeo, Facebook or file link. It joins the sermon for the same service.', 'sts-theme' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"stt-card","layout":{"type":"default"}} -->
<div class="wp-block-group stt-card"><!-- wp:paragraph {"className":"stt-icon"} -->
<p class="stt-icon" aria-hidden="true">&#9998;</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'Edit anything AI wrote', 'sts-theme' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'The summary, key points, scripture and discussion questions sit together on one screen. Anything you change by hand is never rewritten.', 'sts-theme' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"stt-card","layout":{"type":"default"}} -->
<div class="wp-block-group stt-card"><!-- wp:paragraph {"className":"stt-icon"} -->
<p class="stt-icon" aria-hidden="true">&#9776;</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'Bring your own transcript', 'sts-theme' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Upload captions or a transcript (.srt, .vtt, or a .txt with times, such as a TurboScribe export). The times are kept, and you can correct any line.', 'sts-theme' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"stt-card","layout":{"type":"default"}} -->
<div class="wp-block-group stt-card"><!-- wp:paragraph {"className":"stt-icon"} -->
<p class="stt-icon" aria-hidden="true">&#9654;</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'Mark where the sermon starts', 'sts-theme' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Set the Starts and Ends times, so the Start at the sermon button skips the welcome and the songs exactly where you want.', 'sts-theme' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"stt-card","layout":{"type":"default"}} -->
<div class="wp-block-group stt-card"><!-- wp:paragraph {"className":"stt-icon"} -->
<p class="stt-icon" aria-hidden="true">&#10003;</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'Approve before it goes live', 'sts-theme' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Hold new sermons for review instead of publishing right away. The Review screen lists sermons to approve, possible duplicates and AI suggestions, and can email you when one is waiting.', 'sts-theme' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"stt-card","layout":{"type":"default"}} -->
<div class="wp-block-group stt-card"><!-- wp:paragraph {"className":"stt-icon"} -->
<p class="stt-icon" aria-hidden="true">&#8635;</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'Overrule the detection', 'sts-theme' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'The source log shows every video found and why it was or wasn’t imported. Import anyway brings in one that was skipped, and Check now looks for new services on demand.', 'sts-theme' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"stt-card","layout":{"type":"default"}} -->
<div class="wp-block-group stt-card"><!-- wp:paragraph {"className":"stt-icon"} -->
<p class="stt-icon" aria-hidden="true">&#10227;</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'Redo one sermon', 'sts-theme' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Transcribe again or Rewrite summary gives a single sermon a fresh pass, while your hand edits stay put.', 'sts-theme' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"stt-card","layout":{"type":"default"}} -->
<div class="wp-block-group stt-card"><!-- wp:paragraph {"className":"stt-icon"} -->
<p class="stt-icon" aria-hidden="true">&#8634;</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'Import your archive', 'sts-theme' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Bring over Sermon Manager, Mattytap Sermons, Advanced Sermons or Church Content in batches. The originals are never changed, and old sermon links redirect to the new pages.', 'sts-theme' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"control","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"teal-soft","layout":{"type":"constrained"}} -->
<div id="control" class="wp-block-group alignfull has-teal-soft-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"42%"} -->
<div class="wp-block-column" style="flex-basis:42%"><!-- wp:paragraph {"className":"stt-eyebrow on-light","style":{"color":{"background":"#FFFFFF"}}} -->
<p class="stt-eyebrow on-light has-background" style="background-color:#FFFFFF"><?php esc_html_e( 'Your church, your call', 'sts-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'You choose what is sent where', 'sts-theme' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted"} -->
<p class="has-muted-color has-text-color"><?php esc_html_e( 'Transcripts and AI writing use services you connect with your own keys. Leave them out, or switch them off, and the plugin keeps working by hand.', 'sts-theme' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"58%"} -->
<div class="wp-block-column" style="flex-basis:58%"><!-- wp:list {"className":"stt-checks"} -->
<ul class="wp-block-list stt-checks"><!-- wp:list-item -->
<li><?php esc_html_e( 'Nothing goes to a transcript or AI service without a key you add.', 'sts-theme' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Administrators can switch transcripts and AI writing off. When a switch is off, nothing is sent, automatically or by hand.', 'sts-theme' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'New speakers and series are suggested for you to confirm; creating them automatically is a setting you turn on.', 'sts-theme' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'When the same service turns up twice, you are asked before the two are merged.', 'sts-theme' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Scripture links open the passage in a pop-up, with the World English Bible and King James Version built in.', 'sts-theme' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"blocks","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div id="blocks" class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"720px","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"className":"stt-eyebrow on-light"} -->
<p class="stt-eyebrow on-light"><?php esc_html_e( 'Anywhere on your site', 'sts-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Put sermons on any page', 'sts-theme' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted"} -->
<p class="has-muted-color has-text-color"><?php esc_html_e( 'Six blocks, each with a matching shortcode, work in any theme, block or classic. The sermon pages use your theme’s own header and footer.', 'sts-theme' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:list {"align":"wide","className":"stt-codes"} -->
<ul class="wp-block-list alignwide stt-codes"><!-- wp:list-item -->
<li><strong><?php esc_html_e( 'Sermon library', 'sts-theme' ); ?></strong> <code>[sermontosite_library]</code> <span><?php esc_html_e( 'The newest sermon, transcript search, filters, series and the podcast buttons.', 'sts-theme' ); ?></span></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong><?php esc_html_e( 'Latest sermon', 'sts-theme' ); ?></strong> <code>[sermontosite_latest]</code> <span><?php esc_html_e( 'This week’s sermon, or the live service while it streams.', 'sts-theme' ); ?></span></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong><?php esc_html_e( 'Series', 'sts-theme' ); ?></strong> <code>[sermontosite_series]</code> <span><?php esc_html_e( 'Series cards with their artwork.', 'sts-theme' ); ?></span></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong><?php esc_html_e( 'Player', 'sts-theme' ); ?></strong> <code>[sermontosite_player id=&quot;123&quot;]</code> <span><?php esc_html_e( 'One sermon’s player anywhere on the site.', 'sts-theme' ); ?></span></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong><?php esc_html_e( 'Live service', 'sts-theme' ); ?></strong> <code>[sermontosite_live]</code> <span><?php esc_html_e( 'The live stream, or when the next service starts.', 'sts-theme' ); ?></span></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong><?php esc_html_e( 'Podcast', 'sts-theme' ); ?></strong> <code>[sermontosite_subscribe]</code> <span><?php esc_html_e( 'Buttons for podcast apps and the RSS link.', 'sts-theme' ); ?></span></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-buttons alignwide" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( $sts_library ); ?>"><?php esc_html_e( 'See the library in action', 'sts-theme' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
