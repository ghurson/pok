
      <div class="row">
        <div class="biography">
          <div class="small-12 large-4 columns">
            <?php the_post_thumbnail('large', [
              'class' => 'headshot'
              ]) ?>
            <h2 class="header-no-margin"><?php the_title() ?></h2>
            <h3 class="subheader"><?php the_field("position") ?></h3>
            <p><a href="mailto:<?php the_field("email_address") ?>"><?php the_field("email_address") ?></a></p>
            <span class="divider"></span>
            <?php the_field('summary') ?>
          </div>
          <div class="small-12 large-8 columns">
            <?php the_content() ?>
          </div>
        </div>
      </div>
