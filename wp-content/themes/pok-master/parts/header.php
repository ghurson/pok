<div class="row">
    <div class="column">
        <header>
            <div class="row">
                <div class="small-12 columns">
                    <?php if(!is_user_logged_in()): ?>
                    <a class="client-portal hide-for-small-only float-right"
                       href="<?php print site_url("client-portal") ?>">Client Portal</a>
                    <?php else: ?>
                        <div class="client-portal logged-in">
                            <a href="<?php print wp_logout_url() ?>">Log Out</a>
                            <a href="<?php print site_url('wp-admin/profile.php') ?>">Edit Account</a>
                        </div>
                    <?php endif ?>
                </div>
            </div>
            <div class="row">
                <div class="small-12 large-5 columns">
                    <a class="logo"
                       href="<?php print site_url() ?>"><?php print get_template_part('parts/components/logo') ?></a>
                </div>
                <div class="small-12 large-7 columns">

                    <!-- Mobile Nav -->
                    <nav div class="show-for-small-only" v>
                        <div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
                            <button class="menu-icon" type="button" data-toggle></button>
                            <div class="title-bar-title">Menu</div>
                        </div>
                        <?php if(!is_user_logged_in()): ?>
                        <a class="client-portal show-for-small-only float-right"
                           href="<?php print site_url("client-portal") ?>">Client Portal</a>
                        <?php else: ?>
                            <a class="client-portal show-for-small-only float-right"
                               href="<?php print wp_logout_url() ?>">Log Out</a>
                            <a class="client-portal show-for-small-only float-right"
                               href="<?php print site_url('wp-admin/profile.php') ?>">Edit Account</a>
                        <?php endif ?>

                        <div class="top-bar" id="example-menu">
                            <?php print wp_nav_menu([
                                'menu_class' => 'vertical menu main-nav pok-header-menu',
                                'items_wrap' => '<ul id="%1$s" class="%2$s" data-responsive-menu="accordion">%3$s</ul>'
                            ]) ?>
                            </ul>
                        </div>
                    </nav>

                    <nav class="hide-for-small-only">
                        <?php print wp_nav_menu([
                            'menu_class' => 'dropdown menu main-nav pok-header-menu',
                            'items_wrap' => '<ul id="%1$s" class="%2$s" data-dropdown-menu>%3$s</ul>'
                        ]) ?>
                    </nav>

                </div>
            </div>
        </header>
    </div>
</div>