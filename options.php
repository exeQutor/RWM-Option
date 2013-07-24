<?php

/**
 * @package RWM Framework
 * @author Randolph
 */

/**
 * @since v010
 */
function optionsframework_options()
{
    $regular_fonts = array(
        'Arial, sans-serif' => 'Arial',
		'"Avant Garde", sans-serif' => 'Avant Garde',
		'Cambria, Georgia, serif' => 'Cambria',
		'Copse, sans-serif' => 'Copse',
		'Garamond, "Hoefler Text", Times New Roman, Times, serif' => 'Garamond',
		'Georgia, serif' => 'Georgia',
		'"Helvetica Neue", Helvetica, sans-serif' => 'Helvetica Neue',
		'Tahoma, Geneva, sans-serif' => 'Tahoma'
    );
    
    $google_fonts = array(
        'Arvo, serif' => 'Arvo',
		'Copse, sans-serif' => 'Copse',
		'Droid Sans, sans-serif' => 'Droid Sans',
		'Droid Serif, serif' => 'Droid Serif',
		'Lobster, cursive' => 'Lobster',
		'Nobile, sans-serif' => 'Nobile',
		'Open Sans, sans-serif' => 'Open Sans',
		'Oswald, sans-serif' => 'Oswald',
		'Pacifico, cursive' => 'Pacifico',
		'Rokkitt, serif' => 'Rokkit',
		'PT Sans, sans-serif' => 'PT Sans',
		'Quattrocento, serif' => 'Quattrocento',
		'Raleway, cursive' => 'Raleway',
		'Ubuntu, sans-serif' => 'Ubuntu',
		'Yanone Kaffeesatz, sans-serif' => 'Yanone Kaffeesatz'
    );
    
    $fonts = array_merge($regular_fonts, $google_fonts);
    asort($fonts);
    
    $admin_email = get_option('admin_email');
    $admin = get_user_by('email', $admin_email);
    $admin_name = ( ! empty($admin->user_firstname) && ! empty($admin->user_lastname)) ? $admin->user_firstname . ' ' . $admin->user_lastname : $admin->user_login;
    
    return array(
        /* Social Profiles */
        array(
            'name' => 'Social',
            'type' => 'heading'
        ),
        array(
            'name' => 'Facebook',
            'id' => 'social_facebook',
            'type' => 'text'
        ),
        array(
            'name' => 'Twitter',
            'id' => 'social_twitter',
            'type' => 'text'
        ),
        array(
            'name' => 'YouTube',
            'id' => 'social_youtube',
            'type' => 'text'
        ),
        array(
            'name' => 'LinkedIn',
            'id' => 'social_linkedin',
            'type' => 'text'
        ),
        array(
            'name' => 'Flickr',
            'id' => 'social_flickr',
            'type' => 'text'
        ),
        array(
            'name' => 'Instagram',
            'id' => 'social_instagram',
            'type' => 'text'
        ),
        
        /* Company Info */
        array(
            'name' => 'Company',
            'type' => 'heading'
        ),
        array(
            'name' => 'Logo',
            'id' => 'company_logo',
            'type' => 'upload'
        ),
        array(
            'name' => 'Company Name',
            'id' => 'company_name',
            'type' => 'text'
        ),
        array(
            'name' => 'About the Company',
            'id' => 'company_about',
            'type' => 'textarea'
        ),
        
        // Oldies, will be removed soon..
        array(
            'name' => 'Info #1 Title',
            'id' => 'company_info_title1',
            'type' => 'text'
        ),
        array(
            'name' => 'Info #1 Text',
            'id' => 'company_info_text1',
            'type' => 'textarea'
        ),
        array(
            'name' => 'Info #2 Title',
            'id' => 'company_info_title2',
            'type' => 'text'
        ),
        array(
            'name' => 'Info #2 Text',
            'id' => 'company_info_text2',
            'type' => 'textarea'
        ),
        
        /* Fonts & Colors */
        array(
            'name' => 'Typography',
            'type' => 'heading'
        ),
        array(
            'name' => 'General',
            'id' => 'font_general',
            'std' => array(
                'size' => '2em',
                'face' => 'georgia',
                'style' => 'bold',
                'color' => '#bada55'
            ),
            'type' => 'typography',
            'options' => array(
                'faces' => $fonts,
                'styles' => false
            )
        ),
        array(
            'name' => 'Heading',
            'id' => 'font_heading',
            'std' => array(
                'size' => '2em',
                'face' => 'georgia',
                'style' => 'bold',
                'color' => '#bada55'
            ),
            'type' => 'typography',
            'options' => array(
                'faces' => $fonts,
                'styles' => false
            )
        ),
        array(
            'name' => 'Subheading',
            'id' => 'font_subheading',
            'std' => array(
                'size' => '2em',
                'face' => 'georgia',
                'style' => 'bold',
                'color' => '#bada55'
            ),
            'type' => 'typography',
            'options' => array(
                'faces' => $fonts,
                'styles' => false
            )
        ),
        
        // Background Colors
        array(
            'name' => 'Main Body Background Color',
            'id' => 'color_bg_main_body',
            'std' => '#eeeeee',
            'type' => 'color'
        ),
        array(
            'name' => 'Background Color Set #1',
            'id' => 'color_bg_set1',
            'std' => '#111111',
            'type' => 'color'
        ),
        array(
            'name' => 'Background Color Set #2',
            'id' => 'color_bg_set2',
            'std' => '#81d742',
            'type' => 'color'
        ),
        array(
            'name' => 'Background Color Set #3',
            'id' => 'color_bg_set3',
            'std' => '#dd9933',
            'type' => 'color'
        ),
        array(
            'name' => 'Background Color Set #4',
            'id' => 'color_bg_set4',
            'std' => '#eeee22',
            'type' => 'color'
        ),        
        
        // Anchor Link Colors Set #1
        array(
            'name' => 'Anchor Link Normal Color Set #1',
            'id' => 'color_link_normal_set1',
            'std' => '#1e73be',
            'type' => 'color'
        ),
        array(
            'name' => 'Anchor Link Visited Color Set #1',
            'id' => 'color_link_visited_set1',
            'std' => '#8224e3',
            'type' => 'color'
        ),
        array(
            'name' => 'Anchor Link Hover Color Set #1',
            'id' => 'color_link_hover_set1',
            'std' => '#1ebfac',
            'type' => 'color'
        ),
        array(
            'name' => 'Anchor Link Active Color Set #1',
            'id' => 'color_link_active_set1',
            'std' => '#dd3333',
            'type' => 'color'
        ),
        
        // Anchor Link Colors Set #2
        array(
            'name' => 'Anchor Link Normal Color Set #2',
            'id' => 'color_link_normal_set2',
            'std' => '#dd8706',
            'type' => 'color'
        ),
        array(
            'name' => 'Anchor Link Visited Color Set #2',
            'id' => 'color_link_visited_set2',
            'std' => '#dd901c',
            'type' => 'color'
        ),
        array(
            'name' => 'Anchor Link Hover Color Set #2',
            'id' => 'color_link_hover_set2',
            'std' => '#dd9933',
            'type' => 'color'
        ),
        array(
            'name' => 'Anchor Link Active Color Set #2',
            'id' => 'color_link_active_set2',
            'std' => '#dda249',
            'type' => 'color'
        ),
        
        /* Blog Manager */
        array(
            'name' => 'Blog',
            'type' => 'heading'
        ),
        array(
            'name' => 'Layout',
            'type' => 'select',
            'id' => 'blog_layout',
            'std' => '1',
            'class' => 'mini',
            'type' => 'select',
            'options' => array(
                '1' => 'Layout 1',
                '2' => 'Layout 2',
                '3' => 'Layout 3'
            )
        ),
        array(
            'name' => 'Show sidebar?',
            'id' => 'blog_show_sidebar',
            'std' => '1',
            'type' => 'checkbox'
        ),
        array(
            'name' => 'Show comments?',
            'id' => 'blog_show_comments',
            'std' => '0',
            'type' => 'checkbox'
        ),
        array(
            'name' => 'Featured image width',
            'id' => 'blog_featured_image_width',
            'std' => '150',
            'class' => 'mini',
            'type' => 'text'
        ),
        array(
            'name' => 'Featured image height',
            'id' => 'blog_featured_image_height',
            'std' => '50',
            'class' => 'mini',
            'type' => 'text'
        ),
        
        /* Contact Page */
        array(
            'name' => 'Contact',
            'type' => 'heading'
        ),
        array(
            'name' => 'Contact Name',
            'id' => 'contact_name',
            'std' => $admin_name,
            'type' => 'text'
        ),
        array(
            'name' => 'Email Address',
            'id' => 'contact_email',
            'std' => $admin->user_email,
            'type' => 'text'
        ),
        array(
            'name' => 'Mailing Address',
            'id' => 'contact_address',
            'type' => 'textarea'
        ),
        array(
            'name' => 'Telephone Number',
            'id' => 'contact_phone',
            'type' => 'text',
            'class' => 'mini'
        ),
        array(
            'name' => 'Fax Number',
            'id' => 'contact_fax',
            'type' => 'text',
            'class' => 'mini'
        ),
        array(
            'name' => 'Mobile Number',
            'id' => 'contact_mobile',
            'type' => 'text',
            'class' => 'mini'
        ),
        
        /* Category & Archive */
        array(
            'name' => 'Category &amp; Archive',
            'type' => 'heading'
        ),
        array(
            'name' => 'Layout',
            'type' => 'select',
            'id' => 'caa_layout',
            'std' => '1',
            'class' => 'mini',
            'type' => 'select',
            'options' => array(
                '1' => 'Layout 1',
                '2' => 'Layout 2',
                '3' => 'Layout 3'
            )
        ),
        array(
            'name' => 'Show comments?',
            'id' => 'caa_has_comments',
            'std' => '1',
            'type' => 'checkbox'
        ),
        array(
            'name' => 'Show sidebar?',
            'id' => 'caa_has_sidebar',
            'std' => '1',
            'type' => 'checkbox'
        ),
        array(
            'name' => 'Featured image width',
            'id' => 'caa_featured_image_width',
            'std' => '150',
            'class' => 'mini',
            'type' => 'text'
        ),
        array(
            'name' => 'Featured image height',
            'id' => 'caa_featured_image_height',
            'std' => '50',
            'class' => 'mini',
            'type' => 'text'
        ),
        
        /* Inclusion */
        array(
            'name' => 'Inclusion',
            'type' => 'heading'
        ),
        array(
            'name' => 'Heading Typography',
            'id' => 'inc_heading_font',
            'std' => array(
                'size' => '2em',
                'face' => 'georgia',
                'style' => 'bold',
                'color' => '#bada55'
            ),
            'type' => 'typography',
            'options' => array(
                'faces' => $fonts,
                'styles' => false
            )
        ),
        array(
            'name' => 'Button Color',
            'id' => 'inc_btn_color',
            'std' => '#0088cc',
            'type' => 'color'
        ),
        array(
            'name' => 'Button Text',
            'id' => 'inc_btn_text',
            'std' => 'Learn More..',
            'class' => 'mini',
            'type' => 'text'
        ),
        array(
            'name' => 'Button Text Color',
            'id' => 'inc_btn_text_color',
            'std' => '#ffffff',
            'type' => 'color'
        )
    );
}

/**
 * @filesource ./options.php
 */