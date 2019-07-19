<?php


/* スタイルとスクリプトの登録 */

function empty_theme_scripts() {

    // スタイル
    wp_enqueue_style('main-style', get_template_directory_uri() . '/css/main.css', false, '1.1', 'all');

    // スクリプト
    wp_enqueue_script('main-js', get_template_directory_uri() . '/css/main.js', false, '1.1', true);

}
add_action( 'wp_enqueue_scripts', 'empty_theme_scripts' );


/* メニューの登録 */

/*
register_nav_menus(
    array(
    'header-menu' => __( 'ヘッダーメニュー' ),
    'footer-menu' => __( 'フッターメニュー' )
    )
);
*/

/* アイキャッチ画像を有効にする */

//add_theme_support( 'post-thumbnails' );
//set_post_thumbnail_size( 800, 200, true ); // 幅、高さ、入らない部分と切り取るか？



?>
