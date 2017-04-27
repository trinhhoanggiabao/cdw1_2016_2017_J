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
        $less->compileFile('./less/743.less', 'css/743.css');
        ?>
        <link href="css/743.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="type-743">
            <div class="container">
                <div class="row">
                    <div class="breadcrumb_wrap">
                        <ul class="breadcrumb">
                            <li><a href="#" title="Home">Home</a></li>
                            <li><span>Bakeware</span></li>
                        </ul>
                    </div>
                    <h1 class="page_heading">Bakeware</h1>
                    <ul class="tags clearfix">
                        <li><a href="" class="active">All</a></li> 
                        <li><a title="Show products matching tag Candy Making Supplies" href="#">Candy Making Supplies</a></li>
                        <li><a title="Show products matching tag Commercial Cookware" href="#">Commercial Cookware</a></li>
                        <li><a title="Show products matching tag Organizational Supplies" href="#">Organizational Supplies</a></li>
                        <li><a title="Show products matching tag Professional Cutlery" href="#">Professional Cutlery</a></li>
                    </ul>
                    <div class="row collection_info">
                        <div class="col-sm-3 collection_img">
                            <img src="images/boston_shaker_1_medium.png" alt=""/>
                        </div>
                        <div class="col-sm-9 collection_desc">
                            <div class="rte">
                                Taking care of our clients was and still is a main aim of our company and it will stay the same till the end of days.Those were the times when people still preferred to buy products at brick-and-mortar stores instead of buying online. Taking care of our clients was and still is a main aim of our company and it will stay the same till the end of days. Nevertheless we’ve decided to create an online shop and we are so glad to welcome you here, at our online Kitchen Supplies store.Kitchen Supplies store was founded by several enthusiasts in 2002. There is a common opinion that customer care service makes 90% of your reputation and we believe this to be a business truth. We specialize in all kinds of kitchen supplies including the goods for food servicing and restaurant business.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>