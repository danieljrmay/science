<?php
/**
 * @file
 * Preprocess functions and theme function overrides.
 */

/**
 * Prepares variables for header templates.
 *
 * @see header.tpl.php
 */
function science_preprocess_header(&$variables) {
  // Set the theme logo
  $variables['logo'] = backdrop_get_path('theme', 'science') . '/images/logo.webp';

  // Hide the header menu ("My account" and "Log in/out" links) for anonymous
  // users. Admins have to know to navigate to '/user/login'.
  $hide_header_menu = user_is_anonymous() && theme_get_setting('hide_header_menu_for_anonymous', 'science');
  $variables['show_header_menu'] = boolval($variables['menu'] && !$hide_header_menu);

}
