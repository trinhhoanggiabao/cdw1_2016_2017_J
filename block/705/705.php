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
        $less->compileFile('less/705.less', 'css/705.css');
        ?>
        <link href="css/705.css" rel="stylesheet" type="text/css" />



    </head>

    <body>
        <header class="type-10">
            <div class="topheader">
                <div class="container">
                    <nav class="topmenu-left">
                        <ul class="top-parent-menu">
                            <li>
                                <a class="active" href="#">My Account</a>
                                <ul class="top-sub-menu">
                                    <li class="dropdown">                          
                                        <a href="#" class="sub-menu">My orders</a>
                                    </li>
                                     <li class="dropdown">                          
                                        <a href="#" class="sub-menu">My credit slips</a>
                                    </li>
                                    <li class="dropdown">                          
                                        <a href="#" class="sub-menu">My addresses</a>
                                    </li>
                                    <li class="dropdown">                          
                                        <a href="#" class="sub-menu">My personal info</a>
                                    </li>
                                    <li class="dropdown">                          
                                        <a href="#" class="sub-menu">My vouchers</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="active" href="#">My Wishlist (0)</a>
                                <ul class="top-sub-menu">
                                    <li class="dropdown">                          
                                        <a href="#" class="sub-menu">No products</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="active" href="#">Watch List (0)</a>
                                <ul class="top-sub-menu">
                                    <li class="dropdown">                          
                                        <a href="#" class="sub-menu">No viewed products yet</a>
                                    </li>
                                </ul>
                            </li>
                            <a href="#" class="sign-in catch">Sign in </a>or
                            <a href="#" class="register catch">Register</a>
                        </ul>
                    </nav>
                    <nav class="topmenu-right">
                        <ul>
                            <li class="dropdown">
                                <div class="show-countries">
                                    <img src="images/eng.jpg" alt="English">
                                    <a class="languege-en languege" href="#">English <i class="fa fa-angle-down"></i></a>
                                </div>     
                                <div class="hide-countries">
                                    <div class="countries">
                                        <img src="images/deu.jpg" alt="Deutch">
                                        <a class="languege" href="#">Deutch</a>
                                    </div>  
                                    <div class="countries">
                                        <img src="images/span.jpg" alt="Español">
                                        <a class="languege" href="#">Español</a>
                                    </div>
                                    <div class="countries">
                                        <img src="images/fra.jpg" alt="Français">
                                        <a class="languege" href="#">Français</a>
                                    </div>  
                                    <div class="countries">
                                        <img src="images/aca.jpg" alt="العربية">
                                        <a class="languege" href="#">العربية</a>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown">
                                <div class="show-money">
                                    <a class="money-active" href="#">Dollar <i class="fa fa-angle-down"></i></a>
                                </div>
                                <div class="hide-money">
                                    <div class="money">
                                        <a href="#">Euro</a>
                                    </div>  
                                    <div class="money">
                                        <a href="#">Pound</a>
                                    </div>  
                                </div>                           
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="topheader2">
                <div class="container con-menu">
                    <div class="shopping-cart">
                        <a class="cart" href="#" title="View my shopping cart">
                            <i class="fa fa-shopping-basket"></i>
                            <b>Cart:</b>
                            <span>(empty)</span>
                        </a>
                    </div>
                    <div class="logo">
                        <img src="images/logo.jpg" alt="logo">
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