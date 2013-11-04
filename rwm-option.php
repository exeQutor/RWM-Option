<?php

/*
Plugin Name: RWM Options
Plugin URI: http://www.realworldmedia.com.au/
Description: Manage your post and theme options with this neat plugin.
Author: Real World Media
Version: 0.1.7
Author URI: http://www.realworldmedia.com.au/
*/

define('RWMo_VERSION', '0.1.7');
define('RWMo_DIR', trailingslashit(plugin_dir_path(__FILE__)));
define('RWMo_URL', trailingslashit(plugin_dir_url(__FILE__)));
define('RWMo_FILE', __FILE__);
define('RWMo_NAME', 'RWM Options');
define('RWMo_SINGULAR', 'RWM Option');
define('RWMo_SLUG', 'rmw_options');
define('RWMo_PREFIX', 'rwmo_');

require_once(RWMo_DIR . 'controllers/meta_box.php'); new RWMo_Meta_Box;
require_once(RWMo_DIR . 'libraries/options-framework/options-framework.php'); // need to remove this some time
require_once(RWMo_DIR . 'api.php');

