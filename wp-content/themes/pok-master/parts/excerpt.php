<?php $post = get_post(get_the_ID()) ?>
<article class="blog-feed__article">
    <?php if(has_post_thumbnail($post->ID)): ?>
        <span class="label"><?php print get_the_time("F j, Y", $post) ?></span>
        <div class="row">
            <div class="medium-4 large-3 column">
                <?php print get_the_post_thumbnail($post->ID, 'medium', array(
                    'class' => 'bio__headshot'
                )) ?>
            </div>
            <div class="medium-8 large-9 column">
                <h2><a class="blog-feed__link" href="<?php print get_permalink($post->ID) ?>"><?php print $post->post_title ?></a></h2>
                <?php include(locate_template('parts/components/social-sharing.php')) ?>
            </div>
        </div>
    <?php else: ?>
        <span class="label"><?php print get_the_time("F j, Y", $post) ?></span>
        <h1 class="blog-feed__heading"><a href="<?php print get_permalink($post->ID) ?>"><?php print $post->post_title ?></a></h1>
        <?php include(locate_template('parts/components/social-sharing.php')) ?>
    <?php endif ?>
    <span class="divider"></span>
    <?php print apply_filters("the_content", $post->post_excerpt) ?>
    <a href="<?php print get_permalink($post->ID) ?>">Read More</a>
</article>