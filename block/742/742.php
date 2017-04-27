<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>\

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
        $less->compileFile('./less/742.less', 'css/742.css');
        ?>
        <link href="css/742.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="M15-Menu-List">

                        <div class="widget_content">
                            <ul class="list_links">
                                <li class="bakeware">
                                    <a href="/collections/bakeware" title="Bakeware">Bakeware</a>
                                </li>
                                <li class="cooking-utensils">
                                    <a href="/collections/cooking-utensils" title="Cooking Utensils">Cooking Utensils</a>
                                </li>
                                <li class="cooks-tools">
                                    <a href="/collections/cooks-tools" title="Cooks' Tools">Cooks' Tools</a>
                                </li>
                                <li class="cookware">
                                    <a href="/collections/cookware" title="Cookware">Cookware</a>
                                </li>
                                <li class="cookware-sets">
                                    <a href="/collections/cookware-sets" title="Cookware sets">Cookware sets</a>
                                </li>
                                <li><a href="/collections" title="View all collections">View all collections</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="M3-Panel" >
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="holder col-sm-8">
                                        <img class="img-responsive"src="images/slide1_image.jpg" alt="...">
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="carousel-caption">
                                            <h2>
                                                Must-haves for any cook
                                            </h2>
                                            <p>
                                                Your source for professional-quality cookware. Shop for kitchen appliances, cooking essentials from the comfort of your home. See the latest deals on selected products.
                                            </p>
                                            <button type="button" class="btn btn-default">
                                                SHOW NOW!
                                            </button>
                                        </div>
                                    </div>

                                </div>
                                <div class="item">
                                    <div class="holder col-sm-8">
                                        <img class="img-responsive"src="images/slide1_image.jpg" alt="...">
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="carousel-caption">
                                            <h2>
                                                Must-haves for any cook
                                            </h2>
                                            <p>
                                                Your source for professional-quality cookware. Shop for kitchen appliances, cooking essentials from the comfort of your home. See the latest deals on selected products.
                                            </p>
                                            <button type="button" class="btn btn-default">
                                                SHOW NOW!
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="holder col-sm-8">
                                        <img class="img-responsive"src="images/slide1_image.jpg" alt="...">
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="carousel-caption">
                                            <h2>
                                                Must-haves for any cook
                                            </h2>
                                            <p>
                                                Your source for professional-quality cookware. Shop for kitchen appliances, cooking essentials from the comfort of your home. See the latest deals on selected products.
                                            </p>
                                            <button type="button" class="btn btn-default">
                                                SHOW NOW!
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="controllers col-sm-8 col-xs-12">
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left">
                                    </span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right">
                                    </span>
                                </a>
                                <!-- Indicators -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>