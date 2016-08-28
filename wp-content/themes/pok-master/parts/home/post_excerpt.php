<div class="row">
    <div class="blog-featured__article-wrapper">
        <div class="small-12 medium-8 large-6 medium-centered columns">
            <article class="blog-featured__article">
                <span class="label"><?php print get_the_time("F j, Y", $post) ?></span>

                <h2><?php print $post->post_title ?></h2>
                <span class="blue-border"></span>
                <?php print apply_filters('the_excerpt', $post->post_excerpt) ?>
                <a href="<?php print get_permalink($post->ID) ?>">Read More</a>
            </article>
        </div>
    </div>
</div>