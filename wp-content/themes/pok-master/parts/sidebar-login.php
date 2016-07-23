<?php if (is_user_logged_in()): ?>

    <?php
    $user = wp_get_current_user();
    $url = wp_logout_url();
    ?>

    <div class="login">
        <br>
        <h6>Welcome, <?php print $user->display_name ?></h6>
        <a href="<?php print site_url("/files") ?>" class="button">Click here to view your files</a>
        <a href="<?php print $url ?>" class="button alert">Click here to logout</a>
    </div>

<?php else: ?>
    <div class="login">
        <?php wp_login_form() ?>
    </div>

<?php endif ?>