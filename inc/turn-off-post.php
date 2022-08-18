<?php

add_action( 'admin_menu', 'remove_menus' );

function remove_menus(){

    //    remove_menu_page( 'index.php' );                  // Консоль
    remove_menu_page( 'edit.php' );               // Записи
    //    remove_menu_page( 'upload.php' );                 // Медиафайлы
    //    remove_menu_page( 'edit.php?post_type=page' );    // Страницы
    //    remove_menu_page( 'edit-comments.php' );      // Комментарии
    //    remove_menu_page( 'themes.php' );                 // Внешний вид
    //    remove_menu_page( 'plugins.php' );                // Плагины
    //    remove_menu_page( 'users.php' );                  // Пользователи
    //    remove_menu_page( 'tools.php' );                  // Инструменты
    //    remove_menu_page( 'options-general.php' );        // Параметры

}

add_action( 'admin_bar_menu', 'remove_default_post_type_menu_bar', 999 );

function remove_default_post_type_menu_bar( $wp_admin_bar ) {
    $wp_admin_bar->remove_node( 'new-post' );
}

add_action( 'wp_dashboard_setup', 'remove_draft_widget', 999 );

function remove_draft_widget(){
    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
}