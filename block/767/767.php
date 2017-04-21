<!DOCTYPE html>
<html>

    <head>
        <title>767</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/767.less', 'css/767.css');
        ?>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/767.css" rel="stylesheet" type="text/css" />
    </head>

    <body>

        <div class="type-767">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>Bootstrap Credit Card Form </h2>
                        <h6>Based on original idea by  
                            <a href="http://www.designbootstrap.com/">DesignBootstrap.com</a> 
                        </h6>
                        <br />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="credit-card-div">
                            <div class="panel panel-default">
                                <div class="panel-heading">

                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <h5 class="text-muted"> Credit Card Number</h5>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                            <input type="text" class="form-control" placeholder="0000" />
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                            <input type="text" class="form-control" placeholder="0000" />
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                            <input type="text" class="form-control" placeholder="0000" />
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                            <input type="text" class="form-control" placeholder="0000" />
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                            <span class="help-block text-muted small-font"> Expiry Month</span>
                                            <input type="text" class="form-control" placeholder="MM" />
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                            <span class="help-block text-muted small-font">  Expiry Year</span>
                                            <input type="text" class="form-control" placeholder="YY" />
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                            <span class="help-block text-muted small-font">  CCV</span>
                                            <input type="text" class="form-control" placeholder="CCV" />
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                            <img src="images/the.png" />
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-md-12 pad-adjust">

                                            <input type="text" class="form-control" placeholder="Name On The Card" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 pad-adjust">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" checked class="text-muted"> Save details for fast payments. <a href="#">Learn More</a>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
                                            <input type="submit" class="btn btn-danger" value="CANCEL" />
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
                                            <input type="submit" class="btn btn-warning btn-block" value="PAY NOW" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- CREDIT CARD DIV END -->
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>