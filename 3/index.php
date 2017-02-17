<!DOCTYPE html>

<html>
<head>
    <title>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <?php
    if (!class_exists('lessc')) {
        include('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/footer.less', 'css/footer.css');
    ?>
    <link href="css/footer.css" rel="stylesheet" type="text/css"/>
    <script language="JavaScript" type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="js/bootstrap.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="js/script-dropdown.js"></script>

</head>

<body>
<div class="style">
    <?php include 'partial/footer.php'?>
</div>

</body>

</html>