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

<?php foreach (get_field('practice_areas') as $c => $area): ?>
    <div class="service <?php print $c % 2 != 0 ? 'blue-bg' : '' ?>">
        <div class="row">
            <div class="small-12 large-4 columns">
                <div class="bracketed-header-wrapper show-for-small-only">
                    <h2 class="bracketed-header"><?php print $area['title'] ?></h2>
                </div>
                <h2 class="hide-for-small-only"><?php print $area['title'] ?></h2>
                <span class="divider show-for-large-up"></span>
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
                <span class="divider"></span>
                <?php the_field("offices_text") ?>
            </div>
        </div>
        <div class="row">
            <div class="small-12 medium-6 medium-centered columns">
                <div class="row">

                    <?php $offices = GH\Display::get_posts('office'); ?>


                    <?php foreach ($offices as $office): ?>
                        <?php $map = get_field("map", $office->ID) ?>
                        <div class="small-12 medium-6 columns">
                            <div class="locations__address"
                                 data-lat="<?php print $map['lat'] ?>"
                                 data-lng="<?php print $map['lng'] ?>"
                            >
                                <h3><?php print $office->post_title ?></h3>

                                <p><?php the_field("address", $office->ID) ?>
                                    <a class="hide-for-small-only show-map" href="#">view map</a></p>

                                <p class="hide-for-small-only"><?php the_field("phone_number", $office->ID) ?></p>
                                <a class="button secondary expanded show-for-small-only show-map" href="#">view map</a>
                                <a class="button primary expanded show-for-small-only"
                                   href="#">call <?php the_field("phone_number", $office->ID) ?></a>
                            </div>
                        </div>
                    <?php endforeach ?>

                </div>
            </div>
        </div>
    </div>
    <div class="blog-featured">
        <div class="row">
            <div class="small-12 columns">
                <div class="brackets">
                    <h3 class="brackets__header">From the Blog</h3>
                </div>
            </div>
        </div>

        <div class="pok-home-slider owl-carousel">
            <?php
            $posts = GH\Display::front_page_posts();
            if ($posts)
                foreach ($posts as $post)
                    include(locate_template("parts/home/post_excerpt.php"));
            ?>
        </div>
    </div>


<?php
Theme::get_footer();