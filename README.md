# Sermon to Site Showcase (STS-Theme)

A WordPress block theme that showcases the [Sermon to Site](https://sermontosite.com) plugin. See `readme.txt` for setup.

- **Theme slug / text domain:** `sts-theme`
- **Requires:** WordPress 6.6+, PHP 8.1+
- **Release:** push a tag like `v0.1.0`; GitHub Actions builds `sts-theme.0.1.0.zip` and attaches it to a Release. Install it with Appearance → Themes → Add New Theme → Upload Theme.
- **Local zip:** `bash bin/build-zip.sh`

## Layout

| Path | What it is |
|---|---|
| `theme.json` | Brand palette (navy `#0B2D50`, gold `#F4B400`, teal `#008FA8`), type, spacing |
| `style.css` | Header, pipeline, cards, hero and footer styles |
| `functions.php` | Fonts, plugin accent, admin note when the plugin is missing |
| `patterns/` | Header, footer and each home page section |
| `templates/` | Front page, page, wide page, single, archive, search, 404, index |
| `assets/images/` | Logos and mark from the Sermon to Site brand kit |
