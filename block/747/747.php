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
        $less->compileFile('./less/747.less', 'css/747.css');
        ?>
        <link href="css/747.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="type-747">
            <div class="container">
                <div class="row">
                    <div class="breadcrumb_wrap">
                        <ul class="breadcrumb">
                            <li><a href="#" title="Home">Home</a></li>
                            <li><a href="#" title="Bakeware">Gadgets</a> </li>
                            <li><span>Boston Shaker</span></li>
                        </ul>
                    </div>
                    <div itemscope itemtype="">
                            <div class="row">
                                <div class="col-sm-5 col-md-4 product_images">
                                    <div class="elevatezoom_big_wrapper">
                                        <img id="elevatezoom_big" src="images/boston_shaker_1_grande.png" alt=""/>
                                        <div class="elevatezoom_big_clicker"></div>
                                    </div>
                                    <div id="elevatezoom_gallery" class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <a class="swiper-slide" href="#" >
                                                <img src="images/boston_shaker_1_compact.png" alt=""/>
                                            </a>
                                            <a class="swiper-slide" href="#" >
                                                <img src="images/boston_shaker_2_compact.png" alt=""/>
                                            </a>
                                            <a class="swiper-slide" href="#">
                                                <img src="images/boston_shaker_3_compact.png" alt=""/>
                                            </a>
                                            <a class="swiper-slide" href="#" >
                                                <img src="images/boston_shaker_4_compact.png" alt=""/>
                                            </a>
                                            <a class="swiper-slide" href="#" >
                                                <img src="images/boston_shaker_5_compact.png" alt=""/>
                                            </a>
                                        </div>
                                        <div class="swiper_btn btn_prev"></div>
                                        <div class="swiper_btn btn_next"></div>
                                    </div>
                                </div>
                                <div class="col-sm-7 col-md-8">
                                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                                        <div class="product_info__wrapper">
                                            <div class="product_info__left">
                                                <h1 class="product_name">Boston Shaker</h1>
                                                <div class="clearfix">
                                                    <div class="variants-wrapper ">
                                                        <div class="selector-wrapper">
                                                            <label for="product-select-option-0">Color</label>
                                                            <select data-option="option1">
                                                                <option value="silver">silver</option>
                                                                <option value="white">white</option>
                                                                <option value="brown">brown</option>
                                                            </select>
                                                        </div>
                                                        <div class="selector-wrapper">
                                                            <label for="product-select-option-1">Capacity</label>
                                                            <select data-option="option2">
                                                                <option value="100 ml">100 ml</option><option value="350 ml">350 ml</option>
                                                                <option value="500 ml">500 ml</option>
                                                                <option value="1.5 l">1.5 l</option>
                                                            </select>
                                                        </div>
                                                        <div class="selector-wrapper">
                                                            <label for="product-select-option-2">Material</label>
                                                            <select data-option="option3">
                                                                <option value="stainless steel">stainless steel</option>
                                                                <option value="ceramics">ceramics</option>
                                                                <option value="glass">glass</option>
                                                                <option value="plastic">plastic</option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="product_details">
                                                    <p class="product_details__item"><b>Weight:</b> <span>11.0 lb</span></p>
                                                    <p class="product_details__item"><b>SKU:</b> <span>—</span></p>
                                                    <p class="product_details__item"><b>Barcode:</b> <span>—</span></p>
                                                </div>
                                                <div class="product_details">
                                                    <p class="product_details__item"><b>Collections:</b> <a href="#">Bakeware</a>, <a href="#">Cooking Utensils</a>, <a href="#">Cutlery</a>, <a href="#">Gadgets</a>, <a href="#">Kitchen Storage & Organization</a>, <a href="#">Specials</a></p>
                                                    <p class="product_details__item"><b>Product type:</b> <a href="#" title="Gadgets">Gadgets</a></p>
                                                    <p class="product_details__item"><b>Vendor:</b> <a href="#" title="OXO">OXO</a></p>
                                                    <p class="product_details__item product_tags"><b>Tags:</b> <span>Professional Cutlery</span></p>
                                                </div>
                                            </div>
                                            <div class="product_info__right">
                                                <div id="product_price">
                                                    <p class="price">
                                                        <span class="money" data-currency-usd="$100.00" data-currency-eur="&amp;euro;92.04" data-currency="EUR">€92.04</span>
                                                        <span class="money money_sale" data-currency-usd="$115.00" data-currency-eur="&amp;euro;105.85" data-currency="EUR">€105.85</span>
                                                        <span class="money_sale_percent">– 13%</span>
                                                    </p>
                                                </div>
                                                <p class="product_details__item" id="product_quantity">
                                                    <b class="aval_label">Availability:</b>
                                                    <span class="notify_success"><b>100</b> item(s)</span>
                                                </p>
                                                <div id="purchase">
                                                    <label for="quantity_form">Choose quantity:</label>
                                                    <div class="quantity_box">
                                                        <input type="text" name="quantity" value="1"/>
                                                        <span class="quantity_modifier quantity_down"><i class="fa fa-minus"></i></span>
                                                        <span class="quantity_modifier quantity_up"><i class="fa fa-plus"></i></span>
                                                    </div>
                                                    <button class="btn" type="submit" id="add-to-cart">Add to cart</button>
                                                </div>
                                                <p id="wishlist_section">
                                                    <a href="/pages/wishlist" id="wishlist_add">
                                                        <i class="fa fa-heart" aria-hidden="true">
                                                        </i> Add to the wishlist</a></p>
                                                <div class="addthis_sharing_toolbox"></div>
                                                <div class="icon">
                                                    <i class="fa fa-facebook-official" aria-hidden="true"></i>
                                                    <i class="fa fa-twitter-square" aria-hidden="true"></i>
                                                    <i class="fa fa-google-plus-square" aria-hidden="true"></i>
                                                    <i class="fa fa-pinterest-square" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div> 
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>