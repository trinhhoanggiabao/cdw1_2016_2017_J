<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/724.less', 'css/724.css');
        ?>
        <link href="css/724.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="type-724">
            <div class="container">
                <div class="row">
                    <div class="content">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="heading">
                                <div class="title">
                                    <h1>LMS - Course Single Page</h1>
                                </div>
                                <p>This online course is aimed at people interested in IT project management and builds on other business and IT courses available online at</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-7">
                                <div class="course-landing-summary">
                                    <h3>Fundamentals Of Project Management</h3>
                                    <img width="750" height="475" src="images/Fundamentals-of-Project-Management-750x475.jpg">
                                </div>
                                <div class="lms-single-entry-content">
                                    <span class="author">
                                        Instructor: <a href="#">lms@admin</a>
                                    </span>
                                    <span class="course-students">
                                        44 students enrolled
                                    </span>
                                    <span class="course-price">Free</span>
                                    <a class="view-cart-button" href="#">View cart</a>
                                    <button class="purchase-button">Take this course</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>