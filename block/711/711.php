<html>

    <head>
        <title>711</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="user-scalable=0, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/711.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/711.less', 'css/711.css');
        ?>

        <link href="css/711.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-711">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">                                                
                        <!--=======phan product=======--->
                        <div class="product">
                            <h4>SPECIAL PRODUCTS</h4>
                            <div class="row">
                                <div class="col-md-5">
                                    <figure class="thumb-image">
                                        <img src="images/1_4.jpg" alt="">
                                    </figure>
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
                                    <figure class="thumb-image">
                                        <img src="images/7_3_4.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="col-md-7">
                                    <div class="text">
                                        ifashion ips..
                                    </div>
                                    <div class="price-product">
                                        <span class="money1">$770.00</span> <span class="money2">$860</span>
                                    </div>
                                    <!--- Add to cart --->
                                    <div class="addtocart">
                                        Add to cart
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <figure class="thumb-image">
                                        <img src="images/17_1_5_1.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="col-md-7">
                                    <div class="text">
                                        Established ..
                                    </div>
                                    <div class="price-product">
                                        <span class="money1">$400.00</span> <span class="money2">$325</span>
                                    </div>
                                    <!--- Add to cart --->
                                    <div class="addtocart">
                                        Add to cart
                                    </div>
                                </div>
                            </div>
                            <div class="seeall">
                                see all
                            </div>
                        </div>
                        <hr>
                        <div class="clearfix">
                            <!--======phan image bottom banner----->
                            <figure class="image-bottom">
                                <img src="images/left-banner.jpg" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
               
                </body>

                </html>