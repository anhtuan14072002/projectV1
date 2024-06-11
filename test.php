<?php
    require_once("function/calligraphy.php");
    $id = $_GET["id"];
    // tim san pham trong db
    $callig = callig_detail($id);
    if($callig == null)
        die("404 not found!");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $callig["Title"];?></title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/navbar2.css">
</head>
<body>
<div class="nav">
        <?php include_once("header_footer/navbar2.php")?>
    </div>
    
    <!-- Main Content -->
    <main>
        <div class="container">
            <div class="calligraphy-piece">
                <h1><?php echo $callig["Title"]; ?></h1>
                <img src="images/<?php echo $callig["Img_url"];?>" height="298" width="298" class="card-img-top" alt="...">
                <div class="details">
                    <h2>Details</h2>
                    <p><strong>Artist:</strong> <?php echo $callig['artist']; ?></p>
                    <p><strong>Date Created:</strong> <?php echo $callig['date_created']; ?></p>
                    <p><strong>Materials Used:</strong> <?php echo $callig['materials']; ?></p>
                </div>
                <div class="description">
                    <h2>Description</h2>
                    <p><?php echo nl2br($callig['description']); ?></p>
                </div>
            </div>
        </div>
    </main>
    
    <div class="footer">
        <?php include_once("header_footer/footer.php")?>
    </div>
</body>
</html>