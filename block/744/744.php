<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
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
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 col-xs-6 footer_block">
                        <div class="type-744">
                            <h2>Information</h2>
                            <ul class="footer_links">
                                <li><a href="#" title="">Home</a></li>
                                <li><a href="#" title="">Search</a></li>
                                <li><a href="#" title="">About us</a></li>
                                <li><a href="#" title="">Blog</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6 footer_block">
                        <div class="type-744">
                            <h2>Collections</h2>
                            <ul class="footer_links">
                                <li><a href="#" title="">Bakeware</a></li>
                                <li><a href="#" title="">Cookware sets</a></li>
                                <li><a href="#" title="">Cooking Utensils</a></li>
                                <li><a href="#" title="">Cooks' Tools</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6 footer_block">
                        <div class="type-744">
                            <h2>Customer service</h2>
                            <ul class="footer_links">
                                <li><a href="#" title=""> Contact us</a></li>
                                <li><a href="#" title="">Sitemap</a></li>
                                <li><a href="#" title="">Wishlist</a></li>
                            </ul>
                        </div>
                    </div> 
                    <div class="col-sm-3 col-xs-6 footer_block">
                        <div class="type-744">
                            <h2>My account</h2>
                            <ul class="footer_links">
                                <li><a href="#" title="">My account</a></li>
                                <li><a href="#" title="">My addresses</a></li>
                                <li><a href="#" title="">My cart</a></li>
                            </ul>
                        </div>
                    </div>    
                </div>
            </div>
            <div class="type-744">
                <div class="copyright">
                    <div class="container">
                        <p role="contentinfo">
                            <img src="images/footer_logo.png" alt=""/>
                            © 2016 Cook. All rights reserved. <a target="_blank" rel="nofollow" href="#">Powered by Shopify</a></p>
                    </div>
                </div>
            </div>
        </footer>

    </body>
</html>