<?php
$header_img = get_field("top_image");
?>

<div class="row">
    <div class="hero">
        <div class="small-12 large-centered columns">
            <img src="<?php print $header_img['sizes']['large'] ?>" alt="Paul with a client"/>
        </div>
    </div>
</div>
<div class="row">
    <div class="small-12 medium-9 medium-centered columns">
        <div class="intro">
            <?php the_field("header_content") ?>
        </div>
    </div>
</div>
