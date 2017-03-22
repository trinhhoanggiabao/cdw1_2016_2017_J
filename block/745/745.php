<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/type-L-6.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/745.less', 'css/745.css');
        ?>

        <link href="css/745.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-745">
            <div class="type-34">
                <div class="container">
                    <div class="col-md-9 col-xs-12">
                        <div class="content">
                            <div class="row">
                                <div class="top-content">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="left-top">
                                                <div class="col-md-6">
                                                    <div class="row"> 
                                                        <div class="info">
                                                            <h2> TV & Video</h2>
                                                            <p> Comfort is a very important thing nowadays because it is a condition of satisfaction. </p>
                                                            <a href="#"> Shop now! </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="image">
                                                            <img src="images/left-top-content.png" alt=""class="img-responsive"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="right-top">
                                                <div class="col-md-6">
                                                    <div class="row"> 
                                                        <div class="info">
                                                            <h2> Home appliances </h2>
                                                            <p> Comfort is a very important thing nowadays because it is a condition of satisfaction. </p>
                                                            <a href="#"> Shop now! </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="image">
                                                            <img src="images/right-top-content.png" alt=""/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-------Center Content---------->
                            <!---------Lastest---------->
                            <div class="row">
                                <div class="center-content">
                                    <div class="row">
                                        <div class="nav">
                                            <h2> Lastest </h2>
                                            <div class="btn">
                                                <ul>
                                                    <li><a href="#myLastest" data-slide="prev"><span class="glyphicon glyphicon-chevron-up"></span> </a></li>
                                                    <li><a href="#myLastest" data-slide="next"><span class="glyphicon glyphicon-chevron-down"> </span></a></li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>

                                    <div id="myLastest" class="carousel slide">
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <div class="col-md-4">
                                                    <div class="row">
                                                        <div class="column" style="margin-right : 15px;">
                                                            <div class="new">
                                                                <a href="#"> New </a>
                                                            </div>
                                                            <div class="images">
                                                                <img src="images/master-iron.png" alt=""/>
                                                            </div>
                                                            <div class="price">
                                                                <h2> $40.00 </h2>
                                                            </div>
                                                            <div class="name">
                                                                <a href="#"> Master Iron width Anti-Drip-System</a> 
                                                            </div> 
                                                            <div class="description">
                                                                <p> Comfort is a very important thing nowadays because it is a condition of satisfaction. </p> 
                                                            </div>
                                                            <div class="group-btn">
                                                                <ul>
                                                                    <li id="active"><a href="#" class="glyphicon glyphicon-shopping-cart"></a></li>
                                                                    <li><a href="#" class="glyphicon glyphicon-heart"></a></li>
                                                                    <li><a href="#" class="glyphicon glyphicon-paperclip"></a></li>
                                                                    <li><a href="#" class="glyphicon glyphicon-check"></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>  
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="row">
                                                        <div class="column" style="margin-left: 15px;">
                                                            <div class="new">
                                                                <a href="#"> New </a>
                                                            </div>
                                                            <div class="images">
                                                                <img src="images/48-inch.png" alt=""/>
                                                            </div>
                                                            <div class="price">
                                                                <h2> $550.00 </h2>
                                                            </div>
                                                            <div class="name">
                                                                <a href="#"> 48-Inch 1080p 60Hz Smart LED TV </a> 
                                                            </div> 
                                                            <div class="description">
                                                                <p> Comfort is a very important thing nowadays because it is a condition of satisfaction. </p> 
                                                            </div>
                                                            <div class="group-btn">
                                                                <ul>
                                                                    <li id="active"><a href="#" class="glyphicon glyphicon-shopping-cart"></a></li>
                                                                    <li><a href="#" class="glyphicon glyphicon-heart"></a></li>
                                                                    <li><a href="#" class="	glyphicon glyphicon-paperclip"></a></li>
                                                                    <li><a href="#" class="glyphicon glyphicon-check"></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>  
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="row">
                                                        <div class="column" style="margin-left: 15px;">
                                                            <div class="new">
                                                                <a href="#"> New </a>
                                                            </div>
                                                            <div class="images">
                                                                <img src="images/65-inch.png" alt=""/>
                                                            </div>
                                                            <div class="price">
                                                                <h2> $3,000.00 </h2>
                                                            </div>
                                                            <div class="name">
                                                                <a href="#"> 65-Inch 4K Ultra HD Smart LED TV </a> 
                                                            </div> 
                                                            <div class="description">
                                                                Comfort is a very important thing nowadays because it is a condition of satisfaction. 
                                                            </div>
                                                            <div class="group-btn">
                                                                <ul>
                                                                    <li id="active"><a href="#" class="glyphicon glyphicon-shopping-cart"></a></li>
                                                                    <li><a href="#" class="glyphicon glyphicon-heart"></a></li>
                                                                    <li><a href="#" class="	glyphicon glyphicon-paperclip"></a></li>
                                                                    <li><a href="#" class="glyphicon glyphicon-check"></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>  
                                                </div>
                                            </div><!--/item-->

                                            <div class="item">
                                                <div class="col-md-4">
                                                    <div class="row">
                                                        <div class="column" style="margin-right : 15px;">
                                                            <div class="new">
                                                                <a href="#"> New </a>
                                                            </div>
                                                            <div class="images">
                                                                <img src="images/28-inch.png" alt=""/>
                                                            </div>
                                                            <div class="price">
                                                                <h2> $2,000.00 </h2> 
                                                            </div>
                                                            <div class="name">
                                                                <a href="#">28-Inch 720p 60Hz LED TV</a> 
                                                            </div> 
                                                            <div class="description">
                                                                <p> Comfort is a very important thing nowadays because it is a condition of satisfaction. </p> 
                                                            </div>
                                                            <div class="group-btn">
                                                                <ul>
                                                                    <li id="active"><a href="#" class="glyphicon glyphicon-shopping-cart"></a></li>
                                                                    <li><a href="#" class="glyphicon glyphicon-heart"></a></li>
                                                                    <li><a href="#" class="	glyphicon glyphicon-paperclip"></a></li>
                                                                    <li><a href="#" class="glyphicon glyphicon-check"></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>  
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="row">
                                                        <div class="column" style=" margin-left: 15px;">
                                                            <div class="new">
                                                                <a href="#"> New </a>
                                                            </div>
                                                            <div class="images">
                                                                <img src="images/Soundbar.png" alt=""/>
                                                            </div>
                                                            <div class="price">
                                                                <h2> $230.00 </h2>
                                                            </div>
                                                            <div class="name">
                                                                <a href="#">Wireless Audio Soundbar</a> 
                                                            </div> 
                                                            <div class="description">
                                                                <p> Comfort is a very important thing nowadays because it is a condition of satisfaction. </p> 
                                                            </div>
                                                            <div class="group-btn">
                                                                <ul>
                                                                    <li id="active"><a href="#" class="glyphicon glyphicon-shopping-cart"></a></li>
                                                                    <li><a href="#" class="glyphicon glyphicon-heart"></a></li>
                                                                    <li><a href="#" class="	glyphicon glyphicon-paperclip"></a></li>
                                                                    <li><a href="#" class="glyphicon glyphicon-check"></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>  
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="row">
                                                        <div class="column" style="margin-left: 15px;">
                                                            <div class="new">
                                                                <a href="#"> New </a>
                                                            </div>
                                                            <div class="images">
                                                                <img src="images/blu-ray.png" alt=""/>
                                                            </div>
                                                            <div class="price">
                                                                <h2> $350.00 </h2>
                                                            </div>
                                                            <div class="name">
                                                                <a href="#">Blu-Ray Home Theater System</a> 
                                                            </div> 
                                                            <div class="description">
                                                                <p> Comfort is a very important thing nowadays because it is a condition of satisfaction. </p> 
                                                            </div>
                                                            <div class="group-btn">
                                                                <ul>
                                                                    <li id="active"><a href="#" class="glyphicon glyphicon-shopping-cart"></a></li>
                                                                    <li><a href="#" class="glyphicon glyphicon-heart"></a></li>
                                                                    <li><a href="#" class="	glyphicon glyphicon-paperclip"></a></li>
                                                                    <li><a href="#" class="glyphicon glyphicon-check"></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>  
                                                </div>
                                            </div><!--/item-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                            <!---------------Featured-------------->
                            <div class="row">
                                <div class="center-content">
                                    <div class="row">
                                        <div class="nav">
                                            <h2> Featured </h2>
                                            <div class="btn">
                                                <ul>
                                                    <li><a href="#myFeatured" data-slide="prev"> <span class="glyphicon glyphicon-chevron-up"> </span></a></li>
                                                    <li><a href="#myFeatured" data-slide="next"> <span class="glyphicon glyphicon-chevron-down"> </span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="myFeatured" class="carousel slide">
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <div class="col-md-4">
                                                    <div class="row">
                                                        <div class="column" style="margin-right : 15px;">
                                                            <div class="images">
                                                                <img src="images/video-capture.png" alt=""/>
                                                            </div>
                                                            <div class="price">
                                                                <h2> $90.00 </h2> <h3> $600.00 </h3>
                                                            </div>
                                                            <div class="name">
                                                                <a href="#"> Wireless Smartphone Video Capture </a> 
                                                            </div> 
                                                            <div class="description">
                                                                <p> Comfort is a very important thing nowadays because it is a condition of satisfaction. </p> 
                                                            </div>
                                                            <div class="group-btn">
                                                                <ul>
                                                                    <li id="active"><a href="#" class="glyphicon glyphicon-shopping-cart"></a></li>
                                                                    <li><a href="#" class="glyphicon glyphicon-heart"></a></li>
                                                                    <li><a href="#" class="	glyphicon glyphicon-paperclip"></a></li>
                                                                    <li><a href="#" class="glyphicon glyphicon-check"></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>  
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="row">
                                                        <div class="column" style=" margin-left: 15px;">
                                                            <div class="images">
                                                                <img src="images/65-inch.png" alt=""/>
                                                            </div>
                                                            <div class="price">
                                                                <h2> $3,000.00 </h2>
                                                            </div>
                                                            <div class="name">
                                                                <a href="#"> 65-Inch 4K Ultra HD Smart LED TV </a> 
                                                            </div> 
                                                            <div class="description">
                                                                <p> Comfort is a very important thing nowadays because it is a condition of satisfaction. </p> 
                                                            </div>
                                                            <div class="group-btn">
                                                                <ul>
                                                                    <li id="active"><a href="#" class="glyphicon glyphicon-shopping-cart"></a></li>
                                                                    <li><a href="#" class="glyphicon glyphicon-heart"></a></li>
                                                                    <li><a href="#" class="	glyphicon glyphicon-paperclip"></a></li>
                                                                    <li><a href="#" class="glyphicon glyphicon-check"></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>  
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="row">
                                                        <div class="column" style="margin-left: 15px;">
                                                            <div class="images">
                                                                <img src="images/hard-floor.png" alt=""/>
                                                            </div>
                                                            <div class="price">
                                                                <h2> $120.00 </h2>
                                                            </div>
                                                            <div class="name">
                                                                <a href="#"> Hard Floor Expert Deluxe Canister </a> 
                                                            </div> 
                                                            <div class="description">
                                                                <p> Comfort is a very important thing nowadays because it is a condition of satisfaction. </p> 
                                                            </div>
                                                            <div class="group-btn">
                                                                <ul>
                                                                    <li id="active"><a href="#" class="glyphicon glyphicon-shopping-cart"></a></li>
                                                                    <li><a href="#" class="glyphicon glyphicon-heart"></a></li>
                                                                    <li><a href="#" class="	glyphicon glyphicon-paperclip"></a></li>
                                                                    <li><a href="#" class="glyphicon glyphicon-check"></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>  
                                                </div>
                                            </div><!--/item-->

                                            <div class="item">
                                                <div class="col-md-4">
                                                    <div class="row">
                                                        <div class="column" style="margin-right : 15px;">
                                                            <div class="images">
                                                                <img src="images/ninja-blender.png" alt=""/>
                                                            </div>
                                                            <div class="price">
                                                                <h2> $210.00 </h2>
                                                            </div>
                                                            <div class="name">
                                                                <a href="#">Ninja Blender Duo with Auto-iQ</a> 
                                                            </div> 
                                                            <div class="description">
                                                                <p> Comfort is a very important thing nowadays because it is a condition of satisfaction. </p> 
                                                            </div>
                                                            <div class="group-btn">
                                                                <ul>
                                                                    <li id="active"><a href="#" class="glyphicon glyphicon-shopping-cart"></a></li>
                                                                    <li><a href="#" class="glyphicon glyphicon-heart"></a></li>
                                                                    <li><a href="#" class="glyphicon glyphicon-paperclip"></a></li>
                                                                    <li><a href="#" class="glyphicon glyphicon-check"></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>  
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="row">
                                                        <div class="column" style="margin-left: 15px;">
                                                            <div class="images">
                                                                <img src="images/48-inch.png" alt=""/>
                                                            </div>
                                                            <div class="price">
                                                                <h2> $550.00 </h2>
                                                            </div>
                                                            <div class="name">
                                                                <a href="#"> 48-Inch 1080p 60Hz Smart LED TV </a> 
                                                            </div> 
                                                            <div class="description">
                                                                <p> Comfort is a very important thing nowadays because it is a condition of satisfaction. </p> 
                                                            </div>
                                                            <div class="group-btn">
                                                                <ul>
                                                                    <li id="active"><a href="#" class="glyphicon glyphicon-shopping-cart"></a></li>
                                                                    <li><a href="#" class="glyphicon glyphicon-heart"></a></li>
                                                                    <li><a href="#" class="	glyphicon glyphicon-paperclip"></a></li>
                                                                    <li><a href="#" class="glyphicon glyphicon-check"></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>  
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="row">
                                                        <div class="column" style="margin-left: 15px;">
                                                            <div class="images">
                                                                <img src="images/65-inch.png" alt=""/>
                                                            </div>
                                                            <div class="price">
                                                                <h2> $3,000.00 </h2>
                                                            </div>
                                                            <div class="name">
                                                                <a href="#"> 65-Inch 4K Ultra HD Smart LED TV </a> 
                                                            </div> 
                                                            <div class="description">
                                                                Comfort is a very important thing nowadays because it is a condition of satisfaction. 
                                                            </div>
                                                            <div class="group-btn">
                                                                <ul>
                                                                    <li id="active"><a href="#" class="glyphicon glyphicon-shopping-cart"></a></li>
                                                                    <li><a href="#" class="glyphicon glyphicon-heart"></a></li>
                                                                    <li><a href="#" class="	glyphicon glyphicon-paperclip"></a></li>
                                                                    <li><a href="#" class="glyphicon glyphicon-check"></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>  
                                                </div>
                                            </div><!--/item-->

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