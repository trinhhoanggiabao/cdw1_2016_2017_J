<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('./less/753.less', 'css/753.css');
        ?>
        <link href="css/753.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="type-753">
            <div class="container">
                <div class="breadcrumb_wrap">
                    <ul class="breadcrumb">
                        <li><a href="#" title="Back to the frontpage">Home</a></li>
                        <li><span>Cookware</span></li>
                    </ul>
                </div>
                <h2 class="page_heading">COOKWARE</h2>
                <div id="collection_sorted">
                    <div class="product_listing_main">
                        <div class="product col-xs-6 col-sm-6 col-md-4">
                            <div class="product_wrapper">
                                <div class="product_img">
                                    <a>
                                        <img class="img1" src="images/carter_cocktail_shaker_1_medium.png" alt=""/>
                                        <img class="img2" src="images/carter_cocktail_shaker_2_medium.png" alt=""/>
                                        <span class="product_badge new">New</span>
                                    </a>
                                </div>
                                <div class="product_info">
                                    <div class="product_price">
                                        <span class="money">$23.00</span>
                                    </div>
                                    <div class="product_name">
                                        <a href="#" title="Carter Cocktail Shaker">Carter Cocktail Shaker</a>
                                    </div>
                                    <div class="product_desc product_desc_long">Kitchen Supplies store
                                        Those were the times when people still preferred to buy products at brick-and-mortar stores instead of buying online. Nevertheless we’ve decided to create an online shop and we are so glad to welcome you here, at our online Kitchen Supplies store. Yes, we agree that selling food and kitchen equipment is a tricky thing but ...</div>
                                    <div class="product_desc product_desc_short">Kitchen Supplies store
                                        Those were the time...</div>
                                    <div class="product_links">
                                        <form method="post" action="/cart/add">
                                            <input type="hidden" name="id" value="25848340359">
                                            <button class="btn btn-cart" type="submit" title="Add to cart">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                Add to cart
                                            </button>
                                        </form>
                                        <div class="flexbox">
                                            <a class="btn btn_icon">
                                                <i class="fa fa-list-ul" aria-hidden="true"></i>
                                            </a>
                                            <a class="btn btn_icon quick_view_btn">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                            <a class="btn btn_icon wishlist_add_login">
                                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                    </div>
                </div>
                <div id="collection_sorted">
                    <div class="product_listing_main">
                        <div class="product col-xs-6 col-sm-6 col-md-4">
                            <div class="product_wrapper">
                                <div class="product_img">
                                    <a>
                                        <img class="img1" src="images/carter_double_walled_ice_bucket_1_medium.png" alt=""/>
                                        <img class="img2" src="images/carter_double_walled_ice_bucket_2_medium.png" alt=""/>
                                        <span class="product_badge new">New</span>
                                        <span class="product_badge sale">–19%</span>
                                    </a>
                                </div>
                                <div class="product_info">
                                    <div class="product_price">
                                        <span class="money money_present">$23.00</span>
                                        <span class="money money_sale">$32.00</span>
                                    </div>
                                    <div class="product_name">
                                        <a href="#" title="Carter Cocktail Shaker">CARTER DOUBLE WALLED ICE BUCKET</a>
                                    </div>
                                    <div class="product_desc product_desc_long">Kitchen Supplies store We specialize in all kinds of kitchen supplies including the goods for food servicing and restaurant business. Every business is very demanding but the secret of success lies between the right choice of the business strategy and reliable suppliers. Taking care of our clients was and still is a main aim of our company and ...</div>
                                    <div class="product_desc product_desc_short">Kitchen Supplies store
                                        Those were the time...</div>
                                    <div class="product_links">
                                        <form method="post" action="/cart/add">
                                            <input type="hidden" name="id" value="25848340359">
                                            <button class="btn btn-cart" type="submit" title="Add to cart">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                Add to cart
                                            </button>
                                        </form>
                                        <div class="flexbox">
                                            <a class="btn btn_icon">
                                                <i class="fa fa-list-ul" aria-hidden="true"></i>
                                            </a>
                                            <a class="btn btn_icon quick_view_btn">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                            <a class="btn btn_icon wishlist_add_login">
                                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                            </a>
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