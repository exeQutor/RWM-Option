<?php

/*
Plugin Name: RWM Framework: Metabox Options
Plugin URI: http://www.realworldmedia.com.au/
Description: This is the metabox options addon for RWM Framework.
Author: Real World Media
Version: 0.1.9
Author URI: http://www.realworldmedia.com.au/
*/

define('RWMo_VERSION', '0.1.9');
define('RWMo_DIR', trailingslashit(plugin_dir_path(__FILE__)));
define('RWMo_URL', trailingslashit(plugin_dir_url(__FILE__)));
define('RWMo_FILE', __FILE__);
define('RWMo_NAME', 'RWM Options');
define('RWMo_SINGULAR', 'RWM Option');
define('RWMo_SLUG', 'rmw_options');
define('RWMo_PREFIX', 'rwmo_');

require_once(RWMo_DIR . 'controllers/meta_box.php'); new RWMo_Meta_Box;
