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

    <main>
        <div id="container" class="row">
            <div id="content" class="small-12 large-8 columns">
                <?php Theme::loop('parts/excerpt', 'parts/article-empty'); ?>
            </div>
            <div class="medium-4 column">
                <?php get_template_part("parts/blog/sidebar") ?>
            </div>
        </div>
    </main>
<?php
Theme::get_footer();