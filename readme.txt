=== Sermon to Site Showcase ===
Contributors: avdude
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 8.1
Stable tag: 0.5.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A block theme that shows off the Sermon to Site plugin, in the Sermon to Site brand.

== Description ==

The home page walks a visitor through what Sermon to Site does, with the plugin's real blocks in place: the live service, this week's sermon, series, recent sermons and the podcast. The plugin's own sermon, library and series pages use the theme's header and footer.

== Setup ==

1. Install and activate Sermon to Site, connect a source and let it bring in a few sermons (or import from Sermon Manager), so the home page has something to show.
2. Install and activate this theme.
3. Settings > Reading: leave "Your homepage displays" on "Your latest posts". The theme's front-page template is used either way.
4. Optional: in Sermon to Site's settings, leave Accent color at its default and the plugin's blocks use the brand navy. Pick any other color and the plugin's color is used.
5. Edit the gold demo bar, menu and button in Appearance > Editor > Patterns > Header. Remove the bar there if you don't want it.
6. Home page sections are patterns in the "Sermon to Site" category. In Appearance > Editor > Templates > Pages: Front Page you can reorder, remove or edit them.
7. For the hands-on features page: Pages > Add New, title "By hand" (address /by-hand/, which the header and footer link to), choose the template "Hands-on features (showcase)" and publish. The page's content comes from the template; leave the editor empty.
8. For the import page: a page titled "Import" (address /import/, which the footer and the By hand page link to) with the template "Import (showcase)"; leave the editor empty.
9. For the beta sign-up page: a page titled "Beta" (address /beta/, which the header button and the call to action link to) with the template "Beta tester sign-up"; leave the editor empty. Sign-ups appear under Beta testers in the admin menu (with Download CSV), and each one is emailed to the site's admin email address.
10. For a page that shows the full library, choose the "Wide page" template and add the Sermon library block.

== Fonts ==

Headings use Montserrat, the brand's typeface, loaded from Google Fonts. Body text uses the visitor's system font.

== Changelog ==

= 0.5.0 =
* New: beta tester sign-up page (template "Beta tester sign-up"): name, email, website (required) and phone (optional). Sign-ups are saved under Beta testers in the admin (with Download CSV) and emailed to the admin address. A spam trap, a time check and a limit per visitor keep bots out.
* The header button ("Be a beta tester") and the call to action ("Get a pre-release copy") open the sign-up page.

= 0.4.2 =
* Descriptions are at most about 155 characters, as search engines show (Bing flagged the home page's as too long). A sermon's description is the first sentences of its summary that fit.
* The sermon library and the series, speaker, Bible book and topic pages have their own descriptions instead of the site's.

= 0.4.1 =
* The home page's library section no longer shows "Recent sermons" twice (the Sermon library block has its own heading).

= 0.4.0 =
* New: "See it working" on the home page: screenshots of the sermon page, library, sermon editor, Sermons screen and a phone, from the plugin's WordPress.org screenshots.
* The By hand page shows the sermon editor.
* The social preview image is now the official Sermon to Site banner.

= 0.3.1 =
* New: a description and social preview tags (Open Graph and X/Twitter) on every page, with a brand preview image, so shared links show a title, summary and picture. Sermons use their own image. Skipped when an SEO plugin (Yoast, Rank Math, AIOSEO, SEOPress, The SEO Framework) is active; Jetpack's tags are turned off so pages don't get two sets.
* Pages have an Excerpt box; what you write there becomes the page's description.
* The site icon image is included (assets/images/site-icon.png).

= 0.3.0 =
* New: Import page (template "Import (showcase)" and pattern): moving from Sermon Manager, and every way to add sermons by hand.
* The footer and the By hand page link to it at /import/.

= 0.2.0 =
* New: Hands-on features page (template "Hands-on features (showcase)" and pattern) showing everything Sermon to Site lets you do by hand.
* Header and footer link to it at /by-hand/.

= 0.1.1 =
* The theme's class names now start with "stt-". They had shared names with the plugin's own (sts-hero, sts-card, sts-icon), so the plugin's styles changed the theme's hero and the theme's card style would have changed the plugin's sermon cards.

= 0.1.0 =
* First version.

== Copyright ==

Sermon to Site Showcase, (C) 2026 AVDude. GPLv2 or later.
The Sermon to Site logo and mark (assets/images) are from the Sermon to Site brand kit.
