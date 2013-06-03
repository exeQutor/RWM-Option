<?php

/**
 * @package RWM Options
 * @author Randolph
 * @since 0.1.1
 */

class RWMo_Admin_Menu {
    var $default_options;
    
    function __construct() {
        $this->default_options = array(
            'templates' => array(
                'template_name' => '',
                'template_columns' => '4',
                //'template_container' => file_get_contents(RWMo_DIR . 'views/template_container.php'),
                'template_row_open' => '<div class="row inc_row">',
                'template_row_close' => '</div> <!-- row -->',
                //'template_loop' => file_get_contents(RWMo_DIR . 'views/template_loop.php'),
                //'template_style' => file_get_contents(RWMo_DIR . 'views/template_style.php')
        ));
        
        add_action('admin_menu', array($this, 'admin_menu'));
        add_action('admin_init', array($this, 'admin_init'));
    }
    
    function admin_menu() {
        add_menu_page(RWMo_NAME, RWMo_NAME, 'manage_options', RWMo_PREFIX . 'options', array($this, 'dashboard_page'), RWMo_URL . 'assets/img/admin_icon.png');
        add_submenu_page(RWMo_PREFIX . 'options', '', '', 'manage_options', RWMo_PREFIX . 'options', '');
        add_submenu_page(RWMo_PREFIX . 'options', RWMo_NAME . ': Social Profiles', 'Social Profiles', 'manage_options', RWMo_PREFIX . 'social_profiles', array($this, 'social_profile_page'));
        add_submenu_page(RWMo_PREFIX . 'options', RWMo_NAME . ': Company Information', 'Company Information', 'manage_options', RWMo_PREFIX . 'company_information', array($this, 'company_information_page'));
    }
    
    function dashboard_page() {
        echo 'This is the dashboard.';
    }
    
    function social_profile_page() {
        $social_profile_options = array(
            'name' => 'Social Profiles',
            'id' => 'social_profiles',
            'options' => array(
                array(
                    'name' => 'Facebook',
                    'id' => 'social_facebook',
                    'std' => '',
                    'class' => 'regular',
                    'type' => 'text'
                ),
                array(
                    'name' => 'Twitter',
                    'id' => 'social_twitter',
                    'std' => 'https://twitter.com/exeQutor',
                    'type' => 'text'
                ),
            )
        );
        
        
    }
    
    function company_information_page() {
        echo 'Company Information';
    }
    
    function admin_init() {
        register_setting(RWMo_PREFIX . 'options', RWMo_PREFIX . 'options');
    }
    
    function get_options($option_group = 'options')
    {
        $options = get_option(RWMo_PREFIX . $option_group);
        
        if (empty($options))
            $options = $this->default_options[$option_group];
        
        if (count($this->default_options[$option_group]) != count($options))
            return $options + $this->default_options[$option_group];
            
        $data = array();
        foreach ($options as $key => $option)
            $data[$key] = ( ! empty($option)) ? $options[$key] : $this->default_options[$option_group][$key];
        
        return $data;
    }
}

/**
 * @filesource ./controllers/admin_menu.php
 */