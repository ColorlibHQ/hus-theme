<?php 
/**
 * @Packge     : Hus
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer section fields
 *
 */

/***********************************
 * General Section Fields
 ***********************************/

 // Theme color field
// Epsilon_Customizer::add_field(
//     'hus_theme_color',
//     array(
//         'type'        => 'epsilon-color-picker',
//         'label'       => esc_html__( 'Theme Color', 'hus' ),
//         'description' => esc_html__( 'Select the theme color.', 'hus' ),
//         'sanitize_callback' => 'sanitize_text_field',
//         'section'     => 'hus_general_section',
//         'default'     => '#131313',
//     )
// );

// Header button label
Epsilon_Customizer::add_field(
    'hus_header_top_btn_text',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Top Button Text', 'hus' ),
        'section'     => 'hus_header_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => esc_html__( 'Login', 'hus' ),
    )
);

// Header button url
Epsilon_Customizer::add_field(
    'hus_header_top_btn_url',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Top Button URL', 'hus' ),
        'section'     => 'hus_header_section',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

// Header phone number
Epsilon_Customizer::add_field(
    'hus_header_phone_number',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Top Phone Number', 'hus' ),
        'section'     => 'hus_header_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => esc_html__( 'Call us +001 325 589', 'hus' ),
    )
);

// Header color sections
Epsilon_Customizer::add_field(
    'header_color_section',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Header Color Section', 'hus' ),
        'section'     => 'hus_header_section',

    )
);
 
// Header background color field
Epsilon_Customizer::add_field(
    'hus_header_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Sticky Header BG Color', 'hus' ),
        'description' => esc_html__( 'Select the header background color.', 'hus' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'hus_header_section',
        'default'     => '#ffffff',
    )
);

// Header nav menu color field
Epsilon_Customizer::add_field(
    'hus_header_menu_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header menu color', 'hus' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'hus_header_section',
        'default'     => '#131313',
    )
);

// Header nav menu hover color field
Epsilon_Customizer::add_field(
    'hus_header_menu_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header menu hover color', 'hus' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'hus_header_section',
        'default'     => '#808080',
    )
);

// Dropdown menu color field
Epsilon_Customizer::add_field(
    'hus_dropdown_menu_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Dropdown menu color', 'hus' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'hus_header_section',
        'default'     => '#131313',
    )
);

// Dropdown menu hover color field
Epsilon_Customizer::add_field(
    'hus_dropdown_menu_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Dropdown menu hover color', 'hus' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'hus_header_section',
        'default'     => '#808080',
    )
);


// Social Profile section
Epsilon_Customizer::add_field(
    'footer_social_profile_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Social Profile Section', 'hus' ),
        'section'     => 'hus_social_section',

    )
);

// Social Profiles Show/Hide
Epsilon_Customizer::add_field(
    'hus_social_profile_toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Social Profile Show/Hide', 'hus' ),
        'section'     => 'hus_social_section',
        'default'     => true,
    )
);

// Footer Social Profile links
Epsilon_Customizer::add_field(
	'hus_social_profiles',
	array(
		'type'         => 'epsilon-repeater',
		'section'      => 'hus_social_section',
		'label'        => esc_html__( 'Social Profile Links', 'hus' ),
        'button_label' => esc_html__( 'Add new social link', 'hus' ),
		'row_label'    => array(
			'type'  => 'field',
			'field' => 'social_link_title',
		),
		'default'      => [
            [
                'social_link_title' => esc_html__( 'Facebook', 'hus' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-facebook',
            ],
            [
                'social_link_title' => esc_html__( 'Google Plus', 'hus' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-google-plus',
            ],
            [
                'social_link_title' => esc_html__( 'Twitter', 'hus' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-twitter',
            ],
            [
                'social_link_title' => esc_html__( 'Instagram', 'hus' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-instagram',
            ],
        ],
		'fields'       => array(
			'social_link_title'       => array(
				'label'             => esc_html__( 'Title', 'hus' ),
				'type'              => 'text',
				'sanitize_callback' => 'wp_kses_post',
				'default'           => 'Facebook',
			),
			'social_url' => array(
				'label'             => esc_html__( 'Social URL', 'hus' ),
				'type'              => 'text',
				'sanitize_callback' => 'sanitize_text_field',
				'default'           => '#',
			),
			'social_icon'        => array(
				'label'   => esc_html__( 'Icon', 'hus' ),
				'type'    => 'epsilon-icon-picker',
				'default' => 'fa fa-facebook',
			),
			
		),
	)
);

/***********************************
 * Blog Section Fields
 ***********************************/
 
// Post excerpt length field
Epsilon_Customizer::add_field(
    'hus_excerpt_length',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Set post excerpt length', 'hus' ),
        'description' => esc_html__( 'Set post excerpt length.', 'hus' ),
        'section'     => 'hus_blog_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => '30',
    )
);

// Blog single page social share icon
Epsilon_Customizer::add_field(
    'hus_blog_meta',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog page post meta show/hide', 'hus' ),
        'section'     => 'hus_blog_section',
        'default'     => true
    )
);
Epsilon_Customizer::add_field(
    'hus_like_btn',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Single Page Like Button show/hide', 'hus' ),
        'section'     => 'hus_blog_section',
        'default'     => true
    )
);
Epsilon_Customizer::add_field(
    'hus_blog_share',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Single Page Share show/hide', 'hus' ),
        'section'     => 'hus_blog_section',
        'default'     => true
    )
);
 

/***********************************
 * Footer Section Fields
 ***********************************/

// Footer Widget section
Epsilon_Customizer::add_field(
    'footer_widget_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Widget Section', 'hus' ),
        'section'     => 'hus_footer_section',

    )
);

// Footer widget toggle field
Epsilon_Customizer::add_field(
    'hus_footer_widget_toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Footer widget show/hide', 'hus' ),
        'description' => esc_html__( 'Toggle to display footer widgets.', 'hus' ),
        'section'     => 'hus_footer_section',
        'default'     => true,
    )
);

// Footer Additional Settings section
Epsilon_Customizer::add_field(
    'footer_additional_settings_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Additional Settings', 'hus' ),
        'section'     => 'hus_footer_section',

    )
);


// Footer short text field
Epsilon_Customizer::add_field(
    'hus_footer_text',
    array(
        'type'              => 'textarea',
        'label'             => esc_html__( 'Footer short text', 'hus' ),
        'section'           => 'hus_footer_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => '<a href="mailto:hus@support.com">hus@support.com</a> <br> +10 873 672 6782 <br> 600/D, Green road, NewYork',
    )
);

 
/***********************************
 * 404 Page Section Fields
 ***********************************/

// 404 text #1 field
Epsilon_Customizer::add_field(
    'hus_fof_titleone',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #1', 'hus' ),
        'section'           => 'hus_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #2 field
Epsilon_Customizer::add_field(
    'hus_fof_titletwo',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #2', 'hus' ),
        'section'           => 'hus_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #1 color field
Epsilon_Customizer::add_field(
    'hus_fof_textone_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #1 Color', 'hus' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'hus_fof_section',
        'default'     => '#000000',
    )
);
// 404 text #2 color field
Epsilon_Customizer::add_field(
    'hus_fof_texttwo_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #2 Color', 'hus' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'hus_fof_section',
        'default'     => '#656565',
    )
);
// 404 background color field
Epsilon_Customizer::add_field(
    'hus_fof_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Page Background Color', 'hus' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'hus_fof_section',
        'default'     => '#fff',
    )
);

// Footer Copyright section
Epsilon_Customizer::add_field(
    'hus_footer_copyright_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Copyright Section', 'hus' ),
        'section'     => 'hus_footer_section',
        'default'     => true,

    )
);

// Footer copyright text field
$url = 'https://colorlib.com/';
$copyText = sprintf( __( 'Theme by %s colorlib %s Copyright &copy; %s  |  All rights reserved.', 'hus' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );
Epsilon_Customizer::add_field(
    'hus_footer_copyright_text',
    array(
        'type'        => 'epsilon-text-editor',
        'label'       => esc_html__( 'Footer copyright text', 'hus' ),
        'section'     => 'hus_footer_section',
        'default'     => wp_kses_post( $copyText ),
    )
);

// Footer widget text color field
Epsilon_Customizer::add_field(
    'hus_footer_widget_heading_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Heading Color', 'hus' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'hus_footer_section',
        'default'     => '#ffffff',
    )
);

// Footer widget text color field
Epsilon_Customizer::add_field(
    'hus_footer_widget_text_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Text Color', 'hus' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'hus_footer_section',
        'default'     => '#a3a3a3',
    )
);

// Footer widget anchor color field
Epsilon_Customizer::add_field(
    'hus_footer_widget_anchor_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Color', 'hus' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'hus_footer_section',
        'default'     => '#9e9e9e',
    )
);

// Footer widget anchor hover color field
Epsilon_Customizer::add_field(
    'hus_footer_widget_anchor_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Hover Color', 'hus' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'hus_footer_section',
        'default'     => '#ffffff',
    )
);

