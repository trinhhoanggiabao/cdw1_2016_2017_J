<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/owl.carousel.css" rel="stylesheet" type="text/css"/>
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        
        <?php
        if (!class_exists('lessc')) {
            include ('../libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('../less/instagram-feed.less', '../css/instagram-feed.css');
        ?>
        <link href="../css/instagram-feed.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
        <script src="../js/owl.carousel.js" type="text/javascript"></script>
        <script type="text/javascript" src="../js/script.js"></script>


    </head>

    <body>
        <div class="type-13">
            <div class="container">
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
                                                    <img class="img-responsive" src="../images/sony_vaio.jpg" title="#sony #vaio">
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
                                                    <img class="img-responsive" src="../images/sony_laptop.jpg" title="#sony laptop">
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
                                                    <img src="../images/sony_vaio_laptop.jpg" title="#sony vaio laptop">
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
                                                    <img src="../images/macbook-pro.jpg" title="#macbook pro 13">
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
                                                    <img class="img-responsive" src="../images/sony_vaio.jpg" title="#sony #vaio">
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
                                                    <img class="img-responsive" src="../images/sony_laptop.jpg" title="#sony laptop">
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
                                                    <img src="../images/sony_vaio_laptop.jpg" title="#sony vaio laptop">
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
                                                    <img src="../images/macbook-pro.jpg" title="#macbook pro 13">
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
                                                    <img class="img-responsive" src="../images/sony_vaio.jpg" title="#sony #vaio">
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
                                                    <img class="img-responsive" src="../images/sony_laptop.jpg" title="#sony laptop">
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
                                                    <img src="../images/sony_vaio_laptop.jpg" title="#sony vaio laptop">
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
                                                    <img src="../images/macbook-pro.jpg" title="#macbook pro 13">
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
                                                    <img class="img-responsive" src="../images/sony_vaio.jpg" title="#sony #vaio">
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
                                                    <img class="img-responsive" src="../images/sony_laptop.jpg" title="#sony laptop">
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
                                                    <img src="../images/sony_vaio_laptop.jpg" title="#sony vaio laptop">
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
                                                    <img src="../images/macbook-pro.jpg" title="#macbook pro 13">
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
            </div>
        </div>
<!-- END -->


    
    </body>

</html>