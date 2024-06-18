<?php
    require_once("function/calligraphy.php");
    $id = $_GET["id"];
    $product = product_detail($id);
    if($product == null)
        die("404 not found!");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/navbar2.css">
    <link rel="stylesheet" href="css/western_calii.css">
    <?php include_once("styles/styles.php")?>
    <title><?php echo $product["name"]?></title>
</head>
<body>
    <div class="nav">
        <?php include_once("header_footer/navbar2.php")?>
    </div>
    <div class="container">
        <?php include("html/{$product["link_calligraphy"]}"); ?>
    </div>
    <div class="footer">
        <?php include_once("header_footer/footer.php")?>
    </div>
</body>
</html>
