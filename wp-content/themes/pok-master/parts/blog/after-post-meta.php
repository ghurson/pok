<?php $tags = get_the_tags(get_the_ID()); ?>

<section class="blog-tags">
    Tags:
    <?php foreach ($tags as $tag): ?>
        <a href="<?php print site_url("tags/" . $tag->slug) ?>" class="blog-tags__link"><?php print $tag->name ?></a>
    <?php endforeach ?>
</section>


<?php $related_posts = GH\Display::get_related_posts(get_the_ID()); ?>

<?php if ($related_posts): ?>
    <section class="blog-related">
        <div class="row">
            <div class="small-12 columns">
                <h2>You might also like. . .</h2>
            </div>
        </div>
        <div class="relatedposts">
            <h3>Related posts</h3>
        </div>
        <div class="row">
            <?php foreach ($related_posts as $post): ?>
                <div class="small-4 columns">
                    <article class="blog-related__article">
                        <h3 class="blog-related__heading">
                            <a href="<?php print get_permalink($post->ID) ?>">
                                <?php print $post->post_title ?>
                            </a>
                        </h3>
                    </article>
                </div>
            <?php endforeach ?>
        </div>
    </section>

<?php endif; ?>

<section>
    <div class="clearfix">
        <h2 class="float-left">Comments</h2>
        <a href="#post" class="button primary small float-right">Post a comment</a>
    </div>
    <ol class="blog-comments">
        <?php
        $comments = get_comments(array(
            'post_id' => get_the_ID(),
            'status' => 'approve' //Change this to the type of comments to be displayed
        ));

        //Display the list of comments
        wp_list_comments(array(
            'per_page' => 10, //Allow comment pagination
            'reverse_top_level' => false, //Show the latest comments at the top of the list
            'style' => 'ol',
            'callback' => 'comment_formatter'
        ), $comments);
        ?>
    </ol>
    <div class="blog-comments__post" id="post">
        <?php comment_form([
            'title_reply' => "Post a Comment"
        ]) ?>
    </div>
</section>