<?php

/**
 * Functions
 * @package NM_THEME
 */

/**
 * Theme URL
 */
if (!defined('NM_SITE_URL')) {
   define('NM_SITE_URL', esc_url(get_site_url()));
}

if (!defined('NM_DIR_PATH')) {
   define('NM_DIR_PATH', untrailingslashit(get_template_directory()));
}

if (!defined('NM_DIR_URI')) {
   define('NM_DIR_URI', untrailingslashit(get_template_directory_uri()));
}

if (!defined('NM_STYLE_URI')) {
   define('NM_STYLE_URI', untrailingslashit(get_stylesheet_uri()));
}

/**
 * Autoload
 */
require_once NM_DIR_PATH . '/vendor/autoload.php';


/**
 * Theme Bootstrap
 */
nm_theme_get_instance();
function nm_theme_get_instance()
{
   \NM_THEME\Classes\NM_THEME::get_instance();
}

/**
 * Template Functions
 */
require_once NM_DIR_PATH . '/inc/template-functions.php';

/**
 * Template Tags
 */
require_once NM_DIR_PATH . '/inc/template-tags.php';

/**
 * Load Require plugin by TGM
 */
require_once get_template_directory() . '/lib/tgm/class-tgm-plugin-activation.php';
require_once get_template_directory() . '/lib/tgm/config.php';

/**
 * Theme Configuration
 */
if (function_exists('is_plugin_active')) {
   if (!is_plugin_active('redux-framework/redux-framework.php')) {
      return;
   } else {
      require_once get_template_directory() . '/lib/theme/3webet-config.php';
   }
}


/**
 * Meta Box
 */
if (function_exists('is_plugin_active')) {
   if (!is_plugin_active('cmb2/init.php')) {
      return;
   } else {
      require_once NM_DIR_PATH . '/lib/theme/3webet-meta.php';
   }
}
