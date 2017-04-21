<!DOCTYPE html>
<html>

    <head>
        <title>781</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/781.less', 'css/781.css');
        ?> 
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/781.css" rel="stylesheet" type="text/css"/>

    </head> 

    <body>
        <div class="type-781">
            <div class="container">

                <h1>Shopping Cart</h1><hr>
                <table class="table table-striped table-hover table-bordered">
                    <tbody>
                        <tr>
                            <th>Item</th>
                            <th>QTY</th>
                            <th>Unit Price</th>
                            <th>Total Price</th>
                        </tr>
                        <tr>
                            <td>Awesome Product</td>
                            <td>1 <a href="#">X</a></td>
                            <td>£250.00</td>
                            <td>£250.00</td>
                        </tr>
                        <tr>
                            <th colspan="3"><span class="pull-right">Sub Total</span></th>
                            <th>£250.00</th>
                        </tr>
                        <tr>
                            <th colspan="3"><span class="pull-right">VAT 20%</span></th>
                            <th>£50.00</th>
                        </tr>
                        <tr>
                            <th colspan="3"><span class="pull-right">Total</span></th>
                            <th>£300.00</th>
                        </tr>
                        <tr>
                            <td><a href="#" class="btn btn-primary">Continue Shopping</a></td>
                            <td colspan="3"><a href="#" class="pull-right btn btn-success">Checkout</a></td>
                        </tr>
                    </tbody>
                </table>          

            </div>
        </div>
    </body>
</html>