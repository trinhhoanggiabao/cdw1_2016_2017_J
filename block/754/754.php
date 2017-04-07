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
        $less->compileFile('./less/754.less', 'css/754.css');
        ?>
        <link href="css/754.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="type-754">
            <div class="container">
                <div class="row">
                    <div class="breadcrumb_wrap">
                        <ul class="breadcrumb">
                            <li><a href="#" class="homepage-link" title="Back to the frontpage">Home</a></li>
                            <li><span class="page-title">Your Shopping Cart</span></li>
                        </ul>
                    </div>
                    <h2 class="page_heading">
                        SHOPPING CART
                    </h2>
                    <form action="/cart" method="post" class="">
                        <table class="cart_list">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Subtotal</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr class="cart_item" data-id="25848340359">
                                    <td class="cell_1">
                                        <div class="cart_item_img">
                                            <a href="/products/carter-cocktail-shaker">  
                                                <img src="images/carter_cocktail_shaker_1_medium.png" alt=""/>
                                            </a>
                                        </div>
                                        <div class="cart_item_info">
                                            <h3 class="cart_item_name product_name">
                                                <a href="/products/carter-cocktail-shaker">
                                                    Carter Cocktail Shaker
                                                </a>
                                            </h3>
                                            <div class="cart_item_details">
                                                <p class="item_type"><span>Product type:</span> Bakeware</p>
                                                <p class="item_vendor"><span>Vendor:</span> Rabbit</p>
                                                <p class="item_weight"><span>Weight:</span> 0.0 kg</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cell_2 cart_price">
                                        <span class="money" data-currency-usd="$23.00">$23.00</span>
                                    </td>
                                    <td class="cell_3">
                                        <div class="quantity_box">
                                            <input class="quantity_input" id="updates_25848340359" name="updates[]" value="1" type="text">
                                            <span class="quantity_modifier quantity_down"><i class="fa fa-minus"></i></span>
                                            <span class="quantity_modifier quantity_up"><i class="fa fa-plus"></i></span>
                                        </div>
                                        <div>
                                            <button class="btn cart_update">Update</button>
                                        </div>
                                    </td>
                                    <td class="cell_4 cart_price">
                                        <span class="money" data-currency-usd="$23.00">$23.00</span>
                                    </td>
                                    <td class="cell_5">
                                        <a class="cart_item_remove" title="1" href="#"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr class="cart_buttons">
                                    <td colspan="5">
                                        <a class="btn btn-alt cart_continue" href="#"><i class="fa fa-arrow-left" aria-hidden="true"></i>Continue shopping</a>
                                        <button class="btn cart_update"><i class="fa fa-refresh" aria-hidden="true"></i>Update cart</button>
                                        <a class="btn cart_clear" id="cart_clear" href="#"><i class="fa fa-trash-o" aria-hidden="true"></i>Clear cart</a>
                                    </td>
                                </tr>
                                <tr class="cart_summary">
                                    <td colspan="5">
                                        <p class="cart_summary_row">Total weight <span>0.0 lb</span></p>
                                        <p class="cart_summary_row">Total price <span class="money" data-currency-usd="$23.00">$23.00</span></p>
                                        <p class="alert alert-warning cart_summary__notification">
                                            Computers process all orders in USD. While the content of your cart is currently displayed in USD, you will checkout using USD at the most current exchange rate.
                                        </p>
                                        <p class="cart_summary_instructions">
                                            <label>Special instructions for seller</label>
                                            <textarea class="form-control" name="note"></textarea>
                                        </p>
                                        <div class="cart_summary_checkout">
                                            <ul class="cart_summary_methods">
                                                <li><img src="images/cc-amex.png" alt=""/></li>
                                                <li><img src="images/cc-discover.png" alt=""/></li>
                                                <li><img src="images/cc-visa.png" alt=""/></li>
                                                <li><img src="images/cc-maestro.png" alt=""/></li>
                                                <li><img src="images/cc-mastercard.png" alt=""/></li>
                                                <li><img src="images/cc-cirrus.png" alt=""/></li>
                                                <li><img src="images/cc-paypal.png" alt=""/></li>
                                                <li><img src="images/cc-google.png" alt=""/></li>
                                            </ul>
                                            <button type="submit" name="checkout" class="btn">Proceed to checkout</button>
                                        </div>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>