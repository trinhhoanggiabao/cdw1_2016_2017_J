<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('./less/741.less', 'css/741.css');
        ?>
        <link href="css/741.css" rel="stylesheet" type="text/css"/>
        <script src="js/741.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="type-741">
            <div class="container header_contai">
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
                        <button type="submit" class="btn">Search</button>
                    </form>
                </div>
                <div class="header_right">
                    <!-- USER MENU -->
                    <ul class="header_user" >
                        <li><a href="#">My account</a></li>
                        <li ><a href="#">Checkout</a></li>
                    </ul>
                    <!-- CURRENCY SWITCHER-->
                    <div class="header_currency">
                        <div class="jq-selectbox">
                            <div class="jq-selectbox_select">
                                <div class="jq-selectbox_select-text">USD</div>
                                <div class="jq-selectbox_trigger"><i class="fa fa-angle-down"></i></div>
                            </div>
                            <div class="jq-selectbox_dropdown">
                                <ul>
                                    <li>USD</li>
                                    <li>EUR</li>
                                    <li>GBP</li>
                                </ul>
                            </div>
                        </div>
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