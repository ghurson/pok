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

    <main id="mainContent" role="main" tabindex="0">
        <div id="container" class="row">
            <div id="content" class="small-12 medium-10 large-8 columns">

                <?php
                Theme::loop('parts/article', 'parts/article-empty');
                GH\Display::files();
                GH\Display::offices();
                ?>

            </div>
            <?php // GH\Display::sidebar() ?>
        </div>
        <?php GH\Display::team(); ?>
    </main>
<?php
Theme::get_footer();
