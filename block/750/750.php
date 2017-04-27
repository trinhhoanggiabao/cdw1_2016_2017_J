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
        $less->compileFile('./less/750.less', 'css/750.css');
        ?>
        <link href="css/750.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="type-750">
            <div class="container">
                <div class="breadcrumb_wrap">
                    <ul class="breadcrumb">
                        <li><a href="" title="Home">Home</a></li>
                        <li><span>Collections</span></li>
                    </ul>
                </div>
                <h3 class="title">Collections</h3>
                <div class="collection_listing_main">
                    <div class="collection_listing_item">
                        <div class="collection_img">
                            <a><img src="images/boston_shaker_1_medium.png" alt=""/></a>
                        </div>
                        <h4 class="collection_name"><a href="/collections/bakeware">Bakeware</a></h4>
                        <p class="collection_products">8 products</p>
                        <p class="collection_desc">Taking care of our clients was and still is a main aim of our compa...</p>
                        <a class="btn" href="#">View products</a>
                    </div>
                    <div class="collection_listing_item">
                        <div class="collection_img">
                            <a><img src="images/carter_double_walled_ice_bucket_1_medium.png" alt=""/></a>
                        </div>
                        <h4 class="collection_name"><a href="/collections/bakeware">Cooking Utensils</a></h4>
                        <p class="collection_products">8 products</p>
                        <p class="collection_desc">Yes, we agree that selling food and kitchen equipment is a tricky t...</p>
                        <a class="btn" href="#">View products</a>
                    </div>
                    <div class="collection_listing_item">
                        <div class="collection_img">
                            <a><img src="images/10_piece_oxo_holder_with_tool_s_set_1_medium.png" alt=""/></a>
                        </div>
                        <h4 class="collection_name"><a href="/collections/bakeware">Cooks' Tools</a></h4>
                        <p class="collection_products">8 products</p>
                        <p class="collection_desc">Those were the times when people still preferred to buy products at...</p>
                        <a class="btn" href="#">View products</a>
                    </div>
                    <div class="collection_listing_item">
                        <div class="collection_img">
                            <a><img src="images/carter_cocktail_shaker_1_medium.png" alt=""/></a>
                        </div>
                        <h4 class="collection_name"><a href="/collections/bakeware">Cookware</a></h4>
                        <p class="collection_products">8 products</p>
                        <p class="collection_desc">There is a common opinion that customer care service makes 90% of y...</p>
                        <a class="btn" href="#">View products</a>
                    </div>
                    <div class="collection_listing_item">
                        <div class="collection_img">
                            <a><img src="images/batter_dispenser_1_medium.png" alt=""/></a>
                        </div>
                        <h4 class="collection_name"><a href="/collections/bakeware">Cookware sets</a></h4>
                        <p class="collection_products">8 products</p>
                        <p class="collection_desc">Yes, we agree that selling food and kitchen equipment is a tricky t...</p>
                        <a class="btn" href="#">View products</a>
                    </div>
                    <div class="collection_listing_item">
                        <div class="collection_img">
                            <a><img src="images/oxo_3_in_1_avocado_tool_1_medium.png" alt=""/></a>
                        </div>
                        <h4 class="collection_name"><a href="/collections/bakeware">Cutlery</a></h4>
                        <p class="collection_products">8 products</p>
                        <p class="collection_desc">Nevertheless we’ve decided to create an online shop and we are so g...</p>
                        <a class="btn" href="#">View products</a>
                    </div>
                    <div class="collection_listing_item">
                        <div class="collection_img">
                            <a><img src="images/5_piece_inches_nesting_mixing_bowl_set_1_medium.png" alt=""/></a>
                        </div>
                        <h4 class="collection_name"><a href="/collections/bakeware">Dinnerware</a></h4>
                        <p class="collection_products">9 products</p>
                        <p class="collection_desc">Every business is very demanding but the secret of success lies bet...</p>
                        <a class="btn" href="#">View products</a>
                    </div>
                    <div class="collection_listing_item">
                        <div class="collection_img">
                            <a><img src="images/kuhn_rikon_cookie_press_and_decorating_kit_1_medium.png" alt=""/></a>
                        </div>
                        <h4 class="collection_name"><a href="/collections/bakeware">Electrics</a></h4>
                        <p class="collection_products">9 products</p>
                        <p class="collection_desc">Welcome you here, at our online Kitchen Supplies store. Those were ...</p>
                        <a class="btn" href="#">View products</a>
                    </div>
                    <div class="collection_listing_item">
                        <div class="collection_img">
                            <a><img src="images/rabbit_wine_opener_3_piece_set_1_medium.png" alt=""/></a>
                        </div>
                        <h4 class="collection_name"><a href="/collections/bakeware">Gadgets</a></h4>
                        <p class="collection_products">8 products</p>
                        <p class="collection_desc">Those were the times when people still preferred to buy products at...</p>
                        <a class="btn" href="#">View products</a>
                    </div>
                    <div class="collection_listing_item">
                        <div class="collection_img">
                            <a><img src="images/john_boos_edge_grain_maple_cutting_board_1_medium.png" alt=""/></a>
                        </div>
                        <h4 class="collection_name"><a href="/collections/bakeware">Pans & Skillets</a></h4>
                        <p class="collection_products">6 products</p>
                        <p class="collection_desc">Those were the times when people still preferred to buy products at...</p>
                        <a class="btn" href="#">View products</a>
                    </div>
                    <div class="collection_listing_item">
                        <div class="collection_img">
                            <a><img src="images/10_piece_oxo_holder_with_tool_s_set_1_medium.png" alt=""/></a>
                        </div>
                        <h4 class="collection_name"><a href="/collections/bakeware">Bakeware</a></h4>
                        <p class="collection_products">8 products</p>
                        <a class="btn" href="#">View products</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>