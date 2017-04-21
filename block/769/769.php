<!DOCTYPE html>
<html>

    <head>
        <title>769</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/769.less', 'css/769.css');
        ?> 
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/769.css" rel="stylesheet" type="text/css"/>

    </head> 

    <body>

        <div class="type-769">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-10 col-md-offset-1">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th class="text-center">Price</th>
                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="col-sm-8 col-md-6">
                                        <div class="media">
                                            <a class="thumbnail pull-left" href="#"> 
                                                <img class="media-object" src="images/product-icon.png" style="width: 72px; height: 72px;"> </a>
                                            <div class="media-body">
                                                <h4 class="media-heading"><a href="#">Product name</a></h4>
                                                <h5 class="media-heading"> by <a href="#">Brand name</a></h5>
                                                <span>Status: </span><span class="text-success"><strong>In Stock</strong></span>
                                            </div>
                                        </div></td>
                                    <td class="col-sm-1 col-md-1 text-center"><strong>$14.61</strong></td>
                                    <td class="col-sm-1 col-md-1">
                                        <button type="button" class="btn btn-success">
                                            Add to cart
                                        </button></td>
                                </tr>
                                <tr>
                                    <td class="col-sm-8 col-md-6">
                                        <div class="media">
                                            <a class="thumbnail pull-left" href="#"> 
                                                <img class="media-object" src="images/product-icon.png" style="width: 72px; height: 72px;"> </a>
                                            <div class="media-body">
                                                <h4 class="media-heading"><a href="#">Product name</a></h4>
                                                <h5 class="media-heading"> by <a href="#">Brand name</a></h5>
                                                <span>Status: </span><span class="text-success"><strong>In Stock</strong></span>
                                            </div>
                                        </div></td>
                                    <td class="col-sm-1 col-md-1 text-center"><strong>$14.61</strong></td>
                                    <td class="col-sm-1 col-md-1">
                                        <button type="button" class="btn btn-success">
                                            Add to cart
                                        </button></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>