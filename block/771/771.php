<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="css/woocommerce-layout.css" rel="stylesheet" type="text/css"/>
        <link href="css/woocommerce.css" rel="stylesheet" type="text/css"/>
        <link href="css/771.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include 'libs/lessc.inc.php';
        }
        $less = new lessc;
        $less->compileFile('less/771.less', 'css/771.css')
        ?>
        <script src="js/jquery-3.1.0.min.js" type="text/javascript"></script>

    </head>
    <body>
        <div class="type-771">
            <div id="main-container">
                <div class="page-heading asset-bg alt-one">
                    <div class="container">
                        <div class="heading-text">
                            <h1 class="entry-title">Shop</h1>
                        </div>
                        <div id="breadcrumbs"> 
                            <a title="Go to Neighborhood." href="#" class="home">Neighborhood</a>
                            <i class="fa-angle-right"></i>Shop
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div id="page-wrap">
                        <div class="page-content">
                            <div class="inner-page-wrap">
                                <section class="row">
                                    <section class="page-content col-md-12">
                                        <div class="woocommerce-count-wrap">
                                            <p class="woocommerce-result-count">Showing all 23 products</p>
                                        </div>
                                        <form class="woocommerce-ordering" method="get">
                                            <select name="orderby" class="orderby">
                                                <option value="menu_order" selected="selected">Default sorting</option>
                                                <option value="popularity">Sort by popularity</option>
                                                <option value="rating">Sort by average rating</option>
                                                <option value="date">Sort by newness</option>
                                                <option value="price">Sort by price: low to high</option>
                                                <option value="price-desc">Sort by price: high to low</option>
                                            </select>
                                            <input type="hidden" name="sidebar" value="no-sidebar">
                                        </form>

                                        <ul class="products col-md-12 ">
                                            <li class="first product col-md-3">
                                                <figure class="product-transition" style="padding-bottom: 360px;">
                                                    <span class="onsale">Sale!</span>
                                                    <div class="product-img-wrap">
                                                        <div class="product-image"><img width="540" height="720" src="img/type1/adidas-grey-red001_1-540x720.jpg" class="size-shop_catalog" >
                                                        </div>
                                                        <div class="product-image second-image"><img width="540" height="720" src="img/type1/adidas-grey-red006_1-540x720.jpg" class="size-shop_catalog">
                                                        </div>
                                                    </div>
                                                    <figcaption>
                                                        <div class="shop-actions">
                                                            <a href="#" rel="nofollow" data-product_id="9356" data-product_sku="340152" class="add_to_cart_button ajax_add_to_cart product_type_simple" data-added_text="Item added to bag"><i class="icon-plus"></i>Add to shopping bag</a>
                                                            <div class="yith-wcwl-add-to-wishlist">
                                                                <div class="yith-wcwl-add-button show"><a href="#" data-product-id="9356" data-product-type="simple" class="add_to_wishlist"><i class="fa-star"></i></a>
                                                                </div>
                                                                <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;"><span class="feedback">Product added to wishlist.</span> <a href="#"><i class="fa-check"></i></a>
                                                                </div>
                                                                <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none"><a href="#"><i class="fa-check"></i></a>
                                                                </div>
                                                                <div style="clear:both"></div>
                                                                <div class="yith-wcwl-wishlistaddresponse"></div>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                    <a class="product-hover-link" href="#"></a>
                                                </figure>
                                                <div class="product-details">
                                                    <h3><a href="#">Adidas – Boston Super OG</a></h3>
                                                    <span class="posted_in"> <a href="#" rel="tag">Footwear</a>, <a href="#" rel="tag">Sneakers</a></span>
                                                </div>
                                                <span class="price"><del><span class="amount">£105.00</span>
                                                    </del> <ins><span class="amount">£85.00</span></ins>
                                                </span>
                                            </li>
                                            <li class="first product col-md-3">
                                                <figure class="product-transition" style="padding-bottom: 360px;">
                                                    <span class="onsale">Sale!</span>
                                                    <div class="product-img-wrap">
                                                        <div class="product-image"><img width="540" height="720" src="img/type1/adidas-grey-red001_1-540x720.jpg" class="size-shop_catalog" >
                                                        </div>
                                                        <div class="product-image second-image"><img width="540" height="720" src="img/type1/adidas-grey-red006_1-540x720.jpg" class="size-shop_catalog">
                                                        </div>
                                                    </div>
                                                    <figcaption>
                                                        <div class="shop-actions ">
                                                            <a href="#" rel="nofollow" data-product_id="9356" data-product_sku="340152" class="add_to_cart_button ajax_add_to_cart product_type_simple" data-added_text="Item added to bag"><i class="icon-plus"></i>Add to shopping bag</a>
                                                            <div class="yith-wcwl-add-to-wishlist">
                                                                <div class="yith-wcwl-add-button show"><a href="#" data-product-id="9356" data-product-type="simple" class="add_to_wishlist"><i class="fa-star"></i></a>
                                                                </div>
                                                                <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;"><span class="feedback">Product added to wishlist.</span> <a href="#"><i class="fa-check"></i></a>
                                                                </div>
                                                                <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none"><a href="#"><i class="fa-check"></i></a>
                                                                </div>
                                                                <div style="clear:both"></div>
                                                                <div class="yith-wcwl-wishlistaddresponse"></div>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                    <a class="product-hover-link" href="#"></a>
                                                </figure>
                                                <div class="product-details">
                                                    <h3><a href="#">Adidas – Boston Super OG</a></h3>
                                                    <span class="posted_in"> <a href="#" rel="tag">Footwear</a>, <a href="#" rel="tag">Sneakers</a></span>
                                                </div>
                                                <span class="price"><del><span class="amount">£105.00</span>
                                                    </del> <ins><span class="amount">£85.00</span></ins>
                                                </span>
                                            </li>
                                            <li class="first product col-md-3">
                                                <figure class="product-transition" style="padding-bottom: 360px;">
                                                    <span class="onsale">Sale!</span>
                                                    <div class="product-img-wrap">
                                                        <div class="product-image"><img width="540" height="720" src="img/type1/adidas-grey-red001_1-540x720.jpg" class="size-shop_catalog" >
                                                        </div>
                                                        <div class="product-image second-image"><img width="540" height="720" src="img/type1/adidas-grey-red006_1-540x720.jpg" class="size-shop_catalog">
                                                        </div>
                                                    </div>
                                                    <figcaption>
                                                        <div class="shop-actions">
                                                            <a href="#" rel="nofollow" data-product_id="9356" data-product_sku="340152" class="add_to_cart_button ajax_add_to_cart product_type_simple" data-added_text="Item added to bag"><i class="icon-plus"></i>Add to shopping bag</a>
                                                            <div class="yith-wcwl-add-to-wishlist">
                                                                <div class="yith-wcwl-add-button show"><a href="#" data-product-id="9356" data-product-type="simple" class="add_to_wishlist"><i class="fa-star"></i></a>
                                                                </div>
                                                                <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;"><span class="feedback">Product added to wishlist.</span> <a href="#"><i class="fa-check"></i></a>
                                                                </div>
                                                                <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none"><a href="#"><i class="fa-check"></i></a>
                                                                </div>
                                                                <div style="clear:both"></div>
                                                                <div class="yith-wcwl-wishlistaddresponse"></div>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                    <a class="product-hover-link" href="#"></a>
                                                </figure>
                                                <div class="product-details">
                                                    <h3><a href="#">Adidas – Boston Super OG</a></h3>
                                                    <span class="posted_in"> <a href="#" rel="tag">Footwear</a>, <a href="#" rel="tag">Sneakers</a></span>
                                                </div>
                                                <span class="price"><del><span class="amount">£105.00</span>
                                                    </del> <ins><span class="amount">£85.00</span></ins>
                                                </span>
                                            </li>

                                        </ul>
                                    </section>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
