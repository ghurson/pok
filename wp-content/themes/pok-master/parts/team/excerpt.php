<div class="row">
    <div class="biography">
        <div class="small-12 large-4 columns">
            <?php print get_the_post_thumbnail($attorney->ID, 'medium', array(
                'class' => 'bio__headshot'
            )) ?>
            <h2 class="header-no-margin"><?php print $attorney->post_title ?></h2>
            <h3 class="subheader"><?php the_field("position", $attorney->ID) ?></h3>
            <p><a href="mailto:<?php the_field("email_address", $attorney->ID) ?>"><?php the_field("email_address", $attorney->ID) ?></a></p>
            <span class="blue-border"></span>
            <?php the_field("summary", $attorney->ID) ?>
        </div>
        <div class="small-12 large-8 columns">
            <?php print apply_filters("the_content", $attorney->post_content) ?>
        </div>
    </div>
</div>