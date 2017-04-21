<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/710.css" rel="stylesheet" type="text/css" />
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('../libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('../less/710.less', '../css/710.css');
        ?>
        <link href="../css/710.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
        <script src="../js/owl.carousel.js" type="text/javascript"></script>
        <script type="text/javascript" src="../js/script.js"></script>
    </head>

    <body>
        <div class="type-710">
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
                            <ul class="product-module" id="list-product">
                                <li class="block-product">
                                    <div class="carouselContainer">
                                        <div class="slide-animate">
                                            <figure>
                                                <a class="product-image" href="#" title="">
                                                    <img src="../images/calvin-klein-white-cap-colorblock.jpg" alt="Calvin Klein White Cap Colorblock">
                                                </a>
                                            </figure>
                                            <figure>
                                                <a class="additional-image" href="#" title="">
                                                    <img src="../images/calvin-klein-white-cap-colorblock1.jpg" alt="Calvin Klein White Cap Colorblock">
                                                </a>
                                            </figure>
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
                                            <figure>
                                                <a class="product-image" href="#">
                                                    <img src="../images/dress-mark-james-badgley-mischka-sweetheart.jpg" alt="Dress Daniel Vosovic Rust And Rain">
                                                </a>
                                            </figure>
                                            <figure>
                                                <a class="additional-image" href="#">
                                                    <img src="../images/dress-mark-james-badgley-mischka-sweetheart2.jpg">
                                                </a>
                                            </figure>
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
                                            <figure>
                                                <a class="product-image" href="#">
                                                    <img src="../images/ports-1961-galaxy-shine.jpg" alt="Ports 1961 Galaxy Shine">
                                                </a>
                                            </figure>
                                            <figure>
                                                <a class="additional-image" href="#">
                                                    <img src="../images/ports-1961-galaxy-shine1.jpg" alt="Ports 1961 Galaxy Shine">
                                                </a>
                                            </figure>
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
                                            <figure>
                                                <a class="product-image" href="#">
                                                    <img src="../images/halston-heritage-au-naturale3.jpg" alt="Halston Heritage Au Naturale">
                                                </a>
                                            </figure>
                                            <figure>
                                                <a class="additional-image" href="#">
                                                    <img src="../images/halston-heritage-au-naturale4.jpg" alt="Halston Heritage Au Naturale">
                                                </a>
                                            </figure>
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
                                            <figure>
                                                <a class="product-image" href="#">
                                                    <img src="../images/lilly-pulitzer-embroidered-blossom.jpg" alt="Lilly Pulitzer Embroidered Blossom">
                                                </a>
                                            </figure>
                                            <figure>
                                                <a class="additional-image" href="#">
                                                    <img src="../images/lilly-pulitzer-embroidered-blossom2.jpg" alt="Lilly Pulitzer Embroidered Blossom">
                                                </a>
                                            </figure>
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
                                            <figure>
                                                <a class="product-image" href="#">
                                                    <img src="../images/moschino-cheap-and-chic-yacht.jpg" alt="">
                                                </a>
                                            </figure>
                                            <figure>
                                                <a class="additional-image" href="#">
                                                    <img src="../images/moschino-cheap-and-chic-yacht.jpg" alt="">
                                                </a>
                                            </figure>
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
                                            <figure>
                                                <a class="product-image" href="#" title="">
                                                    <img src="../images/calvin-klein-white-cap-colorblock.jpg" alt="Calvin Klein White Cap Colorblock">
                                                </a>
                                            </figure>
                                            <figure>
                                                <a class="additional-image" href="#" title="">
                                                    <img src="../images/calvin-klein-white-cap-colorblock1.jpg" alt="Calvin Klein White Cap Colorblock">
                                                </a>
                                            </figure>
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
                                            <figure>
                                                <a class="product-image" href="#">
                                                    <img src="../images/dress-mark-james-badgley-mischka-sweetheart.jpg" alt="Dress Daniel Vosovic Rust And Rain">
                                                </a>
                                            </figure>
                                            <figure>
                                                <a class="additional-image" href="#">
                                                    <img src="../images/dress-mark-james-badgley-mischka-sweetheart2.jpg">
                                                </a>
                                            </figure>
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
                                            <figure>
                                                <a class="product-image" href="#">
                                                    <img src="../images/ports-1961-galaxy-shine.jpg" alt="Ports 1961 Galaxy Shine">
                                                </a>
                                            </figure>
                                            <figure>
                                                <a class="additional-image" href="#">
                                                    <img src="../images/ports-1961-galaxy-shine1.jpg" alt="Ports 1961 Galaxy Shine">
                                                </a>
                                            </figure>
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
                                            <figure>
                                                <a class="product-image" href="#">
                                                    <img src="../images/halston-heritage-au-naturale3.jpg" alt="Halston Heritage Au Naturale">
                                                </a>
                                            </figure>
                                            <figure>
                                                <a class="additional-image" href="#">
                                                    <img src="../images/halston-heritage-au-naturale4.jpg" alt="Halston Heritage Au Naturale">
                                                </a>
                                            </figure>
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
                                            <figure>
                                                <a class="product-image" href="#">
                                                    <img src="../images/lilly-pulitzer-embroidered-blossom.jpg" alt="Lilly Pulitzer Embroidered Blossom">
                                                </a>
                                            </figure>
                                            <figure>
                                                <a class="additional-image" href="#">
                                                    <img src="../images/lilly-pulitzer-embroidered-blossom2.jpg" alt="Lilly Pulitzer Embroidered Blossom">
                                                </a>
                                            </figure>
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
                                            <figure>
                                                <a class="product-image" href="#">
                                                    <img src="../images/moschino-cheap-and-chic-yacht.jpg" alt="">
                                                </a>
                                            </figure>
                                            <figure>
                                                <a class="additional-image" href="#">
                                                    <img src="../images/moschino-cheap-and-chic-yacht.jpg" alt="">
                                                </a>
                                            </figure>
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
                                            <figure>
                                                <a class="product-image" href="#" title="">
                                                    <img src="../images/calvin-klein-white-cap-colorblock.jpg" alt="Calvin Klein White Cap Colorblock">
                                                </a>
                                            </figure>
                                            <figure>
                                                <a class="additional-image" href="#" title="">
                                                    <img src="../images/calvin-klein-white-cap-colorblock1.jpg" alt="Calvin Klein White Cap Colorblock">
                                                </a>
                                            </figure>
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
                                            <figure>
                                                <a class="product-image" href="#">
                                                    <img src="../images/dress-mark-james-badgley-mischka-sweetheart.jpg" alt="Dress Daniel Vosovic Rust And Rain">
                                                </a>
                                            </figure>
                                            <figure>
                                                <a class="additional-image" href="#">
                                                    <img src="../images/dress-mark-james-badgley-mischka-sweetheart2.jpg">
                                                </a>
                                            </figure>
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
                                            <figure>
                                                <a class="product-image" href="#">
                                                    <img src="../images/ports-1961-galaxy-shine.jpg" alt="Ports 1961 Galaxy Shine">
                                                </a>
                                            </figure>
                                            <figure>
                                                <a class="additional-image" href="#">
                                                    <img src="../images/ports-1961-galaxy-shine1.jpg" alt="Ports 1961 Galaxy Shine">
                                                </a>
                                            </figure>
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
                                            <figure>
                                                <a class="product-image" href="#">
                                                    <img src="../images/halston-heritage-au-naturale3.jpg" alt="Halston Heritage Au Naturale">
                                                </a>
                                            </figure>
                                            <figure>
                                                <a class="additional-image" href="#">
                                                    <img src="../images/halston-heritage-au-naturale4.jpg" alt="Halston Heritage Au Naturale">
                                                </a>
                                            </figure>
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
                                            <figure>
                                                <a class="product-image" href="#">
                                                    <img src="../images/lilly-pulitzer-embroidered-blossom.jpg" alt="Lilly Pulitzer Embroidered Blossom">
                                                </a>
                                            </figure>
                                            <figure>
                                                <a class="additional-image" href="#">
                                                    <img src="../images/lilly-pulitzer-embroidered-blossom2.jpg" alt="Lilly Pulitzer Embroidered Blossom">
                                                </a>
                                            </figure>
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
                                            <figure>
                                                <a class="product-image" href="#">
                                                    <img src="../images/moschino-cheap-and-chic-yacht.jpg" alt="">
                                                </a>
                                            </figure>
                                            <figure>
                                                <a class="additional-image" href="#">
                                                    <img src="../images/moschino-cheap-and-chic-yacht.jpg" alt="">
                                                </a>
                                            </figure>
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
            </div>
        </div>
        <!-- END -->
    </body>

</html>