<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/sliderShow.js" type="text/javascript"></script>
        <script src="js/newjavascript.js" type="text/javascript"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('./less/750.less', 'css/750.css');
        ?>
        <link href="css/750.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="M12-Url">
                    <div class="breadcrumb_wrap">
                        <ul class="breadcrumb">
                            <li><a href="/" class="homepage-link" title="Back to the frontpage">Home</a></li>


                            <li><a href="/collections/types?q=Bakeware" title="Bakeware">Bakeware</a> </li>

                            <li><span class="page-title">10 Piece OXO Holder with Tools Set</span></li>

                        </ul>
                    </div>
                </div>
                <div class="M4-Product ">
                    <div class="container">
                        <div class="row">
                            <div class=" pricing ">
                                <div class="col-md-3" >
                                    <div class="well" style="padding: 50px;">

                                        <a href="http://localhost:8080/Group-M/Detail-Product.php" ><img src="images/carter_double_walled_ice_bucket_1_medium.png" alt=""/></a>

                                        <a href="#" ><h4>Cooks' Tools</h4></a>

                                        <p style="opacity: 0.6">8 products</p>

                                        <p>Taking care of our clients was and still is a main aim of our compa...</p>

                                        <a href="#" class="btn btn-default btn-block">View products</a>

                                    </div>
                                </div>
                                <div class="col-md-3" >
                                    <div class="well" style="padding: 50px;">

                                        <a href="http://localhost:8080/Group-M/Detail-Product.php" ><img src="images/carter_double_walled_ice_bucket_1_medium.png" alt=""/></a>

                                        <a href="#" ><h4>Cooks' Tools</h4></a>

                                        <p style="opacity: 0.6">8 products</p>

                                        <p>Taking care of our clients was and still is a main aim of our compa...</p>

                                        <a href="#" class="btn btn-default btn-block">View products</a>

                                    </div>
                                </div>
                                <div class="col-md-3" >
                                    <div class="well" style="padding: 50px;">

                                        <a href="http://localhost:8080/Group-M/Detail-Product.php" ><img src="images/carter_double_walled_ice_bucket_1_medium.png" alt=""/></a>

                                        <a href="#" ><h4>Cooks' Tools</h4></a>

                                        <p style="opacity: 0.6">8 products</p>

                                        <p>Taking care of our clients was and still is a main aim of our compa...</p>

                                        <a href="#" class="btn btn-default btn-block">View products</a>

                                    </div>
                                </div>
                            </div>

                        </div> 
                    </div> 

                </div>
            </div>
    </body>
</html>