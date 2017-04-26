<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('./less/751.less', 'css/751.css');
        ?>
        <link href="css/751.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="type-751">
            <div class="container">
                    <div class="breadcrumb_wrap">
                        <ul class="breadcrumb">
                            <li><a href="#" title="Home">Home</a></li>
                            <li><span>About us</span> </li>
                        </ul>
                    </div>
                    <h3 class="title">ABOUT US</h3>
                    <div class="content">
                        <h5 class="chu">CATERING TO YOUR REQUIREMENTS, HANDLING YOUR NEEDS WITH CARE</h5>
                        <p>Our store is more than just another average online retailer. We sell not only top quality products, but give our customers a positive online shopping experience. Forget about struggling to do everything at once: taking care of the family, running your business, walking your dog, cleaning the house, doing the shopping, etc. Purchase the goods you need every day or just like in a few clicks or taps, depending on the device you use to access the Internet. We work to make your life more enjoyable.</p>
                        <h5 class="chu">STORE EVENTS</h5>
                        <table>
                            <tr>
                                <td>
                                    <p>
                                        <img src="images/about_1.png" alt=""/>
                                    </p>
                                    <h4>FOR CONVENIENCE OF CHOICE</h4>
                                    <p class="font-p">We think about the convenience of your choice. Our products are supplied with star rating that should help hesitant buyers to take a decision. What’s more, you can search our site if you know exactly what you are looking for or use a bunch of different filters that will considerably save your time and efforts.</p>
                                </td>
                                <td>
                                    <p>
                                        <img src="images/about_2.png" alt=""/>
                                    </p>
                                    <h4>DELIVERY TO ALL REGIONS</h4>
                                    <p class="font-p">We deliver our goods worldwide. No matter where you live, your order will be shipped in time and delivered right to your door or to any other location you have stated. The packages are handled with utmost care, so the ordered products will be handed to you safe and sound, just like you expect them to be.</p>
                                </td>
                                <td>
                                    <p>
                                        <img src="images/about_3.png" alt=""/>
                                    </p>
                                    <h4>THE HIGHEST QUALITY OF PRODUCTS</h4>
                                    <p class="font-p">We guarantee the highest quality of the products we sell. Several decades of successful operation and millions of happy customers let us feel certain about that. Besides, all items we sell pass thorough quality control, so no characteristics mismatch can escape the eye of our professionals.</p>
                                </td>
                            </tr>
                        </table>
                        <h5 class="chu">OUR TEAM</h5>
                        <table>
                            <tr>
                                <td>
                                    <p>
                                        <img src="images/photo_1.jpg" alt=""/>
                                    </p>
                                    <h5>ROBERT JOHNSON</h5>
                                    <p class="font-p">Senior salesman with 15 years of experience. He knows everything about the products he offers.</p>
                                </td>
                                <td>
                                    <p>
                                        <img src="images/photo_2.jpg" alt=""/>
                                    </p>
                                    <h5>JESSICA PRISTON</h5>
                                    <p class="font-p">Mega positive shop assistant always ready to help you make the right choice and charm you with a smile.</p>
                                </td>
                                <td>
                                    <p>
                                        <img src="images/photo_3.jpg" alt=""/>
                                    </p>
                                    <h5>SAM KROMSTAIN</h5>
                                    <p class="font-p">Wholesale manager. Contact him if you want to buy a batch of the products offered at our store.</p>
                                </td>
                            </tr>
                        </table>
                        <h5 class="chu">TESTIMONIALS</h5>
                        <blockquote>
                            <p class="blog">“Guys, you rock! Made a purchase at your store recently. The order has been shipped and delivered on time. The quality is superb! The price is quite reasonable. Told all my friends about your excellent service and the variety of choice. I think I’ll be your loyal customer in future as well. I wish your store many more years of prosperity.”
                            </p>
                        </blockquote>
                        <p class="font-p2"><strong>Mary Taba</strong></p>
                        <blockquote>
                            <p class="blog">“Having the distressing experience with some online shops before decided to say ‘’THANK YOU” to all personnel of this store. You are not only friendly, but deliver really good products in the shortest possible terms. In a word, I am absolutely happy with my purchase and the service. Everything was perfect!”</p>
                        </blockquote>
                        <p class="font-p2"><strong>Virginia Ubert</strong></p>
                    </div>
                
            </div>
        </div>
    </body>
</html>