<?php

namespace GH;

class Display
{


    static function login()
    {
        get_template_part("parts/sidebar-login");
    }

    static function sidebar()
    {
        get_template_part("parts/sidebar-default");

    }

    static function login_form(){
      if(is_user_logged_in()) return;
        get_template_part('parts/components/login');
    }

    static function files()
    {

        if (get_the_ID() != 33) return;

        if (!is_user_logged_in()):

            // user isn't allowed to see the files

            get_template_part('parts/components/login');
            return;
        endif;

        $uid = \get_current_user_id();

        $files = get_field("files", "user_$uid");

        include(locate_template("parts/files.php"));


    }


    static function team()
    {

        if (get_the_ID() != 88) return false;

        $attorneys = self::get_posts('attorney');

        foreach ($attorneys as $attorney)
            include(locate_template("parts/team/excerpt.php"));

    }

    static function offices()
    {

        if (get_the_ID() != 13) return false;

        $offices = self::get_posts('office');

        foreach ($offices as $office)
            include(locate_template("parts/office.php"));

    }

    static function front_page_posts()
    {

        $query = new \WP_Query([
            'posts_per_page' => 3,
        ]);

        if (!$query->found_posts) return false;

        return $query->posts;


    }

    static function site_header()
    {

        if (is_front_page()) print '
            <div class="stripes-bg">
            <div class="gradient-bg">';

        get_template_part("parts/header");

        if (is_front_page()) get_template_part("parts/home/hero");


        if (is_front_page()) print '
            </div>
            </div>';

    }

    static function get_posts($type = false)
    {

        if (!$type) return false;

        $query = new \WP_Query([
            'post_type' => $type,
            'posts_per_page' => -1
        ]);

        if (!$query->found_posts) return false;

        return $query->posts;

    }


    static function get_related_posts($id)
    {
        $tags = wp_get_post_tags($id);
        if (!$tags) return false;

        $tag_ids = array();
        foreach ($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;

        $related_post_query = new \wp_query([
            'tag__in' => $tag_ids,
            'post__not_in' => array($id),
            'posts_per_page' => 3, // Number of related posts to display.
        ]);

        if(!$related_post_query->found_posts) return false;

        return $related_post_query->posts;
    }

}
