<?php

/*
Plugin Name: RWM Options
Plugin URI: http://www.realworldmedia.com.au/
Description: Manage your post and theme options with this neat plugin.
Author: Real World Media
Version: 0.1.4
Author URI: http://www.realworldmedia.com.au/
*/

/**
 * @package RWM Options
 * @author Randolph
 * @since 0.1.1
 */

define('RWMo_VERSION', '0.1.4');
define('RWMo_DIR', trailingslashit(plugin_dir_path(__FILE__)));
define('RWMo_URL', trailingslashit(plugin_dir_url(__FILE__)));
define('RWMo_FILE', __FILE__);
define('RWMo_NAME', 'RWM Options');
define('RWMo_SINGULAR', 'RWM Option');
define('RWMo_SLUG', 'rmw_options');
define('RWMo_PREFIX', 'rwmo_');

//require_once(RWMo_DIR . 'controllers/main_hook.php'); new RWMo_Main_Hook;
require_once(RWMo_DIR . 'controllers/meta_box.php'); new RWMo_Meta_Box;
//require_once(RWMo_DIR . 'controllers/admin_menu.php'); new RWMo_Admin_Menu;
require_once(RWMo_DIR . 'libraries/options-framework/options-framework.php');
require_once(RWMo_DIR . 'api.php');

/**
 * @filesource ./rwm-option.php
 */