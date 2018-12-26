<?php

function theme_styles_scripts(){
	//Theme Css Files
	wp_enqueue_style('Montserrat', get_template_directory_uri().'/css/montserrat.css', null, null);
	wp_enqueue_style('Bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', null, null);
	wp_enqueue_style('Iconic Css', get_template_directory_uri().'/css/material-design-iconic-font.min.css', null, null);
	wp_enqueue_style('Font Awsome', get_template_directory_uri().'/css/font-awesome.min.css', null, '1.0');
	wp_enqueue_style('Plugins', get_template_directory_uri().'/css/plugins.css', null, '1.0');
	wp_enqueue_style('Main Css', get_template_directory_uri().'/main.css', null, '1.0');
	wp_enqueue_style('Club-main-stylesheet', get_stylesheet_uri());

	//theme js File
	wp_enqueue_script('jquery');
	wp_enqueue_script('Bootstrap Js', get_template_directory_uri().'/js/bootstrap.min.js', 'jquery', null, true);
	wp_enqueue_script('Plugins', get_template_directory_uri().'/js/plugins.js', 'jquery', null, true);
	wp_enqueue_script('Ajax mail', get_template_directory_uri().'/js/ajax-mail.js', 'jquery', null, true);
	wp_enqueue_script('Main js', get_template_directory_uri().'/js/main.js', 'jquery', null, true);
	wp_enqueue_script('Mordanaizer', get_template_directory_uri().'/js/vendor/modernizr-2.8.3.min.js', 'jquery', null, null);
}
add_action('wp_enqueue_scripts','theme_styles_scripts');