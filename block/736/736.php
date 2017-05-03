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
        $less->compileFile('less/736.less', 'css/736.css');
        ?>
        <link href="css/736.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="type-736">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <article class="hentry">
                            <div class="entry-content">
                                <!------------Testimonials---------------->
                                <div class="vc_row">
                                    <div class="vc_column_container">
                                        <div class="vc_column-inner">
                                            <div>
                                                <div class="lms_title_center">
                                                    <div class="lms_heading_1">
                                                        <h2 class="lms_heading_title">Testimonials</h2>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true" class="vc_row box">
                                    <div class="vc_column_container col-sm-12">
                                        <div class="vc_column-inner">
                                            <div class="lms_plan_testimonial" data-stellar-vertical-offset="0" data-stellar-background-ratio="0.5" style="background: url(&quot;http://kamleshyadav.in/wp/lms-new/wp-content/uploads/2016/03/testimonials_bg.jpg&quot;) 0% -56px / cover;">
                                                <div class="lms_testimonials_bg2">
                                                    <div class="container">
                                                        <div class="lms_testimonials">
                                                            <div class="owl-carousel">
                                                                <div class="swiper-container">
                                                                    <div class="swiper-wrapper">
                                                                        <div class="swiper-slide">
                                                                            <div class="lms_testimonials_slider_item">
                                                                                <p class="lms_testimonial_quote">"</p>
                                                                                <p class="lms_testimonials_txt">Suspendisse posuere consectetur sodales. Etiam faucibus rhoncus nunc et pretium. Praesent tortor massa,
                                                                                    malesuada sed ornare in, dignissim adipiscing felis. Donec eget hendrerit magna,</p>
                                                                                <figure><img src="images/testimonial1.png" alt=""/></figure>
                                                                                <h4>john doe</h4>
                                                                            </div>
                                                                        </div>
                                                                        <div class="swiper-slide">
                                                                            <div class="lms_testimonials_slider_item">
                                                                                <p class="lms_testimonial_quote">"</p>
                                                                                <p class="lms_testimonials_txt">Suspendisse posuere consectetur sodales. Etiam faucibus rhoncus nunc et pretium. Praesent tortor massa,
                                                                                    malesuada sed ornare in, dignissim adipiscing felis. Donec eget hendrerit magna,</p>
                                                                                <figure><img src="images/testimonial1.png" alt=""/></figure>
                                                                                <h4>Olivia Liam</h4>
                                                                            </div>
                                                                        </div>
                                                                        <div class="swiper-slide">
                                                                            <div class="lms_testimonials_slider_item"><p class="lms_testimonial_quote">"</p>
                                                                                <p class="lms_testimonials_txt">Duis tortor lacus, dictum nec augue a, euismod sagittis eros. Aliquam id ligula malesuada, egestas est ultricies, ugue mauris feugiat dolor, sit amet viverra orci Duis vel urna dapibus, viverra nunc sit amet, cursus enim. Curabitur molestie orci id volutpat condimentum. Vestibulum pellentesque nunc in arcu tempus pretium. Mauris ac euismod nisl.</p>
                                                                                <figure><img src="images/testimonial1.png" alt=""/></figure>
                                                                                <h4>William Dam (LMS Director)</h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>