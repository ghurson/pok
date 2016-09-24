<?php
/**
 * ARTICLE PART (NO COMMENTS)
 *
 * This part can be used IN THE LOOP to output a single article (sans comments).
 */
?>
<article id="article-<?php the_ID() ?>" class="blog-feed__article <?php echo implode(get_post_class(),' ') ?>">

    <h1><?php the_title() ?></h1>

    <?php the_post_thumbnail('large', [
        'class' => 'bio__headshot float-left'
    ]) ?>

    <div>
        <?php the_content() ?>
    </div>

    <section class="blog-tags">
        Tags: <a class="blog-tags__link" href="#">estate planning</a>, <a class="blog-tags__link" href="#">divorce</a>, <a class="blog-tags__link" href="#">trusts</a>, <a class="blog-tags__link" href="#">gift tax returns</a>
    </section>

    <section class="blog-related">
        <div class="row">
            <div class="small-12 columns">
                <h2>You might also like. . .</h2>
            </div>
        </div>
        <div class="row">
            <div class="small-4 columns">
                <article class="blog-related__article">
                    <h3 class="blog-related__heading"><a href="#">Lorem ipsum dolor sit amet consectetur adipiscing </a></h3>
                </article>
            </div>
            <div class="small-4 columns">
                <article class="blog-related__article">
                    <h3 class="blog-related__heading"><a href="#">Lorem ipsum dolor sit amet consectetur adipiscing </a></h3>
                </article>
            </div>
            <div class="small-4 columns">
                <article class="blog-related__article">
                    <h3 class="blog-related__heading"><a href="#">Lorem ipsum dolor sit amet consectetur adipiscing </a></h3>
                </article>
            </div>
        </div>
    </section>

    <section>
        <div class="clearfix">
            <h2 class="float-left">Comments</h2>
            <a href="#post" class="button primary small float-right">Post a comment</a>
        </div>
        <ol class="blog-comments">
            <li>
                <article class="blog-comments__article">
                    <header><span class="blog-comments__author">John<span></span></span></header>
                    <p>Sed tempor turpis at libero efficitur, eu posuere nisl mollis. Cras pretium dignissim dictum. Sed at odio eget nibh accumsan viverra. Aliquam erat volutpat.</p>
                    <footer style="margin-top:0px;">September 2, 2016 9:30AM | <a href="#">Reply</a></footer>
                </article>
                <ul class="blog-comments__level2 no-bullet">
                    <li>
                        <article class="blog-comments__article">
                            <header><span class="blog-comments__author">Jane</span></header>
                            <p>Ut nec enim sit amet est pulvinar eleifend eu ac arcu. In ac augue non tellus imperdiet volutpat.</p>
                            <p>Proin vitae purus venenatis, suscipit neque eu, aliquam erat. Cras in neque non dolor consequat pellentesque. Sed non iaculis arcu. Integer elementum leo sed odio congue, in cursus orci commodo.</p>
                            <footer>September 2, 2016 7:16PM | <a href="#">Reply</a></footer>
                        </article>
                    </li>
                </ul>
            </li>
            <li>
                <article class="blog-comments__article">
                    <header><span class="blog-comments__author">Mary</span></header>
                    <p>Nullam vitae dignissim mauris, sit amet vestibulum metus. </p>
                    <footer>September 3, 2016 9:30AM | <a href="#">Reply</a></footer>
                </article>
            </li>
            <li>
                <article class="blog-comments__article">
                    <header><span class="blog-comments__author">Xavier<span></span></span></header>
                    <p>Sed tempor turpis at libero efficitur, eu posuere nisl mollis. Cras pretium dignissim dictum. Sed at odio eget nibh accumsan viverra. Aliquam erat volutpat.</p>
                    <footer>September 3, 2016 9:30AM | <a href="#">Reply</a></footer>
                </article>
            </li>
            <li>
                <article class="blog-comments__article">
                    <header><span class="blog-comments__author">Kent</span></header>
                    <p>Ut nec enim sit amet est pulvinar eleifend eu ac arcu. In ac augue non tellus imperdiet volutpat.</p>
                    <p>Proin vitae purus venenatis, suscipit neque eu, aliquam erat. Cras in neque non dolor consequat pellentesque. Sed non iaculis arcu. Integer elementum leo sed odio congue, in cursus orci commodo.</p>
                    <footer>September 4, 2016 7:16PM | <a href="#">Reply</a></footer>
                </article>
            </li>
            <li>
                <article class="blog-comments__article">
                    <header><span class="blog-comments__author">Lucy</span></header>
                    <p>Nullam vitae dignissim mauris, sit amet vestibulum metus. </p>
                    <footer>September 5, 2016 9:30AM | <a href="#">Reply</a></footer>
                </article>
            </li>
        </ol>
        <div class="blog-comments__post" id="post">
            <h3>Post a Comment</h3>
            <form>
                <fieldset>
                    <div class="row">
                        <div class="small-12 columns">
                            <label for="comment">Comment</label>
                            <textarea id="comment" name="comment"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-12 medium-6 columns">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name">
                        </div>
                        <div class="small-12 medium-6 columns">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-12 medium-6 columns">
                            <label for="website">Website</label>
                            <input type="url" id="website" name="website">
                        </div>
                    </div>
                </fieldset>
                <input class="button primary hide-for-small-only" value="Submit" type="submit">
                <input class="button primary expanded show-for-small-only" value="Submit" type="submit">
            </form>
        </div>
    </section>

</article>