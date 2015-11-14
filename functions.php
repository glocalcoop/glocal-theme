<?php
/*
Author: Pea, Glocal
URL: htp://glocal.coop
*/

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

// if ( !is_admin() ) add_action( 'wp_enqueue_scripts', 'glocal_child_scripts_and_styles' );

function glocal_child_scripts_and_styles() {

    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/assets/css/style.min.css', array( 'glocal-stylesheet' ) );

	// wp_enqueue_script( 'child-slider', trailingslashit( get_stylesheet_directory_uri() ) . 'assets/js/main.min.js', array(), '', true );
}

add_action( 'wp_enqueue_scripts', 'glocal_child_scripts_and_styles' );

/*
 * Allow SVGs
 * Enable SVG images to be uploaded through the media browser
 */

if(! function_exists( 'glocal_allow_svg' ) ) {

    function glocal_allow_svg( $mimes ) {

        $mimes['svg'] = 'image/svg+xml';
        return $mimes;

    }

    add_filter( 'upload_mimes', 'glocal_allow_svg' );

}


/*
 * Home Page Pre-get Filter
 * Filter home page posts
 */

if(! function_exists( 'glocal_home_posts' ) ) {

    function glocal_home_posts( $query ) {

        if( is_admin() ) {

            return $query;

        }

        if( is_home() && is_main_query()  ) {

            $query->set( 'posts_per_page', 1 );
            $query->set( 'orderby', 'rand' );

        }
        

    }

    add_filter( 'pre_get_posts', 'glocal_home_posts' );

}





?>