<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.min.js"type="text/javascript"></script>
        <script src="js/bootstrap.min.js"type="text/javascript"></script>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('./less/741.less', 'css/741.css');
        ?>
        <link href="css/741.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="M1-Header">
            <div class="container">
                <!-- LOGO -->
                <div class="logo_main">
                    <a href="#">
                        <img src="images/logo.png" alt=""/>
                    </a>
                </div>
                <!-- HEADER SEARCH -->
                <div class="header_search">
                    <form action="#" method="get" >
                        <input id="search-field" name="q" placeholder="Search store" type="text">
                        <button type="submit" class=" btn">Search</button>
                    </form>
                </div>
                <div class="header_right">
                    <!-- USER MENU -->
                    <ul class="header_user" >
                        <li><a href="#">My account</a></li>
                        <!-- <li ><a href="/pages/">Wishlist</a></li> -->
                        <li ><a href="#">Checkout</a></li>
                    </ul>
                    <!-- CURRENCY SWITCHER-->
                    <div class="header_currency">
                        <div class="jq-selectbox" style="top: -6px;display: inline-block; position: relative; z-index:100"><select name="" style="margin: 0px; padding: 0px; position: absolute; left: 0px; top: 0px; width: 100%; height: 100%; opacity: 0;">
                                <option value="USD" selected="selected">USD</option>
                                <option value="EUR">EUR</option>
                                <option value="GBP">GBP</option>
                            </select><div class="jq-selectbox__select" style="position: relative"><div class="jq-selectbox__select-text">USD</div><div ><div ></div><i class="fa fa-angle-down"></i></div></div><div class="jq-selectbox__dropdown" style="position: absolute; display: none;"><ul style="position: relative; list-style: none; overflow: auto; overflow-x: hidden"><li style="display: block; white-space: nowrap;">USD</li><li style="display: block; white-space: nowrap;">EUR</li><li style="display: block; white-space: nowrap;">GBP</li></ul></div></div>
                    </div>
                    <!-- HEADER CUSTOM BLOCK -->
                    <div class="header_custom">

                        <span class="icon fa fa-phone"></span>

                        <a href="callto:800-2345-6789">800-2345-6789</a>
                    </div>
                </div>
            </div>

        </div>
    </body>
</html>