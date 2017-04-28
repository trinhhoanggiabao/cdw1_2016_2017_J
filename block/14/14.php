<!DOCTYPE html>
<html>

    <head>
        <title>Hinh 14</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/14.less', 'css/14.css');
        ?> 
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/14.css" rel="stylesheet" type="text/css"/>

        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/javascript.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head> 

    <body>
        <div class="type-16">
            <header class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-4">
                                <div class="logo">
                                    <h1>
                                        <a href="#">
                                            <img src="images/logo.png">
                                        </a>
                                    </h1>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="navbar-collapse">
                                    <ul class="navbar-nav">
                                        <li class="active"><a href="#">Home</a></li>
                                        <li><a href="#">Features</a></li>
                                        <li><a href="#">Pages</a></li>
                                        <li><a href="#">Portfolio</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">ShortCodes</a></li>
                                        <li><a href="#">Help</a></li>
                                        <li><a href="#">Purchase</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </header>
            <!--Slide show-->
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="header-text hidden-xs">
                            <div class="col-md-12 text-center">
                                <img src="images/Untitled.png">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="header-text hidden-xs">
                            <div class="col-md-12 text-center">
                                <img src="images/Untitled.png">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="header-text hidden-xs">
                            <div class="col-md-12 text-center">
                                <img src="images/Untitled.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control left-moble" href="#carousel-example-generic" data-slide="prev">
                <span class="fa fa-angle-left iconleft"></span>
            </a>
            <a class="right carousel-control right-mobile" href="#carousel-example-generic" data-slide="next">
                <span class="fa fa-angle-right iconright"></span>
            </a>
        </div>
        <!--End Slide show-->
    </div>
</body>
</html>