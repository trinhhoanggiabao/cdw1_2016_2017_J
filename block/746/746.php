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
        $less->compileFile('./less/746.less', 'css/746.css');
        ?>
        <link href="css/746.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="type-746">
            <div class="container">
                <div class="row">
                    <div class="col1 col-sm-6">
                        <h2>About store</h2>
                        <h4>Catering to your requirements, handling your needs with care. Our  store is more than just another average online retailer.</h4>
                        <p>We sell not only top quality products, but give our customers a positive online shopping experience. Forget about struggling to do everything at once: taking care of the family, running your business, walking your dog, cleaning the house, doing the shopping, etc. Purchase the goods you need every day or just like in a few clicks or taps, depending on the device you use to access the Internet. We work to make your life more enjoyable.</p>
                    </div>
                    <div class="col2 col-sm-6">
                        <h2>Blog</h2>
                        <h4 class="blog_title"><a href="/blogs/blog/the-secret-of-success-lies-between-the-right-choice-of-the-business-strategy-and-reliable-suppliers">The secret of success lies between the right choice of the business...</a></h4>
                        <div class="blog_content">We specialize in all kinds of kitchen supplies including the goods for food servicing and restaurant business. Every business is very demanding but the secret of success lies between the right choice of the business strategy and reliable suppliers. Taking...</div>
                        <h4 class="blog_title"><a href="/blogs/blog/welcome-you-here-at-our-online-kitchen-supplies-store">Welcome you here, at our online Kitchen Supplies store!</a></h4>
                        <div class="blog_content">Kitchen Supplies store was founded by several enthusiasts in 2002.Those were the times when people still preferred to buy products at brick-and-mortar stores instead of buying online. Nevertheless we’ve decided to create an online shop and we are so glad...</div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</body>
</html>