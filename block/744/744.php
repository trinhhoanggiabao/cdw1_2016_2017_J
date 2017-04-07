<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/sliderShow.js" type="text/javascript"></script>
        <script src="js/newjavascript.js" type="text/javascript"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('./less/744.less', 'css/744.css');
        ?>
        <link href="css/744.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
       <div class="M5-Footer">
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3 col-xs-6 footer_block footer_block__1">
                            <h2>Information</h2>
                            <ul class="footer_links">

                                <li><a href="/" title="">Home</a></li>

                                <li><a href="/search" title="">Search</a></li>

                                <li><a href="/pages/about-us" title="">About us</a></li>

                                <li><a href="/blogs/blog" title="">Blog</a></li>

                            </ul>
                        </div>

                        <div class="col-sm-3 col-xs-6 footer_block footer_block__2">
                            <h2>Collections</h2>
                            <ul class="footer_links">

                                <li><a href="/collections/bakeware" title="">Bakeware</a></li>

                                <li><a href="/collections/cookware-sets" title="">Cookware sets</a></li>

                                <li><a href="/collections/cooking-utensils" title="">Cooking Utensils</a></li>

                                <li><a href="/collections/cooks-tools" title="">Cooks' Tools</a></li>

                            </ul>
                        </div>

                        <div class="col-sm-3 col-xs-6 footer_block footer_block__3">
                            <h2>Customer service</h2>
                            <ul class="footer_links">

                                <li><a href="/pages/contact-us" title=""> Contact us</a></li>

                                <li><a href="/pages/sitemap" title="">Sitemap</a></li>

                                <li><a href="/pages/wishlist" title="">Wishlist</a></li>

                            </ul>
                        </div> 

                        <div class="col-sm-3 col-xs-6 footer_block footer_block__4">
                            <h2>My account</h2>
                            <ul class="footer_links">

                                <li><a href="/account" title="">My account</a></li>

                                <li><a href="/account/addresses" title="">My addresses</a></li>

                                <li><a href="/cart" title="">My cart</a></li>

                            </ul>
                        </div>    
                    </div>

                </div>
                <div class="copyright">
                    <div class="container">
                        <p role="contentinfo">

                            <img src="images/footer_logo.png" alt=""/>
                            © 2016 Cook. All rights reserved. <a target="_blank" rel="nofollow" href="https://www.shopify.com">Powered by Shopify</a></p>
                    </div>
                </div>

            </footer>
        </div>
    </body>
</html>