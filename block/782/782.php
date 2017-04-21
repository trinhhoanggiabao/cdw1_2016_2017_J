<!DOCTYPE html>
<html>

    <head>
        <title>782</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/782.less', 'css/782.css');
        ?> 
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/782.css" rel="stylesheet" type="text/css"/>

        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
    </head> 


    <body>
        <div class="type-782">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="col-md-4 col-sm-6">
                            <div class="card-container">
                                <div class="card">
                                    <div class="front">
                                        <div class="cover">
                                            <img src="images/hinh1.jpg"/>
                                        </div>
                                        <div class="user">
                                            <img class="img-circle" src="images/hinh2.jpg"/>
                                        </div>
                                        <div class="content">
                                            <div class="main">
                                                <h3 class="name">John Marvel</h3>
                                                <p class="profession">CEO</p>
                                                <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                                            </div>
                                            <div class="footer">
                                                <i class="fa fa-mail-forward"></i> Auto Rotation
                                            </div>
                                        </div>
                                    </div> <!-- end front panel -->
                                    <div class="back">
                                        <div class="header">
                                            <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                                        </div>
                                        <div class="content">
                                            <div class="main">
                                                <h4 class="text-center">Job Description</h4>
                                                <p class="text-center">Web design, Adobe Photoshop, HTML5, CSS3, Corel and many others...</p>

                                                <div class="stats-container">
                                                    <div class="stats">
                                                        <h4>235</h4>
                                                        <p>
                                                            Followers
                                                        </p>
                                                    </div>
                                                    <div class="stats">
                                                        <h4>114</h4>
                                                        <p>
                                                            Following
                                                        </p>
                                                    </div>
                                                    <div class="stats">
                                                        <h4>35</h4>
                                                        <p>
                                                            Projects
                                                        </p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="footer">
                                            <div class="social-links text-center">
                                                <a href="#" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                                                <a href="#" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                                                <a href="#" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                                            </div>
                                        </div>
                                    </div> <!-- end back panel -->
                                </div> <!-- end card -->
                            </div> <!-- end card-container -->
                        </div> <!-- end col sm 3 -->
                        <!--         <div class="col-sm-1"></div> -->
                        <div class="col-md-4 col-sm-6">
                            <div class="card-container manual-flip">
                                <div class="card">
                                    <div class="front">
                                        <div class="cover">
                                            <img src="images/hinh3.jpg"/>
                                        </div>
                                        <div class="user">
                                            <img class="img-circle" src="images/hinh4.jpg"/>
                                        </div>
                                        <div class="content">
                                            <div class="main">
                                                <h3 class="name">Andrew Mike</h3>
                                                <p class="profession">Web Developer</p>
                                                <p class="text-center">"Lamborghini Mercy <br>Your chick she so thirsty <br>I'm in that two seat Lambo"</p>
                                            </div>
                                            <div class="footer">
                                                <button class="btn btn-simple" onclick="rotateCard(this)">
                                                    <i class="fa fa-mail-forward"></i> Manual Rotation
                                                </button>
                                            </div>
                                        </div>
                                    </div> <!-- end front panel -->
                                    <div class="back">
                                        <div class="header">
                                            <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                                        </div>
                                        <div class="content">
                                            <div class="main">
                                                <h4 class="text-center">Job Description</h4>
                                                <p class="text-center">Web design, Adobe Photoshop, HTML5, CSS3, Corel and many others...</p>

                                                <div class="stats-container">
                                                    <div class="stats">
                                                        <h4>235</h4>
                                                        <p>
                                                            Followers
                                                        </p>
                                                    </div>
                                                    <div class="stats">
                                                        <h4>114</h4>
                                                        <p>
                                                            Following
                                                        </p>
                                                    </div>
                                                    <div class="stats">
                                                        <h4>35</h4>
                                                        <p>
                                                            Projects
                                                        </p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="footer">
                                            <button class="btn btn-simple" rel="tooltip" title="Flip Card" onclick="rotateCard(this)">
                                                <i class="fa fa-reply"></i> Back
                                            </button>
                                            <div class="social-links text-center">
                                                <a href="#" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                                                <a href="#" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                                                <a href="#" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                                            </div>
                                        </div>
                                    </div> <!-- end back panel -->
                                </div> <!-- end card -->
                            </div> <!-- end card-container -->
                        </div> <!-- end col sm 3 -->
                        <!--         <div class="col-sm-1"></div> -->
                        <div class="col-md-4 col-sm-6">
                            <div class="card-container">
                                <div class="card">
                                    <div class="front">
                                        <div class="cover">
                                            <img src="images/hinh5.jpg"/>
                                        </div>
                                        <div class="user">
                                            <img class="img-circle" src="images/hinh6.jpg"/>
                                        </div>
                                        <div class="content">
                                            <div class="main">
                                                <h3 class="name">Inna Corman</h3>
                                                <p class="profession">Product Manager</p>

                                                <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                                            </div>
                                            <div class="footer">
                                                <div class="rating">
                                                    <i class="fa fa-mail-forward"></i> Auto Rotation
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end front panel -->
                                    <div class="back">
                                        <div class="header">
                                            <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                                        </div>
                                        <div class="content">
                                            <div class="main">
                                                <h4 class="text-center">Job Description</h4>
                                                <p class="text-center">Web design, Adobe Photoshop, HTML5, CSS3, Corel and many others...</p>

                                                <div class="stats-container">
                                                    <div class="stats">
                                                        <h4>235</h4>
                                                        <p>
                                                            Followers
                                                        </p>
                                                    </div>
                                                    <div class="stats">
                                                        <h4>114</h4>
                                                        <p>
                                                            Following
                                                        </p>
                                                    </div>
                                                    <div class="stats">
                                                        <h4>35</h4>
                                                        <p>
                                                            Projects
                                                        </p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="footer">
                                            <div class="social-links text-center">
                                                <a href="#" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                                                <a href="#" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                                                <a href="#" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                                            </div>
                                        </div>
                                    </div> <!-- end back panel -->
                                </div> <!-- end card -->
                            </div> <!-- end card-container -->
                        </div> <!-- end col-sm-3 -->
                    </div> <!-- end col-sm-10 -->
                </div> <!-- end row -->
                <div class="space-200"></div>
            </div>
        </div>
    </body>
</html>