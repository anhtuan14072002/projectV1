<?php 
    require_once("function/calligraphy.php");
    $hot_items = hot_items();


?>

<div class="top10_calligraphy">
        <h4>TOP 10 Calligraphy Styles For Beginners</h4>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php foreach($hot_items as $item):?>
                <!-- <div class="swiper-slide top10_card_calligraphy">
                <img src="/images/<?php echo $item["Img_url"];?>" />
                </div> -->
                <div class="swiper-slide top10_card_calligraphy" onclick="openImageInfoBox('/images/<?php echo $item['Img_url']; ?>')">
                    <img src="/images/<?php echo $item["Img_url"];?>" alt="">
                </div>
                <?php endforeach; ?>

            </div>
            

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
   <!-- Overlay and image info box -->
    <div id="overlay" onclick="closeImageInfoBox()"></div>
    <div id="image-info-box">
        <span class="close" onclick="closeImageInfoBox()"><i class="bi bi-x-lg"></i></span>
        <img id="info-box-img" src="" alt="">
    </div>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 5,
            spaceBetween: 20,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
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