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
        <?php 
        require_once("function_bookmark.php");
        $get_book = get_book(); 
        foreach($get_book as $item):?>
            <div class="card">
                <img src="/images/<?php echo $item["thumbnail"];?>" height="250" width="298" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title" style="font-weight:800;"><?php echo $item["name"];?></h5>
                    <p class="card-text"><?php echo $item["description"];?></p>
                    <a href="<?php echo $item["link_card"];?>" class="btn btn-primary">Đọc thêm</a>
                    <button class="button_heart" data-id="<?php echo $item["id"]; ?>" onclick="toggleBookmark(this)">
                        <i class="bi bi-bookmark bookmarked"></i>
                    </button>
                </div>
            </div>
        <?php endforeach;?>   
    </div>
    <div class="footer">
        <?php include_once("header_footer/footer.php")?>
    </div>
</body>
</html>

    <script>
    function toggleBookmark(button) {
        const id = button.getAttribute('data-id');
        const icon = button.querySelector('i');
        const bookmarked = icon.classList.contains('bookmarked');

        fetch('add_bookmark.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: `id=${id}&action=${bookmarked ? 'remove' : 'add'}`,
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                icon.classList.toggle('bookmarked');
            } else {
                alert('Cập nhật bookmark thất bại');
            }
        });
    }
    </script>


