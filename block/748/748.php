<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/sliderShow.js" type="text/javascript"></script>
        <script src="js/newjavascript.js" type="text/javascript"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('./less/748.less', 'css/748.css');
        ?>
        <link href="css/748.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="M7-Youtube">

            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="product_description">
                            <h3 class="product_description__title">Description</h3>

                            <div class="rte" itemprop="description">
                                <h2 style="text-align: center;">We specialize in all kinds of kitchen supplies&nbsp;</h2>
                                <hr>
                                <p><strong>We specialize</strong> in all kinds of kitchen supplies including the goods for food servicing and restaurant business. Every business is very demanding but the secret of success lies between the right choice of the business strategy and reliable suppliers. Taking care of our clients was and still is a main aim of our company and it will stay the same till the end of days.&nbsp;</p>
                                <br>
                            </div>
                        </div>

                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="//www.youtube.com/embed/ePbKGoIGAXY"></iframe>
                        </div>

                        <br>
                        <p>Those were the times when people still preferred to buy products at brick-and-mortar stores instead of buying online. Nevertheless we’ve decided to create an online shop and we are so glad to welcome you here, at our online <strong>Kitchen Supplies</strong> store. Yes, we agree that selling food and kitchen equipment is a tricky thing but our huge experience is the reason that would convince you to choose our firm.&nbsp;</p>
                        <p>There is a common opinion that customer care service makes 90% of your reputation and we believe this to be a business truth. That’s why we are proud to inform you that you can always rely on our wonderful support system that is <span style="text-decoration: underline;">available 24/7.</span></p>
                        <p>&nbsp;</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>