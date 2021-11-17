<?php
    $btn_txt = hus_opt( 'hus_header_top_btn_text' );
    $btn_url = hus_opt( 'hus_header_top_btn_url' );
    $phone_number = hus_opt( 'hus_header_phone_number' );
?>
<!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

<!-- header-start -->
<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid p-0">
                <div class="row align-items-center no-gutters">
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo">
                            <?php echo hus_theme_logo();?>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="main-menu  d-none d-lg-block">
                            <nav>
                                <?php
                                if(has_nav_menu('primary-menu')) {
                                    wp_nav_menu(array(
                                        'menu'            => 'primary-menu',
                                        'theme_location'  => 'primary-menu',
                                        'menu_id'         => 'navigation',
                                        'container_class' => false,
                                        'container_id'    => false,
                                        'menu_class'      => false,
                                        'depth'           => 3,
                                        'walker'          => new hus_bootstrap_navwalker()
                                    ));
                                }
                                ?>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                        <div class="social_wrap d-flex align-items-center justify-content-end">
                            <?php
                                if ( $btn_txt ) {
                                    echo '
                                    <div class="login_text">
                                        <a href="'.esc_url($btn_url).'">'.esc_html($btn_txt).'</a>
                                    </div>
                                    ';
                                }
                                if ( $phone_number ) {
                                    echo '
                                    <div class="number">
                                        <p><a href="#">'.esc_html($phone_number).'</a></p>
                                    </div>
                                    ';
                                }
                            ?>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
<!-- header-end -->