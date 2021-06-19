<?php

add_action('wp_enqueue_scripts', 'wpi_js_css_child');
function wpi_js_css_child(){

//Css e JS slick
	wp_enqueue_style('slick-css', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', [], null);
	wp_enqueue_script('slick-js', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', ['jquery'], null, true);


//CSS filho herdado do Pai
	wp_enqueue_style('parent', get_template_directory_uri() . '/style.css');

//CSS filho 
	wp_enqueue_style('wpi_style-css', get_stylesheet_directory_uri() . '/css/custom.css');

//JS Filho 
	wp_enqueue_script('wpi_script-js', get_stylesheet_directory_uri() . '/js/custom.js', ['jquery', 'slick-js'], false, true);

}

