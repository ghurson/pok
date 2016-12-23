<div class="location-with-map">
    <?php $map = get_field("map", $office->ID) ?>
    <div
        class="map_box map"
        data-lat="<?php print $map['lat'] ?>"
        data-lng="<?php print $map['lng'] ?>"
        style="width: 400px; height: 300px;"
    ></div>
    <h3 class="header-no-margin"><?php print $office->post_title ?></h3>
    <span class="no-bottom-margin">
    <?php the_field("address", $office->ID) ?>
    </span>
    <p>
        <span class="hide-for-small-only"><?php the_field("phone_number", $office->ID) ?></span></p>
    <a class="button primary expanded show-for-small-only" href="#">call <?php the_field("phone_number", $office->ID) ?></a>
    <?php $map_link = get_field("map_address", $office->ID) ?>
    <?php if($map_link): ?>
        <a href="<?php print $map_link ?>" target="_blank">View Map</a>
    <?php endif ?>

</div>