# TUNIGHT WordPress Theme (Migration Build)

This theme is being migrated from the original static TUNIGHT site. It is maintained on the `wordpress-theme-migration` branch; the original `main` branch is kept untouched.

## Migrated page templates
- Homepage: `front-page.php`
- Menu: `page-menu.php` — requires a WordPress page with slug `menu`
- Events: `page-events.php` — requires a WordPress page with slug `events`
- Our Story: `page-our-story.php` — requires a WordPress page with slug `our-story`

## Remaining work before production
1. **Images:** the homepage and three migrated pages reference files under `assets/images/*.jpg`. These restaurant photos were not found in the current repository tree or the older commit checked during migration review. The build now prints a warning for missing referenced images but continues to package a reviewable ZIP. Add the correct, licensed original photos under `tunight-wp-theme/assets/images/`; do not replace them with unrelated Kage artwork.
2. **Other linked routes:** Gallery, Offers, Contact, Booking, Cart and Rooftop have links but no dedicated source HTML pages were found. The generic WordPress page template can display content for these slugs once the pages are created, but their page copy, forms, integrations and design still need to be built and tested.
3. **WordPress setup:** create pages with the slugs `menu`, `events`, and `our-story`; create the remaining route pages after their content is ready; then set the homepage under **Settings → Reading**.
4. **Staging QA:** install the ZIP on a staging site first. Test the intro animation, desktop/mobile navigation, image loading, all CTA links, and forms before considering production activation.

Do not activate this migration build on the live site until the missing assets and remaining page routes have been addressed and staging checks pass.

## Build
GitHub Actions checks PHP syntax, audits referenced restaurant images, and packages `tunight-wordpress-theme.zip` as an artifact on changes to this branch. The image audit is warning-only so reviewers can still download and inspect the theme. Download the ZIP from a successful workflow run's **Artifacts** section.
