<?php

/**
 * @package RWM Options
 * @since 0.1.0
 */

class RWMo_Main_Hook {
    function __construct() {
        //add_filter('the_title', array($this, 'the_title'));
    }
    
    function the_title() {
        global $post;
        $heading = get_post_meta($post->ID, RWMo_PREFIX . 'post_heading', true);
        if ( ! empty($heading))
            return $heading;
    }
}

/**
 * @filesource ./controllers/main_hooks.php
 */