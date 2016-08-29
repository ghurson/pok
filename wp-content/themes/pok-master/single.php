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
		<div id="content" class="small-12 large-8 columns">
			<?php Theme::loop( 'parts/article', 'parts/article-empty' ) ?>
		</div>
		<div id="sidebar" class="small-12 large-4 columns">
			<?php get_template_part("parts/blog/sidebar") ?>
		</div>
	</div>
</main>
<?php
Theme::get_footer();