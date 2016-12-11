
<div class="column medium-8">
  <?php the_field("login_page_text","option") ?>
</div>
<div class="small-12 medium-8 large-6 columns end">
  <div class="login text-left">
    <legend>Client Portal Login</legend>
    <?php wp_login_form() ?>
    <p>Forgot password? <a href="<?php echo wp_lostpassword_url(); ?>">Click here</a> to reset.</p>
  </div>
</div>
