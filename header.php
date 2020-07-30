<?php 
    if (isset($pageId)) {
        $pageId = $pageId;
    } else {
        $pageId = '';
    } 
?>

<div id="page_loader">
    <svg class="spinner_svg m-auto" width="60px" height="60px">
        <circle class="bgPath" cx="30px" cy="30px" r="25px" fill="none" stroke-width="5px"></circle>
        <circle class="path" cx="30px" cy="30px" r="25px" fill="none" stroke-width="5px"></circle>
    </svg>
</div>
<header>
    <nav class="navbar w-g-12" id="header-menu">
        <div class="d-table">
            <div class="navbar-header cell w-g-md-2 w-g-8">
                <div class="brand-logo">
                    <a class="d-inline w-g-12 logoAnchor text-center v-top" href="index.php">
                        <img src="assets/images/logo.svg" class="logo-default">
                        <img src="assets/images/logo-black.svg" class="logo-black">
                    </a>
                </div>
            </div>
            <div class="navbar-wrapper collapse navbar-collapse cell w-g-md-10 w-g-0">
                <ul class="navbar-menu main-menuList text-right ttu">
                    <li class="menu-scroll" id="device_dimensions"></li>
                    <li class="menu-scroll <?php echo (($pageId == 'about') ? 'active' : ''); ?>"><a class="d-block" href="about.php">About Us</a></li>
                    <li class="menu-scroll"><a class="d-block" href="./#services">Services</a></li>
                    <li class="menu-scroll <?php echo (($pageId == 'portfolio') ? 'active' : ''); ?>"><a class="d-block" href="portfolio.php">Portfolio</a></li>
                    <li class="menu-scroll <?php echo (($pageId == 'career') ? 'active' : ''); ?>"><a class="d-block" href="careers.php">Careers</a></li>
                    <li class="menu-scroll"><a class="d-block" href="https://vikas921897.typeform.com/to/ibpgeKDW" target="_blank">Project Planner</a></li>
                    <li class="menu-scroll <?php echo (($pageId == 'contact') ? 'active' : ''); ?>"><a class="d-block" href="contact.php">Contact Us</a></li>
                </ul>
            </div>
            <div class="navbar-social cell w-g-md-0 w-g-4 text-right">
                <button type="button" id="navbar-toggle" class="d-inline v-top md-hide lg-hide">
                    <span class="icon-bar bg3 br-4 d-block"></span>
                    <span class="icon-bar bg3 br-4 d-block"></span>
                    <span class="icon-bar bg3 br-4 d-block"></span>
                </button>
            </div>
        </div>
    </nav>
    <div id="scrollToTop" class="d-none xs-hide">
        <button type="button" class="fw5 d-block" id="scrollToTopBtn">
            <span class="d-inline v-top">
                Scroll to top
            </span>
            <svg x="0px" y="0px" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;" class="d-inline v-top">
                <line x1="0.71" y1="10" x2="18.54" y2="10"/>
                <polyline points="11.87,3.78 18.21,10 11.87,16.22"/>
            </svg>
        </button>
    </div>
    <div class="connectFloat pos-rel br-circle d-none">
        <button type="button" class="connectBtn btn bg1 pos-rel"><i class="sprite-sm icon-8"></i></button>
        <!-- <div id="connectText"><i class="sprite-lg icon-7"></i></div> -->
        <div class="socialIcons"> 
            <a class="d-inline bg1 br-circle" href="https://www.facebook.com/" target="_blank" title="Facebook"><i class="sprite-xs icon-2"></i></a>
            <a class="d-inline bg1 br-circle" href="https://www.linkedin.com/" target="_blank" title="Linkedin"><i class="sprite-xs icon-3"></i></a>
            <a class="d-inline bg1 br-circle" href="https://www.instagram.com/" target="_blank" title="Instagram"><i class="sprite-xs icon-4"></i></a>
        </div>
    </div>
</header>