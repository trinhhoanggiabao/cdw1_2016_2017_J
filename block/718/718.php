<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/718.less', 'css/718.css');
        ?>
        <link href="css/718.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="type-718">
            <div class="container">
                <!--===========phan categories=============-->
                <nav class="navbar navbar-default">
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">CATEGORIES</a></li>
                            <li><a href="#">Clothing</a></li>
                            <li><a href="#">Accessories</a></li> 
                            <li><a href="#">Tops & T-Shirts</a></li> 
                            <li><a href="#">Cardigans</a></li> 
                            <li><a href="#">Jumpers</a></li> 
                            <li><a href="#">Designer Wear</a></li> 
                            <li><a href="#">jersey tops</a></li> 
                            <li><a href="#">Blouses</a></li> 
                            <li><a href="#">Swim Wear</a></li> 
                            <li><a href="#">Skirts</a></li> 
                            <li><a href="#">Coats & Jackets</a></li> 
                        </ul>
                    </div>
                </nav>
                <hr>
                <div class="clearfix"></div>
                <!---===========phan Shop cllection==============-->
                <div class="shopcollection">
                    <ul>
                        <li ><a href="#" class="active">SHOP COLLECTION</a></li>
                        <li><a href="#">Holiday shop</a></li>
                        <li><a href="#">Fashion Essentials</a></li>
                        <li><a href="#">Work</a></li>
                        <li><a href="#">stripes</a></li>
                        <li><a href="#">Party</a></li>
                    </ul>
                </div>
                <hr>
                <div class="clearfix"></div>
                <!---===========phan wintershop==============-->
                <div class="wintershop">
                    <ul>
                        <li ><a href="#" class="active">WINTER SHOP</a></li>
                        <li><a href="#">View all</a></li>
                        <li><a href="#">Faux Fur Coats</a></li>
                        <li><a href="#">Parkas</a></li>
                        <li><a href="#">Camel Coats</a></li>
                        <li><a href="#">Giles</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>