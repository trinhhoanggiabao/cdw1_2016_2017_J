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
        $less->compileFile('less/type-b-danhmuc3.less', 'css/type-b-danhmuc3.css');
        ?>
        <link href="css/type-b-danhmuc3.css" rel="stylesheet" type="text/css" />



    </head>

    <body>
        <div class="type-b-danhmuc3">
            <div class="container">
                <div class="thumb-item">
                    <div class="row">
                        <!--========phan left=========-->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="cms-left">
                                <i class="fa fa-th-large" aria-hidden="true"></i>
                                <i class="fa fa-th-list" aria-hidden="true"></i>
                                <span>Items 1 to 12 of 17 total</span>
                            </div>
                        </div>

                        <!--=====phan right========-->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="cms-right">
                                <span>Sort By</span>
                                <select>
                                    <option>Posstion</option>
                                    <option>Namme</option>
                                    <option>price</option>
                                    <option>brand</option>
                                </select>
                                <i class="fa fa-sort-amount-desc" aria-hidden="true"></i>
                                <span>Show</span>
                                <select>
                                    <option>12</option>
                                    <option>24</option>
                                    <option>36</option>
                                </select>
                                <span class="numberone">1</span>
                                <span class="number">2</span>
                                <span class="glyphicon glyphicon-triangle-right"></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>