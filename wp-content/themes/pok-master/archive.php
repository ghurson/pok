<?php
/**
 * DEFAULT ARCHIVE TEMPLATE
 *
 * This is the default template for archive pages (pages that show multiple posts).
 */
use \NV\Theme\Utilities\Theme;

Theme::get_header();
Theme::output_file_marker(__FILE__);
?>
    <main>
        <div id="container" class="row">
            <div id="content" class="small-12 large-8 columns">
                <?php Theme::loop( 'parts/excerpt', 'parts/article-empty' ) ?>
            </div>
            <div id="sidebar" class="small-12 large-4 columns">
                <?php get_template_part("parts/blog/sidebar") ?>
            </div>
        </div>
    </main>
<?php
Theme::get_footer();