<?php
/*
 *  MON FICHIER DE FONCTION EN PHP
 */
 
 
 
// ##########################
//ajouter zone de menu
// ##########################
function register_my_menu() {
    register_nav_menu('menu-principal',__( 'Menu Principal' ));
    register_nav_menu('menu-secondaire',__( 'Menu Secondaire' ));
    register_nav_menu('menu-footer',__( 'Menu Footer' ));
}
add_action( 'init', 'register_my_menu' );



// ##########################
/* Register Custom Navigation Walker */
// ##########################
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );  
add_filter( 'nav_menu_link_attributes', 'bootstrap5_dropdown_fix' );
function bootstrap5_dropdown_fix( $atts ) {
     if ( array_key_exists( 'data-toggle', $atts ) ) {
         unset( $atts['data-toggle'] );
         $atts['data-bs-toggle'] = 'dropdown';
     }
     return $atts;  
}

// ##########################
// ADD IMAGE SIZES ajouter des tailles d'image personnalisées
// ##########################

add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() { 
    add_image_size( 'slidel', 1903, 800, true );
    add_image_size( 'ptitslidel', 200, 200, true );
    add_image_size( 'thumb-col-3', 306, 200, true );
    add_image_size( 'thumb-col-4', 416, 277, true ); 
    add_image_size( 'thumb-col-5', 526, 310, true );
    add_image_size( 'thumb-col-6', 636, 350, true );
    add_image_size( 'logo', 80, 80, true );

    add_image_size( 'galerie1', 316, 510, true );
    add_image_size( 'galerie2', 636, 350, true );
    add_image_size( 'galerie3', 636, 350, true );

    add_image_size( 'slider', 1903, 500, true );
    add_image_size( 'slider', 266, 266, true );
}


// ##########################
// HIDE GUTENBERG FOR HOME
// ##########################
function disable_editor_for_front_page( $id = false ) {
    $front_page_id = get_option( 'page_on_front' );
    if( !$id ) {
        if( isset($_GET['post']) ) {
            $id = $_GET['post'];
        } elseif( isset($_POST['post_ID']) ) {
            $id = $_POST['post_ID'];
        } else {
            return;
        }
    }
    if( $id == $front_page_id ) {
        remove_post_type_support( 'page', 'editor' );
    }
}
add_action( 'load-post.php', 'disable_editor_for_front_page', 10 );
add_action( 'load-post-new.php', 'disable_editor_for_front_page', 10 );

function custom_theme_setup() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'custom_theme_setup');

// include_once( get_template_directory() .'/include/tc-evenements.php');
// include_once( get_template_directory() .'/include/tc-offre-demploi.php');
// include_once( get_template_directory() .'/include/tc-evenements.php');
// include_once( get_template_directory() .'/include/tc-evenements.php');
// include_once( get_template_directory() .'/include/tc-evenements.php');
// include_once( get_template_directory() .'/include/tc-evenements.php');
// include_once( get_template_directory() .'/include/tc-evenements.php');