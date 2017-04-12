<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/responsive.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/776.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include './libs/lessc.inc.php';
        }
        $less = new lessc;
        $less->compileFile('./less/776.less', './css/776.css')
        ?>

        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body> 
        <div class="type-776">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        
                            <div class="title">
                                <h4 class="spb_heading">
                                    <span>Latest articles</span>
                                </h4>
                            </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-3">                                
                                    <div itemscope="" data-id="id-0" class="clearfix carousel-item recent-post">
                                        <figure>
                                            <a href="#">
                                                <div class="overlay">
                                                    <div class="thumb-info">
                                                        <i class="fa-file-text-o"></i>
                                                    </div>
                                                </div>
                                                <img itemprop="image" src="images/EYTYS_canvas_green02_ext-420x315.jpg" alt="Neighborhood exclusive: Eytys" width="420" height="315">
                                            </a>
                                        </figure>
                                        <div class="details-wrap">
                                            <h5>
                                                <a href="#">Neighborhood exclusive: Eytys</a>
                                            </h5>
                                            <div class="post-details">By 
                                                <a href="#" title="Visit Swift Ideas’s website" rel="author external">Swift Ideas</a> on June 7, 2013
                                            </div>
                                        </div>
                                    </div>
                              
                            </div>
                            <div class="col-md-3">
                               
                                    <div itemscope="" data-id="id-1" class="clearfix carousel-item recent-post">
                                        <figure>
                                            <a href="#">
                                                <div class="overlay">
                                                    <div class="thumb-info">
                                                        <i class="fa-file-text-o"></i>
                                                    </div>
                                                </div>
                                                <img itemprop="image" src="images/fanman-mag_thumb43v2-420x315.jpg" alt="Neighborhood vs Fantastic Man" width="420" height="315">
                                            </a>
                                        </figure>
                                        <div class="details-wrap">
                                            <h5>
                                                <a href="#">Neighborhood vs Fantastic Man</a>
                                            </h5>
                                            <div class="post-details">
                                                By 
                                                <a href="#" title="Visit Swift Ideas’s website" rel="author external">Swift Ideas</a>
                                                on June 6, 2013
                                            </div>
                                        </div>
                                    </div>
                               
                            </div>
                            <div class="col-md-3">
                                <div itemscope="" data-id="id-2" class="clearfix carousel-item recent-post">
                                    <figure>
                                        <a href="#">
                                            <div class="overlay">
                                                <div class="thumb-info">
                                                    <i class="fa-file-text-o"></i>
                                                </div>
                                            </div>
                                            <img itemprop="image" src="images/sharp_suit_thumb_max43-420x315.jpg" alt="Sharp Summer Suits" width="420" height="315">
                                        </a>
                                    </figure>
                                    <div class="details-wrap">
                                        <h5>
                                            <a href="#">Sharp Summer Suits</a>
                                        </h5>
                                        <div class="post-details">
                                            By 
                                            <a href="#" title="Visit Swift Ideas’s website" rel="author external">
                                                Swift Ideas
                                            </a> 
                                            on June 6, 2013
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div itemscope="" data-id="id-3" class="clearfix carousel-item recent-post">
                                    <section class="jk-slider">
                                        <div id="carousel-example" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="item active">
                                                    <a href="#"><img src="images/office2-600x450.jpg" /></a>
                                                </div>
                                                <div class="item">
                                                    <a href="#"><img src="images/office3-600x450.jpg" /></a>
                                                </div>
                                            </div>
                                            <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left"></span>
                                            </a>
                                            <a class="right carousel-control" href="#carousel-example" data-slide="next">
                                                <span class="glyphicon glyphicon-chevron-right"></span>
                                            </a>
                                        </div>
                                    </section>
                                    <div class="details-wrap">
                                        <h5>
                                            <a href="#">
                                                Page Builder Post 1
                                            </a>
                                        </h5>
                                        <div class="post-details">
                                            By 
                                            <a href="#" title="Visit Swift Ideas’s website" rel="author external">
                                                Swift Ideas
                                            </a> 
                                            on March 12, 2013
                                        </div>
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