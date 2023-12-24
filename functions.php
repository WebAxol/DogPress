<?php



function dw_add_custom_block_class($block_content, $block){

    if ( 'core/list' === $block['blockName'] ) {
        $block_content = new WP_HTML_Tag_Processor( $block_content );
        $block_content->next_tag(); /* first tag should always be ul or ol */
        $block_content->add_class( 'wp-block-list' );
        $block_content->get_updated_html();
    }

    return $block_content;

}

add_filter('render_block', 'dw_add_custom_block_class', 1, 2);


function dw_add_classes_on_menu_items($classes, $item, $args){

    if (isset($args->add_li_class)) {
        $classes['class'] = $args->add_li_class;
    }

    return $classes;
}

add_filter('nav_menu_item_attributes', 'dw_add_classes_on_menu_items', 1, 3);


function dw_add_classes_on_menu_links($classes, $item, $args)
{
    if (isset($args->add_a_class)) {
        $classes['class'] = $args->add_a_class;
    }

    return $classes;
}

add_filter('nav_menu_link_attributes', 'dw_add_classes_on_menu_links', 1, 3);


function dw_theme_support(){
    add_theme_support('title-tag');
}

add_action('after_setup_theme','dw_theme_support');


function dw_register_menus(){

    $location = array(
        "topNavBar" => "Top Navigation Menu",
        "sideBar"   => "Left-side Navigation Menu"
    );

    register_nav_menus($location);
}

add_action("init","dw_register_menus");


function dw_register_styles(){
    
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('dw_bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css", array(), '5.0.1', 'all');
    //wp_enqueue_style('dw_style', get_template_directory_uri() . "/style.css", array('dw_bootstrap'), $version, 'all');

}

add_action('wp_enqueue_scripts', 'dw_register_styles');


function dw_register_scripts(){

    wp_enqueue_script('dw_bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js", array(), '5.0.2', true);

}

add_action('wp_enqueue_scripts', 'dw_register_scripts');


function dw_add_class_to_menu($classes, $item, $args) {
    if ($args->theme_location == 'Top Navigation Menu') {
        $classes[] = 'jaja';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'dw_add_class_to_menu', 10, 3);


?>

