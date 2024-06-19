
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/navbar2.css">
    <?php include_once("styles/styles.php")?>
    <title>Bookmark</title>
</head>
<body>
    <div class="nav">
        <?php include_once("header_footer/navbar2.php")?>
    </div>
    <div class="containerr">
    <table class="table">
                <thead>
                    <th>ID</th>
                    <th>Thumbnail</th>
                    <th>Name</th>
                    <th>Description</th>
                </thead>
                <tbody>
                    <?php foreach($bookmarks as $item):?>
                        <tr>
                            <td><?php echo $item["id"] ?></td>
                            <td><img src="<?php echo $item["thumbnail"] ?>" class="thumbnail" width="80"/></td>
                            <td><?php echo $item["name"] ?></td>
                            <td><?php echo $item["description"] ?></td>
                        </tr>
                    <?php endforeach;?>    
                </tbody>
            </table>
    </div>
    <div class="footer">
        <?php include_once("header_footer/footer.php")?>
    </div>
</body>
</html>
