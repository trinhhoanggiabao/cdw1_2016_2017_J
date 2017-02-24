<html style="background-color: #f3f3f4;">

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
        <script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>        
        <script type="text/javascript" src="../js/script.js"></script>
    </head>
    <body>
        <div class="type-706">
            <div class="container">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="product">
                    <div class="items col-md-9">
                        <img src="../images/moschino-cheap-and-chic-yacht-main.jpg">
                    </div>
                    <div class="thumbs-list col-md-3">
                        <div class="btn-move" onclick="clickButtonUp()">
                            <i class="fa fa-chevron-up"></i>
                        </div>
                            <img src="../images/moschino-cheap-and-chic-yacht-main.jpg" id="show">
                            <img src="../images/moschino-cheap-and-chic-yacht-thumb2.jpg">
                            <img src="../images/moschino-cheap-and-chic-yacht-thumb3.jpg">
                            <img src="../images/moschino-cheap-and-chic-yacht-thumb4.jpg">                         
                            <img src="../images/moschino-cheap-and-chic-yacht-a.jpg" id="hide">
                        <div class="btn-move" id="btn-down" onclick="clickButtonDown()">
                            <i class="fa fa-chevron-down"></i>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        </div>
    </body>
        

</html>