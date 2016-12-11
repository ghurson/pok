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
<main id="mainContent" role="main" tabindex="0">
      <div class="row">
        <div class="small-12 medium-10 large-8 columns">
          <h1>Team</h1>
        </div>
      </div>
      <?php Theme::loop( 'parts/attorney-excerpt', 'parts/article-empty' ) ?>
    </main>


<?php
Theme::get_footer();
