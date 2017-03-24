<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/responsive.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/775.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include './libs/lessc.inc.php';
        }
        $less = new lessc;
        $less->compileFile('./less/775.less', './css/775.css')
        ?>

        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/xxx.js" type="text/javascript"></script>
    </head>
    <body>
        <!--DETAILS-->
        <div class="type-775"> 
            <div class="container" style="width: 100%; height: auto; background-repeat: repeat; background-image: url(images/ff_rp_bkg2.png); background-position: center-top; background-size: auto;">
                <div class="title">
                    <h4 class="title-layout">
                        <span>Latest Tweets</span>
                    </h4>
                </div>
                <div class="row">
                    <div class="col-md-12" style="padding-top: 0px; padding-bottom: 60px;">
                        <div class="carousel slide media-carousel" id="media">
                            <div class="carousel-inner">
                                <!-- slide1 -->
                                <div class="item  active slide1">
                                    <div class="row text-center">
                                        <div style="font-size: 24px; line-height: 36px; padding: 0 15%; text-align: center; background: transparent;">
                                            We’ve just released a brand new Multi-Purpose WordPress Theme, titled “Uplift”. Check it out! -  
                                            <a href="#">https://t.co/pKx9VLWiRx</a>
                                        </div> 
                                        <div class="twitter_intents" style="margin-top: 20px;">
                                            <a class="reply" href="#"><i class="fa-reply"></i></a>
                                            <a class="retweet" href="#"><i class="fa-retweet"></i></a>
                                            <a class="favorite" href="#"><i class="fa-star"></i></a>
                                            <a class="timestamp" href="#" target="_blank">6 months ago</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- slide2 -->
                                <div class="item">
                                    <div class="row text-center">
                                        <div style="font-size: 24px; line-height: 36px; padding: 0 15%; text-align: center; background: transparent;">
                                            We just released our latest WordPress/WooCommerce/EDD theme, Nota! - 
                                            <a href="#">https://t.co/X4XAotPnWt</a>
                                        </div> 
                                        <div class="twitter_intents" style="margin-top: 20px;">
                                            <a class="reply" href="#"><i class="fa-reply"></i></a>
                                            <a class="retweet" href="#"><i class="fa-retweet"></i></a>
                                            <a class="favorite" href="#"><i class="fa-star"></i></a>
                                            <a class="timestamp" href="#" target="_blank">2 weeks ago</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- slide3 -->
                                <div class="item">
                                    <div class="row text-center">
                                        <div style="font-size: 24px; line-height: 36px; padding: 0 15%; text-align: center; background: transparent;">
                                            We’re currently working on updates across the board for all our themes, and a big Swift Framework update, due in the coming weeks!
                                        </div> 
                                        <div class="twitter_intents" style="margin-top: 20px;">
                                            <a class="reply" href="#"><i class="fa-reply"></i></a>
                                            <a class="retweet" href="#"><i class="fa-retweet"></i></a>
                                            <a class="favorite" href="#"><i class="fa-star"></i></a>
                                            <a class="timestamp" href="#" target="_blank">1 month ago</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- slide4 -->
                                <div class="item">
                                    <div class="row text-center">
                                        <div style="font-size: 24px; line-height: 36px; padding: 0 15%; text-align: center; background: transparent;">
                                            We have two new Atelier demos coming within the next week or so, including an EDD demo! Update will be sent out as soon as these are ready.
                                        </div> 
                                        <div class="twitter_intents" style="margin-top: 20px;">
                                            <a class="reply" href="#"><i class="fa-reply"></i></a>
                                            <a class="retweet" href="#"><i class="fa-retweet"></i></a>
                                            <a class="favorite" href="#"><i class="fa-star"></i></a>
                                            <a class="timestamp" href="#" target="_blank">3 months ago</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- slide5 -->
                                <div class="item">
                                    <div class="row text-center">
                                        <div style="font-size: 24px; line-height: 36px; padding: 0 15%; text-align: center; background: transparent;">
                                            With WooCommerce 2.6 on it’s way, we’ll be providing updates within the next week for compatibility before it drops 
                                            <a href="#">https://t.co/jxLbJbEijJ</a>
                                        </div> 
                                        <div class="twitter_intents" style="margin-top: 20px;">
                                            <a class="reply" href="#"><i class="fa-reply"></i></a>
                                            <a class="retweet" href="#"><i class="fa-retweet"></i></a>
                                            <a class="favorite" href="#"><i class="fa-star"></i></a>
                                            <a class="timestamp" href="#" target="_blank">6 months ago</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- slide6 -->
                                <div class="item">
                                    <div class="row text-center">
                                        <div style="font-size: 24px; line-height: 36px; padding: 0 15%; text-align: center; background: transparent;">
                                            We’ve just released a brand new Multi-Purpose WordPress Theme, titled “Uplift”. Check it out! 
                                            <a href="#">https://t.co/pKx9VLWiRx</a>
                                        </div> 
                                        <div class="twitter_intents" style="margin-top: 20px;">
                                            <a class="reply" href="#"><i class="fa-reply"></i></a>
                                            <a class="retweet" href="#"><i class="fa-retweet"></i></a>
                                            <a class="favorite" href="#"><i class="fa-star"></i></a>
                                            <a class="timestamp" href="#" target="_blank">6 months ago</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- slide7 -->
                                <div class="item">
                                    <div class="row text-center">
                                        <div style="font-size: 24px; line-height: 36px; padding: 0 15%; text-align: center; background: transparent;">
                                            We just released our latest WordPress/WooCommerce/EDD theme, Nota! - 
                                            <a href="#">https://t.co/X4XAotPnWt</a>
                                        </div> 
                                        <div class="twitter_intents" style="margin-top: 20px;">
                                            <a class="reply" href="#"><i class="fa-reply"></i></a>
                                            <a class="retweet" href="#"><i class="fa-retweet"></i></a>
                                            <a class="favorite" href="#"><i class="fa-star"></i></a>
                                            <a class="timestamp" href="#" target="_blank">2 weeks ago</a>
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