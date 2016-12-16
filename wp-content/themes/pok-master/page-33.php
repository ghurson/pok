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
            <div id="content" class="">
                <?php GH\Display::login_form();?>
                <?php GH\Display::files();?>
            </div>
        </div>
    </main>
<?php
Theme::get_footer();
