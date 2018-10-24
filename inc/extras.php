<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package banco_t2
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function banco_t2_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
    $is_home = ( is_front_page() || is_home() ) ? true:false;
    if($is_home) {
        $classes[] = 'home';
    } else {
        $classes[] = 'subpage';
    }
    
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'banco_t2_body_classes' );

function ii_login_style() { ?>
<style type="text/css">
    body.login {
        background: #1a2233;
    }
</style>
<?php
}
add_action( 'login_enqueue_scripts', 'ii_login_style' );

function get_post_id_by_key($key) {
    global $wpdb;
    $row = $wpdb->get_row( "SELECT post_id FROM {$wpdb->prefix}postmeta WHERE meta_key = '".$key."' ORDER BY meta_key DESC", OBJECT );
    return ($row) ? $row->post_id : 0;
}