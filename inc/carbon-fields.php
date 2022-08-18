<?php

require_once('all-fields/Crb_All_Fields.php');

// Common Settings
add_action( 'carbon_fields_register_fields', 'carbon_fields_settings_common' );
function carbon_fields_settings_common() {
    $Container = new Crb_All_Fields('theme_options', 'Настройка сайта');
    $Container->settings_common();
    return $Container;
}

//home.php
add_action( 'carbon_fields_register_fields', 'carbon_fields_page_main' );
function carbon_fields_page_main() {
    $Container = new Crb_All_Fields_Page('post_meta', 'Настройки главной страницы', 'template-pages/home.php');
    $Container->theme_land_main();
    return $Container;
}
//politic.php
add_action( 'carbon_fields_register_fields', 'carbon_fields_page_politic' );
function carbon_fields_page_politic() {
    $Container = new Crb_All_Fields_Page('post_meta', 'Настройки страницы', 'template-pages/politic.php');
    $Container->theme_politic();
    // $Container->theme_special_single();

    return $Container;
}
