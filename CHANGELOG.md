# Changelog

## [0.4.0] - 2026-11-24

- New: "See it working" section on the home page (pattern `sts-theme/screens`), after the feature cards: the sermon page, public library, sermon editor, Sermons screen and phone view, each with a short explanation. Images are the plugin's WordPress.org screenshots, cropped and compressed (`assets/images/screens/`).
- The By hand page shows the sermon editor under its feature cards.
- The social preview image (`og-image.jpg`) is now the official Sermon to Site banner on navy.

## [0.3.1] - 2026-11-24

- New: description and social preview tags (Open Graph and X/Twitter) on every page, with a 1200×630 brand preview image (`assets/images/og-image.jpg`). Sermons with a featured image use it. Skipped when Yoast, Rank Math, AIOSEO, SEOPress or The SEO Framework is active; Jetpack's own tags are turned off so pages don't get two sets.
- Pages have an Excerpt box, used as the page's description. The By hand and Import pages have built-in descriptions.
- The 512×512 site icon is included (`assets/images/site-icon.png`).

## [0.3.0] - 2026-11-24

- New: Import page. Choose the template "Import (showcase)" on a page at /import/. It covers moving from Sermon Manager (three steps, what comes across, why it's safe, the other plugins it imports from) and every way to add sermons by hand (upload, Media Library, server folder, links, the Audio and video box, transcripts), plus what the plugin fills in for you. The content is also a pattern ("Import page").
- The footer and the By hand page's import card link to /import/.

## [0.2.0] - 2026-11-24

- New: Hands-on features page. Choose the template "Hands-on features (showcase)" on a page at /by-hand/. It shows everything the plugin lets you do by hand: a two-way comparison (on autopilot / by hand), nine feature cards, the privacy and approval controls, and the six blocks and shortcodes. The content is also a pattern ("Hands-on features page") in the Sermon to Site category.
- Header and footer link to /by-hand/.

## [0.1.1] - 2026-11-24

- The theme's class names now start with `stt-`. They shared names with the plugin's own (`sts-hero`, `sts-card`, `sts-icon`, `sts-main`), so the plugin's styles rounded and reshaped the theme's hero, and the theme's card style would have reshaped the plugin's sermon cards.
- The plugin's sermon pages keep the plugin's own spacing (the theme no longer adds padding to them).

## [0.1.0] - 2026-11-23

First version.

- Block theme in the Sermon to Site brand: navy, gold and teal, Montserrat headings, the SermonToSite logo in the header and footer.
- Home page that shows off the plugin: hero with the tagline, the five-step "How it works" pipeline, the plugin's Live service and Latest sermon blocks, six feature cards, the Sermon series and Sermon library blocks, the Sermon podcast block, and a call to action to sermontosite.com.
- Every home page section is a pattern (Sermon to Site category), so it can be rearranged or reused on other pages.
- Header and footer parts that the plugin's own sermon, library and series pages sit inside.
- Without the plugin, its blocks show administrators a note instead of a blank space; visitors see nothing.
- The plugin's blocks use the brand navy while the plugin's Accent color is still its default; a color set in the plugin wins.
- "Wide page" template for pages that hold the full sermon library.
