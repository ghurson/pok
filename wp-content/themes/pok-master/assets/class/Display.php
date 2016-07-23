<?php

namespace GH;

class Display {

    static function login(){
        get_template_part("parts/sidebar-login");
    }

    static function sidebar(){
        get_template_part("parts/sidebar-default");

    }

    static function files(){

        if(get_the_ID() != 33 || !is_user_logged_in()) return;

        $uid = \get_current_user_id();

        $files = get_field("files", "user_$uid");

        include(locate_template("parts/files.php"));


    }
}