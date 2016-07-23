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
    <div id="container" class="row">
        <div id="content" class="small-12 large-8 columns">

            <?php
            Theme::loop('parts/article', 'parts/article-empty');
            GH\Display::files();
            ?>

        </div>

        <?php GH\Display::sidebar() ?>

    </div>
<?php
Theme::get_footer();