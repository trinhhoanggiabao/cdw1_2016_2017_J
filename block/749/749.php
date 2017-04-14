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
        $less->compileFile('./less/749.less', 'css/749.css');
        ?>
        <link href="css/749.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="type-749">
            <div class="container">
                <div class="breadcrumb_wrap">
                    <ul class="breadcrumb">
                        <li><a href="#" title="Back to the frontpage">Home</a></li>
                        <li><span>Account</span></li>
                    </ul>
                </div>
                <h2 class="page_heading">
                    LOGIN OR CREATE AN ACCOUNT
                </h2>
                <div id="account_login">
                    <div class="account_wrapper">
                        <div class="account_left">
                            <div class="account_section">
                                <h4>New here?</h4>
                                <p class="note">Registration is free and easy!</p>
                                <ul>
                                    <li>Faster checkout</li>
                                    <li>Save multiple shipping addresses</li>
                                    <li>View and track orders and more</li>
                                </ul>
                                <a id="account_register_link" class="btn" href="#">Create an account</a>
                            </div>
                        </div>
                        <div class="account_right">
                            <div class="account_section">
                                <form method="post" action="#" id="customer_login" accept-charset="UTF-8"><input type="hidden" value="customer_login" name="form_type"><p class="alert-form-info"></p><input type="hidden" name="utf8" value="✓"><p class="alert-form-info"></p>
                                    <h4>Already registered?</h4>
                                    <div class="form-group">
                                        <label for="customer_email" class="control-label">Email address</label>
                                        <input type="email" value="" name="customer[email]" id="customer_email" class="form-control" size="30"><p class="alert-form-info"></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="customer_password" class="control-label">Password</label>
                                        <input type="password" value="" name="customer[password]" id="customer_password" class="form-control" size="16"><p class="alert-form-info"></p>
                                    </div>
                                    <div class="form-group">
                                        <input class="btn" type="submit" value="Sign in"><p class="alert-form-info"></p>
                                        <a id="account_reset__link" href="#">Forgot your password?</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>