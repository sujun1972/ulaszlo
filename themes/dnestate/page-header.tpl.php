<div class="page-header">
    <div class="container">
        <div class="row usermenu-area">
            <div class="text-center col-12 col-md-6 col-lg-4 text-md-left mb-2 mb-sm-0">
                <?php
                    $block = module_invoke('locale', 'block_view', 'language');
                    print $block['content'];
                ?>
            </div>
            <div class="text-center mr-1 mr-sm-0 mb-1 mb-sm-0 col-12 col-md-3 col-lg-4 text-lg-left">
                <!-- <i class="fa fa-facebook mr-2" style="font-size: 15px;"></i>
                <i class="fa fa-twitter mr-2" style="font-size: 15px;"></i>
                <i class="fa fa-google-plus" style="font-size: 15px;"></i> -->
            </div>
            <div class="text-center col-12 col-md-3 col-lg-4 text-lg-right">
                <!-- <i class="fa fa-phone mr-1"></i><?php // print t("request call back");?> -->
            </div>
        </div>
    </div>
</div>
<div class="page-top">
    <div class="pt-5 pb-4">
        <div class="container-fluid">
            <div class="row" style="margin: 0 !important;">
                <div class="col-12 col-md-6 col-lg-6 text-center pb-4">
                    <div class="logo-wrapper text-center">
                        <div class="logo">
                            <a href="/">
                                <img src="/sites/ulaszlo.hu/themes/dnestate/dist/img/logo.png" alt="" style="height:124px;margin-top:-30px;">
                                <!-- <div class="logo_info text-left">
                                    <span class="logo_text"><b>Ulászló</b></span>
                                    <span class="logo_slogan">Ulászló utca 50.</span>
                                </div> -->
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-6">
                    <div class="info-wrapper mb-lg-1">
                        <div class="location">
                            <span class="info_icon icon-house float-left mr-4 hidden-md-down"></span>
                            <span class="contact_info_location float-left">
                                <b>Ulászló utca 50.</b>
                                <br>
                                1113 Budapest
                            </span>
                        </div>
                        <div class="phone">
                            <span class="info_icon icon-phone-handle float-left mr-4 hidden-md-down"></span>
                            <span class="contact_info_phone float-left"><b>+36-30-886-1711</b><br>
                            <span><?php print t('Sales: ');?>Molnár Balázs</span><br>
                            <a href="mailto:ulaszlo50kft@gmail.com" style="display: none;">ulaszlo50kft@gmail.com</a></span>
                        </div>
                    </div>

                    <div id="mainmenu-lg" class="main-menu-lg hidden-lg-down">
                        <?php
                        $main_menu = menu_navigation_links('main-menu');
                        print theme('links__menu_main_page', array('links' => $main_menu));
                        ?>
                    </div>
                </div>

                <div class="col-12 mt-3 mb-2 hidden-xl-up hidden-sm-down" style="margin-left: -15px; padding: 0: -15px">
                    <div class="main-menu-lg">
                        <?php
                            $main_menu = menu_navigation_links('main-menu');
                            print theme('links__menu_main_page', array('links' => $main_menu));
                        ?>
                    </div>
                </div>

                <div class="col-12 col-lg-3 hidden-md-up text-center">
                    <a href="javascript:void(0);" class="openResponsiveMenu mb-2" onclick="responsiveMenuToggle();"></a>
                    <nav role="navigation" id="mainmenu" class="menuTopWrap topMenuStyleLine main" style="display: none;">
                        <?php
                        $main_menu = menu_navigation_links('main-menu');
                        print theme('links__menu_main_page', array('links' => $main_menu));
                        ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>