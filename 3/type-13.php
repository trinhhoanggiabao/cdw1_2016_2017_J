<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/owl.carousel.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-13.less', 'css/type-13.css');
        ?>
        <link href="css/type-13.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
        <script src="js/owl.carousel.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/script.js"></script>


    </head>

    <body>
        
    

        <div class="type-13">
            <div class="container">
                <div class="productsCarousel">
                    <table class="title-table">
                        <tr>
                            <td class="w50p">
                                <span class="title-wing"></span>
                            </td>
                            <td class="carousel-title">
                                <h3 class="title" style="color: #666;">Featured Products</h3>
                                <div class="flexisel-nav prev">
                                    <i class="fa fa-chevron-left"></i>                                 
                                </div>
                                <div class="btm-flexisel-right flexisel-nav next">
                                    <i class="fa fa-chevron-right"></i>
                                </div>
                            </td>
                            <td class="w50p">
                                <span class="title-wing"></span>
                            </td>
                        </tr>
                    </table> 
                    
                        
                    <div class="btm-nbs-flexisel-container">
                        <div class="nbs-flexisel-inner">
                            <ul class="product-module"id="list-product">
                                <li class="block-product">
                                    <div class="carouselContainer">
                                        <div class="slide-animate">
                                            <a class="product-image" href="#" title="">                                                        
                                                <img  src="images/calvin-klein-white-cap-colorblock.jpg" alt="Calvin Klein White Cap Colorblock">                                                                                                          
                                            </a>
                                            <a class="additional-image" href="#" title="">
                                                <img src="images/calvin-klein-white-cap-colorblock1.jpg" alt="Calvin Klein White Cap Colorblock">    
                                            </a>
                                            <span class="pk-reduction">-3%</span>
                                            <a class="quick-view" href="#" title="Quick View">
                                                <i class="fa fa-search"></i>                                                        
                                            </a>
                                        </div>
                                    </div>
                                    <div class="bottom-block">
                                        <span class="rate-block">
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star star-color"></i>
                                            </span>
                                        </span>
                                        <a class="f_title ellipsis" href="#" title="">
                                            Calvin Klein White Cap ...
                                        </a>
                                        <div class="content_price">
                                            <span class="old-price">$800.00</span>
                                            <span class="new-price">$776.00</span>
                                        </div>
                                    </div>
                                </li>
                                
                                <li class="block-product">
                                    <div class="carouselContainer">
                                        <div class="slide-animate">
                                            <a class="product-image" href="#">                                                        
                                                <img  src="images/dress-mark-james-badgley-mischka-sweetheart.jpg" alt="Dress Daniel Vosovic Rust And Rain">                                                        
                                            </a>   
                                            <a class="additional-image" href="#">
                                                <img  src="images/dress-mark-james-badgley-mischka-sweetheart2.jpg">
                                            </a>
                                            <a class="quick-view" href="#" title="Quick View">
                                                <i class="fa fa-search"></i>                                                        
                                            </a>
                                        </div>
                                    </div>
                                    <div class="bottom-block">
                                        <span class="rate-block">
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star star-color"></i>
                                            </span>
                                        </span>
                                        <a class="f_title" href="#" title="">
                                            Dress Daniel Vosovic Rust...
                                        </a>
                                        <div class="content_price">                                                    
                                            <span class="new-price">$796.00</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="block-product">
                                    <div class="carouselContainer">
                                        <div class="slide-animate">
                                            <a class="product-image" href="#">                                                        
                                                <img  src="images/ports-1961-galaxy-shine.jpg" alt="Ports 1961 Galaxy Shine">                                                        
                                            </a>   
                                            <a class="additional-image" href="#">
                                                <img  src="images/ports-1961-galaxy-shine1.jpg" alt="Ports 1961 Galaxy Shine">                                                        
                                            </a>
                                            <a class="quick-view" href="#" title="Quick View">
                                                <i class="fa fa-search"></i>                                                        
                                            </a>
                                        </div>
                                    </div>
                                    <div class="bottom-block">
                                        <span class="rate-block">
                                            <span class="star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star star-color"></i>
                                            </span>
                                        </span>
                                        <a class="f_title" href="#" title="">
                                            Ports 1961 Galaxy Shi...
                                        </a>
                                        <div class="content_price">
                                            <span class="new-price">$820.00</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="block-product">
                                    <div class="carouselContainer">
                                        <div class="slide-animate">
                                            <a class="product-image" href="#">                                                        
                                                <img  src="images/halston-heritage-au-naturale3.jpg" alt="Halston Heritage Au Naturale">                                                        
                                            </a>   
                                            <a class="additional-image" href="#">                                                                                                                
                                                <img  src="images/halston-heritage-au-naturale4.jpg" alt="Halston Heritage Au Naturale">
                                            </a>
                                            <a class="quick-view" href="#" title="Quick View">
                                                <i class="fa fa-search"></i>                                                        
                                            </a>
                                        </div>
                                    </div>
                                    <div class="bottom-block">
                                        <span class="rate-block">
                                            <span class="star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </span>
                                        <a class="f_title" href="#" title="">
                                            Halston Heritage Au Nat...
                                        </a>
                                        <div class="content_price">
                                            <span class="new-price">$805.00</span>
                                        </div>
                                    </div>
                                </li>

                                <li class="block-product">
                                    <div class="carouselContainer">
                                        <div class="slide-animate">
                                            <a class="product-image" href="#">                                                        
                                                <img src="images/lilly-pulitzer-embroidered-blossom.jpg" alt="Lilly Pulitzer Embroidered Blossom">                                                        
                                            </a>   
                                            <a class="additional-image" href="#">
                                                <img  src="images/lilly-pulitzer-embroidered-blossom2.jpg" alt="Lilly Pulitzer Embroidered Blossom">                                                        
                                            </a>
                                            <a class="quick-view" href="#" title="Quick View">
                                                <i class="fa fa-search"></i>                                                        
                                            </a>
                                        </div>
                                    </div>
                                    <div class="bottom-block">
                                        <span class="rate-block">
                                            <span class="star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </span>
                                        <a class="f_title" href="#" title="">
                                            Lilly Pulitzer Embroidered...
                                        </a>
                                        <div class="content_price">
                                            <span class="new-price">$804.00</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="block-product">
                                    <div class="carouselContainer">
                                        <div class="slide-animate">
                                            <a class="product-image" href="#">                                                        
                                                <img src="images/moschino-cheap-and-chic-yacht.jpg" alt="">                                                        
                                            </a>   
                                            <a class="additional-image" href="#">
                                                <img src="images/moschino-cheap-and-chic-yacht.jpg" alt="">                                                            
                                            </a>
                                            <a class="quick-view" href="#" title="Quick View">
                                                <i class="fa fa-search"></i>                                                        
                                            </a>
                                        </div>
                                    </div>
                                    <div class="bottom-block">
                                        <span class="rate-block">
                                            <span class="star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </span>
                                        <a class="f_title" href="#" title="">
                                            Moschino Cheap And Chic...
                                        </a>
                                        <div class="content_price">
                                            <span class="new-price">$804.00</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="block-product">
                                    <div class="carouselContainer">
                                        <div class="slide-animate">
                                            <a class="product-image" href="#" title="">                                                        
                                                <img  src="images/calvin-klein-white-cap-colorblock.jpg" alt="Calvin Klein White Cap Colorblock">                                                                                                          
                                            </a>
                                            <a class="additional-image" href="#" title="">
                                                <img src="images/calvin-klein-white-cap-colorblock1.jpg" alt="Calvin Klein White Cap Colorblock">    
                                            </a>
                                            <span class="pk-reduction">-3%</span>
                                            <a class="quick-view" href="#" title="Quick View">
                                                <i class="fa fa-search"></i>                                                        
                                            </a>
                                        </div>
                                    </div>
                                    <div class="bottom-block">
                                        <span class="rate-block">
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star star-color"></i>
                                            </span>
                                        </span>
                                        <a class="f_title ellipsis" href="#" title="">
                                            Calvin Klein White Cap ...
                                        </a>
                                        <div class="content_price">
                                            <span class="old-price">$800.00</span>
                                            <span class="new-price">$776.00</span>
                                        </div>
                                    </div>
                                </li>
                                
                                <li class="block-product">
                                    <div class="carouselContainer">
                                        <div class="slide-animate">
                                            <a class="product-image" href="#">                                                        
                                                <img  src="images/dress-mark-james-badgley-mischka-sweetheart.jpg" alt="Dress Daniel Vosovic Rust And Rain">                                                        
                                            </a>   
                                            <a class="additional-image" href="#">
                                                <img  src="images/dress-mark-james-badgley-mischka-sweetheart2.jpg">
                                            </a>
                                            <a class="quick-view" href="#" title="Quick View">
                                                <i class="fa fa-search"></i>                                                        
                                            </a>
                                        </div>
                                    </div>
                                    <div class="bottom-block">
                                        <span class="rate-block">
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star star-color"></i>
                                            </span>
                                        </span>
                                        <a class="f_title" href="#" title="">
                                            Dress Daniel Vosovic Rust...
                                        </a>
                                        <div class="content_price">                                                    
                                            <span class="new-price">$796.00</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="block-product">
                                    <div class="carouselContainer">
                                        <div class="slide-animate">
                                            <a class="product-image" href="#">                                                        
                                                <img  src="images/ports-1961-galaxy-shine.jpg" alt="Ports 1961 Galaxy Shine">                                                        
                                            </a>   
                                            <a class="additional-image" href="#">
                                                <img  src="images/ports-1961-galaxy-shine1.jpg" alt="Ports 1961 Galaxy Shine">                                                        
                                            </a>
                                            <a class="quick-view" href="#" title="Quick View">
                                                <i class="fa fa-search"></i>                                                        
                                            </a>
                                        </div>
                                    </div>
                                    <div class="bottom-block">
                                        <span class="rate-block">
                                            <span class="star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star star-color"></i>
                                            </span>
                                        </span>
                                        <a class="f_title" href="#" title="">
                                            Ports 1961 Galaxy Shi...
                                        </a>
                                        <div class="content_price">
                                            <span class="new-price">$820.00</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="block-product">
                                    <div class="carouselContainer">
                                        <div class="slide-animate">
                                            <a class="product-image" href="#">                                                        
                                                <img  src="images/halston-heritage-au-naturale3.jpg" alt="Halston Heritage Au Naturale">                                                        
                                            </a>   
                                            <a class="additional-image" href="#">                                                                                                                
                                                <img  src="images/halston-heritage-au-naturale4.jpg" alt="Halston Heritage Au Naturale">
                                            </a>
                                            <a class="quick-view" href="#" title="Quick View">
                                                <i class="fa fa-search"></i>                                                        
                                            </a>
                                        </div>
                                    </div>
                                    <div class="bottom-block">
                                        <span class="rate-block">
                                            <span class="star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </span>
                                        <a class="f_title" href="#" title="">
                                            Halston Heritage Au Nat...
                                        </a>
                                        <div class="content_price">
                                            <span class="new-price">$805.00</span>
                                        </div>
                                    </div>
                                </li>

                                <li class="block-product">
                                    <div class="carouselContainer">
                                        <div class="slide-animate">
                                            <a class="product-image" href="#">                                                        
                                                <img src="images/lilly-pulitzer-embroidered-blossom.jpg" alt="Lilly Pulitzer Embroidered Blossom">                                                        
                                            </a>   
                                            <a class="additional-image" href="#">
                                                <img  src="images/lilly-pulitzer-embroidered-blossom2.jpg" alt="Lilly Pulitzer Embroidered Blossom">                                                        
                                            </a>
                                            <a class="quick-view" href="#" title="Quick View">
                                                <i class="fa fa-search"></i>                                                        
                                            </a>
                                        </div>
                                    </div>
                                    <div class="bottom-block">
                                        <span class="rate-block">
                                            <span class="star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </span>
                                        <a class="f_title" href="#" title="">
                                            Lilly Pulitzer Embroidered...
                                        </a>
                                        <div class="content_price">
                                            <span class="new-price">$804.00</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="block-product">
                                    <div class="carouselContainer">
                                        <div class="slide-animate">
                                            <a class="product-image" href="#">                                                        
                                                <img src="images/moschino-cheap-and-chic-yacht.jpg" alt="">                                                        
                                            </a>   
                                            <a class="additional-image" href="#">
                                                <img src="images/moschino-cheap-and-chic-yacht.jpg" alt="">                                                            
                                            </a>
                                            <a class="quick-view" href="#" title="Quick View">
                                                <i class="fa fa-search"></i>                                                        
                                            </a>
                                        </div>
                                    </div>
                                    <div class="bottom-block">
                                        <span class="rate-block">
                                            <span class="star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </span>
                                        <a class="f_title" href="#" title="">
                                            Moschino Cheap And Chic...
                                        </a>
                                        <div class="content_price">
                                            <span class="new-price">$804.00</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="block-product">
                                    <div class="carouselContainer">
                                        <div class="slide-animate">
                                            <a class="product-image" href="#" title="">                                                        
                                                <img  src="images/calvin-klein-white-cap-colorblock.jpg" alt="Calvin Klein White Cap Colorblock">                                                                                                          
                                            </a>
                                            <a class="additional-image" href="#" title="">
                                                <img src="images/calvin-klein-white-cap-colorblock1.jpg" alt="Calvin Klein White Cap Colorblock">    
                                            </a>
                                            <span class="pk-reduction">-3%</span>
                                            <a class="quick-view" href="#" title="Quick View">
                                                <i class="fa fa-search"></i>                                                        
                                            </a>
                                        </div>
                                    </div>
                                    <div class="bottom-block">
                                        <span class="rate-block">
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star star-color"></i>
                                            </span>
                                        </span>
                                        <a class="f_title ellipsis" href="#" title="">
                                            Calvin Klein White Cap ...
                                        </a>
                                        <div class="content_price">
                                            <span class="old-price">$800.00</span>
                                            <span class="new-price">$776.00</span>
                                        </div>
                                    </div>
                                </li>
                                
                                <li class="block-product">
                                    <div class="carouselContainer">
                                        <div class="slide-animate">
                                            <a class="product-image" href="#">                                                        
                                                <img  src="images/dress-mark-james-badgley-mischka-sweetheart.jpg" alt="Dress Daniel Vosovic Rust And Rain">                                                        
                                            </a>   
                                            <a class="additional-image" href="#">
                                                <img  src="images/dress-mark-james-badgley-mischka-sweetheart2.jpg">
                                            </a>
                                            <a class="quick-view" href="#" title="Quick View">
                                                <i class="fa fa-search"></i>                                                        
                                            </a>
                                        </div>
                                    </div>
                                    <div class="bottom-block">
                                        <span class="rate-block">
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star star-color"></i>
                                            </span>
                                        </span>
                                        <a class="f_title" href="#" title="">
                                            Dress Daniel Vosovic Rust...
                                        </a>
                                        <div class="content_price">                                                    
                                            <span class="new-price">$796.00</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="block-product">
                                    <div class="carouselContainer">
                                        <div class="slide-animate">
                                            <a class="product-image" href="#">                                                        
                                                <img  src="images/ports-1961-galaxy-shine.jpg" alt="Ports 1961 Galaxy Shine">                                                        
                                            </a>   
                                            <a class="additional-image" href="#">
                                                <img  src="images/ports-1961-galaxy-shine1.jpg" alt="Ports 1961 Galaxy Shine">                                                        
                                            </a>
                                            <a class="quick-view" href="#" title="Quick View">
                                                <i class="fa fa-search"></i>                                                        
                                            </a>
                                        </div>
                                    </div>
                                    <div class="bottom-block">
                                        <span class="rate-block">
                                            <span class="star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star star-color"></i>
                                            </span>
                                        </span>
                                        <a class="f_title" href="#" title="">
                                            Ports 1961 Galaxy Shi...
                                        </a>
                                        <div class="content_price">
                                            <span class="new-price">$820.00</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="block-product">
                                    <div class="carouselContainer">
                                        <div class="slide-animate">
                                            <a class="product-image" href="#">                                                        
                                                <img  src="images/halston-heritage-au-naturale3.jpg" alt="Halston Heritage Au Naturale">                                                        
                                            </a>   
                                            <a class="additional-image" href="#">                                                                                                                
                                                <img  src="images/halston-heritage-au-naturale4.jpg" alt="Halston Heritage Au Naturale">
                                            </a>
                                            <a class="quick-view" href="#" title="Quick View">
                                                <i class="fa fa-search"></i>                                                        
                                            </a>
                                        </div>
                                    </div>
                                    <div class="bottom-block">
                                        <span class="rate-block">
                                            <span class="star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </span>
                                        <a class="f_title" href="#" title="">
                                            Halston Heritage Au Nat...
                                        </a>
                                        <div class="content_price">
                                            <span class="new-price">$805.00</span>
                                        </div>
                                    </div>
                                </li>

                                <li class="block-product">
                                    <div class="carouselContainer">
                                        <div class="slide-animate">
                                            <a class="product-image" href="#">                                                        
                                                <img src="images/lilly-pulitzer-embroidered-blossom.jpg" alt="Lilly Pulitzer Embroidered Blossom">                                                        
                                            </a>   
                                            <a class="additional-image" href="#">
                                                <img  src="images/lilly-pulitzer-embroidered-blossom2.jpg" alt="Lilly Pulitzer Embroidered Blossom">                                                        
                                            </a>
                                            <a class="quick-view" href="#" title="Quick View">
                                                <i class="fa fa-search"></i>                                                        
                                            </a>
                                        </div>
                                    </div>
                                    <div class="bottom-block">
                                        <span class="rate-block">
                                            <span class="star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </span>
                                        <a class="f_title" href="#" title="">
                                            Lilly Pulitzer Embroidered...
                                        </a>
                                        <div class="content_price">
                                            <span class="new-price">$804.00</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="block-product">
                                    <div class="carouselContainer">
                                        <div class="slide-animate">
                                            <a class="product-image" href="#">                                                        
                                                <img src="images/moschino-cheap-and-chic-yacht.jpg" alt="">                                                        
                                            </a>   
                                            <a class="additional-image" href="#">
                                                <img src="images/moschino-cheap-and-chic-yacht.jpg" alt="">                                                            
                                            </a>
                                            <a class="quick-view" href="#" title="Quick View">
                                                <i class="fa fa-search"></i>                                                        
                                            </a>
                                        </div>
                                    </div>
                                    <div class="bottom-block">
                                        <span class="rate-block">
                                            <span class="star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </span>
                                        <a class="f_title" href="#" title="">
                                            Moschino Cheap And Chic...
                                        </a>
                                        <div class="content_price">
                                            <span class="new-price">$804.00</span>
                                        </div>
                                    </div>
                                </li>
                           </ul>
                        </div>
                    </div>
                </div>
                
                <div class="banners-carousel">
                    <div class="banners-carousel-container">
                        <div class="banner-carousel-top">
                            <div class="banner-top">
                                <ul class="sliderCarousel" id="banner-carousel">
                                    <li class="nbs-flexisel-item">   
                                        <div class="banner-carousel-wrap">
                                             <a href="#"><img src="images/banner-01.jpg"></a>   
                                        </div>

                                    </li>
                                    <li class="nbs-flexisel-item">    
                                        <div class="banner-carousel-wrap">
                                            <a href="#"><img src="images/banner-02.jpg"></a>
                                        </div>
                                    </li>
                                     <li class="nbs-flexisel-item">   
                                        <div class="banner-carousel-wrap">
                                             <a href="#"><img src="images/banner-01.jpg"></a>   
                                        </div>

                                    </li>
                                    <li class="nbs-flexisel-item">    
                                        <div class="banner-carousel-wrap">
                                            <a href="#"><img src="images/banner-02.jpg"></a>
                                        </div>
                                    </li>
                                    <li class="nbs-flexisel-item">   
                                        <div class="banner-carousel-wrap">
                                             <a href="#"><img src="images/banner-01.jpg"></a>   
                                        </div>

                                    </li>
                                    <li class="nbs-flexisel-item">    
                                        <div class="banner-carousel-wrap">
                                            <a href="#"><img src="images/banner-02.jpg"></a>
                                        </div>
                                    </li>
                                     <li class="nbs-flexisel-item">   
                                        <div class="banner-carousel-wrap">
                                             <a href="#"><img src="images/banner-01.jpg"></a>   
                                        </div>

                                    </li>
                                    <li class="nbs-flexisel-item">    
                                        <div class="banner-carousel-wrap">
                                            <a href="#"><img src="images/banner-02.jpg"></a>
                                        </div>
                                    </li>
                                    <li class="nbs-flexisel-item">   
                                        <div class="banner-carousel-wrap">
                                             <a href="#"><img src="images/banner-01.jpg"></a>   
                                        </div>

                                    </li>
                                    <li class="nbs-flexisel-item">    
                                        <div class="banner-carousel-wrap">
                                            <a href="#"><img src="images/banner-02.jpg"></a>
                                        </div>
                                    </li>
                                     <li class="nbs-flexisel-item">   
                                        <div class="banner-carousel-wrap">
                                             <a href="#"><img src="images/banner-01.jpg"></a>   
                                        </div>

                                    </li>
                                    <li class="nbs-flexisel-item">    
                                        <div class="banner-carousel-wrap">
                                            <a href="#"><img src="images/banner-02.jpg"></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="flexisel-nav-wrapper">
                                <div class="flexisel-main btm-left btn-prev">
                                    <i class="fa fa-chevron-left"></i>
                                </div>
                                <div class="flexisel-main btm-right btn-next">
                                    <i class="fa fa-chevron-right"></i>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
                
                
                    <div class="instagram-feed">
                        <div class="instafeed-container">
                            <table class="title-table">
                                <tr>
                                    <td class="w50p">
                                        <span class="title-wing"></span>
                                    </td>
                                    <td class="carousel-title">
                                        <h3 class="title" style="color: #666;">instagram feed</h3>
                                        <div class="flexisel-nav btn_prev">
                                            <i class="fa fa-chevron-left"></i>                                 
                                        </div>
                                        <div class="btm-flexisel-right flexisel-nav btn_next">
                                            <i class="fa fa-chevron-right"></i>
                                        </div>
                                    </td>
                                    <td class="w50p">
                                        <span class="title-wing"></span>
                                    </td>
                                </tr>
                            </table>  
                            <div class="instamiddle-nbs-container">
                                <ul class="instafeed-middle" id="carousel-instafeed">
                                    <li>
                                        <div class="ig-indent">
                                            <div class="ig-wrapper thumbs">
                                                <a href="#">
                                                    <img class="img-responsive" src="images/sony_vaio.jpg" title="#sony #vaio">
                                                </a>
                                                <span class="ig-caption">#sony #vaio</span>
                                                <span class="ig-likes ig-icon">
                                                    <i class="fa fa-eye"></i>4
                                                </span>
                                                <span class="ig-icon">
                                                    <i class="fa fa-comment"></i>2
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ig-indent">
                                            <div class="ig-wrapper">
                                                <a class="ig-link" href="#">
                                                    <img class="img-responsive" src="images/sony_laptop.jpg" title="#sony laptop">
                                                </a>
                                                <span class="ig-caption">#sony laptop</span>
                                                <span class="ig-likes ig-icon">
                                                    <i class="fa fa-eye"></i>2
                                                </span>
                                                <span class="ig-comments ig-icon">
                                                    <i class="fa fa-comment"></i>0
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ig-indent">
                                            <div class="ig-wrapper">
                                                <a class="ig-link" href="#">
                                                    <img src="images/sony_vaio_laptop.jpg" title="#sony vaio laptop">
                                                </a>
                                                <span class="ig-caption">#sony vaio laptop</span>
                                                <span class="ig-likes ig-icon">
                                                    <i class="fa fa-eye"></i>3
                                                </span>
                                                <span class="ig-comments ig-icon">
                                                    <i class="fa fa-comment"></i>1
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ig-indent">
                                            <div class="ig-wrapper">
                                                <a class="ig-link" href="#">
                                                    <img src="images/macbook-pro.jpg" title="#macbook pro 13">
                                                </a>
                                                <span class="ig-caption">#macbook pro 13</span>
                                                <span class="ig-likes ig-icon">
                                                    <i class="fa fa-eye"></i>3
                                                </span>
                                                <span class="ig-comments ig-icon">
                                                    <i class="fa fa-comment"></i>1
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ig-indent">
                                            <div class="ig-wrapper thumbs">
                                                <a href="#">
                                                    <img class="img-responsive" src="images/sony_vaio.jpg" title="#sony #vaio">
                                                </a>
                                                <span class="ig-caption">#sony #vaio</span>
                                                <span class="ig-likes ig-icon">
                                                    <i class="fa fa-eye"></i>4
                                                </span>
                                                <span class="ig-icon">
                                                    <i class="fa fa-comment"></i>2
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ig-indent">
                                            <div class="ig-wrapper">
                                                <a class="ig-link" href="#">
                                                    <img class="img-responsive" src="images/sony_laptop.jpg" title="#sony laptop">
                                                </a>
                                                <span class="ig-caption">#sony laptop</span>
                                                <span class="ig-likes ig-icon">
                                                    <i class="fa fa-eye"></i>2
                                                </span>
                                                <span class="ig-comments ig-icon">
                                                    <i class="fa fa-comment"></i>0
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ig-indent">
                                            <div class="ig-wrapper">
                                                <a class="ig-link" href="#">
                                                    <img src="images/sony_vaio_laptop.jpg" title="#sony vaio laptop">
                                                </a>
                                                <span class="ig-caption">#sony vaio laptop</span>
                                                <span class="ig-likes ig-icon">
                                                    <i class="fa fa-eye"></i>3
                                                </span>
                                                <span class="ig-comments ig-icon">
                                                    <i class="fa fa-comment"></i>1
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ig-indent">
                                            <div class="ig-wrapper">
                                                <a class="ig-link" href="#">
                                                    <img src="images/macbook-pro.jpg" title="#macbook pro 13">
                                                </a>
                                                <span class="ig-caption">#macbook pro 13</span>
                                                <span class="ig-likes ig-icon">
                                                    <i class="fa fa-eye"></i>3
                                                </span>
                                                <span class="ig-comments ig-icon">
                                                    <i class="fa fa-comment"></i>1
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ig-indent">
                                            <div class="ig-wrapper thumbs">
                                                <a href="#">
                                                    <img class="img-responsive" src="images/sony_vaio.jpg" title="#sony #vaio">
                                                </a>
                                                <span class="ig-caption">#sony #vaio</span>
                                                <span class="ig-likes ig-icon">
                                                    <i class="fa fa-eye"></i>4
                                                </span>
                                                <span class="ig-icon">
                                                    <i class="fa fa-comment"></i>2
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ig-indent">
                                            <div class="ig-wrapper">
                                                <a class="ig-link" href="#">
                                                    <img class="img-responsive" src="images/sony_laptop.jpg" title="#sony laptop">
                                                </a>
                                                <span class="ig-caption">#sony laptop</span>
                                                <span class="ig-likes ig-icon">
                                                    <i class="fa fa-eye"></i>2
                                                </span>
                                                <span class="ig-comments ig-icon">
                                                    <i class="fa fa-comment"></i>0
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ig-indent">
                                            <div class="ig-wrapper">
                                                <a class="ig-link" href="#">
                                                    <img src="images/sony_vaio_laptop.jpg" title="#sony vaio laptop">
                                                </a>
                                                <span class="ig-caption">#sony vaio laptop</span>
                                                <span class="ig-likes ig-icon">
                                                    <i class="fa fa-eye"></i>3
                                                </span>
                                                <span class="ig-comments ig-icon">
                                                    <i class="fa fa-comment"></i>1
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ig-indent">
                                            <div class="ig-wrapper">
                                                <a class="ig-link" href="#">
                                                    <img src="images/macbook-pro.jpg" title="#macbook pro 13">
                                                </a>
                                                <span class="ig-caption">#macbook pro 13</span>
                                                <span class="ig-likes ig-icon">
                                                    <i class="fa fa-eye"></i>3
                                                </span>
                                                <span class="ig-comments ig-icon">
                                                    <i class="fa fa-comment"></i>1
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ig-indent">
                                            <div class="ig-wrapper thumbs">
                                                <a href="#">
                                                    <img class="img-responsive" src="images/sony_vaio.jpg" title="#sony #vaio">
                                                </a>
                                                <span class="ig-caption">#sony #vaio</span>
                                                <span class="ig-likes ig-icon">
                                                    <i class="fa fa-eye"></i>4
                                                </span>
                                                <span class="ig-icon">
                                                    <i class="fa fa-comment"></i>2
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ig-indent">
                                            <div class="ig-wrapper">
                                                <a class="ig-link" href="#">
                                                    <img class="img-responsive" src="images/sony_laptop.jpg" title="#sony laptop">
                                                </a>
                                                <span class="ig-caption">#sony laptop</span>
                                                <span class="ig-likes ig-icon">
                                                    <i class="fa fa-eye"></i>2
                                                </span>
                                                <span class="ig-comments ig-icon">
                                                    <i class="fa fa-comment"></i>0
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ig-indent">
                                            <div class="ig-wrapper">
                                                <a class="ig-link" href="#">
                                                    <img src="images/sony_vaio_laptop.jpg" title="#sony vaio laptop">
                                                </a>
                                                <span class="ig-caption">#sony vaio laptop</span>
                                                <span class="ig-likes ig-icon">
                                                    <i class="fa fa-eye"></i>3
                                                </span>
                                                <span class="ig-comments ig-icon">
                                                    <i class="fa fa-comment"></i>1
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ig-indent">
                                            <div class="ig-wrapper">
                                                <a class="ig-link" href="#">
                                                    <img src="images/macbook-pro.jpg" title="#macbook pro 13">
                                                </a>
                                                <span class="ig-caption">#macbook pro 13</span>
                                                <span class="ig-likes ig-icon">
                                                    <i class="fa fa-eye"></i>3
                                                </span>
                                                <span class="ig-comments ig-icon">
                                                    <i class="fa fa-comment"></i>1
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="manufacturersCarousel">
                        <div class="mnf-flexisel-container">
                            <div class="nbs-flexisel-inner">
                                <ul class="nbs-flexisel-ul" id="carousel-manufacturer">
                                    <li>
                                        <div class="manuf-indent">
                                            <a href="#" title="More about D&G">
                                                <img src="images/9-manu_alysum.jpg" alt="">
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="manuf-indent">
                                            <a href="#" title="More about D&G">
                                                <img src="images/9-manu_alysum.jpg" alt="">
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="manuf-indent">
                                            <a href="#" title="More about D&G">
                                                <img src="images/9-manu_alysum.jpg" alt="">
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="manuf-indent">
                                            <a href="#" title="More about D&G">
                                                <img class="dib" src="images/9-manu_alysum.jpg" alt="">
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="manuf-indent">
                                            <a href="#" title="More about D&G">
                                                <img src="images/9-manu_alysum.jpg" alt="">
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="manuf-indent">
                                            <a href="#" title="More about D&G">
                                                <img src="images/9-manu_alysum.jpg" alt="">
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="manuf-indent">
                                            <a href="#" title="More about D&G">
                                                <img src="images/9-manu_alysum.jpg" alt="">
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="manuf-indent">
                                            <a href="#" title="More about D&G">
                                                <img src="images/9-manu_alysum.jpg" alt="">
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="manuf-indent">
                                            <a href="#" title="More about D&G">
                                                <img src="images/9-manu_alysum.jpg" alt="">
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="manuf-indent">
                                            <a href="#" title="More about D&G">
                                                <img class="dib" src="images/9-manu_alysum.jpg" alt="">
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="manuf-indent">
                                            <a href="#" title="More about D&G">
                                                <img src="images/9-manu_alysum.jpg" alt="">
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="manuf-indent">
                                            <a href="#" title="More about D&G">
                                                <img src="images/9-manu_alysum.jpg" alt="">
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="flexisel-nav btm-left btnprev">
                            <i class="fa fa-chevron-left"></i>
                        </div>
                        <div class="flexisel-nav btm-right btnnext">
                            <i class="fa fa-chevron-right"></i>
                        </div>
                    </div>
                </div> 
            </div>
<!-- END -->


    
    </body>

</html>