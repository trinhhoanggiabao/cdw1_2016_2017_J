<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/swiper.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/739.less', 'css/739.css');
        ?>
        <link href="css/739.css" rel="stylesheet" type="text/css" />
        <script src="js/swiper.min.js" type="text/javascript"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/script-j-5.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="type-739">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="hentry">
                            <div class="entry-content">
                                <!------------Our Partners---------------->
                                <div class="vc_row">
                                    <div class="vc_column_container">
                                        <div class="vc_column-inner">
                                            <div>
                                                <div class="lms_title_center">
                                                    <div class="lms_heading_1">
                                                        <h2 class="lms_heading_title">Our Partners</h2>
                                                    </div>
                                                    <article><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></article>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row">
                                    <div class="vc_column_container">
                                        <div class="vc_column-inner ">
                                            <div class="swiper-container">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide box4">
                                                        <div class="lms_our_partner_slider_item">
                                                            <div class="lms_our_partner_item">
                                                                <img src="images/partner1-220x50.png" alt=""/>
                                                                <hr>
                                                                <p class="quote">"</p>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                                                    Integer et commodo metus. Praesent quis risus blandit, aliquam diam non, facilisis magna.</p>
                                                                <p class="quote">"</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide box4">
                                                        <div class="lms_our_partner_slider_item">
                                                            <div class="lms_our_partner_item">
                                                                <img src="images/partner2-220x50.png" alt=""/>
                                                                <hr>
                                                                <p class="quote">"</p>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et commodo metus. Praesent quis risus blandit, aliquam diam non, facilisis magna.</p>
                                                                <p class="quote">"</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide box4">
                                                        <div class="lms_our_partner_slider_item">
                                                            <div class="lms_our_partner_item">
                                                                <img src="images/partner3-220x50.png" alt=""/>
                                                                <hr>
                                                                <p class="quote">"</p>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et commodo metus. Praesent quis risus blandit, aliquam diam non, facilisis magna.</p>
                                                                <p class="quote">"</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide box4">
                                                        <div class="lms_our_partner_slider_item">
                                                            <div class="lms_our_partner_item">
                                                                <img src="images/partner1-220x50.png" alt=""/>
                                                                <hr>
                                                                <p class="quote">"</p>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et commodo metus. Praesent quis risus blandit, aliquam diam non, facilisis magna.</p>
                                                                <p class="quote">"</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="customNavigation">
                                            <a class="lms_prev_next prev">
                                                <i class="fa fa-angle-left"></i>
                                            </a>
                                            <a class="lms_prev_next next">
                                                <i class="fa fa-angle-right"></i>
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