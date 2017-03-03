<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

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
        $less->compileFile('less/735.less', 'css/735.css');
        ?>
        <link href="css/735.css" rel="stylesheet" type="text/css" />
        <script src="js/swiper.min.js" type="text/javascript"></script>
        <link href="css/swiper.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-735">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <article class="hentry">
                            <div class="entry-content">
                                <!------------Our Popular Courses---------------->
                                <div class="vc_row">
                                    <div class="vc_column_container">
                                        <div class="vc_column-inner">
                                            <div class="lms_title_center">
                                                <div class="lms_heading_1">
                                                    <h2 class="lms_heading_title">Our Popular Courses</h2>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-------slide------->
                                <div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="lms_popular_courses_item">
                                                        <div class="lms_hover_section">
                                                            <img src="images/JQuery-Tutorial-263x176.jpg" alt=""/>
                                                            <div class="lms_hover_overlay"><a class="lms_image_link"></a></div>
                                                        </div>
                                                        <a href="#"><h3>JQuery Tutorial</h3></a>
                                                        <p>jQuery is a fast and concise JavaScript</p>
                                                    </div>
                                                    <div class="lms_popular_courses_item">
                                                        <div class="lms_hover_section">
                                                            <img src="images/JQuery-Tutorial-263x176.jpg" alt=""/>
                                                            <div class="lms_hover_overlay"><a class="lms_image_link"></a></div>
                                                        </div>
                                                        <a href="#"><h3>JQuery Tutorial</h3></a>
                                                        <p>jQuery is a fast and concise JavaScript</p>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="lms_popular_courses_item">
                                                        <div class="lms_hover_section">
                                                            <img src="images/JQuery-Tutorial-263x176.jpg" alt=""/>
                                                            <div class="lms_hover_overlay"><a class="lms_image_link"></a></div>
                                                        </div>
                                                        <a href="#"><h3>JQuery Tutorial</h3></a>
                                                        <p>jQuery is a fast and concise JavaScript</p>
                                                    </div>
                                                    <div class="lms_popular_courses_item">
                                                        <div class="lms_hover_section">
                                                            <img src="images/JQuery-Tutorial-263x176.jpg" alt=""/>
                                                            <div class="lms_hover_overlay"><a class="lms_image_link"></a></div>
                                                        </div>
                                                        <a href="#"><h3>JQuery Tutorial</h3></a>
                                                        <p>jQuery is a fast and concise JavaScript</p>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="lms_popular_courses_item">
                                                        <div class="lms_hover_section">
                                                            <img src="images/JQuery-Tutorial-263x176.jpg" alt=""/>
                                                            <div class="lms_hover_overlay"><a class="lms_image_link"></a></div>
                                                        </div>
                                                        <a href="#"><h3>JQuery Tutorial</h3></a>
                                                        <p>jQuery is a fast and concise JavaScript</p>
                                                    </div>
                                                    <div class="lms_popular_courses_item">
                                                        <div class="lms_hover_section">
                                                            <img src="images/JQuery-Tutorial-263x176.jpg" alt=""/>
                                                            <div class="lms_hover_overlay"><a class="lms_image_link"></a></div>
                                                        </div>
                                                        <a href="#"><h3>JQuery Tutorial</h3></a>
                                                        <p>jQuery is a fast and concise JavaScript</p>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="lms_popular_courses_item">
                                                        <div class="lms_hover_section">
                                                            <img src="images/JQuery-Tutorial-263x176.jpg" alt=""/>
                                                            <div class="lms_hover_overlay"><a class="lms_image_link"></a></div>
                                                        </div>
                                                        <a href="#"><h3>JQuery Tutorial</h3></a>
                                                        <p>jQuery is a fast and concise JavaScript</p>
                                                    </div>
                                                    <div class="lms_popular_courses_item">
                                                        <div class="lms_hover_section">
                                                            <img src="images/JQuery-Tutorial-263x176.jpg" alt=""/>
                                                            <div class="lms_hover_overlay"><a class="lms_image_link"></a></div>
                                                        </div>
                                                        <a href="#"><h3>JQuery Tutorial</h3></a>
                                                        <p>jQuery is a fast and concise JavaScript</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <script src="js/bp-touchSwipe.js" type="text/javascript"></script>
                                        </div>
                                        <div class="customNavigation"> 
                                            <a class="lms_prev_next prev">
                                                <i class="fa fa-angle-left"></i>
                                            </a> 
                                            <a class="lms_prev_next next">
                                                <i class="fa fa-angle-right"></i>
                                            </a> 
                                            <a class="lms_prev_next">+</a> 
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="lms_popular_courses_item">
                                            <img src="images/Fundamentals-of-Project-Management-555x276.jpg" alt=""/>
                                            <a href="#"><h3>Fundamentals of Project Management</h3></a>
                                            <p>This online course is aimed at people interested in IT project management and builds on other business and IT courses available online at .

                                                Every competent project manager needs to know the various phases and project management software and tools available do the job properly (such as the Gantt Chart). This free course will identify these phases and tools, enabling you to successfully manage any project.
                                                LEARNING OUTCOMES
                                                After completing this course you will understand the history of project management and learn from examples of interviews with project managers. You will gain a good knowledge of project</p>
                                            <a href="" class="btn btn-default lms_pc_btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <script src="js/scrip-j-2.js" type="text/javascript"></script>
        </div>
    </body>

</html>