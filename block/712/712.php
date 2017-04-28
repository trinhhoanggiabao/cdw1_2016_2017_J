<html>

    <head>
        <title>712</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="user-scalable=0, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/712.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/712.less', 'css/712.css');
        ?>

        <link href="css/712.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>

    <body>

        <div class="type-712">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">Something over here</div>
                    <div class="col-md-8">
                        <div class='col-md-12 card bordered'>
                            <div class="col-md-12 text-center">
                                <h4>Product-ID-SKU</h4>
                            </div>
                            <div class="col-md-4 float-left">
                                <img src="https://s0.2mdn.net/5164901/1-SciFiOrange_300x250.jpg" />
                            </div>
                            <div class="col-md-8">
                                There's a lot more to go here. This is the beginning product description. Going to keep going and make sure multiple lines are filled. This product is great though! Just to be clear!

                                <div class="row bottom">
                                    <div class="col-md-6 left">
                                        <h4>$1,999.99</h4>
                                    </div>
                                    <div class="col-md-6 right">
                                        <button class="btn btn-success">Buy now</button>
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