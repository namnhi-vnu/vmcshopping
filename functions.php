<?php
function my_custom_wc_theme_support() {

    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );

}
add_action( 'after_setup_theme', 'my_custom_wc_theme_support' );


function initTheme(){

    //menu
    register_nav_menu('header-menu',__( 'Menu chính' ));
    register_nav_menu('category-menu',__( 'Menu Category' ));
    register_nav_menu('footer-menu',__( 'Menu Footer' ));
    //sidebar
    if(function_exists('register_sidebar')){
        register_sidebar(array(
            'name'=>'Cột Bên',
            'id' => 'sidebar'
        ));
    }
}
add_action('init', 'initTheme');

function slider_custom_post_type(){
    $label = array(
        'name' => 'Ảnh Slider', //Tên post type dạng số nhiều
        'singular_name' => 'Ảnh Slider' //Tên post type dạng số ít
    );
    $args = array(
        'labels' => $label, //Gọi các label trong biến $label ở trên
        'description' => 'đăng ảnh slider', //Mô tả của post type
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        ), //Các tính năng được hỗ trợ trong post type
       
        'hierarchical' => false, 
        'public' => true,
        'show_ui' => true, 
        'show_in_menu' => true, 
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-images-alt',
        'can_export' => true, 
        'has_archive' => true, 
        'exclude_from_search' => false, 
        'publicly_queryable' => true, 
        'capability_type' => 'post' //
    );
    register_post_type('slider', $args); 
}
add_action('init', 'slider_custom_post_type');


// slider event
function sliderEvent_custom_post_type(){
    $label = array(
        'name' => 'Slider Event', 
        'singular_name' => 'Slider Event' 
    );
    $args = array(
        'labels' => $label, 
        'description' => 'Slider Event', 
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        ), 
       
        'hierarchical' => false, 
        'public' => true,
        'show_ui' => true, 
        'show_in_menu' => true, 
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-images-alt',
        'can_export' => true, 
        'has_archive' => true, 
        'exclude_from_search' => false, 
        'publicly_queryable' => true, 
        'capability_type' => 'post' //
    );
    register_post_type('sliderevent', $args); 
}
add_action('init', 'sliderEvent_custom_post_type');