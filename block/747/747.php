<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/sliderShow.js" type="text/javascript"></script>
        <script src="js/newjavascript.js" type="text/javascript"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('./less/747.less', 'css/747.css');
        ?>
        <link href="css/747.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="M12-Url">
                    <div class="breadcrumb_wrap">
                        <ul class="breadcrumb">
                            <li><a href="/" class="homepage-link" title="Back to the frontpage">Home</a></li>
                            <li><a href="/collections/types?q=Bakeware" title="Bakeware">Bakeware</a> </li>
                            <li><span class="page-title">10 Piece OXO Holder with Tools Set</span></li>
                        </ul>
                    </div>
                </div>
                <div class="M6-Product-Detail">
                    <div class="container-fluid">
                        <div class="content-wrapper">	
                            <div class="item-container">	
                                <div class="container row">	
                                    <div class="col-md-4">
                                        <div class="product col-md-12 ">
                                            <div style="text-align: center; " class="item">
                                                <img src="images/boston_shaker_1_medium.png" alt="">
                                            </div>
                                        </div>

                                        <div style="  border: 1px #DDD solid;">
                                            <div class="row list-boottom">
                                                <div class=" col-md-3 item-product">

                                                    <img src="images/carter_double_walled_ice_bucket_1_medium.png" alt="">

                                                </div>
                                                <div class=" col-md-3 item-product">

                                                    <img src="images/boston_shaker_1_medium.png" alt="">

                                                </div>
                                                <div class=" col-md-3 item-product">

                                                    <img src="images/carter_double_walled_ice_bucket_1_medium.png" alt="">

                                                </div>
                                                <div class=" col-md-3 item-product-last">

                                                    <img src="images/carter_double_walled_ice_bucket_1_medium.png" alt="">

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-5">
                                        <div class="product-title">10 PIECE OXO HOLDER WITH TOOLS SET</div>
                                        <select class="col-md-4" style=" padding: 5px;">
                                            <option>sliver</option>
                                            <option>sliver</option>
                                            <option>sliver</option>
                                        </select>
                                        <br>
                                        <hr>
                                        <div class="product-desc">SKU : <span style="color: #999;">327AE-6</span></div>
                                        <div class="product-desc">Barcode: <span style="color: #999;">327038522</span></div>
                                        <hr>
                                        <div class="product-desc">Collections: <a href="#">Cutlery</a>,<a href="#"> Gadgets</a>,<a href="#"> Kitchen Storage &amp; Organization</a>,<a href="#"> Specials</a></div>
                                        <div class="product-desc">Product type: <a href="#"> Bakeware</a></div>
                                        <div class="product-desc">Vendor: <a href="#">Rabbit</a></div>
                                        <div class="product-desc">Tags: <span class="fa fa-tag"></span> <span style="color: #999;">Candy Making Supplies:</span> </div>



                                    </div>
                                    <div class="col-md-3" style="border-left: 1px #DDD solid;">

                                        <div class="product_info__right">
                                            <div class="product-title">
                                                <p class="price product-price"><span class="money" data-currency-usd="$25.00">$25.00</span></p>
                                            </div>

                                            <p class="product_details__item" id="product_quantity"><b class="aval_label">Availability:</b> <span class="notify_success">Available</span></p>

                                            <div id="purchase">
                                                <label for="quantity_form">Choose quantity:</label>
                                                <div class="row">
                                                    <div class="quantity_box col-md-3">
                                                        <input id="quantity_form" type="text" name="quantity" value="1" class="quantity_input" style="width:50px; text-align: center;">
                                                        <br>
                                                        <span class="quantity_modifier quantity_down"><i class="fa fa-minus"></i></span>
                                                        <span class="quantity_modifier quantity_up"><i class="fa fa-plus"></i></span>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <button class="btn btn-cart" type="submit" id="add-to-cart">ADD TO CART</button>
                                                    </div>
                                                </div>
                                            </div>


                                            <br>
                                            <p id="wishlist_section">
                                                <a href="/pages/wishlist" id="wishlist_add">
                                                    <i class="fa fa-heart" aria-hidden="true">

                                                    </i> Add to the wishlist</a>
                                            </p>
                                            <hr>
                                            <div class="icon-link">

                                                <a href="#">  <span class="fa fa-facebook" style="background:  rgb(59, 89, 152);"></span> </a>
                                                <a href="#">  <span class="fa fa-twitter" style="background: rgb(29, 161, 242);"></span></a>
                                                <a href="#">  <span class="fa fa-google-plus" style="background: rgb(220, 78, 65);"></span></a>
                                                <a href="#">  <span class="fa fa-pinterest-p" style="background: rgb(203, 32, 39);"></span></a>



                                            </div>
                                        </div>

                                    </div>
                                </div> 
                            </div>

                        </div>
                    </div>

                </div>
            </div>
    </body>
</html>