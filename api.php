<?php

/**
 * @package RWM Options
 * @author Randolph
 * @since 0.1.1
 */

if ( ! function_exists('rwm_option')) {
    function rwm_option($key) {
        global $post;
        
        // Options Framework
        $optionsframework_settings = get_option('optionsframework');
        $option_name = $optionsframework_settings['id'];
        
        if (get_option($option_name)) {
    		$options = get_option($option_name);
    	}
        
        // Post Meta
        $post_action_url = get_post_meta($post->ID, RWMo_PREFIX . 'post_action_url', true);
        $post_action_url = ( ! empty($post_action_url)) ? $post_action_url : get_permalink();
        
        $post_meta_options = array(
            'post_heading' => get_post_meta($post->ID, RWMo_PREFIX . 'post_heading', true),
            'post_heading_alignment' => get_post_meta($post->ID, RWMo_PREFIX . 'post_heading_alignment', true),
            'post_tagline' => get_post_meta($post->ID, RWMo_PREFIX . 'post_tagline', true),
            'post_tagline_alignment' => get_post_meta($post->ID, RWMo_PREFIX . 'post_tagline_alignment', true),
            'post_action_url' => $post_action_url,
            'show_sidebar' => rwm_show_sidebar()
        );
        
        // If option is Post Meta
        if (array_key_exists($key, $post_meta_options)) {
            return $post_meta_options[$key];
            
        // Else, it is Options Framework
        } else {
            if (isset($options[$key])) {
        		return $options[$key];
        	}
        }
    }
}

if ( ! function_exists('rwm_show_sidebar')) {
    function rwm_show_sidebar() {
        global $post;
                
        $show_sidebar = get_post_meta($post->ID, RWMo_PREFIX . 'post_show_sidebar', true);
        $show_sidebar = ( ! empty($show_sidebar)) ? $show_sidebar : 'inherit';
        
        return ($show_sidebar != 'inherit')
                    ? ($show_sidebar == 'show')
                        ? true
                        : false
                    : (of_get_option('blog_show_sidebar'))
                        ? true
                        : false;
    }
}

if ( ! function_exists('rwm_show_comments')) {
    function rwm_show_comments() {
        global $post;
                
        $show_comments = get_post_meta($post->ID, RWMo_PREFIX . 'post_show_comments', true);
        $show_comments = ( ! empty($show_comments)) ? $show_comments : 'inherit';
        
        return ($show_comments != 'inherit')
                    ? ($show_comments == 'show')
                        ? true
                        : false
                    : (of_get_option('blog_show_comments'))
                        ? true
                        : false;
    }
}

/**
 * @since 0.1.2
 */
if ( ! function_exists('rwm_get_fonts')) {
    function rwm_get_fonts() {
        //return rwm_option('font_general');
        
        return array(
            rwm_option('font_general'),
            rwm_option('font_heading'),
            rwm_option('font_subheading')
        );
    }
}

/**
 * @filesource ./api.php
 */