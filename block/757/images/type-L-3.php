<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/type-L-3.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-L-3.less', 'css/type-L-3.css');
        ?>
        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/script.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-L">
            <div class="header">
                <div class="container">
                    <div id="switch">
                        <div class="switch-money">
                            <a href="#"><span>$</span>
                                <i class="fa fa-angle-down"></i></a>
                        </div>
                        <div class="switch-language">
                            <a href="#"><span>En</span>
                                <i class="fa fa-angle-down"></i></a>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3" id="logo">
                            <a href="#"><img src="images/logo.png"></a>
                        </div>
                        <div class="col-md-6" id="search">
                            <input type="text" placeholder="Search"><button type="button">Search</button>
                        </div>
                        <div class="col-md-3" id="phone">
                            <a href="#"><i class="fa fa-phone"></i></a>
                            <span>800-2345-6789</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="type-L-3">
            <div class="type-34">
                <div class="container">
                    <div class="col-md-7">



                        <div class="type-20">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="row">
                                        <div class="carousel thin" style="height: 300px;">
                                            <a class="prev"><span class="glyphicon glyphicon-chevron-up"></span></a>
                                            <div class="window">
                                                <ul class="clr">     

                                                    <li class="item">

                                                    </li>
                                                    <li class="item">
                                                        <img src="../../type-20-chitiet/images/img-chitiet-2.png" alt=""/>
                                                    </li>
                                                    <li class="item">
                                                        <img src="../../type-20-chitiet/images/img-chitiet-2.png" alt=""/>
                                                    </li>
                                                    <li class="item">
                                                        <img src="../../type-20-chitiet/images/img-chitiet-2.png" alt=""/>
                                                    </li>




                                                </ul>
                                            </div> <!-- .window -->
                                            <a class="next"><span class="glyphicon glyphicon-chevron-down"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="big-img col-md-8">
                                    <img id="img" src="images/img-chitiet-1.png">
                                </div> 
                            </div>
                        </div>



                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="row">
                            <div class="info">
                                <div class="name">
                                    <h1> 28-Inch 720p 60Hz LED TV </h1>
                                </div>
                                <div class="rating">
                                    <li class="glyphicon glyphicon-star-empty"></li>
                                    <li class="glyphicon glyphicon-star-empty"></li>
                                    <li class="glyphicon glyphicon-star-empty"></li>
                                    <li class="glyphicon glyphicon-star-empty"></li>
                                    <li class="glyphicon glyphicon-star-empty"></li>
                                    <a href="#" id="active"> 0 reviews </a>
                                    <span> / </span></li>
                                    <a href="#"> Write a reviews </a>
                                </div>
                                <div class="price">
                                    <h2> $2,000.00 </h2>
                                </div>
                                <div class="describe">
                                    <p> Brand: Samsung </p>
                                    <p> Product Code: Classic</p>
                                    <p> Availability: In Stock </p>
                                </div>
                                <div class="QTY">
                                    <p> Qty <input type="text" value="1" style="width: 50px"> </p>
                                </div>
                                <div class="btn-add" col-xs-12>
                                    <p><a href="#"> Add to Cart </a></p>
                                </div>
                                <div class="btn-other">
                                    <div class="col-md-6 col-xs-6">
                                        <div class="row">
                                            <div class="btn-love">
                                                <h4><a href="#" class="glyphicon glyphicon-heart-empty"> </a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-6">
                                        <div class="row">
                                            <div class="btn-compare">
                                                <h4><a href="#" class="glyphicon glyphicon-transfer"> </a></h4>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div><!--end banner-->

                    <!--Description-->
                    <div class="col-md-12">
                        <div class="row">
                            <div class="description">
                                <h3> Description </h3>
                            </div>
                            <div class="col-md-5 col-xs-12">
                                <div class="row">
                                    <div class="video">
                                        <iframe src="https://www.youtube.com/embed/_B_tV0ISHv0?%20Rel=0&controls=0&showinfo=0&wmode=transparent" style="width: 99%;"> </iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-xs-12">
                                <div class="row">
                                    <div class="text">
                                        <p> Comfort is a very important thing nowadays because it is a condition of satisfaction and calmness. It is clear that our way of life must be as <b>comfortable</b> as possible. Home electronics satisfy our wishes and make our life more pleasant. We must admit that our way of life depends on quality of different goods of popular brands. Many of our clients were surprised by the incredible assortment of products in our store. You know, we have many devoted customers all over the world, and this fact proves that we sell only quality commodities. Recipe of our success is a fair price and premium quality. We understand that it is very complicated to amaze present clients, they are so whimsical, but our products are very flexible and reliable.</p>
                                        <p> Here you can find something more than just home electronics; you can find real comfort and satisfaction here! Our goods are the combination of perfect design and an ideal functionality. We have a tremendous variety of different models. Nowadays clients’ claims become so scrupulous that sometimes it is very hard to satisfy them. But we provide only real bestsellers and our products have a great number of options that can really help you. You’ll be amazed with its simplicity and durability. </p>
                                    </div>  
                                </div>
                            </div>
                            <p style=" color:#888;font-size: 11px;"> Our manufacturers and vendors provide only new technologies and it is very important because nowadays we see a furious development of electronics industry. We also provide different economical, social and even technological researches. The main goal of their analysis is to find out the changes of clients’ demands and other useful data. We are trying to introduce positive results of our explorations. </p>
                        </div>
                    </div> <!--end description-->

                    <!--Specification--->
                    <div class="col-md-12">
                        <div class="row">
                            <div class="specification">
                                <h3> Specification </h3>
                            </div>
                            <table class="table table-bordered">
                                <!--Product Description-->
                                <thead>
                                    <tr>    
                                        <td colspan="2" class="td"> PRODUCT DESCRIPTION </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> Weather resistance </td>
                                        <td> Water and Dust resistant </td>
                                    </tr>
                                    <tr>
                                        <td> Display Technology </td>
                                        <td> LED </td>
                                    </tr>
                                </tbody>
                                <!--Specification-->
                                <thead>
                                    <tr>    
                                        <td colspan="2" class="td"> SPECIFICATIONS </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> Tech Spec </td>
                                        <td> Powerful</td>
                                    </tr>
                                    <tr>
                                        <td> Battery Average Life </td>
                                        <td> 8 hours </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div><!--end Specification-->

                    <!--Reviews-->
                    <div class="col-md-12">
                        <div class="row">
                            <div class="reviews">
                                <h3> Reviews(0) </h3>
                                <form class="form-horizontal">
                                    <div class="message">
                                        <p> There are no reviews for this product. </p>
                                    </div>
                                    <div class="title">
                                        <h3><a href="#"> Write a review </a></h3>
                                    </div>
                                    <!--Label-->
                                    <div class="nav">
                                        <div class="col-md-3 col-xs-5">
                                            <div class="row">
                                                <p>Your Name </p><i class="glyphicon glyphicon-asterisk" style="color:red;"></i> 
                                            </div>
                                        </div>
                                        <div class="col-md-9 col-xs-7">
                                            <div class="row">
                                                <input type="text" style="width: 100%;"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nav">
                                        <div class="col-md-3 col-xs-6">
                                            <div class="row">
                                                <p>Your Review</p><i class="glyphicon glyphicon-asterisk" style="color:red;"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-9 col-xs-6">
                                            <div class="row">
                                                <input type="text" style="width: 100%; padding-bottom: 50px"/>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="nav">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="note">
                                                    <span class="active"> Note : </span> 
                                                    <span> HTML is not translated!</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="nav">
                                        <div class="col-md-3 col-xs-4">
                                            <div class="row">
                                                <p> Rating </p><i class="glyphicon glyphicon-asterisk" style="color:red;"></i> 
                                            </div>
                                        </div>
                                        <div class="col-md-9 col-xs-8">
                                            <div class="row">
                                                Bad <input type="radio"/>
                                                <input type="radio"/>
                                                <input type="radio"/>
                                                <input type="radio"/>
                                                <input type="radio"/> Good
                                            </div>
                                        </div>
                                    </div>

                                    <div class="nav">
                                        <div class="col-md-3">
                                        </div>
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="btn-continue">
                                                    <a href="#"> Continue </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!--end container-->
                </div>
            </div>
        </div>


        <div class="type-L">
            <div class="sub-footer">
                <div class="container">
                    <div class="border">
                        <div class="row">
                            <div class="col-md-6">

                                <div class="about">
                                    <h1>About</h1>
                                    <p>Comfort is a very important thing nowadays because it is a condition of satisfaction and calmness. It is clear that our way of life must be as comfortable as possible. Home electronics satisfy our wishes and make our life more pleasant. We must admit that our way of life depends on quality of different goods of popular brands. Many of our clients were surprised by the incredible assortment of products in our store. You know, we have many devoted customers all over the world, and this fact proves that we sell only quality commodities. Recipe of our success is a fair price and premium quality.</p>
                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="event">
                                    <h1>Events</h1>
                                    <p><a href="#"><span class="fa fa-truck"></span> Free shipping.</a> For all purchases starting from 3 items.</p>
                                    <p><a href="#"><span class="fa fa-refresh"></span> 100% quality</a> The best quality of all products.</p>
                                    <p><a href="#"><span class="fa fa-thumbs-o-up"></span> Customer program</a> A lot of bonuses for the loyal customers.</p>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="service">
                        <div class="row">
                            <div class="col-md-9">

                                <div class="col-md-3">
                                    <div class="row">
                                        <ul>
                                            <li><h1>Information</h1></li>
                                            <li><a href="#">About</a></li>
                                            <li><a href="#">Delivery Information</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                            <li><a href="#">Terms & Conditions</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="row">
                                        <ul>
                                            <li><h1>Customer Service</h1></li>
                                            <li><a href="#">Contact Us</a></li>
                                            <li><a href="#">Returns</a></li>
                                            <li><a href="#">Site Map</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="row">
                                        <ul>
                                            <li><h1>Extras</h1></li>
                                            <li><a href="#">Brands</a></li>
                                            <li><a href="#">Gift Vouchers</a></li>
                                            <li><a href="#">Affiliates</a></li>
                                            <li><a href="#">Specials</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="row">
                                        <div class="line">
                                            <ul>
                                                <li><h1>My Account</h1></li>
                                                <li><a href="#">My Account</a></li>
                                                <li><a href="#">Order History</a></li>
                                                <li><a href="#">Wish List</a></li>
                                                <li><a href="#">Newsletter</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <ul>
                                        <li><h1>Follow Us</h1></li>
                                        <li class="follow"><a href="#"><i class="fa fa-facebook"></i><span> Facebook</span></a></li>
                                        <li class="follow"><a href="#"><i class="fa fa-twitter"></i><span> Twitter</span></a></li>
                                        <li class="follow"><a href="#"><i class="fa fa-google-plus"></i><span> Google +</span></a></li>
                                        <li class="follow"><a href="#"><i class="fa fa-youtube"></i><span> YouTube</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="footer">
                <div class="container">
                    <p><img src="images/footer-logo.png"> Powered By <a href="#">OpenCart</a> Electronics online store © 2016</p>
                </div>
            </div>
        </div>
    </body>

</html>