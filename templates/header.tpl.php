<?php
/**
 * @file
 * Display generic site information such as logo, site name, etc.
 *
 * Available variables:
 *
 * - $base_path: The base URL path of the Backdrop installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/basis/templates.
 * - $is_front: TRUE if the current page is the home page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $front_page: The URL of the home page. Use this instead of $base_path when
 *   linking to the home page since it includes the language domain or prefix.
 *
 * - $logo: The path to the logo image, as defined in site configuration.
 * - $site_name: The name of the site, empty when display has been disabled.
 * - $site_slogan: The site slogan, empty when display has been disabled.
 * - $menu: The menu for the header (if any), as an HTML string.
 * - $show_header_menu: True if a header menu should be shown if one exists.
 */
?>

<?php if ($site_name || $site_slogan || $logo): ?>
  <div class="header-identity-wrapper">
    <?php if ($logo): ?>
      <div class="header-site-logo-wrapper">
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="header-site-logo-link" rel="home">
          <img src="<?php print $logo; ?>" alt="<?php print $site_name; ?>" class="header-logo" <?php print backdrop_attributes($logo_attributes); ?>/>
        </a>
      </div>
    <?php endif; ?>
    <?php if ($site_name): ?>
      <div class="header-site-name-wrapper">
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="header-site-name-link" rel="home">
          <h1><?php print $site_name; ?></h1>
        </a>
      </div>
    <?php endif; ?>
    <?php if ($site_slogan): ?>
      <div class="header-site-slogan"><?php print $site_slogan; ?></div>
    <?php endif; ?>
    <?php if ($menu && $show_header_menu): ?>
      <nav class="header-menu">
        <?php print $menu; ?>
      </nav>
    <?php endif; ?>
  </div>
<?php endif; ?>
