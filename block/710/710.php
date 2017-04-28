<html>

    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="user-scalable=0, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/710.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/710.less', 'css/710.css');
        ?>

        <link href="css/710.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>

    <body>

        <div class="type-710">
            <div class="container">
                <div class="row">
                    <div class="product-collateral">
                        <ul class="tabbernav_product2 nav-pills  ">
                            <li class="active"><a data-toggle="tab" title="tab_product" href="#newproducts4" data-text="Latest" aria-expanded="true"><span>Product Description</span></a></li>
                            <li class=""><a data-toggle="tab" title="tab_product" href="#newproducts5" data-text="Best Seller" aria-expanded="false"><span>Product's Review</span></a></li>
                            <li class=""><a data-toggle="tab" title="tab_product" href="#newproducts6" data-text="Special" aria-expanded="false"><span>Product Tags</span></a></li>
                            <li class=""><a data-toggle="tab" title="tab_product" href="#newproducts7" data-text="Special" aria-expanded="false"><span>CMS tab</span></a></li>
                        </ul>
                        <div class="tabs">
                            <div class="tab-content">
                                <div id="newproducts4" class="tab-pane fade active in">
                                    <p><strong>Sample Lorem Ipsum Text</strong></p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem. In fringilla mi in ligula. Pellentesque aliquam quam vel dolor. Nunc adipiscing. Sed quam odio, tempus ac, aliquam molestie, varius ac, tellus. Vestibulum ut nulla aliquam risus rutrum interdum. Pellentesque lorem. Curabitur sit amet erat quis risus feugiat viverra. Pellentesque augue justo, sagittis et, lacinia at, venenatis non, arcu. Nunc nec libero. In cursus dictum risus. Etiam tristique nisl a</p>
                                    <p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which has since evolved into a full ready-to-wear collection in which every item is a vital part of a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!</p>
                                </div>
                                <div id="newproducts5" class="tab-pane fade">
                                    <div class="review">

                                        <h2>Write Your Own Review</h2>
                                        <form action="http://magento.templatemela.com/MAG241/MAG100215_3/index.php/review/product/post/id/88/" method="post" id="review-form">
                                            <input name="form_key" type="hidden" value="uOYN1YASBd0l6TPz">
                                            <fieldset class="">
                                                <h3>You're reviewing: <span>Arcu vitae imperdiet simply</span></h3>
                                                <h4>How do you rate this product? <em class="required">*</em></h4>
                                                <span id="input-message-box"></span>
                                                <table class="data-table" id="product-review-table">
                                                    <colgroup>
                                                        <col>
                                                        <col width="1">
                                                        <col width="1">
                                                        <col width="1">
                                                        <col width="1">
                                                        <col width="1">
                                                    </colgroup>
                                                    <thead>
                                                        <tr class="first last">
                                                            <th>&nbsp;</th>
                                                            <th><span class="nobr">1 star</span></th>
                                                            <th><span class="nobr">2 stars</span></th>
                                                            <th><span class="nobr">3 stars</span></th>
                                                            <th><span class="nobr">4 stars</span></th>
                                                            <th><span class="nobr">5 stars</span></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="first odd">
                                                            <th>Price</th>
                                                            <td class="value">
                                                                <div class="tm-radio">
                                                                    <input type="radio" name="ratings[3]" id="Price_1" value="11" class="radio tm-hide">
                                                                </div>
                                                            </td>
                                                            <td class="value">
                                                                <div class="tm-radio">
                                                                    <input type="radio" name="ratings[3]" id="Price_2" value="12" class="radio tm-hide">
                                                                </div>
                                                            </td>
                                                            <td class="value">
                                                                <div class="tm-radio">
                                                                    <input type="radio" name="ratings[3]" id="Price_3" value="13" class="radio tm-hide">
                                                                </div>
                                                            </td>
                                                            <td class="value">
                                                                <div class="tm-radio tm-selected">
                                                                    <input type="radio" name="ratings[3]" id="Price_4" value="14" class="radio tm-hide">
                                                                </div>
                                                            </td>
                                                            <td class="value last">
                                                                <div class="tm-radio">
                                                                    <input type="radio" name="ratings[3]" id="Price_5" value="15" class="radio tm-hide">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="even">
                                                            <th>Value</th>
                                                            <td class="value">
                                                                <div class="tm-radio">
                                                                    <input type="radio" name="ratings[2]" id="Value_1" value="6" class="radio tm-hide">
                                                                </div>
                                                            </td>
                                                            <td class="value">
                                                                <div class="tm-radio">
                                                                    <input type="radio" name="ratings[2]" id="Value_2" value="7" class="radio tm-hide">
                                                                </div>
                                                            </td>
                                                            <td class="value">
                                                                <div class="tm-radio">
                                                                    <input type="radio" name="ratings[2]" id="Value_3" value="8" class="radio tm-hide">
                                                                </div>
                                                            </td>
                                                            <td class="value">
                                                                <div class="tm-radio">
                                                                    <input type="radio" name="ratings[2]" id="Value_4" value="9" class="radio tm-hide">
                                                                </div>
                                                            </td>
                                                            <td class="value last">
                                                                <div class="tm-radio">
                                                                    <input type="radio" name="ratings[2]" id="Value_5" value="10" class="radio tm-hide">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="last odd">
                                                            <th>Quality</th>
                                                            <td class="value">
                                                                <div class="tm-radio">
                                                                    <input type="radio" name="ratings[1]" id="Quality_1" value="1" class="radio tm-hide">
                                                                </div>
                                                            </td>
                                                            <td class="value">
                                                                <div class="tm-radio">
                                                                    <input type="radio" name="ratings[1]" id="Quality_2" value="2" class="radio tm-hide">
                                                                </div>
                                                            </td>
                                                            <td class="value">
                                                                <div class="tm-radio">
                                                                    <input type="radio" name="ratings[1]" id="Quality_3" value="3" class="radio tm-hide">
                                                                </div>
                                                            </td>
                                                            <td class="value">
                                                                <div class="tm-radio">
                                                                    <input type="radio" name="ratings[1]" id="Quality_4" value="4" class="radio tm-hide">
                                                                </div>
                                                            </td>
                                                            <td class="value last">
                                                                <div class="tm-radio">
                                                                    <input type="radio" name="ratings[1]" id="Quality_5" value="5" class="radio tm-hide">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <input type="hidden" name="validate_rating" class="validate-rating" value="">
                                                <!-- <script type="text/javascript">decorateTable('product-review-table')</script> -->
                                                <ul class="form-list">
                                                    <li>
                                                        <label for="nickname_field" class="required">Nickname<em>*</em></label>
                                                        <div class="input-box">
                                                            <input type="text" name="nickname" id="nickname_field" class="input-text required-entry" value="">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <label for="summary_field" class="required">Summary of Your Review<em>*</em></label>
                                                        <div class="input-box">
                                                            <input type="text" name="title" id="summary_field" class="input-text required-entry" value="">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <label for="review_field" class="required">Review<em>*</em></label>
                                                        <div class="input-box">
                                                            <textarea name="detail" id="review_field" cols="5" rows="3" class="required-entry"></textarea>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </fieldset>
                                            <div class="buttons-set">
                                                <button type="submit" title="Submit Review" class="button"><span>Submit Review</span></button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                                <div id="newproducts6" class="tab-pane fade">
                                    <div class="box-tags">
                                        <div class="form-add">
                                            <label for="productTagName">Add Your Tags:</label>
                                            <div class="input-box">
                                                <input type="text" class="input-text required-entry" name="productTagName" id="productTagName">
                                            </div>
                                            <button type="button" title="Add Tags" class="button" onclick="submitTagForm()"><span>Add Tags</span></button>
                                        </div>
                                        <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
                                    </div>
                                </div>
                                <div id="newproducts7" class="tab-pane fade">
                                    <div class="std">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem. In fringilla mi in ligula. Pellentesque aliquam quam vel dolor. every item is a vital part of a woman's wardrobe.</div>
                                </div>
                            </div>
                        </div>
                        <div class="padder">
                            <div id="product_tabs_description_tabbed_contents">
                                <div class="detail_collap">
                                    <button type="button" class="btn" data-toggle="collapse" data-target="#decription">Product Description
                                        <h5 class="mobile_togglemenu">&nbsp;</h5>
                                    </button>
                                </div>
                                <div id="decription" class="collapse">
                                    <div class="c_decription">
                                        <p><strong>Sample Lorem Ipsum Text</strong></p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem. In fringilla mi in ligula. Pellentesque aliquam quam vel dolor. Nunc adipiscing. Sed quam odio, tempus ac, aliquam molestie, varius ac, tellus. Vestibulum ut nulla aliquam risus rutrum interdum. Pellentesque lorem. Curabitur sit amet erat quis risus feugiat viverra. Pellentesque augue justo, sagittis et, lacinia at, venenatis non, arcu. Nunc nec libero. In cursus dictum risus. Etiam tristique nisl a</p>
                                        <p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which has since evolved into a full ready-to-wear collection in which every item is a vital part of a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!</p>
                                    </div>
                                </div>
                            </div>
                            <div id="product_tabs_review_tabbed_contents">
                                <div class="detail_collap">
                                    <button type="button" class="btn" data-toggle="collapse" data-target="#review">Product's Review
                                        <h5 class="mobile_togglemenu">&nbsp;</h5>
                                    </button>
                                </div>
                                <div id="review" class="collapse">
                                    <div class="c_review">
                                        <h2>Write Your Own Review</h2>
                                        <form action="http://magento.templatemela.com/MAG241/MAG100215_3/index.php/review/product/post/id/88/" method="post" id="review-form">
                                            <input name="form_key" type="hidden" value="uOYN1YASBd0l6TPz">
                                            <fieldset class="">
                                                <h3>You're reviewing: <span>Arcu vitae imperdiet simply</span></h3>
                                                <h4>How do you rate this product? <em class="required">*</em></h4>
                                                <span id="input-message-box"></span>
                                                <table class="data-table" id="product-review-table">
                                                    <colgroup>
                                                        <col>
                                                        <col width="1">
                                                        <col width="1">
                                                        <col width="1">
                                                        <col width="1">
                                                        <col width="1">
                                                    </colgroup>
                                                    <thead>
                                                        <tr class="first last">
                                                            <th>&nbsp;</th>
                                                            <th><span class="nobr">1 star</span></th>
                                                            <th><span class="nobr">2 stars</span></th>
                                                            <th><span class="nobr">3 stars</span></th>
                                                            <th><span class="nobr">4 stars</span></th>
                                                            <th><span class="nobr">5 stars</span></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="first odd">
                                                            <th>Price</th>
                                                            <td class="value">
                                                                <div class="tm-radio">
                                                                    <input type="radio" name="ratings[3]" id="Price_1" value="11" class="radio tm-hide">
                                                                </div>
                                                            </td>
                                                            <td class="value">
                                                                <div class="tm-radio">
                                                                    <input type="radio" name="ratings[3]" id="Price_2" value="12" class="radio tm-hide">
                                                                </div>
                                                            </td>
                                                            <td class="value">
                                                                <div class="tm-radio">
                                                                    <input type="radio" name="ratings[3]" id="Price_3" value="13" class="radio tm-hide">
                                                                </div>
                                                            </td>
                                                            <td class="value">
                                                                <div class="tm-radio tm-selected">
                                                                    <input type="radio" name="ratings[3]" id="Price_4" value="14" class="radio tm-hide">
                                                                </div>
                                                            </td>
                                                            <td class="value last">
                                                                <div class="tm-radio">
                                                                    <input type="radio" name="ratings[3]" id="Price_5" value="15" class="radio tm-hide">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="even">
                                                            <th>Value</th>
                                                            <td class="value">
                                                                <div class="tm-radio">
                                                                    <input type="radio" name="ratings[2]" id="Value_1" value="6" class="radio tm-hide">
                                                                </div>
                                                            </td>
                                                            <td class="value">
                                                                <div class="tm-radio">
                                                                    <input type="radio" name="ratings[2]" id="Value_2" value="7" class="radio tm-hide">
                                                                </div>
                                                            </td>
                                                            <td class="value">
                                                                <div class="tm-radio">
                                                                    <input type="radio" name="ratings[2]" id="Value_3" value="8" class="radio tm-hide">
                                                                </div>
                                                            </td>
                                                            <td class="value">
                                                                <div class="tm-radio">
                                                                    <input type="radio" name="ratings[2]" id="Value_4" value="9" class="radio tm-hide">
                                                                </div>
                                                            </td>
                                                            <td class="value last">
                                                                <div class="tm-radio">
                                                                    <input type="radio" name="ratings[2]" id="Value_5" value="10" class="radio tm-hide">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="last odd">
                                                            <th>Quality</th>
                                                            <td class="value">
                                                                <div class="tm-radio">
                                                                    <input type="radio" name="ratings[1]" id="Quality_1" value="1" class="radio tm-hide">
                                                                </div>
                                                            </td>
                                                            <td class="value">
                                                                <div class="tm-radio">
                                                                    <input type="radio" name="ratings[1]" id="Quality_2" value="2" class="radio tm-hide">
                                                                </div>
                                                            </td>
                                                            <td class="value">
                                                                <div class="tm-radio">
                                                                    <input type="radio" name="ratings[1]" id="Quality_3" value="3" class="radio tm-hide">
                                                                </div>
                                                            </td>
                                                            <td class="value">
                                                                <div class="tm-radio">
                                                                    <input type="radio" name="ratings[1]" id="Quality_4" value="4" class="radio tm-hide">
                                                                </div>
                                                            </td>
                                                            <td class="value last">
                                                                <div class="tm-radio">
                                                                    <input type="radio" name="ratings[1]" id="Quality_5" value="5" class="radio tm-hide">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <input type="hidden" name="validate_rating" class="validate-rating" value="">
                                                <!-- <script type="text/javascript">decorateTable('product-review-table')</script> -->
                                                <ul class="form-list">
                                                    <li>
                                                        <label for="nickname_field" class="required">Nickname<em>*</em></label>
                                                        <div class="input-box">
                                                            <input type="text" name="nickname" id="nickname_field" class="input-text required-entry" value="">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <label for="summary_field" class="required">Summary of Your Review<em>*</em></label>
                                                        <div class="input-box">
                                                            <input type="text" name="title" id="summary_field" class="input-text required-entry" value="">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <label for="review_field" class="required">Review<em>*</em></label>
                                                        <div class="input-box">
                                                            <textarea name="detail" id="review_field" cols="5" rows="3" class="required-entry"></textarea>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </fieldset>
                                            <div class="buttons-set">
                                                <button type="submit" title="Submit Review" class="button"><span>Submit Review</span></button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                            <div id="product_tabs_tags_tabbed_contents">
                                <div class="detail_collap">
                                    <button type="button" class="btn" data-toggle="collapse" data-target="#tags">Product Tags
                                        <h5 class="mobile_togglemenu">&nbsp;</h5>
                                    </button>
                                </div>
                                <div id="tags" class="collapse">
                                    <div class="c_tags">
                                        <div class="box-tags">
                                            <div class="form-add">
                                                <label for="productTagName">Add Your Tags:</label>
                                                <div class="input-box">
                                                    <input type="text" class="input-text required-entry" name="productTagName" id="productTagName">
                                                </div>
                                                <button type="button" title="Add Tags" class="button" onclick="submitTagForm()"><span>Add Tags</span></button>
                                            </div>
                                            <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="product_tabs_cms_contents">
                                <div class="detail_collap">
                                    <button type="button" class="btn" data-toggle="collapse" data-target="#tab">CMS tab
                                        <h5 class="mobile_togglemenu">&nbsp;</h5>
                                    </button>
                                </div>
                                <div id="tab" class="collapse">
                                    <div class="c_tab">
                                        <div class="std">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem. In fringilla mi in ligula. Pellentesque aliquam quam vel dolor. every item is a vital part of a woman's wardrobe.</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>

    </body>

</html>