<?php
session_start();
require_once("function/calligraphy.php");

$search_results = [];
if (isset($_GET['search']) && !empty($_GET['search'])) {
    require_once("function/search.php");
    $search_results = $list;
}

$lib_calli = !empty($search_results) ? $search_results : lib_calli();

?>
<div class="library">
    <div class="articles_library">
        <div class="detail_library">
            <h2>Articles</h2>
            <p>
                Here you can learn and improve your hand lettering and calligraphy skills. We write and collaborate with
                talented artists from all over the world in order to bring you the best educational and inspirational
                content.
                So far we have split the hand lettering and calligraphy articles in 3 different sections –
            </p>
            <h4>Hand lettering tutorials </h4>
            <p>
                In this section, you will be able to learn new skills and techniques. Our tutorials will guide you
                step-by-step through the process which will instantly improve your lettering skills.
            </p>
            <h4>Hand lettering tips</h4>
            <p>Improve your existing skills by implementing nifty and experience-based tips!</p>
        </div>
        <div class="card_all">
            <!-- lấy ảnh và description tại sql, ảnh bắt đầu bằng li -->
            <?php foreach ($lib_calli as $item) : ?>
                <div class="card_library">
                    <div class="card" method="post">
                        <img src="/images/<?php echo $item["thumbnail"]; ?>" height="250" width="298" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title" style="font-weight:800;"><?php echo $item["name"]; ?></h5>
                            <p class="card-text"><?php echo $item["description"]; ?></p>
                            <a href="<?php echo $item["link_card"]; ?>" class="btn btn-primary">Read More</a>
                            <?php if (isset($_SESSION['auth'])) : ?>
                                <button class="button_heart <?php echo $item['bookmarked'] ? 'bookmarked' : ''; ?>" data-id="<?php echo $item["id"]; ?>" onclick="toggleBookmark(this)">
                                    <i class="bi bi-bookmark<?php echo $item['bookmarked'] ? '-fill' : ''; ?>"></i>
                                </button>
                            <?php else : ?>
                                <button class="button_heart" onclick="showNotification('Please log in to use this feature')">
                                    <i class="bi bi-bookmark-fill"></i>
                                </button>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
        <!-- <nav aria-label="Page navigation example">
            <ul class="pagination ttt">
                <li class="page-item">
                    <a class="page-link" href="/library.php" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="/library.php">1</a></li>
                <li class="page-item"><a class="page-link" href="/library2.php">2</a></li>
                <li class="page-item">
                    <a class="page-link" href="/library2.php" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav> -->
    </div>

    <div class="video_library">
        <h2>Video</h2>
        <h6>Learn Calligraphy in 5(ish) Minutes With Just a PENCIL!</h6>
        <iframe class="video_hot" width="400" height="200" src="https://www.youtube.com/embed/07ePW--MQY4?si=QJKieUgCWV30l3Fp" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <h6>How To: Calligraphy & Hand Lettering for Beginners! Tutorial + Tips!</h6>
        <iframe class="video_hot" width="400" height="200" src="https://www.youtube.com/embed/sBoVGqiSzr4?si=pi53yYOnxKEQaOfD" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <h6>How To: Calligraphy & Hand Lettering for Beginners! Tutorial + Tips!</h6>
        <iframe class="video_hot" width="400" height="200" src="https://www.youtube.com/embed/wUOPZmqWBS8?si=EBqqmF-ELvV443e4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <h6>Alif Connections , Laam Alif (ﻻ) and Hay (ه) in Arabic Calligraphy | Urdu/Hindi</h6>
        <iframe class="video_hot" width="400" height="200" src="https://www.youtube.com/embed/ur4in9ibWiQ?si=G6pPY06xqZHMEpu3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <h6>Calligraphy Alphabets | Pencil Calligraphy for beginners | Lowercase Alphabets | Small Letters</h6>
        <iframe class="video_hot" width="400" height="200" src="https://www.youtube.com/embed/9fLR5qe6Fbw?si=BnE0hAeWD91MdVq0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <h6>How to Gothic Calligraphy Capital and Small Letters From A to Z | Blackletters Calligraphy</h6>
        <iframe class="video_hot" width="400" height="200" src="https://www.youtube.com/embed/WF6BZQ8VQ-0?si=y0dMSz-TnPVgZL7q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <h6>How To Write In Cursive Writing || Alphabets || Capital and Small Letters(A-Z) || How To Improve</h6>
        <iframe class="video_hot" width="400" height="200" src="https://www.youtube.com/embed/yC2mCPVyGAA?si=zMjsDMVXYu8KoofG" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
</div>
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
                    showNotification(data.action === 'add' ? 'Added to bookmarks' : 'Removed from bookmarks');
                } else {
                    if (data.message === 'User not logged in') {
                        showNotification('Please log in to use this feature');
                        // Redirect to login page
                        setTimeout(() => {
                            window.location.href = 'login.php';
                        }, 2000); // Redirect after 2 seconds
                    } else {
                        alert('Failed to update bookmark');
                    }
                }
            });
    }

    function showNotification(message) {
        const notification = document.createElement('div');
        notification.className = 'notification';
        notification.textContent = message;
        document.body.appendChild(notification);

        // Thêm lớp "show" sau khi thêm phần tử vào DOM
        setTimeout(() => {
            notification.classList.add('show');
        }, 10); // Delay nhỏ để kích hoạt CSS transition

        // Xóa thông báo sau 2 giây
        setTimeout(() => {
            notification.classList.remove('show');
            // Xóa phần tử khỏi DOM sau khi hoàn thành hiệu ứng trượt
            setTimeout(() => {
                document.body.removeChild(notification);
            }, 500); // Thời gian tương ứng với transition của CSS
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