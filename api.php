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
        $post_action_text = get_post_meta($post->ID, RWMo_PREFIX . 'post_action_text', true);
        
        // Show Slider
        $post_show_slider = get_post_meta($post->ID, RWMo_PREFIX . 'post_show_slider', true);
        $post_show_slider = ($post_show_slider == 'yes') ? true : false;
        
        // Show Action Button
        /*$post_action_url_show = get_post_meta($post->ID, RWMo_PREFIX . 'post_action_url_show', true);
        $post_action_text_show = get_post_meta($post->ID, RWMo_PREFIX . 'post_action_url_show', true);
        $post_action_button = ($post_action_url_show == 'on' && $post_action_text_show == 'on') ? true : false;*/
        
        $post_meta_options = array(
            'post_heading' => get_post_meta($post->ID, RWMo_PREFIX . 'post_heading', true),
            'post_heading_alignment' => get_post_meta($post->ID, RWMo_PREFIX . 'post_heading_alignment', true),
            'post_tagline' => get_post_meta($post->ID, RWMo_PREFIX . 'post_tagline', true),
            'post_tagline_alignment' => get_post_meta($post->ID, RWMo_PREFIX . 'post_tagline_alignment', true),
            'post_action_url' => $post_action_url,
            'post_action_text' => $post_action_text,
            'show_sidebar' => rwm_show_sidebar(),
            'show_comments' => rwm_show_comments(),
            'show_slider' => $post_show_slider,
            'show_action_button' => $post_action_button
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
        return array(
            rwm_option('font_general'),
            rwm_option('font_heading'),
            rwm_option('font_subheading')
        );
    }
}

/**
 * @since 0.1.3
 */
if ( ! function_exists('rwm_extract_font_family')) {
    function rwm_extract_font_family($font_face) {
        $font_face = str_replace('"', '', $font_face);
        $font_face_bits = explode(',', $font_face);
        return "'{$font_face_bits[0]}',$font_face_bits[1]";
    }
}

/**
 * @since 0.1.3
 */
if ( ! function_exists('rwm_extract_font_link')) {
    function rwm_extract_font_link($font_face) {
        $font_face = str_replace('"', '', $font_face);
        $font_face_bits = explode(',', $font_face);
        return str_replace(' ', '+', $font_face_bits[0]);
    }
}

/**
 * @filesource ./api.php
 */