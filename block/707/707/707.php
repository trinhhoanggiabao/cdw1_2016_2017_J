<html style="background-color: #f3f3f4;">

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/owl.carousel.css" rel="stylesheet" type="text/css"/>
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('../libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('../less/707.less', '../css/707.css');
        ?>
        <link href="../css/707.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
        <script src="../js/owl.carousel.js" type="text/javascript"></script>
        <script type="text/javascript" src="../js/script.js"></script>
    </head>
    <body>
        <div class="type-707">
        <div class="container">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="product">
                    <div class="title">
                        <h4>Moschino Cheap And Chic Yacht</h4>
                        <div class="star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star color-star"></i>
                        </div>
                    </div>
                    <span class="state">
                        Manufacturer: <a href="#" class="name">Nicole Miller</a><br>
                        Condition: New
                    </span>
                    <div class="tab-title">
                        <nav>
                        <ul class="tab">
                            <li><a href="javascript:void(0)" class="tablinks active" onclick="openTab(event, 'more-info')">More info</a></li>
                            <li><a href="javascript:void(0)" onclick="openTab(event, 'data-sheet')">Data sheet</a></li>
                            <li><a href="javascript:void(0)" onclick="openTab(event, 'accessories')">Accessories</a></li>
                            <li><a href="javascript:void(0)" onclick="openTab(event, 'custom-tab')">Custom Tab</a></li>
                            <li><a href="javascript:void(0)" onclick="openTab(event, 'video')">Video</a></li>
                            <li><a href="javascript:void(0)" onclick="openTab(event, 'comment')">Comments</a></li>
                        </ul>
                        </nav>
                        
                        <div class="tabcontent active-section">
                            <article>
                            Eorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean quis leo sit amet diam ullamcorper ullamcorper. In eleifend luctus interdum.
                            Cras vel eleifend neque. Phasellus eget est lacus, et aliquet arcu. Morbi vitae sapien
                            </article>
                            <nav>
                            <ul>
                                <li>Color - White;</li>
                                <li>100% micro modal;</li>
                                <li>Ruched knot decoration at the chest;</li>
                                <li>Unlined;</li>
                            </ul>
                            </nav>
                            <article>
                            Morbi vitae sapien in elit cursus auctor. Sed lectus nisi, commodo vel hendrerit vel, cursus non sapien. Nullam nec velit ante, vitae placerat odio.
                            Duis sodales nisi ac nunc vestibulum gravida. Phasellus auctor tellus felis, ac cursus ligula.
                            </article>
                        </div>
                        <div id="data-sheet" class="tabcontent">
                            <table>
                                <tr class="odd">
                                    <td>Height</td>
                                    <td>Silk</td>
                                </tr>
                                <tr class="even">
                                    <td>Material</td>
                                    <td>Cotton</td>
                                </tr>
                            </table>
                        </div>
                        <div id="accessories" class="tabcontent">
                            <nav>
                            <ul>
                                <li class="col-md-4 col-sm-4">
                                    <figure><img src="../images/dress-nanette-lepore-want-me.jpg"></figure>
                                    <h3>Dress Nanette L...</h3>
                                    <h5>$470.00</h5>
                                    <a class="btn-add-to-cart" href="#">Add to cart</a>
                                </li>
                                <li class="col-md-4 col-sm-4">
                                    <figure><img src="../images/dress-herve-leger-sip-and-shine-martini.jpg"></figure>
                                    <h3>Dress Herve Leg...</h3>
                                    <h5>$707.00</h5>
                                    <a class="btn-add-to-cart" href="#">Add to cart</a>
                                </li>
                                <li class="col-md-4 col-sm-4">
                                    <figure><img src="../images/dress-anna-sui-ambrosia-lace.jpg"></figure>
                                    <h3>Dress Anna Sui ...</h3>
                                    <h5>$743.00</h5>
                                    <a class="btn-add-to-cart" href="#">Add to cart</a>
                                </li>
                            </ul>
                            </nav>
                        </div>
                        <div id="custom-tab" class="tabcontent">
                            <figure><img src="../images/sizes.jpg"></figure>
                        </div>
                        <div id="video" class="tabcontent">
                            <iframe id="player" type="text/html" src="../video/prada-spring-2015.mp4" width="515" height="270" frameborder="0"></iframe>
                        </div>
                        <div id="comment" class="tabcontent">
                            <div class="thumb-comment">
                                <span><b>Grade</b></span>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star star-color"></i>
                                <i class="fa fa-star star-color"></i>
                                <a href="#">Write your review !</a><br>
                                <strong>pipo</strong> <em>06/21/2016</em>
                                <h3>hsfd 4387587 dkjhdsa g</h3>
                                <p>hsfd 4387587 dkjhdsa g</p>
                                
                                
                            </div>
                            <div class="thumb-comment">
                                <span><b>Grade</b></span>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star star-color"></i>
                                <i class="fa fa-star star-color"></i>
                                <a href="#">Write your review !</a><br>
                                <strong>pipo</strong> <em>06/21/2016</em>
                                <h3>hsfd 4387587 dkjhdsa g</h3>
                                <p>hsfd 4387587 dkjhdsa g</p>
                            </div>
                        </div>
                    </div>
                    <div class="attributes">
                        <label> Size: </label>
                        
                        <div class="attribute-list">
                            <select>
                                <option value="1" selected="selected" title="S">S</option>
                                <option value="2" title="M">M</option>
                                <option value="3" title="M">L</option>
                                <option value="4" title="M">XL</option>
                            </select>
                        </div>
                            <label> Color: </label>
                        <div class="attribute-list">
                            <select>
                                <option value="5" selected="selected" title="S">Red</option>
                                <option value="6" title="M">Blue</option>
                                <option value="7" title="M">Black</option>
                                <option value="8" title="M">White</option>
                            </select>
                        </div>
                            <p>
                                <label>Quantity:</label>
                                <input type="text" name="quantity" id="quantity" value="1">
                            </p>
                            
                            <div class="price">
                                <h5>$805.00</h5>
                                <a href="#" class="btn-add">add to cart</a>
                            </div>
                    </div>
                </div>
                <div class="box-cart">
                    <figure>
                        <img src="../images/social-facebook-box-blue-icon.png" title="Facebook">
                        <img src="../images/twitter-icon.png" title="Twiiter">
                        <img src="../images/icon-print.png" title="Print">
                        <img src="../images/Other-Mail-Metro-icon.png" title="Email">
                        <img src="../images/google-plus-icon.png" title="Google plus">
                    </figure>
                    <a href="#" class="wishlist">» Add to my wishlist</a>
                </div>
                
            </div>
            
        </div>
        </div>
    </body>
        

</html>