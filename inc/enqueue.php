<?php
/**
 * wmp enqueue scripts
 *
 * @package wmp
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'wmp_scripts' ) ) {
        /**
         * Load theme's JavaScript and CSS sources.
         */ 
        function wmp_scripts() {
                // Get the theme data.
                $the_theme     = wp_get_theme();
                $theme_version = $the_theme->get( 'Version' );

                $css_version = $theme_version;
        
        wp_enqueue_style( 'css-3', get_template_directory_uri() . '/libs/bootstrap/bootstrap-grid.min.css', array(), $css_version );
        wp_enqueue_style( 'css-4', get_template_directory_uri() . '/libs/font-awesome/css/font-awesome.min.css', array(), $css_version );
        wp_enqueue_style( 'css-5', get_template_directory_uri() . '/libs/magnific-popup/magnific-popup.css', array(), $css_version );
        wp_enqueue_style( 'css-6', get_template_directory_uri() . '/libs/owl-carousel/assets/owl.carousel.css', array(), $css_version );
        wp_enqueue_style( 'css-9', get_template_directory_uri() . '/libs/lightbox2/css/lightbox.min.css', array(), $css_version );
        wp_enqueue_style( 'css-2', get_template_directory_uri() . '/css/fonts.css', array(), $css_version );
        wp_enqueue_style( 'css-7', get_template_directory_uri() . '/css/main.css', array(), $css_version );
        wp_enqueue_style( 'css-8', get_template_directory_uri() . '/css/media.css', array(), $css_version );

        $js_version =  $theme_version;

        
        wp_enqueue_script( 'js-1', get_template_directory_uri() . '/libs/jquery/jquery-2.1.3.min.js', array(), $js_version, true );
        wp_enqueue_script( 'js-4', get_template_directory_uri() . '/libs/magnific-popup/jquery.magnific-popup.min.js', array(), $js_version, true );
        wp_enqueue_script( 'js-5', get_template_directory_uri() . '/libs/lightbox2/js/lightbox.min.js', array(), $js_version, true );
        wp_enqueue_script( 'js-6', get_template_directory_uri() . '/libs/owl-carousel/owl.carousel.min.js', array(), $js_version, true );
        wp_enqueue_script( 'js-7', get_template_directory_uri() . '/libs/scroll2id/PageScroll2id.min.js', array(), $js_version, true );
        wp_enqueue_script( 'js-8', get_template_directory_uri() . '/js/common.js', array(), $js_version, true );
        wp_enqueue_script( 'js-sweetalert', 'https://unpkg.com/sweetalert/dist/sweetalert.min.js', array(), $js_version , true);

        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
                        wp_enqueue_script( 'comment-reply' );
                }
        }
} // endif function_exists( 'wmp_scripts' ).

add_action( 'wp_enqueue_scripts', 'wmp_scripts' );
