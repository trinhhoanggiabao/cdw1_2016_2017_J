<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/740.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/740.less', 'css/740.css');
        ?>
        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-740">
            <div class="header">
                <div class="container">
                    <div id="switch">
                        <div class="switch-money">
                            <div class="dropdown">
                                <button class="dropdown-toggle" type="button" data-toggle="dropdown">$
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu pull-right">
                                    <li class="item-topmenu"><a href="#">€ Euro</a></li>
                                    <li class="item-topmenu"><a href="#">£ Pound Sterling</a></li>
                                    <li class="item-topmenu"><a href="#">$ US Dollar</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="switch-language">
                            <div class="dropdown">
                                <button class="dropdown-toggle" type="button" data-toggle="dropdown">En
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu pull-right">
                                    <li class="item-topmenu"><a href="#">English</a></li>
                                    <li class="item-topmenu"><a href="#">Deutsch</a></li>
                                    <li class="item-topmenu"><a href="#">Русский</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-4 col-xs-6 mobile">
                            <div id="logo">
                                <a href="#"><img src="images/logo.png"></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-5 col-xs-6 mobile">
                            <div id="search">
                                <input type="text" placeholder="Search"><button type="button" class="button-search">Search</button>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div id="phone">
                                <a href="#"><i class="fa fa-phone"></i></a>
                                <span>800-2345-6789</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>