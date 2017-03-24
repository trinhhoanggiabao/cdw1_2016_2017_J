<html style="background-color: #f3f3f4;">

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <script src="../js/jquery-3.1.1.min.js" type="text/javascript"></script>

    </head>
    <body>
        <div class="type-708">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="lms_newsletter">
                            <h3>Newsletter</h3>
                            <form class="form-inline" name="form2">
                                <div class="form-group">
                                    <div id="form-control">
                                        <input type="text" name="mailchimp_email" class="form-control" placeholder="Enter email">
                                    </div>
                                    <button type="button" name="submit" value="Submit" onclick="ValidateEmail(document.form2.mailchimp_email)" class="lms_newsletter_widget_btn">OK</button>
                                </div>
                            </form>
                            <div class="mailchimp_message">
                                Please make sure you enter a valid email address.
                            </div>
                            <div class="mailchimp_message1">
                                <span>Almost done, please check your email address to confirmation.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <h3>Blog Category</h3>
                        <select name="cat" id="cat" class="postform">
                            <option>Select Category</option>
                            <option>Art</option>
                            <option>Fashion</option>
                            <option>Health</option>
                            <option>Photography</option>
                            <option>Science</option>
                            <option>Writing</option>
                        </select>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="lms_happening">
                            <h3>Happening Now</h3>
                            <div class="lms_happy_user">
                                <img src="../images/h3.jpg" alt=""/>
                                <p>
                                    <span>Sunny Valim</span>
                                    Integer quis aliquet enim, nec sollicitudin lectus.		
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </body>       
</html>