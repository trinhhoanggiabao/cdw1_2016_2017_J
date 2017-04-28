<html>

    <head>
        <title>709</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="user-scalable=0, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/709.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/709.less', 'css/709.css');
        ?>

        <link href="css/709.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>

    <body>

        <div class="type-709">
            <footer class="footer-container">
                <div class="footer-top-outer">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-subscribe-header">
                                <div class="news_inner">
                                    <div class="news_inner_content">
                                        <div class="news-text">
                                            <i class="fa fa-envelope-o">&nbsp;</i>
                                            <div class="text-content">sign up here for early updates</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="input-box">
                                <div class="input_inner">
                                    <input type="text" name="email" id="newsletter" title="Sign up for our newsletter" class="input-text required-entry validate-email" placeholder="Enter your email address ...">
                                </div>

                                <div class="actions">
                                    <button type="submit" title="Subscribe" class="button"><span>Subscribe</span></button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                
            </footer>
        </div>
        </div>

    </body>

</html>