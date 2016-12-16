<footer>
    <?php if (get_the_ID() != 1 && get_the_ID() != 13): ?>
        <?php $footer_info = get_field("footer_information", "option") ?>
        <section class="contact-footer">
            <div class="row">
                <?php foreach ($footer_info as $section): ?>
                    <div class="small-12 medium-4 columns">
                        <h5 class="header-no-margin"><?php print $section['top_text'] ?></h5>

                        <p><?php print $section['bottom_text'] ?></p>
                    </div>
                <?php endforeach ?>

            </div>
        </section>
    <?php endif ?>
    <section class="legal">
        <div class="row">
            <div class="small-12 columns">
                <?php the_field("footer_text", "options") ?>
            </div>
        </div>
    </section>
</footer>

<!-- start wp_footer() hooks -->
<?php wp_footer(); ?>
<!-- end wp_footer() hooks -->


</body>
</html>
