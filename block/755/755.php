<!DOCTYPE html>

<html>

    <head>
        <title>755</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/755.less', 'css/755.css');
        ?>
        <link href="css/755.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-755">
            <div class="container">
                <div class="col-md-9 col-xs-12">
                    <div class="banner">
                        <div class="slide-show">
                            <div id="myCarousel" class="carousel slide">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <img src="images/iphone-6.png" alt=""/>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="right" class="carousel fadeIn">
                                                <div class="top-right">
                                                    <h1> iPhone 6 </h1>
                                                </div>
                                                <div class="center-right">
                                                    <p> Comfort is a very important thing nowadays because it is a condition of satisfaction. </p>
                                                </div>
                                                <div class="btn-shop">
                                                    <a href="#"> Shop now! </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="item">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <img src="images/tv-smart.png" alt=""/>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="right">
                                                <div class="top-right">
                                                    <h1> Smart TV </h1>
                                                </div>
                                                <div class="center-right">
                                                    <p> Comfort is a very important thing nowadays because it is a condition of satisfaction. </p>
                                                </div>
                                                <div class="btn-shop">
                                                    <a href="#"> Shop now! </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <img src="images/ipad.png" alt=""/>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="right">
                                                <div class="top-right">
                                                    <h1> iPad </h1>
                                                </div>
                                                <div class="center-right">
                                                    <p> Comfort is a very important thing nowadays because it is a condition of satisfaction. </p>
                                                </div>
                                                <div class="btn-shop">
                                                    <a href="#"> Shop now! </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-slide">
                        <ul>
                            <li><a href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                            <li><a href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>