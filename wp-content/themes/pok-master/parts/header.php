<header class="row column" id="header" role="banner">
    <div class="header-wrapper">
        <div class="row hide-for-small-only">
            <div class="small-12 columns" style="text-align: right">
                <?php if (!is_user_logged_in()): ?>
                    <a class="client-portal-button gh-client-login-button" href="<?php print site_url("client-portal") ?>">Client Portal</a>
                <?php else: ?>
                    <a class="client-portal-button gh-client-login-button" href="<?php print site_url("client-portal") ?>">Client Portal</a>
                <?php endif ?>
                <a class="search-button" data-open="reveal-search" aria-controls="reveal-search" id="tlbjwe-reveal"
                   aria-haspopup="true" tabindex="0"><span class="show-for-sr">Search</span>
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         x="0px" y="0px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
                    <path d="M17.545,15.467l-3.779-3.779c0.57-0.935,0.898-2.035,0.898-3.21c0-3.417-2.961-6.377-6.378-6.377
            	C4.869,2.1,2.1,4.87,2.1,8.287c0,3.416,2.961,6.377,6.377,6.377c1.137,0,2.2-0.309,3.115-0.844l3.799,3.801
            	c0.372,0.371,0.975,0.371,1.346,0l0.943-0.943C18.051,16.307,17.916,15.838,17.545,15.467z M4.004,8.287
            	c0-2.366,1.917-4.283,4.282-4.283c2.366,0,4.474,2.107,4.474,4.474c0,2.365-1.918,4.283-4.283,4.283
            	C6.111,12.76,4.004,10.652,4.004,8.287z"></path>
                    </svg>
                </a>
                <?php if (is_user_logged_in()): ?>
                    <a class="client-portal-button gh-edit-account"
                       href="<?php print site_url('wp-admin/profile.php') ?>">Edit Account</a>
                    <a class="client-portal-button gh-logout-button" href="<?php print wp_logout_url() ?>">Log Out</a>
                <?php endif ?>
            </div>
        </div>
        <div class="row">
            <div class="small-12 large-5 columns">
                <a class="logo" href="<?php print site_url() ?>"><span class="show-for-sr">O'Keefe Law Office</span>
                    <?php print get_template_part('parts/components/logo') ?>
                </a>
            </div>
            <div class="small-12 large-7 columns">
                <!-- Mobile Nav -->
                <nav class="show-for-small-only" role="navigation">
                    <div class="title-bar" data-responsive-toggle="js-main-nav" style="display: none;">
                        <button class="menu-icon" type="button" data-toggle=""><span
                                class="show-for-sr">Open menu</span></button>
                        <div class="title-bar-title">Menu</div>
                    </div>
                    <a class="search-button" data-open="reveal-search" aria-controls="reveal-search" id="tlbjwe-reveal"
                       aria-haspopup="true" tabindex="0"><span class="show-for-sr">Search</span>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             x="0px" y="0px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
              <path d="M17.545,15.467l-3.779-3.779c0.57-0.935,0.898-2.035,0.898-3.21c0-3.417-2.961-6.377-6.378-6.377
              	C4.869,2.1,2.1,4.87,2.1,8.287c0,3.416,2.961,6.377,6.377,6.377c1.137,0,2.2-0.309,3.115-0.844l3.799,3.801
              	c0.372,0.371,0.975,0.371,1.346,0l0.943-0.943C18.051,16.307,17.916,15.838,17.545,15.467z M4.004,8.287
              	c0-2.366,1.917-4.283,4.282-4.283c2.366,0,4.474,2.107,4.474,4.474c0,2.365-1.918,4.283-4.283,4.283
              	C6.111,12.76,4.004,10.652,4.004,8.287z"></path>
              </svg>
                    </a>


                    <?php if (!is_user_logged_in()): ?>
                        <a class="client-portal-button" href="<?php print site_url("client-portal") ?>">Client
                            Portal</a>
                    <?php else: ?>
                        <a class="client-portal-button"
                           href="<?php print wp_logout_url() ?>">Log Out</a>
                        <a class="client-portal-button"
                           href="<?php print site_url('wp-admin/profile.php') ?>">Edit Account</a>
                    <?php endif ?>


                    <?php print wp_nav_menu([
                        'menu_class' => 'vertical menu main-nav',
                        'items_wrap' => '<ul id="%1$s" class="%2$s" data-accordion-menu aria-multiselectable="true">%3$s</ul>'
                    ]) ?>

                </nav>

                <!-- Medium and Large Nav -->
                <nav class="hide-for-small-only" role="navigation">

                    <?php print wp_nav_menu([
                        'menu_class' => 'dropdown menu main-nav',
                        'items_wrap' => '<ul id="%1$s" class="%2$s" data-dropdown-menu>%3$s</ul>'
                    ]) ?>
                </nav>
            </div>
        </div>
    </div>
</header>

<div class="search small reveal" id="reveal-search" data-reveal aria-labelledby="search-label"
     data-close-on-click="true" data-animation-in="slide-in-down" data-animation-out="slide-out-up">
    <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
    <h2 id="search-label">Search</h2>
    <form action="/">
        <label for="search">Enter Search Criteria</label>
        <div class="input-group">
            <input class="input-group-field" type="text" id="search" name="s">
            <div class="input-group-button">
                <button type="submit" value="Submit">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         x="0px" y="0px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
      <path d="M17.545,15.467l-3.779-3.779c0.57-0.935,0.898-2.035,0.898-3.21c0-3.417-2.961-6.377-6.378-6.377
      	C4.869,2.1,2.1,4.87,2.1,8.287c0,3.416,2.961,6.377,6.377,6.377c1.137,0,2.2-0.309,3.115-0.844l3.799,3.801
      	c0.372,0.371,0.975,0.371,1.346,0l0.943-0.943C18.051,16.307,17.916,15.838,17.545,15.467z M4.004,8.287
      	c0-2.366,1.917-4.283,4.282-4.283c2.366,0,4.474,2.107,4.474,4.474c0,2.365-1.918,4.283-4.283,4.283
      	C6.111,12.76,4.004,10.652,4.004,8.287z"></path>
      </svg>

                    <span class="show-for-sr">submit search criteria</span></button>
            </div>
        </div>
    </form>
</div>