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

    static function front_page_posts(){

        $query = new \WP_Query([
            'posts_per_page' => 3,
        ]);

        if(!$query->found_posts) return false;

        return $query->posts;


    }

    static function site_header(){

        if(is_front_page()) print '
            <div class="stripes-bg">
            <div class="gradient-bg">';

        get_template_part("parts/header");

        if(is_front_page()) get_template_part("parts/home/hero");


        if(is_front_page()) print '
            </div>
            </div>';



    }

}