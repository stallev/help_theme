<?php

require('inc/carbon-fields.php');

remove_action('wp_head',             'print_emoji_detection_script', 7 );
remove_action('admin_print_scripts', 'print_emoji_detection_script' );
remove_action('wp_print_styles',     'print_emoji_styles' );
remove_action('admin_print_styles',  'print_emoji_styles' );

remove_action('wp_head', 'wp_resource_hints', 2 ); //remove dns-prefetch
remove_action('wp_head', 'wp_generator'); //remove meta name="generator"
remove_action('wp_head', 'wlwmanifest_link'); //remove wlwmanifest
remove_action('wp_head', 'rsd_link'); // remove EditURI
remove_action('wp_head', 'rest_output_link_wp_head');// remove 'https://api.w.org/
remove_action('wp_head', 'rel_canonical'); //remove canonical
remove_action('wp_head', 'wp_shortlink_wp_head', 10); //remove shortlink
remove_action('wp_head', 'wp_oembed_add_discovery_links'); //remove alternate

add_action( 'wp_enqueue_scripts', 'site_scripts');
function site_scripts(){
  $version = '0.0.0.2';
  wp_dequeue_style( 'wp-block-library' );
  wp_deregister_script( 'wp-embed' );

  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:900%7CRoboto:300&display=swap&subset=cyrillic', [], $version);
  wp_enqueue_style('main-style', get_stylesheet_uri(), [], $version);
  wp_enqueue_style('normalize', get_template_directory_uri() . '/assets/libs/normalize/normalize.min.css', [], $version);
  wp_enqueue_style('swiper-styles', get_template_directory_uri() . '/assets/libs/swiper/swiper-bundle.min.css', [], $version);
  wp_enqueue_style('custom-styles', get_template_directory_uri() . '/assets/css/style.min.css', [], $version);
  
  wp_enqueue_script( 'js-1', get_template_directory_uri() . '/assets/libs/jquery/jquery.min.js', array(), $version, true );
  wp_enqueue_script( 'js-2', get_template_directory_uri() . '/assets/libs/imask/jquery.maskedinput.min.js', array(), $version, true );
  wp_enqueue_script( 'js-3', get_template_directory_uri() . '/assets/libs/swiper/swiper-bundle.min.js', array(), $version, true );
  wp_enqueue_script( 'js-4', get_template_directory_uri() . '/assets/js/script.min.js', array(), $version, true );
}
