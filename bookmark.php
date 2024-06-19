<?php
session_start();
require_once("function/bookmark.php");

// Ensure user is logged in
if (!isset($_SESSION['auth'])) {
    header("Location: login.php");
    exit;
}

$list = get_book();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookmark</title>
    <link rel="stylesheet" href="css/navbar2.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/library.css">
    <?php include_once("styles/styles.php") ?>
</head>

<body>
    <div class="nav">
        <?php include_once("header_footer/navbar2.php") ?>
    </div>
    <section>
        <div class="container">
            <h1 class="text-center">Your Bookmarked Articles</h1>
            <div class="card_all">
                <?php foreach ($list as $item) : ?>
                    <div class="card_library">
                        <div class="card" method="post">
                            <img src="/images/<?php echo $item["thumbnail"]; ?>" height="250" width="298" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title" style="font-weight:800;"><?php echo $item["name"]; ?></h5>
                                <p class="card-text"><?php echo $item["description"]; ?></p>
                                <a href="<?php echo $item["link_card"]; ?>" class="btn btn-primary">Read More</a>
                                <button class="button_heart <?php echo $item['bookmarked'] ? 'bookmarked' : ''; ?>" data-id="<?php echo $item["id"]; ?>" onclick="toggleBookmark(this)">
                                    <i class="bi bi-bookmark<?php echo $item['bookmarked'] ? '-fill' : ''; ?>"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <div class="footer">
        <?php include_once("header_footer/footer.php") ?>
    </div>
    <script>
        function toggleBookmark(button) {
            const id = button.getAttribute('data-id');
            const icon = button.querySelector('i');

            fetch('add_bookmark.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: `id=${id}&action=remove`, // Always remove from bookmarks in this context
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        button.parentElement.parentElement.remove(); // Remove the card from UI
                        showNotification('Removed from bookmarks');
                    } else {
                        if (data.message === 'User not logged in') {
                            showNotification('Please log in to use this feature');
                            setTimeout(() => {
                                window.location.href = 'login.php';
                            }, 2000); // Redirect after 2 seconds
                        } else {
                            alert('Failed to update bookmarks');
                        }
                    }
                })
                .catch(error => {
                    console.error('Error toggling bookmark:', error);
                });
        }

        function showNotification(message) {
            const notification = document.createElement('div');
            notification.className = 'notification';
            notification.textContent = message;
            document.body.appendChild(notification);

            setTimeout(() => {
                notification.classList.add('show');
            }, 10); // Delay to trigger CSS transition

            setTimeout(() => {
                notification.classList.remove('show');
                setTimeout(() => {
                    document.body.removeChild(notification);
                }, 500); // Time for CSS transition
            }, 2000);
        }
    </script>
    <style>
        .bookmarked {
            color: red;
        }

        .notification {
            position: fixed;
            top: -50px;
            right: 20px;
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            transition: top 0.5s ease-in-out;
        }

        .notification.show {
            top: 20px;
            /* Vị trí cuối cùng khi hiển thị */
        }
    </style>
</body>

</html>