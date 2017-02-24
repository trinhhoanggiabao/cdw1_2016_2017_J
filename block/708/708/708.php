<html style="background-color: #f3f3f4;">

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/owl.carousel.css" rel="stylesheet" type="text/css"/>
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        
        <link href="../css/708.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('../libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('../less/708.less', '../css/708.css');
        ?>
        <script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
        <script src="../js/owl.carousel.js" type="text/javascript"></script>
        <script type="text/javascript" src="../js/script.js"></script>
    </head>
    <body>
        <div class="type-708">
        <div class="container">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="col-md-12">
                    <h5>Also purchased products</h5>
                    <div class="purchase-item" id="item-product">
                        <div class="thumb-img-carousel">
                            <img src="../images/calvin-klein-white-cap-colorblock111.jpg" alt="">
                        </div>
                        <div class="thumb-img-carousel">
                            <img src="../images/dress-david-meister-lady-in-red.jpg" alt="">
                        </div>
                        <div class="thumb-img-carousel">
                            <img src="../images/dress-elie-tahari-head-heels.jpg" alt="">
                        </div>
                        <div class="thumb-img-carousel">
                            <img src="../images/dress-bibhu-mohapatra-luxury-lush-gown.jpg" alt="">
                        </div>
                        <div class="thumb-img-carousel">
                            <img src="../images/dress-nanette-lepore-want-me.jpg" alt="">
                        </div>
                        <div class="thumb-img-carousel">
                            <img src="../images/dress-anna-sui-dot-flutter.jpg" alt="">
                        </div>
                        <div class="thumb-img-carousel">
                            <img src="../images/dress-nanette-lapore-girls-only.jpg" alt="">
                        </div>
                        <div class="thumb-img-carousel">
                            <img src="../images/dress-milly-poppy-fields-sheat.jpg" alt="">
                        </div>
                        <div class="thumb-img-carousel">
                            <img src="../images/dress-tibi-red-rococo-print.jpg" alt="">
                        </div>
                    </div>
                    <div class="btn-move-left button btn-prev">
                        <i class="fa fa-chevron-left"></i>
                    </div>
                    <div class="btn-move-right button btn-next">
                        <i class="fa fa-chevron-right"></i>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </body>       
</html>