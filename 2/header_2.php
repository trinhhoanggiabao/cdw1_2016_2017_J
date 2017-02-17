<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/header_2.less', 'css/header_2.css');
        ?>
        <link href="css/header_2.css" rel="stylesheet" type="text/css" />



    </head>

    <body>
        <header class="type-10">
            <div class="topheader2">
                <div class="container">
                    <div class="shopping-cart">
                        <a class="cart" href="#" title="View my shopping cart">
                            <i class="fa fa-shopping-basket"></i>
                            <b>Cart:</b>
                            <span>(empty)</span>
                        </a>
                    </div>
                    <div class="logo">
                        <a href="#"><img src="images/logo.jpg" alt="logo"></a>
                    </div>
                    <div class="search">
                        <input type="text" id="text-search" placeholder="Search...">
                        <i class="fa fa-search"></i>
                    </div>
                </div>
            </div>
        </header>
    </body>

</html>