<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('../libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('../less/706.less', '../css/706.css');
        ?>
        <link href="../css/706.css" rel="stylesheet" type="text/css" /> 
        <script src="../js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="../js/script.js"></script>
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="type-706">
                    <div class="col-md-7 col-sm-6 col-xs-12">
                        <div class="product">
                            <div class="items col-md-9">
                                <img src="../images/calvin-klein-white-cap-colorblock.jpg">
                            </div>
                            <div class="thumbs-list col-md-3">
                                <div class="btn-move" id="btn-up" onclick="clickButtonUp()">
                                    <i class="fa fa-chevron-up"></i>
                                </div>
                                <img src="../images/calvin-klein-white-cap-colorblock1.jpg" id="show">
                                <img src="../images/calvin-klein-white-cap-colorblock2.jpg">
                                <img src="../images/calvin-klein-white-cap-colorblock3.jpg">
                                <img src="../images/calvin-klein-white-cap-colorblock4.jpg">                         
                                <img src="../images/calvin-klein-white-cap-colorblock5.jpg" id="hide">
                                <div class="btn-move" id="btn-down" onclick="clickButtonDown()">
                                    <i class="fa fa-chevron-down"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>


</html>