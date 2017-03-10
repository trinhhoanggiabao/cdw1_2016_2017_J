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
        $less->compileFile('less/717.less', 'css/717.css');
        ?>
        <link href="css/717.css" rel="stylesheet" type="text/css" />



    </head>

    <body>
        <div class="type-717">
            <div class="headerinner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <figure> class="logo">
                                <img src="images/logo.png" alt=""/>
                            </figure>
                        </div>
                        <div class="col-md-7">
                            <div class="search">
                                <div class="form-select">
                                    <select>
                                        <option>All Categories</option>
                                        <option>Clothing</option>
                                        <option>Accessories</option>
                                        <option>Tops & T-Shirts</option>
                                        <option>Cardigans</option>
                                        <option>Jumpers</option>
                                        <option>Designer Wear</option>
                                        <option>jersey tops</option>
                                        <option>Blouses</option>
                                        <option>Swim Wear</option>
                                        <option>Skirts</option>
                                        <option>Coats & Jackets</option>

                                    </select>
                                </div>
                                <div class="form-input">
                                    <input type="text" name="text" id="text" placeholder="Search Product Here">
                                </div>
                                <div class="btn-button">
                                    <button><i class="fa fa-search" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="item">
                                <div class="thumbitem">
                                    <p>0 ITEM </p>
                                </div>
                                <div class="item-cart">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</div>

</div>
</body>

</html>