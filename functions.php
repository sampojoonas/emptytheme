<?php


/* スタイルとスクリプトの登録 */

function empty_theme_scripts() {

    // スタイル
    wp_enqueue_style('slider', get_template_directory_uri() . '/css/slider.css', false, '1.1', 'all');

    // スクリプト
    wp_enqueue_script('main', get_template_directory_uri() . '/css/slider.css', false, '1.1', true);

}
add_action( 'wp_enqueue_scripts', 'empty_theme_scripts' );


/* メニューの登録 */

register_nav_menus(
    array(
    'header-menu' => __( 'ヘッダーメニュー' ),
    'footer-menu' => __( 'フッターメニュー' )
    )
);



?>
