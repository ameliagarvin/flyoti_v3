<?php
function my_theme_assets() {
  wp_enqueue_style(
    'my-theme-style',
    get_template_directory_uri() . '/assets/css/main.css',
    [],
    '1.0'
  );
}
add_action('wp_enqueue_scripts', 'my_theme_assets');

function my_theme_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'FlyOTI'),
    ));
}
add_action('after_setup_theme', 'my_theme_menus');

// Blocks login if not admin or travel_agent
add_action( 'template_redirect', function () {

    if ( is_page_template( 'travel-agent-portal.php' ) && is_user_logged_in() ) {

        if ( function_exists( 'um_user' ) ) {
            $um_role = um_user( 'role' );
        } else {
            $um_role = '';
        }

        if ( ! current_user_can( 'administrator' ) && $um_role !== 'travel_agent' ) {
            wp_redirect( home_url() );
            exit;
        }
    }
});

add_action( 'um_after_login', 'sync_um_role_to_wp', 10, 1 );
add_action( 'um_after_register', 'sync_um_role_to_wp', 10, 1 );

function sync_um_role_to_wp( $user_id ) {

    if ( ! function_exists( 'um_fetch_user' ) ) {
        return;
    }

    um_fetch_user( $user_id );
    $um_role = um_user( 'role' );

    // Map UM roles to WP roles
    if ( $um_role === 'travel_agent' ) {
        wp_update_user( array(
            'ID'   => $user_id,
            'role' => 'travel_agent',
        ) );
    }
}

// add_action( 'um_submit_form_errors_hook_login', 'block_non_agents_login', 20 );

// function block_non_agents_login( $args ) {

//     if ( ! function_exists( 'um_fetch_user' ) ) {
//         return;
//     }

//     $user_id = username_exists( $args['username'] );
//     if ( ! $user_id ) {
//         return;
//     }

//     um_fetch_user( $user_id );
//     $um_role = um_user( 'role' );

//     if ( $um_role !== 'travel_agent' && ! user_can( $user_id, 'administrator' ) ) {
//         UM()->form()->add_error(
//             'username',
//             'Access denied. This portal is for Travel Agents only.'
//         );
//     }
// }
