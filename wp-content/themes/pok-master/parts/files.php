<div class="row">
    <?php
    foreach($files as $c => $file):
        $url = $file['file']['url'];
        $title = $file['title'];
        $description = $file['description'];
        ?>

        <div class="column">
            <h4><?php print $title ?></h4>
            <?php print $description ?>
            <a data-open="modal_<?php print $c ?>" class="button white">View</a>
            <a href="<?php print $url ?>" class="button white">Download</a>
        </div>


        <div class="reveal" id="modal_<?php print $c ?>" data-animation-in="fade-in" data-animation-out="fade-out" data-reveal>
            <button class="close-button" data-close aria-label="Close reveal" type="button">
                <span aria-hidden="true">&times;</span>
            </button>
            <h1><?php print $title ?></h1>
            <?php print do_shortcode("[embeddoc url='$url' download='all']") ?>
        </div>


    <?php endforeach; ?>

</div>