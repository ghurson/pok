<?php
/**
 * ARTICLE PART (NO COMMENTS)
 *
 * This part can be used IN THE LOOP to output a single article (sans comments).
 */
?>
    <article id="article-<?php the_ID() ?>" class="blog-article <?php echo implode(get_post_class(), ' ') ?>">

        <span class="label"><?php the_time('F j, Y') ?></span>


        <h1><?php the_title() ?></h1>

        <?php include(locate_template('parts/components/social-sharing.php')) ?>

        <span class="divider"></span>

        <?php the_post_thumbnail('large', [
            'class' => 'bio__headshot float-left'
        ]) ?>

        <?php the_content() ?>

    </article>

<?php
if (get_post_type() == 'post')
    get_template_part("parts/blog/after-post-meta");
?>
