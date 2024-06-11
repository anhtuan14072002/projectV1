<?php 
    require_once("function/calligraphy.php");
    $feedback_items2 = feedback_items2();


?>

<div class="feedback_calligraphy2">
    <div class="slideshow-container2">
        <div class="slideshow-content2">
            <!-- chèn ảnh có đầu fb -->
            <?php foreach($feedback_items2 as $item):?>
            <div class="feedback_calligraphy_detail2">
                <div class="feedback_calligraphy_detail" onclick="openImageInfoBox('/images/latest_articles.jpg')">
                    <img src="/images/<?php echo $item["Img_url"];?>" alt="">
                </div>
            </div>
            <?php endforeach; ?>
            
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
        const slideshowContent = document.querySelector('.slideshow-content2');
        const slideshowContainer = document.querySelector('.slideshow-container2');
        let speed = 20;
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