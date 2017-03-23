<!DOCTYPE html>

<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/719.less', 'css/719.css');
        ?>
        <link href="css/719.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="type-719">
            <div class="container">
                <div class="row">
                    <div class="banner">
                        <!------------flexslider--------------->
                        <div class="flexslider"> 
                            <div class="col-md-8 col-sm-6 col-xs-12">
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel" data-slide-to="1"></li>
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                            <img src="images/main-banner.jpg" alt=""/>
                                        </div>
                                        <div class="item">
                                            <img src="images/main-banner2.jpg" alt=""/>
                                        </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!---------- end flexslider-------------->
                        <!-----------siglebanner---------------->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="singlebanner">
                                <img src="images/sub1.jpg" alt=""/>
                            </div>
                        </div>
                        <!------------end singlebanner--------------->
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>