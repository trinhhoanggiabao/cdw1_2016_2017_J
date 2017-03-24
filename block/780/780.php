<!DOCTYPE HTML>
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/780.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('./less/780.less', './css/780.css');
        ?>

    </head>

    <body>
        <div class="type-780">
            <div class="head-wrap"> 
                <div id="top-bar" class="tb-1">
                    <div class="container">
                        <div class="tb-ss hidden-desktop"><div class="tb-text"><a class="swift-search-link" href="#"><i class="fa-search-plus"></i><span>Personal Shopper</span></a></div></div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="tb-text clearfix">The premier destination for premium products</div>
                            </div>  
                            <div class="col-md-6">
                                <div class="tb-text clearfix"><ul class="social-icons small light">
                                        <li class="dribbble"><a href="#" target="_blank">Dribbble</a></li>
                                        <li class="facebook"><a href="#" target="_blank">Facebook</a></li>
                                        <li class="twitter"><a href="#" target="_blank">Twitter</a></li>
                                        <li class="vimeo"><a href="#" target="_blank">Vimeo</a></li>
                                        <li class="youtube"><a href="#" target="_blank">YouTube</a></li>
                                        <li class="tumblr"><a href="#" target="_blank">Tumblr</a></li>
                                    </ul>
                                </div>
                            </div>  
                        </div>  
                    </div>  
                </div>
                <!---head--->
                <div id="header-section" class="header-1 logo-face">
                    <header id="header" class="clearfix">
                        <div class="container">
                            <div class="header-row row">
                                <div class="header-left col-md-4"><nav class="std-menu header-menu">
                                        <ul class="menu">
                                            <li class="tb-welcome">Welcome</li>
                                            <li class="hs-woo-custom clearfix"><a class="swift-search-link" href="#"><i class="fa-search-plus"></i><span>Personal Shopper</span></a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div id="logo" class=" col-md-4 logo-center clearfix">
                                    <a class="logo-link" href="#">
                                        <img class="standard" src="images/neighborhood_logo.png" alt="Neighborhood">
                                        <img class="retina" src="images/neighborhood_logo@2x.png" alt="Neighborhood">
                                    </a>
                                    <a href="#" class="hidden-desktop show-main-nav"><i class="fa-align-justify"></i></a>
                                    <a href="#" class="hidden-desktop mobile-cart-link"><i class="sf-cart"></i></a>
                                    <a href="#" class="hidden-desktop mobile-search-link"><i class="fa-search"></i></a>
                                </div>
                                <div class="header-right col-md-4"><nav class="std-menu header-menu">
                                        <ul class="menu">
                                            <li class="parent aux-languages"><a href="#"><span class="language name">English</span></b></a>
                                                <ul id="header-languages" class="sub-menu" style="display: none;">
                                                    <li><a href="#">DEMO - EXAMPLE PURPOSES</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><span class="language name">German</span></a>
                                                    </li>
                                                    <li>
                                                        <div class="current-language">
                                                            <span class="language name">English</span>
                                                        </div>
                                                    </li>
                                                    <li><a href="#">
                                                            <span class="language name">Spanish</span></a>
                                                    </li>
                                                    <li><a href="#"><span class="language name">French</span></a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Login</a>
                                            </li></ul>
                                    </nav>
                                </div>
                            </div>  
                        </div>  
                    </header> 
                    <!---<form method="get" class="mobile-search-form container" action="#">
                        <input type="text" placeholder="Search" name="s" autocomplete="off">
                    </form>--->
                    <div id="main-nav">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-9">
                                    <nav id="main-navigation" class="std-menu clearfix">
                                        <div class="menu-main-menu-container"><ul id="menu-main-menu" class="menu"><li class="menu-item-9269 menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-7606 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children  sf-std-menu         parent"><a href="#"><span class="menu-item-text">Home</span></a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item-9270 menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-7606 current_page_item  sf-std-menu        "><a href="#">Home (Example One)</a></li>
                                                        <li class="menu-item-10027 menu-item menu-item-type-post_type menu-item-object-page  sf-std-menu        "><a href="#">Home (Example Two)</a></li>
                                                        <li class="menu-item-10028 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#">Home (Example Three)</a></li>
                                                        <li class="menu-item-9265 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#">Home (Example Four)</a></li>
                                                        <li class="menu-item-9267 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#">Home (Example Five)</a></li>
                                                        <li class="menu-item-9268 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#">Home (Example Six)</a></li>
                                                        <li class="menu-item-9266 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#">Home (Example Seven)</a></li>
                                                        <li class="menu-item-9249 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#">Home (Example Eight)</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-9282 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children  sf-std-menu         parent"><a href="#"><span class="menu-item-text">Shop</span></a>
                                                    <ul class="sub-menu" style="display: none;">
                                                        <li class="menu-item-10014 menu-item menu-item-type-post_type menu-item-object-page  sf-std-menu        "><a href="#">Shop â€“ with left sidebar</a></li>
                                                        <li class="menu-item-10074 menu-item menu-item-type-custom menu-item-object-custom sf-std-menu        "><a href="#">Shop â€“ with right sidebar</a></li>
                                                        <li class="menu-item-10075 menu-item menu-item-type-custom menu-item-object-custom sf-std-menu        "><a href="#">Shop â€“ full-width</a></li>
                                                        <li class="menu-item-10013 menu-item menu-item-type-custom menu-item-object-custom sf-std-menu        "><a href="#">Product Detail Page</a></li>
                                                        <li class="menu-item-10017 menu-item menu-item-type-post_type menu-item-object-page  sf-std-menu        "><a href="#">Shopping Bag</a></li>
                                                        <li class="menu-item-10019 menu-item menu-item-type-post_type menu-item-object-page  sf-std-menu        "><a href="#">Wishlist</a></li>
                                                        <li class="menu-item-10018 menu-item menu-item-type-post_type menu-item-object-page  sf-std-menu        "><a href="#">Track your order</a></li>
                                                        <li class="menu-item-10015 menu-item menu-item-type-post_type menu-item-object-page  sf-std-menu        "><a href="#">My Account</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-11893 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sf-mega-menu sf-mega-menu-natural-width  no-headings      parent" data-megamenucols="3"><a href="#"><span class="menu-item-text">Features</span></a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item-11890 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sf-std-menu         parent"><a href="#">Features 1</a>
                                                            <ul class="sub-menu">
                                                                <li class="menu-item-10098 menu-item menu-item-type-custom menu-item-object-custom sf-std-menu        "><a href="#">WooCommerce 2.0</a></li>
                                                                <li class="menu-item-10097 menu-item menu-item-type-custom menu-item-object-custom sf-std-menu        "><a href="#">Super Search</a></li>
                                                                <li class="menu-item-6494 menu-item menu-item-type-custom menu-item-object-custom sf-std-menu        "><a href="#">Retina-Ready</a></li>
                                                                <li class="menu-item-6483 menu-item menu-item-type-custom menu-item-object-custom sf-std-menu        "><a href="#">Fully Responsive</a></li>
                                                                <li class="menu-item-10278 menu-item menu-item-type-custom menu-item-object-custom sf-std-menu        "><a href="#">Parallax Elements</a></li>
                                                                <li class="menu-item-6492 menu-item menu-item-type-custom menu-item-object-custom sf-std-menu        "><a href="#">Swift Page Builder</a></li>
                                                                <li class="menu-item-6485 menu-item menu-item-type-custom menu-item-object-custom sf-std-menu        "><a href="#">Header Examples</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item-11891 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sf-std-menu         parent"><a href="#">Features 2</a>
                                                            <ul class="sub-menu">
                                                                <li class="menu-item-6501 menu-item menu-item-type-custom menu-item-object-custom sf-std-menu        "><a href="#">Boxed / Full-width</a></li>
                                                                <li class="menu-item-6486 menu-item menu-item-type-custom menu-item-object-custom sf-std-menu        "><a href="#">Revolution Slider</a></li>
                                                                <li class="menu-item-6488 menu-item menu-item-type-custom menu-item-object-custom sf-std-menu        "><a href="#">Stunning Swift Slider</a></li>
                                                                <li class="menu-item-6489 menu-item menu-item-type-custom menu-item-object-custom sf-std-menu        "><a href="#">Font Awesome Icons</a></li>
                                                                <li class="menu-item-6490 menu-item menu-item-type-custom menu-item-object-custom sf-std-menu        "><a href="#">Custom Colors</a></li>
                                                                <li class="menu-item-6491 menu-item menu-item-type-custom menu-item-object-custom sf-std-menu        "><a href=#">Asset Backgrounds</a></li>
                                                                <li class="menu-item-6496 menu-item menu-item-type-custom menu-item-object-custom sf-std-menu        "><a href="#">100% Translatable</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item-11892 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sf-std-menu         parent"><a href="#">Features 3</a>
                                                            <ul class="sub-menu">
                                                                <li class="menu-item-6493 menu-item menu-item-type-custom menu-item-object-custom sf-std-menu        "><a href="#">Demo Content Included</a></li>
                                                                <li class="menu-item-6497 menu-item menu-item-type-custom menu-item-object-custom sf-std-menu        "><a href="#">Font Deck</a></li>
                                                                <li class="menu-item-6498 menu-item menu-item-type-custom menu-item-object-custom sf-std-menu        "><a href="#">600+ Google Fonts</a></li>
                                                                <li class="menu-item-6499 menu-item menu-item-type-custom menu-item-object-custom sf-std-menu        "><a href="#">Font Size Options</a></li>
                                                                <li class="menu-item-6484 menu-item menu-item-type-custom menu-item-object-custom sf-std-menu        "><a href="#">Five Star Support</a></li>
                                                                <li class="menu-item-6500 menu-item menu-item-type-custom menu-item-object-custom sf-std-menu        "><a href="#">Extensive Theme Options</a></li>
                                                                <li class="menu-item-6502 menu-item menu-item-type-custom menu-item-object-custom sf-std-menu        "><a href="#">Powerful Page Meta</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-6474 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sf-mega-menu sf-mega-menu-natural-width  no-headings      parent" data-megamenucols="3"><a href="#"><span class="menu-item-text">Pages</span></a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item-11898 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sf-std-menu         parent"><a href="#">Pages 1</a>
                                                            <ul class="sub-menu">
                                                                <li class="menu-item-9256 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#">About Us</a></li>
                                                                <li class="menu-item-9264 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#">About Us 2</a></li>
                                                                <li class="menu-item-9252 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#">Contact</a></li>
                                                                <li class="menu-item-9259 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#">Contact 2</a></li>
                                                                <li class="menu-item-9907 menu-item menu-item-type-post_type menu-item-object-page  sf-std-menu        "><a href="#">Delivery &amp; Returns</a></li>
                                                                <li class="menu-item-9225 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#">Help Centre / F.A.Q.</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item-11899 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sf-std-menu         parent"><a href="#">Pages 2</a>
                                                            <ul class="sub-menu">
                                                                <li class="menu-item-9224 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#">Services &amp; Capabilities</a></li>
                                                                <li class="menu-item-9227 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#">Meet the team</a></li>
                                                                <li class="menu-item-9909 menu-item menu-item-type-post_type menu-item-object-page  sf-std-menu        "><a href="#">Payment</a></li>
                                                                <li class="menu-item-9263 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#>Pricing</a></li>
                                                                                                                                                                                   <li class="menu-item-9908 menu-item menu-item-type-post_type menu-item-object-page  sf-std-menu        "><a href="#">Privacy</a></li>
                                                                <li class="menu-item-9906 menu-item menu-item-type-post_type menu-item-object-page  sf-std-menu        "><a href="#">Stores</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item-11900 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sf-std-menu         parent"><a href="#">Pages 3</a>
                                                            <ul class="sub-menu">
                                                                <li class="menu-item-9261 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#">Default Page (Sidebar Right)</a></li>
                                                                <li class="menu-item-9260 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#">Default Page (Sidebar Left)</a></li>
                                                                <li class="menu-item-9184 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#">Default Page (Dual Sidebars)</a></li>
                                                                <li class="menu-item-9262 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#">Default Page (Full-width)</a></li>
                                                                <li class="menu-item-6478 menu-item menu-item-type-custom menu-item-object-custom sf-std-menu        "><a href="#">404</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-6479 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sf-mega-menu sf-mega-menu-fw  no-headings      parent" data-megamenucols="4"><a href="#"><span class="menu-item-text">Shortcodes</span></a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item-11894 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sf-std-menu         parent"><a href="#">Shortcodes 1</a>
                                                            <ul class="sub-menu">
                                                                <li class="menu-item-9198 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#">Accordion</a></li>
                                                                <li class="menu-item-9210 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#">Boxed Content</a></li>
                                                                <li class="menu-item-9216 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#">Buttons</a></li>
                                                                <li class="menu-item-9223 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#">Columns</a></li>
                                                                <li class="menu-item-9222 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#">Dividers</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item-11895 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sf-std-menu         parent"><a href="#">Shortcodes 2</a>
                                                            <ul class="sub-menu">
                                                                <li class="menu-item-9220 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#">Dropcaps, Ampersand &amp; Highlighter</a></li>
                                                                <li class="menu-item-9254 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#/">Swift Charts &amp; Progress Bars</a></li>
                                                                <li class="menu-item-9215 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#">Google Charts</a></li>
                                                                <li class="menu-item-9251 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#">Google Maps</a></li>
                                                                <li class="menu-item-9245 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#">Icons &amp; Links with icons</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item-11896 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sf-std-menu         parent"><a href="#">Shortcodes 3</a>
                                                            <ul class="sub-menu">
                                                                <li class="menu-item-9214 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#">Images, Videos &amp; Lightbox</a></li>
                                                                <li class="menu-item-9211 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#">Lists</a></li>
                                                                <li class="menu-item-9219 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#">Message Boxes / Alerts</a></li>
                                                                <li class="menu-item-9212 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#">Pricing Tables</a></li>
                                                                <li class="menu-item-9217 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#">Quotes</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item-11897 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sf-std-menu         parent"><a href="#">Shortcodes 4</a>
                                                            <ul class="sub-menu">
                                                                <li class="menu-item-9218 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#">Social Icons</a></li>
                                                                <li class="menu-item-9213 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#">Tables</a></li>
                                                                <li class="menu-item-9221 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#">Tabs</a></li>
                                                                <li class="menu-item-10142 menu-item menu-item-type-post_type menu-item-object-page  sf-std-menu        "><a href="#">Tour</a></li>
                                                                <li class="menu-item-9192 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#">Typography</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-6475 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sf-std-menu         parent"><a href="#"><span class="menu-item-text">Portfolio</span></a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item-9191 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#">Standard Single Column</a></li>
                                                        <li class="menu-item-9188 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#">Standard 2 Column</a></li>
                                                        <li class="menu-item-9187 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#">Standard 3 Column</a></li>
                                                        <li class="menu-item-9185 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#">Standard 4 Column</a></li>
                                                        <li class="menu-item-9190 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#">Gallery 2 Column</a></li>
                                                        <li class="menu-item-9189 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#">Gallery 3 Column</a></li>
                                                        <li class="menu-item-9186 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#">Gallery 4 Column</a></li>
                                                        <li class="menu-item-6481 menu-item menu-item-type-custom menu-item-object-custom sf-std-menu        "><a href="#">Page Builder Portfolio Item 1</a></li>
                                                        <li class="menu-item-6482 menu-item menu-item-type-custom menu-item-object-custom sf-std-menu        "><a href="#">Page Builder Portfolio Item 2</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-6476 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sf-std-menu         parent"><a href="#"><span class="menu-item-text">Blog</span></a>
                                                    <ul class="sub-menu" style="display: none;">
                                                        <li class="menu-item-9235 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#">Standard with no sidebars</a></li>
                                                        <li class="menu-item-9236 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#">Standard with right sidebar</a></li>
                                                        <li class="menu-item-9237 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#">Standard with left sidebar</a></li>
                                                        <li class="menu-item-9234 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#">Standard with both sidebars</a></li>
                                                        <li class="menu-item-9233 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#">Mini with right sidebar</a></li>
                                                        <li class="menu-item-9231 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#">Mini with left sidebar</a></li>
                                                        <li class="menu-item-9238 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#">Mini with Both Sidebars</a></li>
                                                        <li class="menu-item-9232 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#">Mini with no sidebars</a></li>
                                                        <li class="menu-item-9229 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#">Masonry with no sidebars</a></li>
                                                        <li class="menu-item-9230 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#">Masonry with right sidebar</a></li>
                                                        <li class="menu-item-9228 menu-item menu-item-type-post_type menu-item-object-page default sf-std-menu        "><a href="#">Masonry with left sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-10288 menu-item menu-item-type-post_type menu-item-object-page  sf-std-menu        "><a href="#"><span class="menu-item-text">Whatâ€™s New</span></a></li>
                                            </ul></div></nav>
                                </div>
                                <div class="col-md-3 header-right">
                                    <nav class="std-menu">
                                        <ul class="menu">
                                            <li class="menu-search no-hover parent"><a href="#"><i class="fa-search"></i></a>
                                                <ul class="sub-menu">
                                                    <li><div class="ajax-search-wrap"><div class="ajax-loading"></div><form method="get" class="ajax-search-form" action="#"><input type="text" placeholder="Search" name="s" autocomplete="off"></form><div class="ajax-search-results"></div></div></li>
                                                </ul>
                                            </li>

                                            <li class="parent shopping-bag-item">
                                                <a class="cart-contents" href="#" title="View your shopping bag"><i class="sf-cart"></i><span class="amount">Â£0.00</span></a>

                                                <ul class="sub-menu" style="display: none;">
                                                    <li>
                                                        <div class="shopping-bag">


                                                            <div class="bag-header">0 items in the shopping bag</div>

                                                            <div class="bag-empty">Unfortunately, your shopping bag is empty.</div>

                                                            <div class="bag-buttons">


                                                                <a class="sf-roll-button shop-button" href="#"><span>Go to the shop</span><span>Go to the shop</span></a>

                                                            </div>


                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="parent wishlist-item"><a class="wishlist-link" href="#" title="View your wishlist"><i class="fa-star"></i><span>0</span></a><ul class="sub-menu"><li><div class="wishlist-bag"><div class="bag-header">My wishlist on Neighborhood</div><div class="bag-contents"><div class="wishlist-empty">Your wishlist is currently empty.</div></div><div class="bag-buttons"><a class="sf-roll-button shop-button" href="#"><span>Go to your wishlist</span><span>Go to your wishlist</span></a></div></div></li></ul></li></ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mod-custom-body2">
            <section class="row fw-row content-width asset-bg ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 " style="height:40px;"> 
                        </div>
                    </div>
                </div>
            </section>

            <section class="row fw-row content-width asset-bg alt-nine">
                <div class="container">
                    <div class="row">
                        <div class="spb_impact_text spb_content_element clearfix span12 cta_align_right mt0 mb0 bt0 bb0">
                            <div class="impact-text-wrap clearfix">
                                <div class="spb_call_text">
                                    <p>&nbsp;</p>
                                    <h3 style="text-transform: uppercase;">Free international shipping! offer ends May 20th 2013</h3>
                                    <p>&nbsp;</p>
                                </div>
                                <a class="impact-text-arrow arrow-right" href="#" target="_self">
                                    <div class="right">
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="row fw-row content-width asset-bg ">
                <div class="container">
                    <div class="row">
                        <div class="blank_spacer span12 " style="height:50px;">

                        </div>
                    </div>

                </div>
            </section>

            <section class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="spb_wrapper">
                            <h4 class="spb_heading">
                                <span>Best sellers</span>
                            </h4>
                            <ul class="mini-list mini-best-sellers">
                                <li class="clearfix" itemscope="" itemtype="#">
                                    <figure>
                                        <a href="#">
                                            <img itemprop="image" src="images/lvc-jeans-whased-blue001-70x70.jpg" width="70" height="70" alt="lvc-jeans-whased-blue001">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h5 itemprop="name">
                                            <a href="#">Leviâ€™s â€“ 1967 505 Jeans</a>
                                        </h5>
                                        <span class="product-cats"> 
                                            <a href="#" rel="tag">Trousers</a>
                                        </span>
                                        <span class="price" itemprop="price">
                                            <span class="amount">Â£170.00</span>

                                        </span>
                                    </div>
                                </li>
                                <li class="clearfix" itemscope="" itemtype="#">
                                    <figure>
                                        <a href="#">
                                            <img itemprop="image" src="images/mismo-bag-grey001-70x70.jpg" width="70" height="70" alt="mismo-bag-grey001"></a></figure><div class="product-details"><h5 itemprop="name">
                                            <a href="#">Mismo â€“ Briefcase</a>
                                        </h5>
                                        <span class="product-cats"> 
                                            <a href="#" rel="tag">Accessories</a>,
                                            <a href="#" rel="tag">Briefcase</a>
                                        </span>
                                        <span class="price" itemprop="price">
                                            <span class="amount">Â£375.00</span>

                                        </span>
                                    </div></li>
                                <li class="clearfix" itemscope="" itemtype="#">
                                    <figure>
                                        <a href="#">
                                            <img itemprop="image" src="images/ol-suade-jacket-grey001-70x70.jpg" width="70" height="70" alt="ol-suade-jacket-grey001"></a></figure><div class="product-details"><h5 itemprop="name">
                                            <a href="#">Our Legacy â€“ Suede Shirt</a>
                                        </h5><span class="product-cats"> 
                                            <a href="#" rel="tag">Shirts</a>
                                        </span><span class="price" itemprop="price">
                                            <span class="amount">Â£460.00</span>

                                        </span></div></li></ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="spb_wrapper">
                            <h4 class="spb_heading"><span>Top rated</span></h4>
                            <ul class="mini-list mini-top-rated">
                                <li class="clearfix" itemscope="" itemtype="#"><figure>
                                        <a href="#">
                                            <img itemprop="image" src="images/mismo-bag-grey001-70x70.jpg" width="70" height="70" alt="mismo-bag-grey001"></a></figure><div class="product-details"><h5 itemprop="name">
                                            <a href="#">Mismo â€“ Briefcase</a>
                                        </h5><span class="price" itemprop="price"><span class="amount">Â£375.00</span></span></div></li>
                                <li class="clearfix" itemscope="" itemtype="#"><figure><a href="#">
                                            <img itemprop="image" src="images/barena-blazer-blue001_1-70x70.jpg" width="70" height="70" alt="barena-blazer-blue001_1"></a></figure><div class="product-details"><h5 itemprop="name">
                                            <a href="#">Barena â€“ Torceo Jacket</a></h5>
                                        <span class="price" itemprop="price"><span class="amount">Â£300.00</span></span></div></li>
                                <li class="clearfix" itemscope="" itemtype="#"><figure>
                                        <a href="#"><img itemprop="image" src="images/nike-roshe-run-mid-qs-tko-001-70x70.jpg" width="70" height="70" alt="nike-roshe-run-mid-qs-tko-001"></a></figure><div class="product-details"><h5 itemprop="name">
                                            <a href="#">Nike â€“ Roshe Run</a></h5>
                                        <span class="price" itemprop="price">
                                            <span class="amount">Â£85.00</span></span>
                                    </div></li></ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="spb_wrapper">
                            <h4 class="spb_heading"><span>Sale products</span></h4>
                            <ul class="mini-list mini-sale-products">
                                <li class="clearfix" itemscope="" itemtype="#"><figure>
                                        <a href="#">
                                            <img itemprop="image" src="images/bunney-braslett001-70x70.jpg" width="70" height="70" alt="bunney-braslett001"></a></figure><div class="product-details"><h5 itemprop="name">
                                            <a href="#">Bunney â€“ Identity Bangle</a>
                                        </h5><span class="product-cats"> 
                                            <a href="#" rel="tag">Jewellery</a></span><span class="price" itemprop="price"><del><span class="amount">Â£365.00</span></del> <ins><span class="amount">Â£295.00</span></ins></span></div></li>
                                <li class="clearfix" itemscope="" itemtype="#"><figure><a href="#">
                                            <img itemprop="image" src="images/adidas-grey-red001_1-70x70.jpg" width="70" height="70" alt="adidas-grey-red001_1"></a></figure><div class="product-details"><h5 itemprop="name">
                                            <a href="#">Adidas â€“ Boston Super OG</a></h5><span class="product-cats"> 
                                            <a href="#" rel="tag">Footwear</a>,
                                            <a href="#" rel="tag">Sneakers</a>
                                        </span>
                                        <span class="price" itemprop="price"><del>
                                                <span class="amount">Â£105.00</span></del> 
                                            <ins><span class="amount">Â£85.00</span>
                                            </ins></span></div>
                                </li></ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="spb_wrapper">
                            <h4 class="spb_heading"><span>Featured</span></h4>
                            <div class="carousel-wrap"><div id="carousel-2" class="blog-items carousel-items clearfix owl-carousel owl-theme" data-columns="1" style="margin-left: -15px; width: 300px; opacity: 1; display: block;"><div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 600px; left: 0px; display: block;"><div class="owl-item" style="width: 300px;">
                                                <div itemscope="" data-id="id-0" class="clearfix carousel-item recent-post span3"><figure>
                                                        <a href=#" class="link-to-post"><div class="overlay"><div class="thumb-info"><i class="fa-file-text-o"></i></div></div>
                                                            <img itemprop="image" src="images/sharp_suit_thumb_max43-420x315.jpg" width="300" height="250" alt="Sharp Summer Suits"></a></figure><div class="details-wrap"></div></div></div></div></div></div><a href="#" class="carousel-prev" style="display: none;">
                                    <i class="fa-chevron-left"></i></a><a href="#" class="carousel-next" style="display: none;"><i class="fa-chevron-right"></i></a></div>
                        </div>
                    </div> </div></section>

            <section class="row fw-row content-width asset-bg ">
                <div class="container">
                    <div class="row">
                        <div class="blank_spacer span12 " style="height:43px;">            
                        </div>
                    </div>     
                </div>
            </section>
            
            <section class="container">
                <div class="row">
                    <div class="spb_posts_carousel_widget spb_content_element span12">
                        <div class="spb_wrapper">
                            <h4 class="spb_heading">
                                <span>Latest articles</span>
                            </h4>
                            <div class="carousel-wrap">
                                <div id="carousel-3" class="blog-items carousel-items clearfix owl-carousel owl-theme" data-columns="4" style="margin-left: -15px; width: 754px; opacity: 1; display: block;">
                                    <div class="owl-wrapper-outer">
                                        <div class="owl-wrapper" style="width: 2008px; left: 0px; display: block;">
                                            <div class="owl-item" style="width: 251px;">
                                                <div itemscope="" data-id="id-0" class="clearfix carousel-item recent-post span3">
                                                    <figure>
                                                        <a href="#" class="link-to-post">
                                                            <div class="overlay">
                                                                <div class="thumb-info">
                                                                    <i class="fa-file-text-o"></i>
                                                                </div>
                                                            </div>
                                                            <img itemprop="image" src="images/EYTYS_canvas_green02_ext-420x315.jpg" width="420" height="315" alt="Neighborhood exclusive: Eytys">
                                                        </a>
                                                    </figure>
                                                    <div class="details-wrap">
                                                        <h5>
                                                            <a href="#">Neighborhood exclusive: Eytys</a>
                                                        </h5>
                                                        <div class="post-details">By <a href="#" title="Visit Swift Ideas’s website" rel="author external">Swift Ideas</a> on June 7, 2013</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 251px;">
                                                <div itemscope="" data-id="id-1" class="clearfix carousel-item recent-post span3">
                                                    <figure>
                                                        <a href="#" class="link-to-post">
                                                            <div class="overlay">
                                                                <div class="thumb-info">
                                                                    <i class="fa-file-text-o"></i>
                                                                </div>
                                                            </div>
                                                            <img itemprop="image" src="images/fanman-mag_thumb43v2-420x315.jpg" width="420" height="315" alt="Neighborhood vs Fantastic Man">
                                                        </a>
                                                    </figure>
                                                    <div class="details-wrap">
                                                        <h5>
                                                            <a href="#">Neighborhood vs Fantastic Man</a></h5><div class="post-details">By <a href="#" title="Visit Swift Ideas’s website" rel="author external">Swift Ideas</a> on June 6, 2013</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 251px;">
                                                <div itemscope="" data-id="id-2" class="clearfix carousel-item recent-post span3">
                                                    <figure>
                                                        <a href="#" class="link-to-post">
                                                            <div class="overlay">
                                                                <div class="thumb-info">
                                                                    <i class="fa-file-text-o"></i>
                                                                </div>
                                                            </div>
                                                            <img itemprop="image" src="images/sharp_suit_thumb_max43-420x315.jpg" width="420" height="315" alt="Sharp Summer Suits">
                                                        </a>
                                                    </figure>
                                                    <div class="details-wrap">
                                                        <h5>
                                                            <a href="#">Sharp Summer Suits</a>
                                                        </h5>
                                                        <div class="post-details">By <a href="#" title="Visit Swift Ideas’s website" rel="author external">Swift Ideas</a> on June 6, 2013</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 251px;">
                                                <div itemscope="" data-id="id-3" class="clearfix carousel-item recent-post span3">
                                                    <figure>
                                                        <div class="flexslider thumb-slider">
                                                            <ul class="slides">
                                                                <li class="flex-active-slide" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;">
                                                                    <a href="#" class="link-to-post">
                                                                        <img src="images/office3-600x450.jpg" width="1910" height="1074" alt="office3" draggable="false">
                                                                    </a>
                                                                </li>
                                                                <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
                                                                    <a href="#" class="link-to-post">
                                                                        <img src="images/office2-600x450.jpg" width="1910" height="1074" alt="office2" draggable="false">
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                            <ul class="flex-direction-nav">
                                                                <li>
                                                                    <a class="flex-prev" href="#">Previous</a>
                                                                </li>
                                                                <li>
                                                                    <a class="flex-next" href="#">Next</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </figure>
                                                    <div class="details-wrap">
                                                        <h5>
                                                            <a href="#">Page Builder Post 1</a>
                                                        </h5>
                                                        <div class="post-details">By <a href="#" title="Visit Swift Ideas’s website" rel="author external">Swift Ideas</a> on March 12, 2013</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="carousel-prev disabled">
                                    <i class="fa-chevron-left"></i>
                                </a>
                                <a href="#" class="carousel-next">
                                    <i class="fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div> </div>
            </section>
        </div>

        <div class="mod-custom-footer">
            <section id="footer" class="">
                <div class="container">
                    <div id="footer-widgets" class="row clearfix">
                        <div class="col-md-3">
                            <section id="text-3" class="widget widget_text clearfix">
                                <div class="widget-heading clearfix">
                                    <h4>
                                        <span>Welcome to Neighborhood</span>
                                    </h4>
                                </div> 
                                <div class="textwidget"><br>
                                    <img class="alignnone size-full wp-image-9920" alt="welcome" src="images/welcome.png" width="215" height="44">
                                    <br>
                                    <br>
                                    Neighborhood is a clean, responsive &amp; retina-ready eCommerce WordPress theme. It has everything you need to start selling today!
                                    <br>
                                    <br>
                                    <br>
                                </div>
                            </section>
                        </div>
                        <div class="col-md-3">
                            <section id="nav_menu-6" class="widget widget_nav_menu clearfix">
                                <div class="widget-heading clearfix">
                                    <h4>
                                        <span>About Neighborhood</span>
                                    </h4>
                                </div>
                                <div class="menu-footer-menu-1-container">
                                    <ul id="menu-footer-menu-1" class="menu">
                                        <li id="menu-item-9910" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9910 default"><a href="#">Our Story</a></li>
                                        <li id="menu-item-9913" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9913 "><a href="#">Stores</a></li>
                                        <li id="menu-item-9912" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9912 default"><a href="#">Press</a></li>
                                        <li id="menu-item-9911" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9911 default"><a href="#">Events</a></li>
                                        <li id="menu-item-9914" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9914 default"><a href="#">Contact</a></li>
                                    </ul>
                                </div>
                            </section> 
                        </div>
                        <div class="col-md-3">
                            <section id="nav_menu-7" class="widget widget_nav_menu clearfix">
                                <div class="widget-heading clearfix">
                                    <h4>
                                        <span>Online Shopping</span>
                                    </h4>
                                </div>
                                <div class="menu-footer-menu-2-container">
                                    <ul id="menu-footer-menu-2" class="menu">
                                        <li id="menu-item-9915" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9915 default"><a href="#">F.A.Q.’s</a></li>
                                        <li id="menu-item-9916" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9916 "><a href="#">Delivery &amp; Returns</a></li>
                                        <li id="menu-item-9919" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9919 "><a href="#">Ordering Tracking</a></li>
                                        <li id="menu-item-9918" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9918 "><a href="#">Payment</a></li>
                                        <li id="menu-item-9917" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9917 "><a href="#">Privacy</a></li>
                                    </ul>
                                </div>
                            </section>
                        </div>
                        <div class="col-md-3">
                            <section id="text-4" class="widget widget_text clearfix">
                                <div class="widget-heading clearfix">
                                    <h4>
                                        <span>Follow Us</span>
                                    </h4>
                                </div> 
                                <div class="textwidget">
                                    <ul class="social-icons standard light">
                                        <li class="dribbble"><a href="#" target="_blank">Dribbble</a></li>
                                        <li class="facebook"><a href="#" target="_blank">Facebook</a></li>
                                        <li class="twitter"><a href="#" target="_blank">Twitter</a></li>
                                        <li class="vimeo"><a href="#" target="_blank">Vimeo</a></li>
                                        <li class="youtube"><a href="#" target="_blank">YouTube</a></li>
                                        <li class="tumblr"><a href="#" target="_blank">Tumblr</a></li>
                                    </ul>
                                    <hr>
                                    <p style="margin-bottom: 10px;">Sign up for our newsletter:</p>
                                    <div id="mc_embed_signup">
                                        <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" novalidate="">
                                            <input value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter your email address here" style="margin-bottom: 0;" required="" type="email">
                                            <div class="clear"><input value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button" style="visibility:hidden;" type="submit"></div>
                                        </form>
                                    </div></div>
                            </section> </div>
                    </div>
                </div>

            </section>

            <footer id="copyright" class="">
                <div class="container">
                    <p class="twelve columns">©2016 Neighborhood · Built with love by <a href="#">Swift Ideas</a> using <a href="#" target="_blank">WordPress</a>. <a href="#">Premium WordPress Themes by Swift Ideas</a></p>
                    <div class="beam-me-up three columns offset-by-one">
                        <a href="#">
                            <i class="fa fa-arrow-up"></i>
                        </a>
                    </div>
                </div>

            </footer>
        </div>
    </body>

</html>