<?php
// Load and initialize NV library... that's it!
require 'NV/NV.php';
require 'assets/class/Display.php';

function my_login_redirect( $redirect_to, $request, $user ) {
    //is there a user to check?
    if ( isset( $user->roles ) && is_array( $user->roles ) ) {
        //check for admins
        if ( in_array( 'administrator', $user->roles ) ) {
            // redirect them to the default place
            return $redirect_to;
        } else {
            return site_url("/files");
        }
    } else {
        return $redirect_to;
    }
}

add_filter( 'login_redirect', 'my_login_redirect', 10, 3 );

add_action('wp_logout','go_home');
function go_home(){
    wp_redirect( home_url() );
    exit();
}

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page();

}