<!DOCTYPE HTML>

<html>
    <head>
        <title>777</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php
        if (!class_exists('lessc')) {
            include './libs/lessc.inc.php';
        }
        $less = new lessc;
        $less->compileFile('./less/777.less', './css/777.css')
        ?>

        <link href="css/responsive.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/777.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/xxx.js" type="text/javascript"></script>
    </head>

    <body>

        <div class="type-777">
            <div class="page-heading">
                <div class="container">
                    <div class="heading-text">
                        <h1 class="entry-title">Levi's 1967 505 Jeans</h1>
                    </div>
                    <div id="breadcrumbs">
                        <a title="Go to Neighborhood." href="#" class="home">Neighborhood</a>
                        <i class="fa-angle-right"></i>
                        <a title="Go to Shop." href="#">Shop</a>
                        <i class="fa-angle-right"></i>
                        <a title="Go to the Trousers Product Category archives." href="#">Trousers</a>
                        <i class="fa-angle-right"></i>
                        Levi's 1967 505 Jeans</div>
                </div>
            </div>  
            <div class="inner">
                <article>

                    <div itemscope itemtype="#" class="product">
                        <div class="entry-title" itemprop="name">
                            <h1>Levi's1967 505 Jeans</h1>
                        </div>
                        <div class="container">
                            <div class="images">
                                <div class="flexslider">
                                    <div class="lSSlideOuter">
                                        <!-- Slider -->
                                        <div class="lSSlideOuter">
                                            <div class="row">
                                                <div class="col-xs-12" id="slider">
                                                    <!-- Top part of the slider -->
                                                    <div class="row">          
                                                        <div class="lSSlideWrapper carousel slide" id="myCarousel">
                                                            <!-- Carousel items -->
                                                            <ul class="slides lightSlider">
                                                                <div class="carousel-inner">
                                                                    <div class="active item" data-slide-number="0">
                                                                        <img src="images/lvc-jeans-whased-blue001-800x1200.jpg"></div>

                                                                    <div class="item" data-slide-number="1">
                                                                        <img src="images/lvc-jeans-whased-blue006-800x1200.jpg"></div>

                                                                    <div class="item" data-slide-number="2">
                                                                        <img src="images/lvc-jeans-whased-blue001-800x1200.jpg"></div>
                                                                </div><!-- Carousel nav -->
                                                                <div class="lSAction ">
                                                                    <a class="left lSPrev" href="#myCarousel" role="button" data-slide="prev">
                                                                        <span class="glyphicon glyphicon-chevron-left"></span>                                       
                                                                    </a>
                                                                    <a class="right lSNext " href="#myCarousel" role="button" data-slide="next">
                                                                        <span class="glyphicon glyphicon-chevron-right"></span>                                       
                                                                    </a>   
                                                                </div>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div><!--/Slider-->
                                            <!-- Bottom switcher of slider -->
                                            <div class="row hidden-xs" id="slider-thumbs" >
                                                <ul class="hide-bullets">
                                                    <ul class="lSPager lSGallery">
                                                        <li class="col-md-4" class="active">
                                                            <a class="thumbnail" id="carousel-selector-0" href="#">
                                                                <img src="images/lvc-jeans-whased-blue001.jpg"  class="active"></a>
                                                        </li>
                                                        <li  class="col-md-4">
                                                            <a class="thumbnail" id="carousel-selector-1" href="#">
                                                                <img src="images/lvc-jeans-whased-blue006.jpg"></a>
                                                        </li>
                                                        <li  class="col-md-4">
                                                            <a class="thumbnail" id="carousel-selector-2" href="#">
                                                                <img src="images/lvc-jeans-whased-blue001.jpg"></a>
                                                        </li>
                                                    </ul>   
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="summary">
                                <div class="summary-top">
                                    <div itemprop="offers" itemscope="" itemtype="#">
                                        <p itemprop="price" class="price">
                                            <span class="amount">£170.00</span>
                                        </p>
                                        <meta itemprop="priceCurrency" content="GBP">
                                        <link itemprop="availability" href="#">
                                    </div>
                                    <div class="product-navigation">
                                        <div class="nav-previous"></div>
                                        <div class="nav-next"></div>
                                    </div>
                                </div>
                                <div class="product-short">
                                </div>
                                <form class="cart" method="post" enctype="multipart/form-data">
                                    <div class="quantity">
                                        <input type="number" step="1" min="1" name="quantity" value="1" title="Qty" class="qty text" size="4">
                                        <div class="qty-adjust">
                                            <a class="qty-plus" href="#">
                                                <i class="fa-chevron-up"></i>
                                            </a>
                                            <a class="qty-minus" href="#">
                                                <i class="fa-chevron-down"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <input type="hidden" name="add-to-cart" value="9642">
                                    <button type="submit" class="single_add_to_cart_button">
                                        <i class="fa-plus"></i>
                                        Add to shopping bag
                                    </button>
                                    <div class="yith-wcwl-add-to-wishlist">
                                        <div class="yith-wcwl-add-button show">
                                            <a href="#" data-product-type="simple" class="add_to_wishlist">
                                                <i class="fa-star"></i>
                                            </a>
                                        </div>
                                        <div class="hide" style="display:none;">
                                            <span class="feedback">Product added to wishlist.</span> 
                                            <a href="#">
                                                <i class="fa-check"></i>
                                            </a>
                                        </div>
                                        <div class="hide" style="display:none">
                                            <a href="#">
                                                <i class="fa-check"></i>
                                            </a>
                                        </div>
                                        <div style="clear:both"></div>
                                    </div>
                                </form>
                                <div id="product-accordion">
                                    <div class="accordion-group">
                                        <div class="accordion-heading">
                                            <a class="accordion-toggle" href="#SoftPc" data-toggle="collapse" aria-expanded="false"  href="#">
                                                Description </a>
                                        </div>
                                        <div id="SoftPc" class="collapse in">
                                            <div class="accordion-inner">
                                                <p>
                                                    Levi's
                                                    Vintage 
                                                    1967 505 jeans
                                                    from 
                                                <h1>Levi's</h1>
                                                Vintage Clothing. Made from premium cotton. Preshrunk red selvedge denim. Slim and straight fit. Classic five pocket style. Zip fly and button closure. Copper rivets. Model is 189 cm and wears size 30/34.
                                                </p>
                                                <p>Colour: Washed Blue</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-group">
                                        <div class="accordion-heading">
                                            <a class="accordion-toggle" href="#SoftMobile" data-toggle="collapse" data-parent="#product-accordion" href="#">
                                                Additional Information </a>
                                        </div>
                                        <div id="SoftMobile" class="collapse">
                                            <div class="accordion-inner">
                                                <h2>Additional Information</h2>
                                                <table>
                                                    <tbody><tr class="">
                                                            <th>Weight</th>
                                                            <td>3 kg</td>
                                                        </tr>
                                                        <tr class="alt">
                                                            <th>colour</th>
                                                            <td><p>Blue</p>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <th>size</th>
                                                            <td><p>28, 30, 32, 34, 36</p>
                                                            </td>
                                                        </tr>
                                                        <tr class="alt">
                                                            <th>Fabric</th>
                                                            <td><p>Denim</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-group">
                                        <div class="accordion-heading">
                                            <a class="accordion-toggle" href="#WebDevelopment" data-toggle="collapse" href="#">
                                                Reviews (0) </a>
                                        </div>
                                        <div class="collapse">
                                            <div class="accordion-inner">
                                                <div id="reviews">
                                                    <div id="comments">
                                                        <h2>Reviews</h2>
                                                        <p>There are no reviews yet.</p>
                                                    </div>
                                                    <h3>Be the first to review " Levi's  - 1967 505 Jeans" 
                                                        <small>
                                                            <a rel="nofollow" href="#">Cancel reply</a>
                                                        </small>
                                                    </h3> 
                                                    <form action="#" method="post" id="commentform">
                                                        <p>
                                                            <label for="rating">Your Rating</label>
                                                        <p>
                                                            <span>
                                                                <a href="#">1</a>
                                                                <a href="#">2</a>
                                                                <a href="#">3</a>
                                                                <a href="#">4</a>
                                                                <a href="#">5</a>
                                                            </span>
                                                        </p>
                                                        <select name="rating">
                                                            <option value="">Rated</option>
                                                            <option value="5">Perfect</option>
                                                            <option value="4">Good</option>
                                                            <option value="3">Average</option>
                                                            <option value="2">Not that bad</option>
                                                            <option value="1">Very Poor</option>
                                                        </select>
                                                        <p>
                                                            <label for="comment">Your Review</label>
                                                            <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
                                                        </p>
                                                        <p>
                                                            <label for="author">Name 
                                                                <span>*</span>
                                                            </label> 
                                                            <input name="author" type="text" value="" size="30" aria-required="true">
                                                        </p>
                                                        <p>
                                                            <label for="email">Email 
                                                                <span>*</span>
                                                            </label> 
                                                            <input name="email" type="text" value="" size="30" aria-required="true">
                                                        </p>
                                                        <p>
                                                            <input name="submit" type="submit" id="submit" class="submit" value="Submit"> 
                                                            <input type="hidden" name="comment_post_ID" value="9642">
                                                            <input type="hidden" name="comment_parent" value="0">
                                                        </p> 
                                                    </form>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product_meta">
                                    <p>
                                        <span>
                                            SKU: 
                                            <span itemprop="sku">341404</span> - 
                                        </span>
                                        <span>
                                            Need Help? 
                                            <a href="#email-form" class="inline" data-toggle="modal">
                                                Contact Us
                                            </a>
                                        </span>
                                        <span class="leave-feedback"><a href="#feedback-form" class="inline" data-toggle="modal">Leave Feedback</a></span>
                                    </p>
                                    <p>
                                        <span>Category: 
                                            <a href="#" rel="tag">Trousers</a>.
                                        </span> 
                                    </p>
                                    <p>
                                        <span>Tags: 
                                            <a href="#" rel="tag">Denim</a>, 
                                            <a href="#" rel="tag">Jeans</a>, 
                                            <a href="#" rel="tag">Levi's</a>, 
                                            <a href="#" rel="tag">Vintage</a>.
                                        </span> 
                                    </p>

                                </div> 
                                <div class="share-links clearfix">
                                    <span>Share</span>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fa-envelope"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa-pinterest"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div> 
                        </div>

                    </div>   

                </article>

            </div>

        </div>
    </body>
</html>

