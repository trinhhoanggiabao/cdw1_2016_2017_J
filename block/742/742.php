<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('./less/742.less', 'css/742.css');
        ?>
        <link href="css/742.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>

    </head>
    <body>
        <div class="type-742">
            <div class="container">
                <div class="breadcrumb_wrap">
                    <ul class="breadcrumb">
                        <li><a href="#" title="Home">Home</a></li>
                        <li><span>Contact us</span></li>
                    </ul>
                </div>
                <div id="contact_page">
                    <h1 class="page_heading">Contact us</h1>
                    <div id="google_map" style=""></div>
                    <script src="js/mapjs.js" type="text/javascript"></script>
                    <script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCYyqBRUsE1xRhkIHlJOxxXLbg7GnMnVPQ&callback=myMap"></script>
                    <div class="rte"> 
                        You can contact us any way that is convenient for you. We are available 24/7 via fax, email or telephone. You can also use a quick contact form below or visit our office personally. Email us with any questions or inquiries. We would be happy to answer you. 
                    </div>
                    <div class="row">
                        <div class="col-sm-4 form-group">
                            <div class="type-742">
                                <label for="contactFormName">Your Name:</label>
                                <input type="text" class="form-control" name="contact[name]" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-4 form-group">
                            <div class="type-742">
                                <label for="contactFormEmail">Email:</label>
                                <input type="email" class="form-control" name="contact[email]" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-4 form-group">
                            <div class="type-742">
                                <label for="contactFormTelephone">Phone Number:</label>
                                <input type="tel" class="form-control" name="contact[phone]" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <div class="type-742">
                                <label for="contactFormMessage">Message:</label>
                                <textarea class="form-control" rows="5" cols="75" name="contact[body]" placeholder=""></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="btn-toolbar form-group">
                        <input type="submit" value="Send" class="btn">
                        <input type="reset" value="Clear" class="btn btn-info">
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>