<?php
/**
 * ARTICLE PART (NO COMMENTS)
 *
 * This part can be used IN THE LOOP to output a single article (sans comments).
 */
?>
<article id="article-<?php the_ID() ?>" class="<?php echo implode(get_post_class(),' ') ?>">

    <h1>No Results</h1>


    <div>
        <p>We couldn't find anything for <?php print get_search_query() ?>.</p>
    </div>


</article>