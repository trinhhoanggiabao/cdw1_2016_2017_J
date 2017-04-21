<!DOCTYPE html>
<html>

    <head>
        <title>764</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/764.less', 'css/764.css');
        ?> 
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/764.css" rel="stylesheet" type="text/css"/>
    </head> 

    <body>

        <div class="type-764">
            <div class="container">
                <div class="row">
                    <h2 id="details">Choose your package</h2>
                </div><br>

                <!-- Pack 1-->
                <div class="col-md-3" id="home-box">
                    <div class="pricing_header">
                        <h2>Basic User</h2>
                        <div class="space"></div>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item"><span class="glyphicon glyphicon-ok"></span> Responsible design</li>
                        <li class="list-group-item"><span class="glyphicon glyphicon-ok"></span> 3 examples</li>
                        <li class="list-group-item off"><span class="glyphicon glyphicon-remove"></span> HTML5 & CSS3</li>
                        <li class="list-group-item off"><span class="glyphicon glyphicon-remove"></span> PSD included</li>
                        <li class="list-group-item off"><span class="glyphicon glyphicon-remove"></span> Light and clean</li>
                        <li class="list-group-item off"><span class="glyphicon glyphicon-remove"></span> Customizible HTML</li>
                    </ul>

                    <div class="try">
                        <p class="price">$ 9.99</p>
                        <a class="btn btn-default" href="#" type="button">Abbonati</a>
                    </div>
                </div>
                <!-- Pack 2-->
                <div class="col-md-3" id="home-box">
                    <div class="pricing_header">
                        <h2>Premium User</h2>
                        <div class="space"></div>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item"><span class="glyphicon glyphicon-ok"></span> Responsible design</li>
                        <li class="list-group-item"><span class="glyphicon glyphicon-ok"></span> 3 examples</li>
                        <li class="list-group-item"><span class="glyphicon glyphicon-ok"></span> HTML5 & CSS3</li>
                        <li class="list-group-item off"><span class="glyphicon glyphicon-remove"></span> PSD included</li>
                        <li class="list-group-item off"><span class="glyphicon glyphicon-remove"></span> Light and clean</li>
                        <li class="list-group-item off"><span class="glyphicon glyphicon-remove"></span> Customizible HTML</li>
                    </ul>

                    <div class="try">
                        <p class="price">$ 44.99</p>
                        <a class="btn btn-default" href="#" type="button">Abbonati</a>

                    </div>
                </div>


                <!-- Pack 3-->
                <div class="col-md-3" id="home-box">
                    <div class="pricing_header">
                        <h2>Business User</h2>
                        <div class="space"></div>
                    </div>
                    <ul class="list-group">

                        <li class="list-group-item"><span class="glyphicon glyphicon-ok"></span> Responsible design</li>
                        <li class="list-group-item"><span class="glyphicon glyphicon-ok"></span> 3 examples</li>
                        <li class="list-group-item"><span class="glyphicon glyphicon-ok"></span> HTML5 & CSS3</li>
                        <li class="list-group-item"><span class="glyphicon glyphicon-ok"></span> PSD included</li>
                        <li class="list-group-item"><span class="glyphicon glyphicon-ok"></span> Light and clean</li>
                        <li class="list-group-item off"><span class="glyphicon glyphicon-remove"></span> Customizible HTML</li>
                    </ul>

                    <div class="try">
                        <p class="price">$ 79.99</p>
                        <button class="btn btn-default" href="#" type="button">Abbonati</button></li>
                    </div>
                </div>


                <!-- Pack 4-->
                <div class="col-md-3" id="home-box">
                    <div class="pricing_header">
                        <h2>Customize</h2>
                        <div class="space"></div>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item"><span class="glyphicon glyphicon-ok"></span> Responsible design</li>
                        <li class="list-group-item"><span class="glyphicon glyphicon-ok"></span> 3 examples</li>
                        <li class="list-group-item"><span class="glyphicon glyphicon-ok"></span> HTML5 & CSS3</li>
                        <li class="list-group-item"><span class="glyphicon glyphicon-ok"></span> PSD included</li>
                        <li class="list-group-item"><span class="glyphicon glyphicon-ok"></span> Light and clean</li>
                        <li class="list-group-item"><span class="glyphicon glyphicon-ok"></span> Customizible HTML</li>
                    </ul>

                    <div class="try">
                        <p class="price">$ 119.99</p>
                        <button class="btn btn-default" href="#" type="button">Abbonati</button></li>
                    </div>

                </div> 
            </div> 
        </div>
    </body>
</html>