<div class="row">
    <div class="blog-featured__article-wrapper">
        <div class="small-12 medium-8 large-6 medium-centered columns">
            <article class="blog-featured__article">
                <div class="l-arrow"></div>
                <span class="label"><?php print get_the_time("F j, Y", $post) ?></span>

                <h2><?php print $post->post_title ?></h2>
                <span class="divider"></span>
                <?php print apply_filters('the_excerpt', wp_trim_words($post->post_excerpt, 35, '')) ?>
                <br>
                <a href="<?php print get_permalink($post->ID) ?>">Read More about <?php print $post->post_title ?></a>
                <div class="r-arrow"></div>
            </article>
        </div>
    </div>
</div>
