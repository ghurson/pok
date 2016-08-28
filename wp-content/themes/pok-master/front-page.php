<?php
/**
 * DEFAULT TEMPLATE
 *
 * This is the global default template. If WordPress can't find a more appropriate, specific template file,
 * it will use this one.
 */
use \NV\Theme\Utilities\Theme;

Theme::get_header();
Theme::output_file_marker(__FILE__);
?>

    <?php foreach(get_field('practice_areas') as $c => $area): ?>
    <div class="service <?php print $c % 2 != 0 ? 'blue-bg' : '' ?>">
      <div class="row">
        <div class="small-12 large-4 columns">
          <div class="bracketed-header-wrapper show-for-small-only">
            <h2 class="bracketed-header"><?php print $area['title'] ?></h2>
          </div>
          <h2 class="hide-for-small-only"><?php print $area['title'] ?></h2>
          <span class="blue-border show-for-large-up"></span>
          <p class="service__lead lead"><?php print $area['summary'] ?></p>
        </div>
        <div class="small-12 large-8 columns">
        <?php print $area['content'] ?>
          <a class="primary expanded button show-for-small-only" href="<?php print $area['page'] ?>">Read More</a>
          <a class="primary button hide-for-small-only" href="<?php print $area['page'] ?>">Read More</a>
        </div>
      </div>
    </div>
    <?php endforeach ?>



    <div class="locations">
      <div class="row">
        <div class="small-12 medium-8 columns medium-centered">
          <div class="bracketed-header-wrapper show-for-small-only">
            <h2 class="bracketed-header"><?php the_field("offices_header") ?></h2>
          </div>
          <h2 class="hide-for-small-only"><?php the_field("offices_header") ?></h2>
          <span class="blue-border"></span>
          <?php the_field("offices_text") ?>
        </div>
      </div>
      <div class="row">
          <div class="small-12 medium-6 medium-centered columns">
            <div class="row">
              <div class="small-12 medium-6 columns">
                <div class="locations__address">
                  <h3>Chicago Office</h3>
                  <p>123 N. Wacker Drive<br />
                  Suite 1600<br />
                  <a class="hide-for-small-only" href="#">view map</a></p>
                  <p class="hide-for-small-only">312.263.9200</p>
                  <a class="button secondary expanded show-for-small-only" href="#">view map</a>
                  <a class="button primary expanded show-for-small-only" href="#">call 312.263.9200</a>
                </div>
              </div>
              <div class="small-12 medium-6 columns">
                <div class="locations__address">
                  <h3>Evanston Office</h3>
                  <p>500 Davis Streete<br />
                  Suite 812<br />
                  <a class="hide-for-small-only" href="#">view map</a></p>
                  <p class="hide-for-small-only">847.328.5900</p>
                  <a class="button secondary expanded show-for-small-only" href="#">view map</a>
                  <a class="button primary expanded show-for-small-only" href="#">call 847.328.5900</a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="blog-featured">
      <div class="row">
        <div class="small-12 columns">
          <div class="bracketed-header-wrapper">
            <h3 class="bracketed-header">From the Blog</h3>
          </div>
        </div>
      </div>

        <?php

        $posts = GH\Display::front_page_posts();

        if($posts)
        foreach($posts as $post)
         include(locate_template("parts/home/post_excerpt.php"));

        ?>
    </div>



<?php
Theme::get_footer();