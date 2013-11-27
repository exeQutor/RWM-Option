<?php

/**
 * @package RWM Options / Meta Box
 * @author Randolph
 * @since 0.1.3
 */

class RWMo_Meta_Box {
    function __construct() {
        add_action('admin_enqueue_scripts', array($this, 'admin_enqueue_scripts'));
        add_action('add_meta_boxes', array($this, 'add_meta_boxes'));
        add_action('save_post', array($this, 'save_post'));
    }
    
    function admin_enqueue_scripts() {
        wp_enqueue_style('rwm-option', RWMo_URL.'assets/css/admin.css');
        wp_enqueue_script('jquery-ui-tooltip');
        wp_enqueue_script('rwm-option', RWMo_URL.'assets/js/admin.js', array('jquery'), '1.0.0', true);
    }
    
    function add_meta_boxes() {
        $screens = array('post', 'page', 'rwmi_post');
        
        foreach ($screens as $screen)
            add_meta_box(RWMo_PREFIX . 'meta_box', RWMo_NAME, array($this, 'callback'), $screen, 'advanced', 'high');
    }
    
    function callback($post) {
        $text_alignment_array = array(
            'left' => 'Left',
            'center' => 'Center',
            'right' => 'Right'
        );
        
        $post_layout_array = array(
            'type1' => 'Type 1',
            'type2' => 'Type 2'
        );
        
        $show_hide_array = array(
            'inherit' => 'Inherit',
            'show' => 'Show',
            'hide' => 'Hide'
        );
        
        $yes_no_array = array(
            'yes' => 'Yes',
            'no' => 'No'
        );
        
        /**
         * Inclusion Button Style
         * @since 0.1.9
         */
        $btn_style_array = array(
            'inherit' => 'Inherit',
            'square' => 'Square',
            'round' => 'Round',
            'text' => 'Text'
        );
        
        $slider_sets = rwm_slider_groups();
        
        $options = array(
            'heading' => get_post_meta($post->ID, RWMo_PREFIX . 'post_heading', true),
            'heading_alignment' => get_post_meta($post->ID, RWMo_PREFIX . 'post_heading_alignment', true),
            'tagline' => get_post_meta($post->ID, RWMo_PREFIX . 'post_tagline', true),
            'tagline_alignment' => get_post_meta($post->ID, RWMo_PREFIX . 'post_tagline_alignment', true),
            'show_action' => get_post_meta($post->ID, RWMo_PREFIX . 'post_show_action', true),
            'action_url' => get_post_meta($post->ID, RWMo_PREFIX . 'post_action_url', true),
            'action_text' => get_post_meta($post->ID, RWMo_PREFIX . 'post_action_text', true),
            
            /**
             * Inclusion Button Style
             * @since 0.1.9
             */
            'inc_btn_style' => get_post_meta($post->ID, RWMo_PREFIX . 'post_inc_btn_style', true),
            
            'post_layout' => get_post_meta($post->ID, RWMo_PREFIX . 'post_single_layout', true),
            'show_sidebar' => get_post_meta($post->ID, RWMo_PREFIX . 'post_show_sidebar', true),
            'show_comments' => get_post_meta($post->ID, RWMo_PREFIX . 'post_show_comments', true),
            'show_slider' => get_post_meta($post->ID, RWMo_PREFIX . 'post_show_slider', true),
            'slider_set' => get_post_meta($post->ID, RWMo_PREFIX . 'post_slider_set', true)
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
        update_post_meta($post_id, RWMo_PREFIX . 'post_single_layout', $options['post_layout']);
        update_post_meta($post_id, RWMo_PREFIX . 'post_show_action', $options['show_action']);
        update_post_meta($post_id, RWMo_PREFIX . 'post_action_url', $options['action_url']);
        update_post_meta($post_id, RWMo_PREFIX . 'post_action_text', $options['action_text']);
        
        /**
         * Inclusion Button Style
         * @since 0.1.9
         */
        update_post_meta($post_id, RWMo_PREFIX . 'post_inc_btn_style', $options['inc_btn_style']);
        
        update_post_meta($post_id, RWMo_PREFIX . 'post_show_sidebar', $options['show_sidebar']);
        update_post_meta($post_id, RWMo_PREFIX . 'post_show_comments', $options['show_comments']);
        update_post_meta($post_id, RWMo_PREFIX . 'post_show_slider', $options['show_slider']);
        update_post_meta($post_id, RWMo_PREFIX . 'post_slider_set', $options['slider_set']);
    }
}

// ./controllers/meta_box.php