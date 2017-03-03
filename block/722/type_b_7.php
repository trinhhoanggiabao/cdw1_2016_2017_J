<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/styles.less', 'css/styles.css');
        ?>

        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
              <div class="type_b_7">
            <div class="container">
                <div class="testimonial_shipping_cms">
                    <!---1--->
                    <div class="col-md-6 col-xs-12 col-sm-6">
                        <div class="tm_shipping_cms">
                            <div class="shipping_inner">
                                <div class="shipping-heading">Main features</div>
                                <div class="ship_content1">
                                    <div class="img_content">&nbsp;</div>
                                    <div class="des_content">
                                        <div class="heading">Responsive Design</div>
                                        <div>There are many variscrbled it to make crambled it to make a type specimen book.</div>
                                    </div>
                                </div>
                                <div class="ship_content2">
                                    <div class="img_content">&nbsp;</div>
                                    <div class="des_content">
                                        <div class="heading">SEO Optimized</div>
                                        <div>There are many variscrbled it to make crambled it to make a type specimen book.</div>
                                    </div>
                                </div>
                                <div class="ship_content3">
                                    <div class="img_content">&nbsp;</div>
                                    <div class="des_content">
                                        <div class="heading">Satisfied Customers</div>
                                        <div>There are many variscrbled it to make crambled it to make a type specimen book.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!---2--->

                    <div class="col-md-6 col-xs-12 col-sm-12">
                        <div class="testimonial">
                            <div class="testimonial_cms_inner">
                                <div class="testimonial_title">
                                    <h2>Testimonial</h2>
                                </div>
                                <div class="testimonial_outer">
                                    <div class="testimonial_inner">
                                        <div class="testimonial_sub_inner">
                                            <ul   style="opacity: 1; display: block;">
                                                <div id="Carousel" class="carousel slide">
                                                    <div class="carousel-inner">
                                                        <div class="item active">
                                                            <li class="slider-item " style="width: 100%;padding-right: 30px">
                                                                <div class="testimonial-block">
                                                                    <div class="image-block"><img alt="" src="images/user1.jpg"></div>

                                                                    <div class="post-description">"Passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in Middle of text. All the."</div>
                                                                    <div class="post-author"><a href="#">Glasgow</a></div>

                                                                </div>
                                                            </li>
                                                        </div>

                                                        <div class="item">
                                                            <li class="slider-item " style="width: 100%;padding-right: 30px">
                                                                <div class="testimonial-block">
                                                                    <div class="image-block"><img alt="" src="images/user1.jpg"></div>

                                                                    <div class="post-description">"Passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in Middle of text. All the."</div>
                                                                    <div class="post-author"><a href="#">Glasgow</a></div>

                                                                </div>
                                                            </li>
                                                        </div>

                                                        <div class="item">
                                                            <li class="slider-item " style="width: 100%;padding-right: 30px">
                                                                <div class="testimonial-block">
                                                                    <div class="image-block"><img alt="" src="images/user1.jpg"></div>

                                                                    <div class="post-description">"Passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in Middle of text. All the."</div>
                                                                    <div class="post-author"><a href="#">Glasgow</a></div>

                                                                </div>
                                                            </li>
                                                        </div>
                                                    </div>




                                                    <ol class="carousel-indicators">
                                                        <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                                                        <li data-target="#Carousel" data-slide-to="1"></li>
                                                        <li data-target="#Carousel" data-slide-to="2"></li>
                                                    </ol>
                                                </div>

                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                                                      
                <!---end-->
            </div>
        </div>


    </body>
</html>
