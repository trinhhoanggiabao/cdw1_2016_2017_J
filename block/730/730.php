<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/730.less', 'css/730.css');
        ?>
        <link href="css/730.css" rel="stylesheet" type="text/css" />



    </head>

    <body>
        <div class="type-b-danhmuc1">
            <div class="headclothing">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="clothing">
                                <h4>Clothing</h4>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="clothing-text">
                                <a href="trangchu.php">Home</a> / clothing
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>