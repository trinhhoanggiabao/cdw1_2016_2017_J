<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/709.css" rel="stylesheet" type="text/css"/>
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        
        <?php
        if (!class_exists('lessc')) {
            include ('../libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('../less/709.less', '../css/709.css');
        ?>
        <link href="../css/709.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
        <script src="../js/owl.carousel.js" type="text/javascript"></script>
        <script type="text/javascript" src="../js/script.js"></script>


    </head>

    <body>
        
    

        <div class="type-709">
            <div class="container">
                <div class="banners-carousel">
                    <div class="banners-carousel-container">
                        <div class="banner-carousel-top">
                            <div class="banner-top">
                                <ul class="sliderCarousel" id="banner-carousel">
                                    <li class="nbs-flexisel-item">   
                                        <div class="banner-carousel-wrap">
                                             <a href="#"><img src="../images/banner-01.jpg"></a>   
                                        </div>

                                    </li>
                                    <li class="nbs-flexisel-item">    
                                        <div class="banner-carousel-wrap">
                                            <a href="#"><img src="../images/banner-02.jpg"></a>
                                        </div>
                                    </li>
                                     <li class="nbs-flexisel-item">   
                                        <div class="banner-carousel-wrap">
                                             <a href="#"><img src="../images/banner-01.jpg"></a>   
                                        </div>

                                    </li>
                                    <li class="nbs-flexisel-item">    
                                        <div class="banner-carousel-wrap">
                                            <a href="#"><img src="../images/banner-02.jpg"></a>
                                        </div>
                                    </li>
                                    <li class="nbs-flexisel-item">   
                                        <div class="banner-carousel-wrap">
                                             <a href="#"><img src="../images/banner-01.jpg"></a>   
                                        </div>

                                    </li>
                                    <li class="nbs-flexisel-item">    
                                        <div class="banner-carousel-wrap">
                                            <a href="#"><img src="../images/banner-02.jpg"></a>
                                        </div>
                                    </li>
                                     <li class="nbs-flexisel-item">   
                                        <div class="banner-carousel-wrap">
                                             <a href="#"><img src="../images/banner-01.jpg"></a>   
                                        </div>

                                    </li>
                                    <li class="nbs-flexisel-item">    
                                        <div class="banner-carousel-wrap">
                                            <a href="#"><img src="../images/banner-02.jpg"></a>
                                        </div>
                                    </li>
                                    <li class="nbs-flexisel-item">   
                                        <div class="banner-carousel-wrap">
                                             <a href="#"><img src="../images/banner-01.jpg"></a>   
                                        </div>

                                    </li>
                                    <li class="nbs-flexisel-item">    
                                        <div class="banner-carousel-wrap">
                                            <a href="#"><img src="../images/banner-02.jpg"></a>
                                        </div>
                                    </li>
                                     <li class="nbs-flexisel-item">   
                                        <div class="banner-carousel-wrap">
                                             <a href="#"><img src="../images/banner-01.jpg"></a>   
                                        </div>

                                    </li>
                                    <li class="nbs-flexisel-item">    
                                        <div class="banner-carousel-wrap">
                                            <a href="#"><img src="../images/banner-02.jpg"></a>
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
                </div> 
            </div>
<!-- END -->


    
    </body>

</html>