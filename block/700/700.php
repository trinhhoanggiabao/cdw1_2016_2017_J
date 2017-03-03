<!DOCTYPE html>
<html>

    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/700.less', 'css/700.css');
        ?> 
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/700.css" rel="stylesheet" type="text/css"/>
    </head> 

    <body>                

        <div class="zaro">
            <div id="white_background" class="slidelip"> 
                <div id="pattent"> 
                    <!--MEGA MENU-->
                    <div class="menu-container">
                        <div class="container margin-auto"> 
                            <div class="mega-menu">
                                <div class="mobileMenuTitle">Menu</div>
                                <ul class="mega-menu-ul">
                                    <li class="dropdown mega-menu-item mega-active">
                                        <a href="#" class="dropdown-toggle menu-item" data-toggle="dropdown">
                                            <span>Women</span>
                                        </a>	
                                        <a href="#" class="opener"></a>
                                        <ul class="container margin-auto dropdown-menu mega-dropdown-menu" >
                                            <li class="col-md-2 col-sm-3">
                                                <ul class="first-item">
                                                    <li>Men Collection</li>  
                                                    <div>
                                                        <a href="#">
                                                            <img src="images/dress-anna-sui-ambrosia-lace.jpg" class="img-responsive" alt="product 1">
                                                        </a>
                                                    </div>

                                                    
                                                    <li>
                                                        <a href="#">Dress Anna Sui....</a>
                                                        <span class="price">$309.00</span>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="col-md-10 col-sm-10">
                                                <ul class="full-width">
                                                    <li class="col-md-2 col-sm-3">
                                                        <ul>
                                                            <li>Features</li>
                                                            <li><a href="#">Auto Carousel</a></li>
                                                            <li><a href="#">Carousel Control</a></li>
                                                            <li><a href="#">Left & Right Navigation</a></li>
                                                            <li><a href="#">Four Columns Grid</a></li>
                                                            
                                                        </ul>
                                                    </li>
                                                    <li class="col-md-2 col-sm-3">
                                                        <ul>
                                                            <li>Plus</li>
                                                            <li><a href="#">Navbar Inverse</a></li>
                                                            <li><a href="#">Pull Right Elements</a></li>
                                                            <li><a href="#">Coloured Headers</a></li>                            
                                                            <li><a href="#">Primary Buttons & Default</a></li>							
                                                        </ul>
                                                    </li>
                                                    <li class="col-md-2 col-sm-3">
                                                        <ul>
                                                            <li>Much more</li>
                                                            <li><a href="#">Easy to Customize</a></li>
                                                            <li><a href="#">Calls to action</a></li>
                                                            <li><a href="#">Custom Fonts</a></li>
                                                            <li><a href="#">Slide down on Hover</a></li>                         
                                                        </ul>
                                                    </li>
                                                    <li class="col-md-2 col-sm-3">
                                                        <ul>
                                                            <li>Much more</li>
                                                            <li><a href="#">Easy to Customize</a></li>
                                                            <li><a href="#">Calls to action</a></li>
                                                            <li><a href="#">Custom Fonts</a></li>
                                                            <li><a href="#">Slide down on Hover</a></li>                         
                                                        </ul>
                                                    </li>
                                                    <li class="col-md-2 col-sm-3">
                                                        <ul>
                                                            <li>Much more</li>
                                                            <li><a href="#">Easy to Customize</a></li>
                                                            <li><a href="#">Calls to action</a></li>
                                                            <li><a href="#">Custom Fonts</a></li>
                                                            <li><a href="#">Slide down on Hover</a></li>                         
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="col-md-10 col-sm-10 ">
                                                <a>
                                                    <img src="images/banner-bottom.jpg">
                                                </a>
                                            </li>
                                        </ul>	
                                    </li>
                                    <li class="dropdown mega-menu-item">
                                        <a href="#" class="menu-item dropdown-toggle" data-toggle="dropdown">
                                            <span>Men</span>
                                        </a>				
                                        <a href="#" class="opener"></a>
                                        <ul class="container margin-auto dropdown-menu mega-dropdown-menu" >
                                            <li class="col-md-2 col-sm-3">
                                                <ul class="first-item">
                                                    <div>
                                                        <a href="#">
                                                            <img src="images/banner-left.jpg" class="img-responsive" alt="product 1">
                                                        </a>
                                                    </div> 
                                                </ul>
                                            </li>
                                            <li class="col-md-8 col-sm-8">
                                                    <ul class="full-width">
                                                    <li class="col-md-3 col-sm-6">
                                                        <ul>
                                                            <li>Features</li>
                                                            <li><a href="#">Auto Carousel</a></li>
                                                            <li><a href="#">Carousel Control</a></li>
                                                            <li><a href="#">Left & Right Navigation</a></li>
                                                            <li><a href="#">Four Columns Grid</a></li>
                                                            
                                                        </ul>
                                                    </li>
                                                    <li class="col-md-3 col-sm-6">
                                                        <ul>
                                                            <li>Plus</li>
                                                            <li><a href="#">Navbar Inverse</a></li>
                                                            <li><a href="#">Pull Right Elements</a></li>
                                                            <li><a href="#">Coloured Headers</a></li>                            
                                                            <li><a href="#">Primary Buttons & Default</a></li>							
                                                        </ul>
                                                    </li>
                                                    <li class="col-md-3 col-sm-6">
                                                        <ul>
                                                            <li>Much more</li>
                                                            <li><a href="#">Easy to Customize</a></li>
                                                            <li><a href="#">Calls to action</a></li>
                                                            <li><a href="#">Custom Fonts</a></li>
                                                            <li><a href="#">Slide down on Hover</a></li>                         
                                                        </ul>
                                                    </li>
                                                    <li class="col-md-3 col-sm-6">
                                                        <ul>
                                                            <li>Much more</li>
                                                            <li><a href="#">Easy to Customize</a></li>
                                                            <li><a href="#">Calls to action</a></li>
                                                            <li><a href="#">Custom Fonts</a></li>
                                                            <li><a href="#">Slide down on Hover</a></li>                         
                                                        </ul>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li class="col-md-2 col-sm-2">
                                                <ul class="first-item">
                                                    <li>Men Collection</li>  
                                                    <div>
                                                        <a href="#">
                                                            <img src="images/dress-anna-sui-ambrosia-lace.jpg" class="img-responsive" alt="product 1">
                                                        </a>
                                                    </div>

                                                    
                                                    <li>
                                                        <a href="#">View all Collection 

                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>	
                                    </li>

                                    <li class="dropdown mega-menu-item">
                                        <a href="#" class="menu-item">
                                            <span>Blog</span>

                                        </a> 
                                        <a href="#" class="opener"></a>
                                    </li>
                                    <li class="dropdown mega-menu-item">
                                        <a href="#"class="menu-item">
                                            <span>About Us</span>
                                        </a>
                                        <a href="#" class="opener"></a>

                                        <ul class="container margin-auto dropdown-menu mega-dropdown-menu" >
                                            <li class="align-center full-width">
                                                <h2>Alysum -  is the universal theme, with the pleasant and clean design.</h2>
                                                <p>With this theme you can easily create your unique shop, choosing any colors & over 500 Google fonts. </p>
                                            </li>
                                            <li class="col-md-3 col-sm-3 align-center">
                                                <img src="images/mic01.png">
                                                <h4>Responsive design</h4>
                                                <p> Alysum 100% responsive and supports all&nbsp;devices from desktop to small cell phones.</p>
                                            </li>
                                            <li class="col-md-3 col-sm-3 align-center">
                                                <img src="images/mic02.png">
                                                <h4>Responsive design</h4>
                                                <p> Alysum 100% responsive and supports all&nbsp;devices from desktop to small cell phones.</p>
                                            </li>
                                            <li class="col-md-3 col-sm-3 align-center">
                                                <img src="images/mic03.png">
                                                <h4>Responsive design</h4>
                                                <p> Alysum 100% responsive and supports all&nbsp;devices from desktop to small cell phones.</p>
                                            </li>
                                            <li class="col-md-3 col-sm-3 align-center">
                                                <img src="images/mic04.png">
                                                <h4>Responsive design</h4>
                                                <p> Alysum 100% responsive and supports all&nbsp;devices from desktop to small cell phones.</p>
                                            </li>
                                        </ul>	
                                    </li>
                                    <li class="dropdown mega-menu-item">
                                        <a href="#"class="menu-item">
                                            <span>Brands</span>
                                        </a>
                                        <a href="#" class="opener"></a>
                                        <ul class="container margin-auto dropdown-menu mega-dropdown-menu" >
                                            <li class="col-md-2 col-sm-2 brand">
                                                <img src="images/4-manu_alysum.jpg">
                                            </li> 
                                            <li class="col-md-2 col-sm-2 brand">
                                                <img src="images/4-manu_alysum.jpg">
                                            </li> 
                                            <li class="col-md-2 col-sm-2 brand">
                                                <img src="images/4-manu_alysum.jpg">
                                            </li> 
                                            <li class="col-md-2 col-sm-2 brand">
                                                <img src="images/4-manu_alysum.jpg">
                                            </li>  
                                            <li class="col-md-2 col-sm-2 brand">
                                                <img src="images/4-manu_alysum.jpg">
                                            </li> 
                                            <li class="col-md-2 col-sm-2 brand">
                                                <img src="images/4-manu_alysum.jpg">
                                            </li> 
                                            <li class="col-md-2 col-sm-2 brand">
                                                <img src="images/4-manu_alysum.jpg">
                                            </li> 
                                            <li class="col-md-2 col-sm-2 brand">
                                                <img src="images/4-manu_alysum.jpg">
                                            </li> 
                                            <li class="col-md-2 col-sm-2 brand">
                                                <img src="images/4-manu_alysum.jpg">
                                            </li> 
                                            <li class="col-md-2 col-sm-2 brand">
                                                <img src="images/4-manu_alysum.jpg">
                                            </li> 
                                            <li class="col-md-2 col-sm-2 brand">
                                                <img src="images/4-manu_alysum.jpg">
                                            </li> 
                                            <li class="col-md-2 col-sm-2 brand">
                                                <img src="images/4-manu_alysum.jpg">
                                            </li> 
                                        </ul>	
                                    </li>

                                    <li class="dropdown mega-menu-item">
                                        <a href="#"class="menu-item">
                                            <span>Demos</span>
                                        </a>
                                        <a href="#" class="opener"></a>
                                        <ul class="dropdown-menu mega-dropdown-menu demos" >
                                            <li><a>Demo 01 - Alysum</a></li>
                                            <li><a>Demo 01 - Alysum</a></li>
                                            <li><a>Demo 01 - Alysum</a></li>
                                            <li><a>Demo 01 - Alysum</a></li>
                                            <li><a>Demo 01 - Alysum</a></li>
                                            <li><a>Demo 01 - Alysum</a></li>
                                            <li><a>Demo 01 - Alysum</a></li>
                                        </ul>
                                    </li>
                                </ul> 
                            </div><!-- /.nav-collapse -->

                        </div>
                    </div>
               

                </div>
            </div>
        </div>    
        <script src="scripts/jquery-1.11.0.min.js" type="text/javascript"></script>
        <script src="scripts/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/script.js" type="text/javascript"></script>
    </body>

</html>