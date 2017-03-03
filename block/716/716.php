<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/716.less', 'css/716.css');
        ?>
        <link href="css/716.css" rel="stylesheet" type="text/css" />



    </head>

    <body>
        <div class="type-716">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">En
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#">En</a></li>
                                <li><a href="#">Fr</a></li>
                                <li><a href="#">Ge</a></li>
                            </ul>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">USD
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#">AUD</a></li>
                                <li><a href="#">EUR</a></li>
                                <li><a href="#">USD</a></li>
                            </ul>
                        </div>
                        <div class="defaut">Default Welcome Msg!</div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="icon">
                            <i class="fa fa-user" aria-hidden="true"></i> <span>My account</span>
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i><span> My Wishlist</span>
                            <i class="fa fa-fax" aria-hidden="true"></i><span> Checkout</span>
                            <i class="fa fa-lock" aria-hidden="true"></i> <span>Log In</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>

</html>
