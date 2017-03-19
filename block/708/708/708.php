<html style="background-color: #f3f3f4;">

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../css/owl.transitions.css" rel="stylesheet" type="text/css"/>
        <link href="../css/owl.transitions.css" rel="stylesheet" type="text/css"/>
        <link href="../css/708.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('../libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('../less/708.less', '../css/708.css');
        ?>
        <script src="../js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="../js/script.js" type="text/javascript"></script>
        
    </head>
    <body>
        <div class="type-708">
            <div class="container">
                <div class="row">
                    <div class="image">
                        <img src="../images/dress-anna-sui-dot-flutter.jpg" alt=""/>
                        <img src="../images/dress-bibhu-mohapatra-luxury-lush-gown.jpg" alt=""/>
                        <img src="../images/dress-david-meister-lady-in-red.jpg" alt=""/>
                        <img src="../images/dress-herve-leger-contrast-entrapment.jpg" alt=""/>
                        <img src="../images/dress-herve-leger-sip-and-shine-martini.jpg" alt=""/>
                        <img src="../images/dress-nanette-lepore-want-me.jpg" alt=""/>
                        <img src="../images/dress-parker-little-bit-of-luck.jpg" alt=""/>
                    </div>
                    <div id="galprev" class="btn-move-left button btn-prev">
                        <i class="fa fa-chevron-left"></i>
                    </div>

                    <div id="galnext" class="btn-move-right button btn-next">
                        <i class="fa fa-chevron-right"></i>
                    </div>

                </div>
            </div>
        </div>
    </body>       
</html>