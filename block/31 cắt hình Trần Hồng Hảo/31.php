<!DOCTYPE html>
<html>

    <head>
        <title>31</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/31.less', 'css/31.css');
        ?>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/31.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <div class="type-31">
            <div class="type-31-1">
                <div class="navbar-wrapper navbar-wrapperBig"><div class="ct-topBar text-center">
                        <div class="container">
                            <ul class="ct-panel--user list-inline text-uppercase pull-left">
                                <li><a href="#" class="ct-js-login">login<i class="fa fa-lock"></i></a></li>
                                <li><a href="#" class="ct-js-signup">sign up<i class="fa fa-user"></i></a></li>
                            </ul>
                            <div class="ct-widget--group pull-right">
                                <ul class="ct-widget--socials list-inline text-uppercase">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-wordpress"></i></a></li>
                                </ul>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-md dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <img src="images/flags/png/england.png" alt="UK">English <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#"><img src="images/flags/png/england.png" alt="UK">English</a></li>
                                        <li><a href="#"><img src="images/flags/png/de.png" alt="GER">German</a></li>
                                        <li><a href="#"><img src="images/flags/png/pl.png" alt="PL">Polish</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div><nav class="navbar navbar-default navbar-parts yamm ct-js-headroom animatedHeadroom fadeInDown headroom--top" data-heighttopbar="60px" data-startnavbar="0">
                        <div class="navbar-headerTop">
                            <div class="container">
                                <div class="btn-group pull-left">
                                    <button type="button" class="btn btn-md dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-bars"></i> Browse Courses
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">HTML</a></li>
                                        <li><a href="#">CSS</a></li>
                                        <li><a href="#">JS</a></li>
                                    </ul>
                                </div>
                                <div class="navbar-header">
                                    <a href="#"><img src="images/demo-content/logo.png" alt="logo"></a>
                                </div>
                                <div class="pull-right ct-searchInput--icon">
                                    <div class="form-group">
                                        <input id="search" placeholder="Search for Courses" required="" type="text" class="form-control input-lg ct-searchCourse">
                                    </div>
                                    <button type="submit" class="ct-search-button"><i class="fa fa-search"></i></button>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="container">
                            <ul class="nav navbar-nav">
                                <li class="dropdown yamm-fw"><a href="#">Home</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <a href="#">Home Page V1</a>
                                                        <a href="#">Home Page V2</a>
                                                        <a href="#">Home Page V3</a>
                                                        <a href="#">Home Page V4</a>
                                                        <a href="#">Home Page V5</a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="#">Home Page V6</a>
                                                        <a href="#">Home Page V7</a>
                                                        <a href="#">Home Page V8</a>
                                                        <a href="#">Home Page V9</a>
                                                        <a href="#">Home Page V10</a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="#">Home Page V11</a>
                                                        <a href="#">Home Page V12</a>
                                                        <a href="#">Home Page V13</a>
                                                        <a href="#">Home Page V14</a>
                                                        <a href="#">Onepager</a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="#">Home Page V15</a>
                                                        <a href="#">Home Page V16</a>
                                                        <a href="#">Home Page V17</a>
                                                        <a href="#">Home Page V18</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown yamm-fw"><a href="#">Courses</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <a href="#">List of Courses - inline</a>
                                                        <a href="#">Single Course V1</a>
                                                        <a href="#">Single Course V2</a>
                                                        <a href="#">Single Course V3</a>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <a href="#">List of Courses - thumbnails</a>
                                                        <a href="#">Single Course V4</a>
                                                        <a href="#">Single Course V5</a>
                                                        <a href="#">Single Course V6</a>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <a href="#">List of Courses - without sidebar</a>
                                                        <a href="#">Single Course V7</a>
                                                        <a href="#">Single Course V8</a>
                                                        <a href="#">Single Course V9</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown yamm-fw active"><a href="#">Pages</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <a class="active" href="#">List of Members</a>
                                                        <a href="#">Single Member V1</a>
                                                        <a href="#">Single Member V2</a>
                                                        <a href="#">Gallery V1</a>
                                                        <a href="#">Gallery V5</a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="#">Blog V1</a>
                                                        <a href="#">Blog V2</a>
                                                        <a href="#">Blog Single V1</a>
                                                        <a href="#">Gallery V2</a>
                                                        <a href="#">Our Universities</a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="#">Blog Single V2</a>
                                                        <a href="#">Contact V1</a>
                                                        <a href="#">Contact V2</a>
                                                        <a href="#">Gallery V3</a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="#">404 V1</a>
                                                        <a href="#">404 V2</a>
                                                        <a href="#">404 V3</a>
                                                        <a href="#">Gallery V4</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown yamm-fw">
                                    <a href="#">Features</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <ul class="list-unstyled">
                                                            <li><a href="#"><i class="fa fa-fw fa-th"></i> Grid System</a></li>
                                                            <li><a href="#"><i class="fa fa-fw fa-font"></i> Typography</a></li>
                                                            <li><a href="#"><i class="fa fa-fw fa-link"></i> Buttons</a></li>
                                                            <li><a href="#"><i class="fa fa-fw fa-align-justify"></i> Forms</a></li>
                                                            <li><a href="#"><i class="fa fa-fw fa-table"></i> Tables</a></li>
                                                            <li><a href="#"><i class="fa fa-fw fa-navicon"></i> Sliders</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <ul class="list-unstyled">
                                                            <li><a href="#"><i class="fa fa-fw fa-money"></i> Pricing Tables</a>
                                                            </li>
                                                            <li><a href="#"><i class="fa fa-fw fa-th-large"></i> Icon Boxes</a>
                                                            </li>
                                                            <li><a href="#"><i class="fa fa-fw fa-users"></i> Person Boxes</a>
                                                            </li>
                                                            <li><a href="#"><i class="fa fa-fw fa-plus"></i> Counters</a></li>
                                                            <li><a href="#"><i class="fa fa-fw fa-toggle-on"></i> Toggables</a>
                                                            </li>
                                                            <li><a href="#"><i class="fa fa-fw fa-play"></i> Media Sections</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <ul class="list-unstyled">
                                                            <li><a href="#"><i class="fa fa-fw fa-area-chart"></i> Charts</a></li>
                                                            <li><a href="#"><i class="fa fa-fw fa-bars"></i> Progress Bars</a></li>
                                                            <li><a href="#"><i class="fa fa-fw fa-star-half-full"></i> Progress
                                                                    Icons</a></li>
                                                            <li><a href="#"><i class="fa fa-fw fa-list"></i> Lists Simple</a></li>
                                                            <li><a href="#"><i class="fa fa-fw fa-list"></i> Lists Icons</a></li>
                                                            <li><a href="#"><i class="fa fa-fw fa-code"></i> For developers</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="type-31-2">
                <div class="ct-site--map ct-u-backgroundGradient">
                    <div class="container">
                        <div class="ct-u-displayTableVertical text-capitalize">
                            <div class="ct-u-displayTableCell">
                                <span class="ct-u-textBig">
                                    Professors
                                </span>
                            </div>
                            <div class="ct-u-displayTableCell text-right">
                                <span class="ct-u-textNormal ct-u-textItalic">
                                    <a href="#">Home</a> / <a href="#">Member</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="type-31-3">
                <section class="ct-u-paddingBoth100 ct-u-doubleBorder ct-u-backgroundLightGreen">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-lg-3">
                                <div class="ct-personBox ct-u-marginBottom30">
                                    <div class="ct-personMedia">
                                        <div class="ct-personImage">
                                            <a href="#">
                                                <img src="images/demo-content/member1.jpg" alt="person">
                                            </a>
                                        </div>
                                        <div class="ct-personName">
                                            <h4 class="ct-personName--title ct-fw-600">
                                                Mohamed Said
                                            </h4>
                                            <span class="ct-personName--meta ct-u-colorMotive">
                                                Web Designer
                                            </span>
                                        </div>
                                    </div>
                                    <div class="ct-personDescription">
                                        <p>
                                            Ut enim ad minima veniam, quis
                                            nostrum exercitationem ullamcorpor
                                            suscipit laboriosam
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="ct-personBox ct-u-marginBottom30">
                                    <div class="ct-personMedia">
                                        <div class="ct-personImage">
                                            <a href="#">
                                                <img src="images/demo-content/members2.jpg" alt="person">
                                            </a>
                                        </div>
                                        <div class="ct-personName">
                                            <h4 class="ct-personName--title ct-fw-600">
                                                Mohamed Said
                                            </h4>
                                            <span class="ct-personName--meta ct-u-colorMotive">
                                                Web Designer
                                            </span>
                                        </div>
                                    </div>
                                    <div class="ct-personDescription">
                                        <p>
                                            Ut enim ad minima veniam, quis
                                            nostrum exercitationem ullamcorpor
                                            suscipit laboriosam
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix visible-md"></div>
                            <div class="col-md-6 col-lg-3">
                                <div class="ct-personBox ct-u-marginBottom30">
                                    <div class="ct-personMedia">
                                        <div class="ct-personImage">
                                            <a href="#">
                                                <img src="images/demo-content/members3.jpg" alt="person">
                                            </a>
                                        </div>
                                        <div class="ct-personName">
                                            <h4 class="ct-personName--title ct-fw-600">
                                                Mohamed Said
                                            </h4>
                                            <span class="ct-personName--meta ct-u-colorMotive">
                                                Web Designer
                                            </span>
                                        </div>
                                    </div>
                                    <div class="ct-personDescription">
                                        <p>
                                            Ut enim ad minima veniam, quis
                                            nostrum exercitationem ullamcorpor
                                            suscipit laboriosam
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="ct-personBox ct-u-marginBottom30">
                                    <div class="ct-personMedia">
                                        <div class="ct-personImage">
                                            <a href="#">
                                                <img src="images/demo-content/members4.jpg" alt="person">
                                            </a>
                                        </div>
                                        <div class="ct-personName">
                                            <h4 class="ct-personName--title ct-fw-600">
                                                Mohamed Said
                                            </h4>
                                            <span class="ct-personName--meta ct-u-colorMotive">
                                                Web Designer
                                            </span>
                                        </div>
                                    </div>
                                    <div class="ct-personDescription">
                                        <p>
                                            Ut enim ad minima veniam, quis
                                            nostrum exercitationem ullamcorpor
                                            suscipit laboriosam
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix visible-md"></div>
                            <div class="col-md-6 col-lg-3">
                                <div class="ct-personBox ct-u-marginBottom30">
                                    <div class="ct-personMedia">
                                        <div class="ct-personImage">
                                            <a href="#">
                                                <img src="images/demo-content/members5.jpg" alt="person">
                                            </a>
                                        </div>
                                        <div class="ct-personName">
                                            <h4 class="ct-personName--title ct-fw-600">
                                                Mohamed Said
                                            </h4>
                                            <span class="ct-personName--meta ct-u-colorMotive">
                                                Web Designer
                                            </span>
                                        </div>
                                    </div>
                                    <div class="ct-personDescription">
                                        <p>
                                            Ut enim ad minima veniam, quis
                                            nostrum exercitationem ullamcorpor
                                            suscipit laboriosam
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="ct-personBox ct-u-marginBottom30">
                                    <div class="ct-personMedia">
                                        <div class="ct-personImage">
                                            <a href="#">
                                                <img src="images/demo-content/members6.jpg" alt="person">
                                            </a>
                                        </div>
                                        <div class="ct-personName">
                                            <h4 class="ct-personName--title ct-fw-600">
                                                Mohamed Said
                                            </h4>
                                            <span class="ct-personName--meta ct-u-colorMotive">
                                                Web Designer
                                            </span>
                                        </div>
                                    </div>
                                    <div class="ct-personDescription">
                                        <p>
                                            Ut enim ad minima veniam, quis
                                            nostrum exercitationem ullamcorpor
                                            suscipit laboriosam
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix visible-md"></div>
                            <div class="col-md-6 col-lg-3">
                                <div class="ct-personBox ct-u-marginBottom30">
                                    <div class="ct-personMedia">
                                        <div class="ct-personImage">
                                            <a href="#">
                                                <img src="images/demo-content/members7.jpg" alt="person">
                                            </a>
                                        </div>
                                        <div class="ct-personName">
                                            <h4 class="ct-personName--title ct-fw-600">
                                                Mohamed Said
                                            </h4>
                                            <span class="ct-personName--meta ct-u-colorMotive">
                                                Web Designer
                                            </span>
                                        </div>
                                    </div>
                                    <div class="ct-personDescription">
                                        <p>
                                            Ut enim ad minima veniam, quis
                                            nostrum exercitationem ullamcorpor
                                            suscipit laboriosam
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="ct-personBox ct-u-marginBottom30">
                                    <div class="ct-personMedia">
                                        <div class="ct-personImage">
                                            <a href="#">
                                                <img src="images/demo-content/members8.jpg" alt="person">
                                            </a>
                                        </div>
                                        <div class="ct-personName">
                                            <h4 class="ct-personName--title ct-fw-600">
                                                Mohamed Said
                                            </h4>
                                            <span class="ct-personName--meta ct-u-colorMotive">
                                                Web Designer
                                            </span>
                                        </div>
                                    </div>
                                    <div class="ct-personDescription">
                                        <p>
                                            Ut enim ad minima veniam, quis
                                            nostrum exercitationem ullamcorpor
                                            suscipit laboriosam
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix visible-md"></div>
                            <div class="col-md-6 col-lg-3">
                                <div class="ct-personBox ct-u-marginBottom30">
                                    <div class="ct-personMedia">
                                        <div class="ct-personImage">
                                            <a href="#">
                                                <img src="images/demo-content/members9.jpg" alt="person">
                                            </a>
                                        </div>
                                        <div class="ct-personName">
                                            <h4 class="ct-personName--title ct-fw-600">
                                                Mohamed Said
                                            </h4>
                                            <span class="ct-personName--meta ct-u-colorMotive">
                                                Web Designer
                                            </span>
                                        </div>
                                    </div>
                                    <div class="ct-personDescription">
                                        <p>
                                            Ut enim ad minima veniam, quis
                                            nostrum exercitationem ullamcorpor
                                            suscipit laboriosam
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="ct-personBox ct-u-marginBottom30">
                                    <div class="ct-personMedia">
                                        <div class="ct-personImage">
                                            <a href="#">
                                                <img src="images/demo-content/members10.jpg" alt="person">
                                            </a>
                                        </div>
                                        <div class="ct-personName">
                                            <h4 class="ct-personName--title ct-fw-600">
                                                Mohamed Said
                                            </h4>
                                            <span class="ct-personName--meta ct-u-colorMotive">
                                                Web Designer
                                            </span>
                                        </div>
                                    </div>
                                    <div class="ct-personDescription">
                                        <p>
                                            Ut enim ad minima veniam, quis
                                            nostrum exercitationem ullamcorpor
                                            suscipit laboriosam
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix visible-md"></div>
                            <div class="col-md-6 col-lg-3">
                                <div class="ct-personBox ct-u-marginBottom30">
                                    <div class="ct-personMedia">
                                        <div class="ct-personImage">
                                            <a href="#">
                                                <img src="images/demo-content/members11.jpg" alt="person">
                                            </a>
                                        </div>
                                        <div class="ct-personName">
                                            <h4 class="ct-personName--title ct-fw-600">
                                                Mohamed Said
                                            </h4>
                                            <span class="ct-personName--meta ct-u-colorMotive">
                                                Web Designer
                                            </span>
                                        </div>
                                    </div>
                                    <div class="ct-personDescription">
                                        <p>
                                            Ut enim ad minima veniam, quis
                                            nostrum exercitationem ullamcorpor
                                            suscipit laboriosam
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="ct-personBox ct-u-marginBottom30">
                                    <div class="ct-personMedia">
                                        <div class="ct-personImage">
                                            <a href="#">
                                                <img src="images/demo-content/members12.jpg" alt="person">
                                            </a>
                                        </div>
                                        <div class="ct-personName">
                                            <h4 class="ct-personName--title ct-fw-600">
                                                Mohamed Said
                                            </h4>
                                            <span class="ct-personName--meta ct-u-colorMotive">
                                                Web Designer
                                            </span>
                                        </div>
                                    </div>
                                    <div class="ct-personDescription">
                                        <p>
                                            Ut enim ad minima veniam, quis
                                            nostrum exercitationem ullamcorpor
                                            suscipit laboriosam
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix visible-md"></div>
                        </div>
                        <nav class="ct-u-marginTop20">
                            <ul class="pagination">
                                <li>
                                    <a href="#" aria-label="Previous">&lt;</a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li>
                                    <a href="#" aria-label="Next">&gt;</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </section>
            </div>
            <div class="type-31-4">
                <footer>
                    <div class="ct-prefooter">
                        <div class="widget widget-socialsFullWidth">
                            <div class="widget-inner">
                                <div class="container">
                                    <div class="ct-slick ct-js-slick text-center slick-initialized slick-slider" data-adaptiveheight="true" data-animations="true" data-autoplay="true" data-infinite="false" data-autoplayspeed="6000" data-draggable="true" data-touchmove="false" data-arrows="false" data-xsitems="4" data-smitems="8" data-mditems="12" data-lgitems="12" data-items="1" data-snap-ignore="true"><div class="slick-list draggable" tabindex="0"><div class="slick-track" style="opacity: 1; width: 1188px; transform: translate3d(0px, 0px, 0px);"><div class="item slick-slide slick-active" data-slick-index="0" style="width: 99px;">
                                                    <a href="#"><i class="fa fa-apple"></i></a>
                                                </div><div class="item slick-slide slick-active" data-slick-index="1" style="width: 99px;">
                                                    <a href="#"><i class="fa fa-yelp"></i></a>
                                                </div><div class="item slick-slide slick-active" data-slick-index="2" style="width: 99px;">
                                                    <a href="#"><i class="fa fa-behance"></i></a>
                                                </div><div class="item slick-slide slick-active" data-slick-index="3" style="width: 99px;">
                                                    <a href="#"><i class="fa fa-digg"></i></a>
                                                </div><div class="item slick-slide slick-active" data-slick-index="4" style="width: 99px;">
                                                    <a href="#"><i class="fa fa-delicious"></i></a>
                                                </div><div class="item slick-slide slick-active" data-slick-index="5" style="width: 99px;">
                                                    <a href="#"><i class="fa fa-drupal"></i></a>
                                                </div><div class="item slick-slide slick-active" data-slick-index="6" style="width: 99px;">
                                                    <a href="#"><i class="fa fa-dropbox"></i></a>
                                                </div><div class="item slick-slide slick-active" data-slick-index="7" style="width: 99px;">
                                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                                </div><div class="item slick-slide slick-active" data-slick-index="8" style="width: 99px;">
                                                    <a href="#"><i class="fa fa-foursquare"></i></a>
                                                </div><div class="item slick-slide slick-active" data-slick-index="9" style="width: 99px;">
                                                    <a href="#"><i class="fa fa-github"></i></a>
                                                </div><div class="item slick-slide slick-active" data-slick-index="10" style="width: 99px;">
                                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                                </div><div class="item slick-slide slick-active" data-slick-index="11" style="width: 99px;">
                                                    <a href="#"><i class="fa fa-linkedin-square"></i></a>
                                                </div></div></div></div>
                                </div>
                            </div>
                        </div>
                        <div class="ct-u-paddingBoth100">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-6 col-md-3">
                                        <h4 class="text-uppercase ct-fw-400 ct-u-marginBottom50">Other links</h4>
                                        <div class="widget widget-links">
                                            <div class="widget-inner">
                                                <ul class="ct-list-hyperlink list-unstyled">
                                                    <li><a href="#">Courses</a></li>
                                                    <li><a href="#">Events</a></li>
                                                    <li><a href="#">Showcase</a></li>
                                                    <li><a href="#">Thoughts</a></li>
                                                    <li><a href="#">Uncategorized</a></li>
                                                    <li><a href="#">Full Width Template</a></li>
                                                    <li><a href="#">Contact</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <h4 class="text-uppercase ct-fw-400 ct-u-marginBottom50">Education</h4>
                                        <div class="widget widget-links">
                                            <div class="widget-inner">
                                                <ul class="ct-list-default list-unstyled">
                                                    <li><a href="#">Membership Levels</a></li>
                                                    <li><a href="#">Reasons to join</a></li>
                                                    <li><a href="#">Shop</a></li>
                                                    <li><a href="#">Cart</a></li>
                                                    <li><a href="#">Members</a></li>
                                                    <li><a href="#">Shortcodes</a></li>
                                                    <li><a href="#">Full Width Template</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix visible-sm"></div>
                                    <div class="col-sm-6 col-md-3">
                                        <h4 class="text-uppercase ct-fw-400 ct-u-marginBottom50">Engineering</h4>
                                        <div class="widget widget-links">
                                            <div class="widget-inner">
                                                <ul class="ct-list-default list-unstyled">
                                                    <li><a href="#">Specials</a></li>
                                                    <li><a href="#">New Products</a></li>
                                                    <li><a href="#">Best Sellers</a></li>
                                                    <li><a href="#">Our Stores</a></li>
                                                    <li><a href="#">Contact us</a></li>
                                                    <li><a href="#">Shop</a></li>
                                                    <li><a href="#">Cart</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <h4 class="text-uppercase ct-fw-400 ct-u-marginBottom50">Law &amp; Business</h4>
                                        <div class="widget widget-links">
                                            <div class="widget-inner">
                                                <ul class="ct-list-default list-unstyled">
                                                    <li><a href="#">My Orders</a></li>
                                                    <li><a href="#">My Credit Slips</a></li>
                                                    <li><a href="#">My Addresses</a></li>
                                                    <li><a href="#">My Personal Info</a></li>
                                                    <li><a href="#">My Specials</a></li>
                                                    <li><a href="#">My New Products</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix visible-sm"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ct-footer">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-md-push-6">
                                    <ul class="list-unstyled list-inline text-right ct-fw-300 ct-navbar--footer">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Page</a></li>
                                        <li><a href="#">Portfolio</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Shop</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-md-pull-6">
                                    <ul class="list-unstyled list-inline ct-copyright">
                                        <li>Copyright 2015</li>
                                        <li>Created by <a href="#">createIT</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </body>
</html>