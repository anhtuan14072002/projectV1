<?php 
    require_once("function/calligraphy.php");
    $feedback_items1 = feedback_items1();


?>

<div class="feedback_calligraphy">
    <h2>Posts left by students</h2>
    <h6>Articles by people who have learned calligraphy from this site</h6>
    <div class="slideshow-container">
        <!-- chèn ảnh có đầu fb -->
        <div class="slideshow-content">
            <?php foreach($feedback_items1 as $item):?>
            <div class="feedback_calligraphy_detail">
                <div class="feedback_calligraphy_detail" onclick="openImageInfoBox('/images/latest_articles.jpg')">
                    <img src="/images/<?php echo $item["Img_url"];?>" alt="">
                </div>
            </div>
            <?php endforeach;?>
            
        </div>
    </div>
</div>
<!-- Overlay and image info box -->
<div id="overlay" onclick="closeImageInfoBox()"></div>
<div id="image-info-box">
    <span class="close" onclick="closeImageInfoBox()"><i class="bi bi-x-lg"></i></span>
    <img id="info-box-img" src="" alt="">
</div>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const slideshowContent = document.querySelector('.slideshow-content');
        const slideshowContainer = document.querySelector('.slideshow-container');
        let speed = 20; // Duration in seconds
        let animationRunning = true;

        function updateAnimationSpeed(newSpeed) {
            slideshowContent.style.animationDuration = `${newSpeed}s`;
        }

        function pauseAnimation() {
            slideshowContent.style.animationPlayState = 'paused';
        }

        function playAnimation() {
            slideshowContent.style.animationPlayState = 'running';
        }

        slideshowContainer.addEventListener('mouseenter', pauseAnimation);
        slideshowContainer.addEventListener('mouseleave', playAnimation);

        updateAnimationSpeed(speed);
    });
    // Mở khung thông tin và làm mờ nền
    function openImageInfoBox(imgSrc) {
        var overlay = document.getElementById('overlay');
        var infoBox = document.getElementById('image-info-box');
        var infoBoxImg = document.getElementById('info-box-img');

        // Thiết lập thông tin ảnh
        infoBoxImg.src = imgSrc;

        // Hiển thị overlay và khung thông tin
        overlay.style.display = 'block';
        infoBox.style.display = 'block';

        // Làm mờ nền
        // document.body.style.overflow = 'hidden'; // Ngăn trượt nền khi mở khung thông tin
    }

    // Đóng khung thông tin và loại bỏ mờ nền
    function closeImageInfoBox() {
        var overlay = document.getElementById('overlay');
        var infoBox = document.getElementById('image-info-box');

        // Ẩn overlay và khung thông tin
        overlay.style.display = 'none';
        infoBox.style.display = 'none';

        // Loại bỏ mờ nền
        // document.body.style.overflow = ''; // Cho phép trượt nền khi đóng khung thông tin
    }

</script>