<!DOCTYPE html>
<html>

    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-1-slide-1.less', 'css/type-1-slide-1.css');
        ?> 
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/type-1-slide-1.css" rel="stylesheet" type="text/css"/>

    </head> 

    <body>                

        <div class="zaro">
            <div id="white_background" class="slidelip"> 
                <div id="pattent">
                    
                    <div id="zaro-carousel" class="container margin-auto">
                        <table class="title-table">
                            <tbody>
                                <tr>
                                    <td class="col-md-6 col-sm-6">
                                        <span class="title-wing"></span>
                                    </td>

                                    <td class="carousel-title">
                                        <h3> Featured Products </h3>
                                        <div class=" smooth02 zaro-controls carousel-control" href="#myCarousel" data-slide="prev">
                                            <i class="fa fa-angle-left"></i>
                                        </div>
                                        <div class="zaro-next smooth02 zaro-controls carousel-control" href="#myCarousel" data-slide="next">
                                            <i class="fa fa-angle-right"></i>
                                        </div>
                                    </td>

                                    <td class="col-md-6 col-sm-6">
                                        <span class="title-wing"></span>
                                    </td> 
                                </tr>
                            </tbody>
                        </table>



                        <div class="carousel slide" data-ride="carousel" data-type="multi" data-interval="3000" id="myCarousel">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="col-custom-5-col item-hover">
                                        <div class="row">
                                            <a href="#">
                                                <img src="images/dress-anna-sui-ambrosia-lace.jpg" class="img-responsive">
                                            </a>
                                            <a class="search-box-img">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </div>
                                        <div class="row">
                                            <span class="zaro-rate slidelip">
                                                <span>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </span>
                                            </span>
                                            <p>Dress Mark James Badgley Mischka</p>
                                            <div class="add-ToCart">
                                                <h3 class="">$309.00</h3>
                                                <div class="addToCart-hover">
                                                    <div class="card">
                                                        <a>Add To Cart</a>
                                                    </div> 
                                                    <div class="favorite">
                                                        <span class="fa fa-heart"></span>
                                                    </div>
                                                    <div class="wishlist">
                                                        <span class="fa fa-gift"></span>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                      
                                <div class="item">
                                    <div class="col-custom-5-col item-hover">
                                        <div class="row">
                                            <a href="#">
                                                <img src="images/dress-anna-sui-ambrosia-lace.jpg" class="img-responsive">
                                            </a>
                                            <a class="search-box-img">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </div>
                                        <div class="row">
                                            <span class="zaro-rate slidelip">
                                                <span>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </span>
                                            </span>
                                            <p>Dress Mark James Badgley Mischka</p>
                                            <div class="add-ToCart">
                                                <h3 class="">$309.00</h3>
                                                <div class="addToCart-hover">
                                                    <div class="card">
                                                        <a>Add To Cart</a>
                                                    </div> 
                                                    <div class="favorite">
                                                        <span class="fa fa-heart"></span>
                                                    </div>
                                                    <div class="wishlist">
                                                        <span class="fa fa-gift"></span>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-custom-5-col item-hover">
                                        <div class="row">
                                            <a href="#">
                                                <img src="images/dress-anna-sui-ambrosia-lace.jpg" class="img-responsive">
                                            </a>
                                            <a class="search-box-img">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </div>
                                        <div class="row">
                                            <span class="zaro-rate slidelip">
                                                <span>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </span>
                                            </span>
                                            <p>Dress Mark James Badgley Mischka</p>
                                            <div class="add-ToCart">
                                                <h3 class="">$309.00</h3>
                                                <div class="addToCart-hover">
                                                    <div class="card">
                                                        <a>Add To Cart</a>
                                                    </div> 
                                                    <div class="favorite">
                                                        <span class="fa fa-heart"></span>
                                                    </div>
                                                    <div class="wishlist">
                                                        <span class="fa fa-gift"></span>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-custom-5-col item-hover">
                                        <div class="row">
                                            <a href="#">
                                                <img src="images/dress-anna-sui-ambrosia-lace.jpg" class="img-responsive">
                                            </a>
                                            <a class="search-box-img">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </div>
                                        <div class="row">
                                            <span class="zaro-rate slidelip">
                                                <span>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </span>
                                            </span>
                                            <p>Dress Mark James Badgley Mischka</p>
                                            <div class="add-ToCart">
                                                <h3 class="">$309.00</h3>
                                                <div class="addToCart-hover">
                                                    <div class="card">
                                                        <a>Add To Cart</a>
                                                    </div> 
                                                    <div class="favorite">
                                                        <span class="fa fa-heart"></span>
                                                    </div>
                                                    <div class="wishlist">
                                                        <span class="fa fa-gift"></span>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-custom-5-col item-hover">
                                        <div class="row">
                                            <a href="#">
                                                <img src="images/dress-anna-sui-ambrosia-lace.jpg" class="img-responsive">
                                            </a>
                                            <a class="search-box-img">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </div>
                                        <div class="row">
                                            <span class="zaro-rate slidelip">
                                                <span>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </span>
                                            </span>
                                            <p>Dress Mark James Badgley Mischka</p>
                                            <div class="add-ToCart">
                                                <h3 class="">$309.00</h3>
                                                <div class="addToCart-hover">
                                                    <div class="card">
                                                        <a>Add To Cart</a>
                                                    </div> 
                                                    <div class="favorite">
                                                        <span class="fa fa-heart"></span>
                                                    </div>
                                                    <div class="wishlist">
                                                        <span class="fa fa-gift"></span>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-custom-5-col item-hover">
                                        <div class="row">
                                            <a href="#">
                                                <img src="images/dress-anna-sui-ambrosia-lace.jpg" class="img-responsive">
                                            </a>
                                            <a class="search-box-img">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </div>
                                        <div class="row">
                                            <span class="zaro-rate slidelip">
                                                <span>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </span>
                                            </span>
                                            <p>Dress Mark James Badgley Mischka</p>
                                            <div class="add-ToCart">
                                                <h3 class="">$309.00</h3>
                                                <div class="addToCart-hover">
                                                    <div class="card">
                                                        <a>Add To Cart</a>
                                                    </div> 
                                                    <div class="favorite">
                                                        <span class="fa fa-heart"></span>
                                                    </div>
                                                    <div class="wishlist">
                                                        <span class="fa fa-gift"></span>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-custom-5-col item-hover">
                                        <div class="row">
                                            <a href="#">
                                                <img src="images/dress-anna-sui-ambrosia-lace.jpg" class="img-responsive">
                                            </a>
                                            <a class="search-box-img">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </div>
                                        <div class="row">
                                            <span class="zaro-rate slidelip">
                                                <span>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </span>
                                            </span>
                                            <p>Dress Mark James Badgley Mischka</p>
                                            <div class="add-ToCart">
                                                <h3 class="">$309.00</h3>
                                                <div class="addToCart-hover">
                                                    <div class="card">
                                                        <a>Add To Cart</a>
                                                    </div> 
                                                    <div class="favorite">
                                                        <span class="fa fa-heart"></span>
                                                    </div>
                                                    <div class="wishlist">
                                                        <span class="fa fa-gift"></span>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                      
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>   
        
        
        <script src="scripts/jquery-1.11.0.min.js" type="text/javascript"></script>
        <script src="scripts/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/script.js" type="text/javascript"></script>
    </body>

</html>