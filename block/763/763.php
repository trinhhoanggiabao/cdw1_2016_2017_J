<!DOCTYPE html>

<html>

    <head>
        <title>763</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/763.less', 'css/763.css');
        ?>
        <link href="css/763.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-763">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="bg"><a href="#"><i class="glyphicon glyphicon-home"></i><span>Home</span></a></li>
                            <li class="bg"><a href="#"><i class="glyphicon glyphicon-star-empty"></i><span>Wish List</span></a></li>
                            <li class="bg dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i><span>My Account</span><span class="caret"></span></a>
                                <ul class="item dropdown-menu">
                                    <li class="subitem"><a href="#" >REGISTER</a></li>
                                    <li class="subitem"><a href="#" >LOGIN</a></li>
                                </ul>
                            </li>
                            <li class="bg"><a href="#"><i class="glyphicon glyphicon-shopping-cart"></i><span>Shopping Cart</span></a></li>
                            <li class="bg last"><a href="#"><i class="glyphicon glyphicon-check"></i><span>Check</span></a></li>
                            <li class="cart dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-shopping-cart"></i> 0 item(s) <span class="caret"></span></a>
                                <ul class="cart-item dropdown-menu">
                                    <li class="cart-subitem">0 item(s)</li>
                                </ul>
                            </li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div><!--/.container-fluid -->
            </nav>
        </div>
    </body>
</html>