<html>

    <head>
        <title>713</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="user-scalable=0, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/713.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/713.less', 'css/713.css');
        ?>

        <link href="css/713.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>

    <body>

        <div class="type-713">
            <div class="container">
                <div class="card hovercard">
                    <img src="http://placehold.it/300x200/000000/&text=Header" alt="" />
                    <div class="avatar">
                        <img src="http://placehold.it/80X80/333333/&text=Head" alt="" />
                    </div>
                    <div class="info">
                        <div class="title">
                            The Title
                        </div>
                        <div class="desc">Lorem ipsum</div>
                        <div class="desc">Lorem ipsum</div>
                        <div class="desc">Lorem ipsum</div>
                    </div>
                    <div class="bottom">
                        <button class="btn btn-default">Button</button>
                    </div>
                </div>
            </div>
        </div>

    </body>

</html>