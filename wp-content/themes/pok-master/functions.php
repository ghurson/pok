<?php
// Load and initialize NV library... that's it!
require 'NV/NV.php';
require 'assets/class/Display.php';

function my_login_redirect($redirect_to, $request, $user)
{
    //is there a user to check?
    if (isset($user->roles) && is_array($user->roles)) {
        //check for admins
        if (in_array('administrator', $user->roles)) {
            // redirect them to the default place
            return $redirect_to;
        } else {
            return site_url("/client-portal");
        }
    } else {
        return $redirect_to;
    }
}

add_filter('login_redirect', 'my_login_redirect', 10, 3);

add_action('wp_logout', 'go_home');
function go_home()
{
    wp_redirect(home_url());
    exit();
}

if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}

if (!current_user_can('manage_options')) {
    remove_action('admin_color_scheme_picker', 'admin_color_scheme_picker');
    add_filter('show_admin_bar', '__return_false');
}

register_nav_menus(array(
        'top-menu' => __('Menu1', 'twentyfourteen'),
        'side-menu' => __('Menu2', 'twentyfourteen'),
        'footer-menu' => __('Menu3', 'twentyfourteen')
    )
);

function my_walker_nav_menu_start_el($item_output, $item, $depth, $args)
{

    $a_class = $depth == 0 ? 'main-nav__link' : 'sub-nav__link';

    $item_output = preg_replace('/<a /', '<a class=" ' . $a_class . '" ', $item_output, 1);

    return $item_output;
}

add_filter('walker_nav_menu_start_el', 'my_walker_nav_menu_start_el', 10, 4);