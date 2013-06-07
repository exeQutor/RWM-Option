<?php

/**
 * @package RWM Options
 * @author Randolph
 * @since 0.1.0
 */

class RWMo_Meta_Box {
    function __construct() {
        add_action('add_meta_boxes', array($this, 'add_meta_boxes'));
        add_action('save_post', array($this, 'save_post'));
    }
    
    function add_meta_boxes() {
        $screens = array('post', 'page', 'rwmi_post');
        
        foreach ($screens as $screen)
            add_meta_box(RWMo_PREFIX . 'meta_box', RWMo_NAME, array($this, 'callback'), $screen, 'side', 'high');
    }
    
    function callback($post) {
        $text_alignment_array = array(
            'left' => 'Left',
            'center' => 'Center',
            'right' => 'Right'
        );
        
        $show_hide_array = array(
            'inherit' => 'Inherit',
            'show' => 'Show',
            'hide' => 'Hide'
        );
        
        $options = array(
            'heading' => get_post_meta($post->ID, RWMo_PREFIX . 'post_heading', true),
            'heading_alignment' => get_post_meta($post->ID, RWMo_PREFIX . 'post_heading_alignment', true),
            'tagline' => get_post_meta($post->ID, RWMo_PREFIX . 'post_tagline', true),
            'tagline_alignment' => get_post_meta($post->ID, RWMo_PREFIX . 'post_tagline_alignment', true),
            'action_url' => get_post_meta($post->ID, RWMo_PREFIX . 'post_action_url', true),
            'show_sidebar' => get_post_meta($post->ID, RWMo_PREFIX . 'post_show_sidebar', true),
            'show_comments' => get_post_meta($post->ID, RWMo_PREFIX . 'post_show_comments', true)
        );
        
        include RWMo_DIR . 'views/meta_box.php';
    }
    
    function save_post($post_id) {
        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
            return;
        
        if ( ! empty($_POST) && wp_verify_nonce($_POST[RWMo_PREFIX . 'meta_box_action'], RWMo_PREFIX . 'meta_box_nonce'))
            return;
            
        if ($_POST['post_type'] == 'page') {
            if ( ! current_user_can('edit_page', $post_id))
                return;
        } else {
            if ( ! current_user_can('edit_post', $post_id))
                return;
        }
        
        $options = $_POST[RWMo_PREFIX . 'post_options'];
        
        update_post_meta($post_id, RWMo_PREFIX . 'post_heading', $options['heading']);
        update_post_meta($post_id, RWMo_PREFIX . 'post_heading_alignment', $options['heading_alignment']);
        update_post_meta($post_id, RWMo_PREFIX . 'post_tagline', $options['tagline']);
        update_post_meta($post_id, RWMo_PREFIX . 'post_tagline_alignment', $options['tagline_alignment']);
        update_post_meta($post_id, RWMo_PREFIX . 'post_action_url', $options['action_url']);
        update_post_meta($post_id, RWMo_PREFIX . 'post_show_sidebar', $options['show_sidebar']);
        update_post_meta($post_id, RWMo_PREFIX . 'post_show_comments', $options['show_comments']);
    }
}

/**
 * @filesource ./controllers/meta_box.php
 */