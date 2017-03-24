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
        $less->compileFile('less/720.less', 'css/720.css');
        ?>
        <link href="css/720.css" rel="stylesheet" type="text/css" />
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="type-720">
                        <div class="sub-banner">
                            <img src="images/Sub_banner1.jpg" alt=""/>
                            <div class="text">
                                BAGS
                            </div>
                            <div class="shopnow">
                                <p>shop now</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="type-720">
                        <div class="sub-banner">
                            <img src="images/Sub_banner2.jpg" alt=""/>
                            <div class="text">
                                JACKETS
                            </div>
                            <div class="shopnow">
                                <p>Shop now</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="type-720">
                        <div class="sub-banner">
                            <img src="images/Sub_banner3.jpg" alt=""/>
                            <div class="text">
                                GOGGLES
                            </div>
                            <div class="shopnow">
                                <p>Shop now</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>

</html>