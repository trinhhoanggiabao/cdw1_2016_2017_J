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
        $less->compileFile('./less/752.less', 'css/752.css');
        ?>
        <link href="css/752.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="type-752">
            <div class="container">
                <div class="breadcrumb_wrap">
                    <ul class="breadcrumb">
                        <li><a href="#" title="Back to the frontpage">Home</a></li>
                        <li><a href="#" title="Bakeware">Bakeware</a> </li>
                        <li><span>The secret of success lies between the right choice of the business strategy and reliable suppliers.</span></li>
                    </ul>
                </div>
                <h2 class="page_heading">
                    <a href="#">BLOG</a>
                </h2>
                <div class="blog_article">
                    <h1 class="article_title">The secret of success lies between the right choice of the business strategy and reliable suppliers.</h1>
                    <div class="article_info">
                        <time class="article_date" datetime="2016-08-01">01 Aug 2016</time>
                        <span>David Braun</span>
                        <span>0 Comments</span>
                    </div>
                    <div class="article_content">
                        <div class="small_width">
                            <img src="images/blog1_1024x1024.jpg" alt=""/>
                        </div>
                        <div class="rte">
                            <p>
                                <strong>We specialize in all kinds of kitchen supplies</strong> including the goods for food servicing and restaurant business. Every business is very demanding but the secret of success lies between the right choice of the business strategy and reliable suppliers. Taking care of our clients was and still is a main aim of our company and it will stay the same till the end of days. <br>There is a common opinion that customer care service makes 90% of your reputation and we believe this to be a business truth. That’s why we are proud to inform you that you can always rely on our wonderful support system that is <span class="span"">available 24/7. </span></p>
                            <p><strong>Kitchen Supplies store</strong> was founded by several enthusiasts in 2002.Those were the times when people still preferred to buy products at brick-and-mortar stores instead of buying online. Nevertheless we’ve decided to create an online shop and we are so glad to welcome you here, at our online Kitchen Supplies store.Welcome you here, at our online Kitchen Supplies store. <br><br>Every business is very demanding but the secret of success lies between the right choice of the business strategy and reliable suppliers.Those were the times when people still preferred to buy products at brick-and-mortar stores instead of buying online. Nevertheless we’ve decided to create an online shop and we are so glad to welcome you here.</p>
                            <ol>
                                <li><span class="span2">Kitchen Storage &amp; Organization&nbsp;</span></li>
                                <li><span class="span2">Gadgets</span></li>
                                <li><span class="span2">Cooking Utensils&nbsp;</span></li>
                                <li><span class="span2">Bakeware</span></li>
                            </ol>
                        </div>
                    </div>
                    <div class="article_footer">
                        <p class="blog_tags">
                            <a href="#">Candy Making Supplies</a>
                            <a href="#">Organizational Supplies</a>
                            <a href="#">Professional Cutlery</a>
                        </p>
                        <div class="icon">
                            <i class="fa fa-facebook-official" aria-hidden="true"></i>
                            <i class="fa fa-twitter-square" aria-hidden="true"></i>
                            <i class="fa fa-google-plus-square" aria-hidden="true"></i>
                            <i class="fa fa-pinterest-square" aria-hidden="true"></i>
                        </div>
                        <div class="article_pagination">
                            <a href="#" class="btn">Previous post</a>
                            <div class="clearfix"></div>
                        </div>
                        
                    </div>
                    <div id="article_comments">
                        <div class="article_comments_form">
                            <form method="post" action=""  accept-charset="UTF-8">
                                <input type="hidden" value="new_comment" name="form_type">
                                <input type="hidden" name="utf8" value="✓">
                                <h3>Leave a comment</h3>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for="comment-author">Name</label>
                                            <input class="form-control" type="text" name="comment[author]" placeholder="" value="">
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="comment-email">Email</label>
                                            <input class="form-control" type="email" name="comment[email]" placeholder="" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="comment-body">Message</label>
                                    <textarea class="form-control" name="comment[body]"></textarea>
                                </div>
                                <button type="submit" class="btn">Post comment</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>