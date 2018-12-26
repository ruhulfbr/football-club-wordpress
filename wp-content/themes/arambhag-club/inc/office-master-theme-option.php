<?php

    /**
     * ReduxFramework Barebones Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "office_master";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Office Master Options', 'redux-framework-demo' ),
        'page_title'           => __( 'Office Master Options', 'redux-framework-demo' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => true,
        // Show the time the page took to load, etc
        'update_notice'        => true,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '_options',
        // Page slug used to denote the panel
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!

        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        //'compiler'             => true,

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'light',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
    $args['admin_bar_links'][] = array(
        'id'    => 'redux-docs',
        'href'  => 'http://docs.reduxframework.com/',
        'title' => __( 'Documentation', 'redux-framework-demo' ),
    );

    $args['admin_bar_links'][] = array(
        //'id'    => 'redux-support',
        'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
        'title' => __( 'Support', 'redux-framework-demo' ),
    );

    $args['admin_bar_links'][] = array(
        'id'    => 'redux-extensions',
        'href'  => 'reduxframework.com/extensions',
        'title' => __( 'Extensions', 'redux-framework-demo' ),
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
        'title' => 'Visit us on GitHub',
        'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://twitter.com/reduxframework',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://www.linkedin.com/company/redux-framework',
        'title' => 'Find us on LinkedIn',
        'icon'  => 'el el-linkedin'
    );

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'redux-framework-demo' ), $v );
    } else {
        $args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'redux-framework-demo' );
    }

    // Add content after the form.
    $args['footer_text'] = __( '<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'redux-framework-demo' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

    // -> START Basic Fields
   /* Redux::setSection( $opt_name, array(
        'title'  => __( 'Basic Field', 'redux-framework-demo' ),
        'id'     => 'basic',
        'desc'   => __( 'Basic field with no subsections.', 'redux-framework-demo' ),
        'icon'   => 'el el-home',
        'fields' => array(
            array(
                'id'       => 'opt-text',
                'type'     => 'text',
                'title'    => __( 'Example Text', 'redux-framework-demo' ),
                'desc'     => __( 'Example description.', 'redux-framework-demo' ),
                'subtitle' => __( 'Example subtitle.', 'redux-framework-demo' ),
                'hint'     => array(
                    'content' => 'This is a <b>hint</b> tool-tip for the text field.<br/><br/>Add any HTML based text you like here.',
                )
            )
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title' => __( 'Basic Fields', 'redux-framework-demo' ),
        'id'    => 'basic',
        'desc'  => __( 'Basic fields as subsections.', 'redux-framework-demo' ),
        'icon'  => 'el el-home'
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Text', 'redux-framework-demo' ),
        'desc'       => __( 'For full documentation on this field, visit: ', 'redux-framework-demo' ) . '<a href="//docs.reduxframework.com/core/fields/text/" target="_blank">//docs.reduxframework.com/core/fields/text/</a>',
        'id'         => 'opt-text-subsection',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'text-example',
                'type'     => 'text',
                'title'    => __( 'Text Field', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
                'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                'default'  => 'Default Text',
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Text Area', 'redux-framework-demo' ),
        'desc'       => __( 'For full documentation on this field, visit: ', 'redux-framework-demo' ) . '<a href="//docs.reduxframework.com/core/fields/textarea/" target="_blank">//docs.reduxframework.com/core/fields/textarea/</a>',
        'id'         => 'opt-textarea-subsection',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'textarea-example',
                'type'     => 'textarea',
                'title'    => __( 'Text Area Field', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
                'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                'default'  => 'Default Text',
            ),
        )
    ) );
*/
    Redux::setSection( $opt_name,array(
            'title'    => __('Header Options','office_master'),
            'id'       => 'header_option',
            'desc'     =>'This is Header Option',
            'icon'     =>'el el-home-alt',

        ));
    Redux::setSection( $opt_name,array(
            'title'    => __('Header Sub Options','office_master'),
            'id'       => 'logo_option',
            'subsection' =>ture,
            'fields'   => array(array(
                    'id' =>'site_logo',
                    'title' => 'Site Logo',
                    'desc'  => 'Upload your Logo',
                    'type'  => 'media',
                    'url'   => true,
                    'default'=> array(
                            'url' => get_template_directory_uri().'/assets/img/slider/Office.png'
                        )
                ))

        ));
    Redux::setSection( $opt_name,array(
            'title'    => __('Footer Options','office_master'),
            'id'       => 'footer_option',
            'desc'     =>'This is Footer Option',
            'icon'     =>'el el-folder-close',

        ));
    Redux::setSection( $opt_name,array(
            'title'    => __('Copywrite','office_master'),
            'id'       => 'footer_copywrite',
            'subsection' =>ture,
            'fields'   => array(array(
                    'id' =>'copy_text',
                    'title' => 'Copywrite Text',
                    'type'  => 'editor',
                    'default'=> '@Copyright 2014, Your Website Link. Theme by ThemeWagon',
                    'args'  => array(
                            'wpautop' =>false
                        )

                ))

        ));
    Redux::setSection( $opt_name,array(
            'title'    => __('Column One','office_master'),
            'id'       => 'column_one',
            'subsection' =>ture,
            'fields'   => array(array(
                    'id' =>'column_one_title',
                    'title' => 'Title',
                    'type'  => 'text',
                    'default'=> 'Contact :',
                ),
                array(
                    'id' =>'column_one_icon',
                    'title' => 'Icon',
                    'type'  => 'text',
                    'default'=> 'fa fa-map-marker',
                ),
                array(
                    'id' =>'column_one_text',
                    'title' => 'Text',
                    'type'  => 'Editor',
                    'default'=> '
                        Via Ludovisi 39-45, Rome, 54267, Italy<br>
                        Phone: 1.800.245.356 Fax: 1.800.245.357<br>
                        Email: hello@LawOffice.org<br>
                    ',
                )
            )

        ));
    Redux::setSection( $opt_name,array(
            'title'    => __('Column Two','office_master'),
            'id'       => 'column_two',
            'subsection' =>ture,
            'fields'   => array(array(
                    'id' =>'column_two_title',
                    'title' => 'Title',
                    'type'  => 'text',
                    'default'=> 'Links ',
                ),
                array(
                    'id' =>'column_two_icon',
                    'title' => 'Icon',
                    'type'  => 'text',
                    'default'=> 'fa fa-external-link',
                ),array(
                    'id' =>'column_two_link',
                    'title' => 'links',
                    'type'  => 'slides',
                    'placeholder' => array(
                        'title' => 'Write Here Link Title',
                        'url'   => 'Write Here link Url'
                    )
                )
            )

        ));
        Redux::setSection( $opt_name,array(
            'title'    => __('Column Three','office_master'),
            'id'       => 'column_three',
            'subsection' =>ture,
            'fields'   => array(array(
                    'id' =>'column_three_title',
                    'title' => 'Title',
                    'type'  => 'text',
                    'default'=> 'Socialize',
                ),
                array(
                    'id' =>'column_three_icon',
                    'title' => 'Icon',
                    'type'  => 'text',
                    'default'=> 'fa fa-heart',
                ),array(
                    'id' =>'column_three_social',
                    'title' => 'Socials',
                    'type'  => 'slides',
                    'placeholder' => array(
                        'title' => 'Write Here Social Font Awsome Class',
                        'url'   => 'Write Here Social link Url'
                    )
                )
            )

        ));
    Redux::setSection( $opt_name,array(
            'title' => __('Contact Page Option','office_master'),
            'id'    => 'contact_page_option',
            'desc'  => 'This is Contact Page Option',
            'icon'  => 'el el-address-book'
        ));
    Redux::setSection( $opt_name,array(
            'title' => __('Address Map','office_master'),
            'id'    => 'address_map',
            'subsection' => true,
            'fields' => array(array(
                'id' => 'map_url',
                'title' => 'Map Url',
                'desc' => 'Write Here Map embaded Url',
                'type' => 'text',
                'default' => 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3618.727010735933!2d91.837871!3d24.907291700000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1404919738144',

                )
                )
        ));
    Redux::setSection( $opt_name,array(
            'title' => __('Contact Address','office_master'),
            'id'    => 'contact_address',
            'subsection' => true,
            'fields' => array(array(
                'id' => 'address_title',
                'title' => 'Address title',
                'desc' => 'Write Here Title',
                'type' => 'text',
                'default' => 'Find us at:',
                ),array(
                'id' => 'full_address',
                'title' => 'Address',
                'desc' => 'Write Here Full Address',
                'type' => 'editor',
                'default' => '                    <p class="block-author"> Johns, Smith & Associates</p>
                    <p>Via Ludovisi 39-45, Rome, 54267, Italy</p>
                    <p>Phone: 1.800.245.356</p>
                    <p>Fax: 1.800.245.357</p>
                    <em class="block-author">Email: hello@LawOffice.org </em>',
                'args'=> array(
                    'wpautop' => false
                    )
                )
                )
        ));
        Redux::setSection( $opt_name,array(
            'title' => __('Contact Social','office_master'),
            'id'    => 'contact_social',
            'subsection' => true,
            'fields' => array(array(
                'id' => 'social_title',
                'title' => 'Social Title',
                'desc' => 'Write Here Social Title',
                'type' => 'text',
                'default' => 'Social Link:',
                ),array(
                'id' => 'social_option',
                'title' => 'Socials',
                'type' => 'slides',
                'placeholder' => array(
                    'title' => 'Write Here Social Title',
                    'url' => 'Write Here Social url'
                    )
                )
                )
        ));
    Redux::setSection( $opt_name,array(
            'title' => __('Section Sorter','office_master'),
            'id'    => 'section_sorter',
            'desc'  => 'Sort you Section Here',
            'icon'  => 'el el-certificate'
        ));
    Redux::setSection( $opt_name,array(
            'title' => __('Section Sorter Option','office_master'),
            'id'    => 'section_shorter_sub',
            'subsection' => true,
            'fields' => array(array(
                'id' => 'sorter_option',
                'title' => 'Set your Section',
                'type' => 'sorter',
                'options'=>array(
                    'Active' =>array(
                        'Slider'=>'Slider Area',
                        'Services'=>'Services Area',
                        'Red'=>'Red Area',
                        'Green'=>'Green Area',
                        'Blue'=>'Blue Area'
                        ), 
                    'Deactive'=>array(

                        )
                    )
                ))
        ));

    Redux::setSection( $opt_name,array(
            'title' => __('Appearance','office_master'),
            'id'    => 'appearance_option',
            'icon'  => 'el el-magic'
        ));
    Redux::setSection( $opt_name,array(
            'title' => __('Footer Top','office_master'),
            'id'    => 'footer_top',
            'subsection' => true,
            'fields' => array(array(
                'id' => 'footer_top_bg',
                'title' => 'Set Foter Top BG Color',
                'type' => 'color',
                ),array(
                'id' => 'contact_text_typo',
                'title' => 'Contact Text Typography',
                'type' => 'typography',
                'output'=>array(
                    '.footer-contact'
                    )
                ),array(
                'id' => 'contact_heading_h3',
                'title' => 'Contact Heading Title',
                'type' => 'typography',
                'output'=>array(
                    'footer h3'
                    )
                ))
        ));
    /*
     * <--- END SECTIONS
     */
