<?php
/**
 * SINGLE BLOG POSTS
 *
 * This is the template for single, full-page blog posts.
 */
use \NV\Theme\Utilities\Theme;

Theme::get_header();
Theme::output_file_marker( __FILE__ );
?>
<main>
	<div id="container" class="row">
		<div id="content" class="medium-10 medium-centered columns">
			<?php Theme::loop( 'parts/attorney', 'parts/article-empty' ) ?>
		</div>
	</div>
</main>
<?php
Theme::get_footer();
