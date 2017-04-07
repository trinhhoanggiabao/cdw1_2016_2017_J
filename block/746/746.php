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
        $less->compileFile('./less/746.less', 'css/746.css');
        ?>
        <link href="css/746.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="Dan">
            <div class="about">
                <div class="container">
                    <div class="boxx">
                        <div class="store">
                            <h4>
                                <b>
                                    ABOUT STORE
                                </b>
                            </h4>
                            <h5>
                                CATERING TO YOUR REQUIREMENTS, HANDLING YOUR NEEDS WITH CARE. OUR STORE IS MORE THAN JUST ANOTHER AVERAGE ONLINE RETAILER.
                            </h5>
                            <p>
                                We sell not only top quality products, but give our customers a positive online shopping experience. Forget about struggling to do everything at once: taking care of the family, running your business, walking your dog, cleaning the house, doing the shopping, etc. Purchase the goods you need every day or just like in a few clicks or taps, depending on the device you use to access the Internet. We work to make your life more enjoyable.
                            </p>
                        </div>
                        <div class="blog">
                            <h4>
                                <b>
                                    BLOG
                                </b>
                            </h4>
                            <h5>
                                <a href="#">
                                    THE SECRET OF SUCCESS LIES BETWEEN THE RIGHT CHOICE OF THE BUSINESS...
                                </a>
                            </h5>
                            <p>
                                We specialize in all kinds of kitchen supplies including the goods for food servicing and restaurant business. Every business is very demanding but the secret of success lies between the right choice of the business strategy and reliable suppliers. Taking...
                            </p>
                            <h5>
                                <a href="#">
                                    WELCOME YOU HERE, AT OUR ONLINE KITCHEN SUPPLIES STORE!
                                </a>
                            </h5>
                            <p>
                                Kitchen Supplies store was founded by several enthusiasts in 2002.Those were the times when people still preferred to buy products at brick-and-mortar stores instead of buying online. Nevertheless we’ve decided to create an online shop and we are so glad...
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>