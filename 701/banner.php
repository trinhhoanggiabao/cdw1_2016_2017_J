<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/banner.less', 'css/banner.css');
        ?>
        <link href="css/banner.css" rel="stylesheet" type="text/css" />



    </head>

    <body>
        <div class="banner">
            <div class="container">
                <div class="row">
                    <div class="banner-feauter col-lg-6 col-md-6">
                        <img src="images/slideshow-img1.jpg">
                        <a href="#" class="btn-view">View</a>
                    </div>
                    <div class="banner-feauter col-lg-6 col-md-6">
                        <div class="thumbs-banner col-md-6">
                            <img class="item" src="images/item-1.jpg">
                        </div>
                        <div class="thumbs-banner col-md-6">
                            <img class="item" src="images/item-1.jpg">
                        </div>
                        <div class="thumbs-banner col-md-6">
                            <img class="item" src="images/item-1.jpg">
                        </div>
                        <div class="thumbs-banner col-md-6">
                            <img class="item" src="images/item-1.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>