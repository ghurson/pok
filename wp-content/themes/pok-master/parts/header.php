<div class="row column">
    <header>
        <div class="row">
            <div class="small-12 columns">
                <a class="client-portal hide-for-small-only float-right" href="client-portal.html">Client Portal</a>
            </div>
        </div>
        <div class="row">
            <div class="small-12 large-5 columns">
                <a class="logo" href="<?php print site_url() ?>"><?php print get_template_part('parts/components/logo') ?></a>
            </div>
            <div class="small-12 large-7 columns">
                <?php print wp_nav_menu () ?>

                <!-- Mobile Nav -->
                <nav div class="show-for-small-only">
                    <div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
                        <button class="menu-icon" type="button" data-toggle></button>
                        <div class="title-bar-title">Menu</div>
                    </div>
                    <a class="client-portal show-for-small-only float-right" href="client-portal.html">Client Portal</a>
                    <div class="top-bar" id="example-menu">
                        <ul class="vertical menu main-nav" data-responsive-menu="accordion">
                            <li class="main-nav__item">
                                <a class="main-nav__link" href="index.html">Home</a>
                            </li>
                            <li class="main-nav__item"><a class="main-nav__link" href="team.html">Team</a></li>
                            <li class="main-nav__item"><a class="main-nav__link" href="#">Services</a>
                                <ul class="menu vertical nested sub-nav">
                                    <li class="sub-nav__item"><a class="sub-nav__link" href="estate-planning.html">Estate Planning</a></li>
                                    <li class="sub-nav__item"><a class="sub-nav__link" href="estate-trust-admin.html">Estate and Trust Administration</a></li>
                                </ul>
                            </li>
                            <li class="main-nav__item"><a class="main-nav__link" href="blog.html">Blog</a></li>
                            <li class="main-nav__item"><a class="main-nav__link" href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </nav>

                <!-- Medium and Large Nav -->
                <nav div class="hide-for-small-only">
                    <ul class="dropdown menu main-nav" data-dropdown-menu>
                        <li class="main-nav__item">
                            <a class="main-nav__link" href="index.html">Home</a>
                        </li>
                        <li class="main-nav__item"><a class="main-nav__link" href="team.html">Team</a></li>
                        <li class="main-nav__item"><a class="main-nav__link" href="#">Services</a>
                            <ul class="menu sub-nav">
                                <li class="sub-nav__item"><a class="sub-nav__link" href="estate-planning.html">Estate Planning</a></li>
                                <li class="sub-nav__item"><a class="sub-nav__link" href="estate-trust-admin.html">Estate and Trust Administration</a></li>
                            </ul>
                        </li>
                        <li class="main-nav__item"><a class="main-nav__link" href="blog.html">Blog</a></li>
                        <li class="main-nav__item"><a class="main-nav__link" href="contact.html">Contact</a></li>
                    </ul>
                </nav>




            </div>
        </div>
    </header>
</div>