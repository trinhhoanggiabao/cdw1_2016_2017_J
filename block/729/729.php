<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/729.less', 'css/729.css');
        ?>
        <link href="css/type_b_chitiet_menu.css" rel="stylesheet" type="text/css" />



    </head>

    <body>
        <div class="729">
            <div class="container">
                <!--=====Phan navber catogery====-->
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span> 
                        </button>
                        <div class="logo" data-toggle="collapse" data-target="#myNavbar">
                            <a class="navbar-brand" href="#">MENU</a>
                        </div>
                    </div>
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
                <!--=======phan product=======--->
                <div class="product">
                    <h4>SPECIAL PRODUCTS</h4>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="thumb-image">
                                <img src="images/1_4.jpg" alt="" />
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="text">
                                Arcu vitae i..				 
                            </div>
                            <div class="price-product">
                                <span class="money1">$860.00</span> <span class="money2">$800</span>
                            </div>
                            <div class="addtocart">
                                Add to cart
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="thumb-image">
                                <img src="images/7_3_4.jpg" alt="" />
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="text">
                                ifashion ips..				 
                            </div>
                            <div class="price-product">
                                <span class="money1">$770.00</span> <span class="money2">$860</span>
                            </div>
                            <div class="addtocart">
                                Add to cart
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="thumb-image">
                                <img src="images/17_1_5_1.jpg" alt="" />
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="text">
                                Established ..			 
                            </div>
                            <div class="price-product">
                                <span class="money1">$400.00</span> <span class="money2">$325</span>
                            </div>
                            <div class="addtocart">
                                Add to cart
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="clearfix"></div>
                <!---=======phan sop by brand --->

                <div class="shopbybrand">
                    <ul>
                        <li><a href="#" class="active"> SHOP BY BRAND</a></li>
                        <li><a href="#">Airtel </a></li>
                        <li><a href="#">Apple</a></li>
                        <li><a href="#">Docomo </a></li>
                        <li><a href="#">Idea</a></li>
                        <li><a href="#">lenovo</a></li>
                        <li><a href="#">Lorem</a></li>
                        <li><a href="#">Samaung</a></li>
                        <li><a href="#">Vodafone</a></li>
                        <li><a href="#">Gionee</a></li>
                        <li><a href="#">HCL</a></li>
                        <li><a href="#">HTC</a></li>
                        <li><a href="#">Lava</a></li>
                        <li><a href="#">Navneet</a></li>
                        <li><a href="#">Nokia</a></li>
                        <li><a href="#">Tata</a></li>
                        <li><a href="#">Riliance</a></li>
                    </ul>
                </div>
                <hr>
                <div class="clearfix"></div>

                <!--======phan image bottom banner----->
                <div class="image-bottom">
                    <img src="images/left-banner.jpg" alt=""/>
                </div>
            </div>
        </div>
    </div>
</body>

</html>