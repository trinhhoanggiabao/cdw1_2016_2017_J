<html> 
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/styles.less', 'css/styles.css');
        ?>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="type_b_10">
        <div class="container">
            <div class='row'>
                <div class="col-md-12 col-sm-6 col-xs-12">
                    <div class="carousel slide media-carousel" id="media">
                        <div class="carousel-inner">
                            <div class="item  active">
                                <div class="row">
                                    <div class="col-md-3 col-sm-4" >
                                        <a class="thumbnail" href="#"><img src="images/01.png" alt=""/></a>
                                    </div>          
                                    <div class="col-md-3">
                                        <a class="thumbnail" href="#"><img src="images/01.png" alt=""/></a>
                                    </div>
                                    <div class="col-md-3">
                                        <a class="thumbnail" href="#"><img src="images/01.png" alt=""/></a>
                                    </div>       
                                    <div class="col-md-3">
                                        <a class="thumbnail" href="#"><img src="images/01.png" alt=""/></a>
                                    </div>        
                                  

                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                     <div class="col-md-3 col-sm-4" >
                                        <a class="thumbnail" href="#"><img src="images/01.png" alt=""/></a>
                                    </div>          
                                    <div class="col-md-3">
                                        <a class="thumbnail" href="#"><img src="images/01.png" alt=""/></a>
                                    </div>
                                    <div class="col-md-3">
                                        <a class="thumbnail" href="#"><img src="images/01.png" alt=""/></a>
                                    </div>       
                                    <div class="col-md-3">
                                        <a class="thumbnail" href="#"><img src="images/01.png" alt=""/></a>
                                    </div>        

                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-3 col-sm-4" >
                                        <a class="thumbnail" href="#"><img src="images/01.png" alt=""/></a>
                                    </div>          
                                    <div class="col-md-3">
                                        <a class="thumbnail" href="#"><img src="images/01.png" alt=""/></a>
                                    </div>
                                    <div class="col-md-3">
                                        <a class="thumbnail" href="#"><img src="images/01.png" alt=""/></a>
                                    </div>       
                                    <div class="col-md-3">
                                        <a class="thumbnail" href="#"><img src="images/01.png" alt=""/></a>
                                    </div>        

                                </div>
                            </div>
                        </div>
                        <a data-slide="prev" href="#media" class="left carousel-control">‹</a>
                        <a data-slide="next" href="#media" class="right carousel-control">›</a>
                    </div>                          
                </div>
            </div>
        </div>
        </div>
    </body>
</html>