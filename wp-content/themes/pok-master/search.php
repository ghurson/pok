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

                <?php
                Theme::loop('parts/excerpt', 'parts/article-empty');
                GH\Display::files();
                GH\Display::offices();
                ?>

            </div>
            <div id="sidebar" class="small-12 large-4 columns">
                <?php get_template_part("parts/blog/sidebar") ?>
            </div>
        </div>
        <?php GH\Display::team(); ?>
    </main>
<?php
Theme::get_footer();