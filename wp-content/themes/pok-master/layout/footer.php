<footer>
    <?php if (get_the_ID() != 1 && get_the_ID() != 13): ?>
        <section class="contact-footer">
            <div class="row">
                <div class="small-12 medium-4 columns">
                    <h5 class="header-no-margin">Chicago Office</h5>

                    <p>123 N. Wacker Drive | Suite 1600 | 312.263.9200</p>
                </div>

                <div class="small-12 medium-4 columns">
                    <h5 class="header-no-margin">Evanston Office</h5>

                    <p>500 Davis Street | Suite 812 | 847.328.5900</p>
                </div>
                <div class="small-12 medium-4 columns">
                    <h5 class="header-no-margin">Email</h5>
                    <a href="mailto:information@okeefelawoffice.com?">information@okeefelawoffice.com</a>
                </div>
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
