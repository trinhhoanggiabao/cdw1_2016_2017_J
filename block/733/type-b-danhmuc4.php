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
        $less->compileFile('less/type-b-danhmuc4.less', 'css/type-b-danhmuc4.css');
        ?>
        <link href="css/type-b-danhmuc4.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="type-b-danhmuc4">
            <div class="container">
                <div class="product">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <div class="images">
                                <div class="sale">
                                    sale
                                </div>
                                <div class="new">
                                    new
                                </div>
                                <div class="main-image">
                                    <img src="images/1_4.jpg" alt=""/>
                                </div>
                                <div class="sub-image">
                                    <img src="images/2_10.jpg" alt=""/>
                                </div>
                                <div class="addtocart">
                                    ADD TO CART
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="thumb">
                                <div class="arcu"><p>Arcu Vitae Imperdiet Simply</p></div>
                                <div class="">
                                    <span class="money-860"> $860.00 </span><span class="money">$800.00</span>
                                </div>
                                <div class="icon-star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="clearfix"></div>
                                <div class="box">
                                    <img src="images/black.png" alt=""/>
                                    <img src="images/brown.png" alt=""/>
                                    <img src="images/gray.png" alt=""/>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <div class="images">
                                <div class="main-image">
                                    <img src="images/20_11.jpg" alt=""/>
                                </div>
                                <div class="sub-image">
                                    <img src="images/21_5.jpg" alt=""/>
                                </div>
                                <div class="addtocart">
                                    ADD TO CART
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="thumb">
                                <div class="arcu"><p>Tenetur Aeta Sapiente Delectus</p></div>
                                <div class="price">
                                    <span class="money">$455.00</span>
                                </div>
                                <div class="icon-star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <div class="images">
                                <div class="main-image">
                                    <img src="images/19_7.jpg" alt=""/>
                                </div>
                                <div class="sub-image">
                                    <img src="images/20_11.jpg" alt=""/>
                                </div>
                                <div class="addtocart">
                                    ADD TO CART
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="thumb">
                                <div class="arcu"><p>Suspendisse Massa Ipsum Random</p></div>
                                <div class="price">
                                    <span class="money-860"> $358.00 </span><span class="money">$800.00</span>
                                </div>
                                <div class="icon-star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <div class="images">
                                <div class="sale">
                                    sale
                                </div>
                                <div class="main-image">
                                    <img src="images/15_4_5_1_1.jpg" alt=""/>
                                </div>
                                <div class="sub-image">
                                    <img src="images/16_8_1_1.jpg" alt=""/>
                                </div>
                                <div class="addtocart">
                                    ADD TO CART
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="thumb">
                                <div class="arcu"><p>Standard Passage Lorem Ipsum</p></div>
                                <div class="price">
                                    <span class="money-860"> $774.00 </span><span class="money">$626.00</span>
                                </div>
                                <div class="icon-star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <div class="images">
                                <div class="main-image">
                                    <img src="images/14_4_6_1.jpg" alt=""/>
                                </div>
                                <div class="sub-image">
                                    <img src="images/17_1_5_1.jpg" alt=""/>
                                </div>
                                <div class="addtocart">
                                    ADD TO CART
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="thumb">
                                <div class="arcu"><p>Perspiciatis Voluptatem</p></div>
                                <div class="price">
                                    <span class="money">$784.00</span>
                                </div>
                                <div class="icon-star">
                                    <span class="bg-yellow">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </span>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <div class="images">
                                <div class="sale">
                                    sale
                                </div>
                                <div class="main-image">
                                    <img src="images/13_4_8.jpg" alt=""/>
                                </div>
                                <div class="sub-image">
                                    <img src="images/15_4_5_1_1.jpg" alt=""/>
                                </div>
                                <div class="addtocart">
                                    ADD TO CART
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="thumb">
                                <div class="arcu"><p>Purus Ut Lorem In Fringilla</p></div>
                                <div class="price">
                                    <span class="money-860"> $465.00 </span><span class="money">$325.00</span>
                                </div>
                                <div class="icon-star">
                                    <span class="bg-yellow">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </span>
                                    <i class="fa fa-star" aria-hidden="true"></i>

                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <div class="images">
                                <div class="sale">
                                    sale
                                </div>
                                <div class="main-image">
                                    <img src="images/12_5_7.jpg" alt=""/>
                                </div>
                                <div class="sub-image">
                                    <img src="images/16_8_1_1.jpg" alt=""/>
                                </div>
                                <div class="addtocart">
                                    ADD TO CART
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="thumb">
                                <div class="arcu"><p>Occaecati Cupiditate Non Provident</p></div>
                                <div class="price">
                                    <span class="money-860"> $684.00 </span><span class="money">$562.00</span>
                                </div>
                                <div class="icon-star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <div class="images">
                                <div class="main-image">
                                    <img src="images/11_5_7.jpg" alt=""/>
                                </div>
                                <div class="sub-image">
                                    <img src="images/16_8_1_1.jpg" alt=""/>
                                </div>
                                <div class="addtocart">
                                    ADD TO CART
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="thumb">
                                <div class="arcu"><p>Tenetur Aeta Sapiente Delectus</p></div>
                                <div class="price">
                                    <span class="money">$875.00</span>
                                </div>
                                <div class="icon-star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="box">
                                    <img src="images/black.png" alt=""/>
                                    <img src="images/brown.png" alt=""/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <div class="images">
                                <div class="sale">sale</div>
                                <div class="new">new</div>
                                <div class="main-image">
                                    <img src="images/10_4_6.jpg" alt=""/>
                                </div>
                                <div class="sub-image">
                                    <img src="images/16_8_1_1.jpg" alt=""/>
                                </div>
                                <div class="addtocart">
                                    ADD TO CART
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="thumb">
                                <div class="arcu"><p>Suspendisse Massa Ipsum Random</p></div>
                                <div class="price">
                                    <span class="money-860"> $1,080.00 </span><span class="money">$900.00</span>
                                </div>
                                <div class="icon-star">
                                    <span class="bg-yellow">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <div class="box">
                                    <img src="images/black.png" alt=""/>
                                    <img src="images/gray.png" alt=""/>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <div class="images">
                                <div class="sale">
                                    sale
                                </div>
                                <div class="new">
                                    new
                                </div>
                                <div class="main-image">
                                    <img src="images/2_10.jpg" alt=""/>
                                </div>
                                <div class="sub-image">
                                    <img src="images/4_1_3.jpg" alt=""/>
                                </div>
                                <div class="addtocart">
                                    ADD TO CART
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="thumb">
                                <div class="arcu"><p>Lorem Ipsum Dolor Simply Sed</p></div>
                                <div class="price">
                                    <span class="money-860"> $780.00 </span><span class="money">$680.00</span>
                                </div>
                                <div class="icon-star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="clearfix"></div>
                                <div class="box">
                                    <img src="images/black.png" alt=""/>
                                    <img src="images/brown.png" alt=""/>
                                    <img src="images/gray.png" alt=""/>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <div class="images">
                                <div class="sale">
                                    sale
                                </div>
                                <div class="new">
                                    new
                                </div>
                                <div class="main-image">
                                    <img src="images/5_6.jpg" alt=""/>
                                </div>
                                <div class="sub-image">
                                    <img src="images/21_5.jpg" alt=""/>
                                </div>
                                <div class="addtocart">
                                    ADD TO CART
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="thumb">
                                <div class="arcu"><p>Tenetur Aeta Sapiente Delectus</p></div>
                                <div class="price">
                                    <span class="money-860"> $400.00 </span><span class="money">$325.00</span>
                                </div>
                                <div class="icon-star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <div class="images">
                                <div class="new">
                                    new
                                </div>
                                <div class="main-image">
                                    <img src="images/7_3_4.jpg" alt=""/>
                                </div>
                                <div class="sub-image">
                                    <img src="images/17_1_5_1.jpg" alt=""/>
                                </div>
                                <div class="addtocart">
                                    ADD TO CART
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="thumb">
                                <div class="arcu"><p>Suspendisse Massa Ipsum Random</p></div>
                                <div class="price">
                                    <span class="money">$300.00</span>
                                </div>
                                <div class="icon-star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </body>

</html>