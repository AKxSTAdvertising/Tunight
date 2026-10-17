# TUNIGHT WordPress Theme (Migration Build)

This theme is being migrated from the original static TUNIGHT site. It is maintained on the `wordpress-theme-migration` branch and does not modify the original `main` branch.

## Current migrated templates
- Homepage: `front-page.php`
- Menu: `page-menu.php` (requires a WordPress page with slug `menu`)
- Events: `page-events.php` (requires a WordPress page with slug `events`)
- Our Story: `page-our-story.php` (requires a WordPress page with slug `our-story`)

## Important before production activation
1. Install on a staging site first, not on the live site.
2. Create WordPress pages with the slugs above, then set the homepage under **Settings → Reading**.
3. The original HTML references `assets/images/*.jpg`, but those image files were not found at the expected repository root during migration review. Image error handlers hide missing images; add the licensed, correct photos under the theme's `assets/images/` directory before production launch.
4. Gallery, offers, contact, booking, cart and rooftop links are mapped to WordPress URLs but their page templates/content still need to be implemented and tested.
5. Review mobile navigation, all links, and the intro animation on staging before switching themes.

## Build
GitHub Actions validates PHP syntax and creates `tunight-wordpress-theme.zip` as an artifact when the migration branch is updated. Download it from the successful workflow run's **Artifacts** section.
