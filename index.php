<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/top10_calligraphy.css">
    <link rel="stylesheet" href="css/top10_book.css">
    <link rel="stylesheet" href="css/latest_articles.css">
    <link rel="stylesheet" href="css/popular_articles.css">
    <link rel="stylesheet" href="css/feedback_calligraphy.css">
    <link rel="stylesheet" href="css/feedback_calligraphy2.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <title>Home</title>
    <?php include_once("styles/styles.php")?>
</head>
<body>
    <div class="nav">
        <?php include_once("header_footer/navbar.php")?>
    </div>
    <div class="container">
        <?php include_once("html/top10_calligraphy.php") ?>
        <?php include_once("html/top10_book.php") ?>
        <?php include_once("html/latest_articles.php") ?>
        <?php include_once("html/popular_articles.php") ?>
        <?php include_once("html/feedback_calligraphy.php") ?>
        <?php include_once("html/feedback_calligraphy2.php") ?>

    </div>
    <div class="footer">
        <?php include_once("header_footer/footer.php")?>
    </div>
</body>
</html>