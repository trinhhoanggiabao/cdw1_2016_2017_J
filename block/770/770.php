<!DOCTYPE html>
<html>

    <head>
        <title>770</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/770.less', 'css/770.css');
        ?> 
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/770.css" rel="stylesheet" type="text/css"/>

    </head> 

    <body>
        <div class="type-770">
            <div class="container">
                <div class="row">
                    <div class="col-xs-8">
                        <div class="panel panel-info">


                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-2">
                                        <img class="img-responsive" src="images/100x70.png">
                                    </div>
                                    <div class="col-xs-4">
                                        <h4 class="product-name"><strong>Product name</strong></h4><h4><small>Product description</small></h4>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="col-xs-6 text-right">
                                            <h6><strong>25.00 <span class="text-muted">x</span></strong></h6>
                                        </div>

                                        <div class="col-xs-2">
                                            <button type="button" class="btn btn-link btn-xs">
                                                <span class="glyphicon glyphicon-trash"> </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-xs-2"><img class="img-responsive" src="images/100x70.png">
                                    </div>
                                    <div class="col-xs-4">
                                        <h4 class="product-name"><strong>Product name</strong></h4><h4><small>Product description</small></h4>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="col-xs-6 text-right">
                                            <h6><strong>25.00 <span class="text-muted">x</span></strong></h6>
                                        </div>
                                        <div class="col-xs-2">
                                            <button type="button" class="btn btn-link btn-xs">
                                                <span class="glyphicon glyphicon-trash"> </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <hr>

                            </div>
                            <div class="panel-footer">
                                <div class="row text-center">
                                    <div class="col-xs-9">
                                        <h4 class="text-right">Total <strong>$50.00</strong></h4>
                                    </div>
                                    <div class="col-xs-3">
                                        <button type="button" class="btn btn-success btn-block">
                                            Checkout
                                        </button>
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