<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/712.css" rel="stylesheet" type="text/css" />
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('../libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('../less/712.less', '../css/712.css');
        ?>
        <link href="../css/712.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
        <script src="../js/owl.carousel.js" type="text/javascript"></script>
        <script type="text/javascript" src="../js/script.js"></script>

    </head>

    <body>
        <div class="type-712">
            <div class="container">
                <div class="manufacturersCarousel">
                    <div class="mnf-flexisel-container">
                        <div class="nbs-flexisel-inner">
                            <ul class="nbs-flexisel-ul" id="carousel-manufacturer">
                                <li>
                                    <figure class="manuf-indent">
                                        <a href="#" title="More about D&G">
                                            <img src="../images/9-manu_alysum.jpg" alt="">
                                        </a>
                                    </figure>
                                </li>
                                <li>
                                    <figure class="manuf-indent">
                                        <a href="#" title="More about D&G">
                                            <img src="../images/9-manu_alysum.jpg" alt="">
                                        </a>
                                    </figure>
                                </li>
                                <li>
                                    <figure class="manuf-indent">
                                        <a href="#" title="More about D&G">
                                            <img src="../images/9-manu_alysum.jpg" alt="">
                                        </a>
                                    </figure>
                                </li>
                                <li>
                                    <div class="manuf-indent">
                                        <a href="#" title="More about D&G">
                                            <img src="../images/9-manu_alysum.jpg" alt="">
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <figure class="manuf-indent">
                                        <a href="#" title="More about D&G">
                                            <img src="../images/9-manu_alysum.jpg" alt="">
                                        </a>
                                    </figure>
                                </li>
                                <li>
                                    <figure class="manuf-indent">
                                        <a href="#" title="More about D&G">
                                            <img src="../images/9-manu_alysum.jpg" alt="">
                                        </a>
                                    </figure>
                                </li>
                                <li>
                                    <figure class="manuf-indent">
                                        <a href="#" title="More about D&G">
                                            <img src="../images/9-manu_alysum.jpg" alt="">
                                        </a>
                                    </figure>
                                </li>
                                <li>
                                    <figure class="manuf-indent">
                                        <a href="#" title="More about D&G">
                                            <img src="../images/9-manu_alysum.jpg" alt="">
                                        </a>
                                    </figure>
                                </li>
                                <li>
                                    <figure class="manuf-indent">
                                        <a href="#" title="More about D&G">
                                            <img src="../images/9-manu_alysum.jpg" alt="">
                                        </a>
                                    </figure>
                                </li>
                                <li>
                                    <figure class="manuf-indent">
                                        <a href="#" title="More about D&G">
                                            <img src="../images/9-manu_alysum.jpg" alt="">
                                        </a>
                                    </figure>
                                </li>
                                <li>
                                    <figure class="manuf-indent">
                                        <a href="#" title="More about D&G">
                                            <img src="../images/9-manu_alysum.jpg" alt="">
                                        </a>
                                    </figure>
                                </li>
                                <li>
                                    <figure class="manuf-indent">
                                        <a href="#" title="More about D&G">
                                            <img src="../images/9-manu_alysum.jpg" alt="">
                                        </a>
                                    </figure>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="flexisel-nav btm-left btnprev">
                        <i class="fa fa-chevron-left"></i>
                    </div>
                    <div class="flexisel-nav btm-right btnnext">
                        <i class="fa fa-chevron-right"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- END -->
    </body>
</html>