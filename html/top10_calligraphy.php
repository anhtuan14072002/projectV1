<?php 
    require_once("function/calligraphy.php");
    $hot_items = hot_items();


?>

<div class="top10_calligraphy">
        <h4>TOP 10 Calligraphy Styles For Beginners</h4>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php foreach($hot_items as $item):?>
                <div class="swiper-slide top10_card_calligraphy">
                    <a href="/detail.php?id=<?php echo $item["id"];?>"><img src="/images/<?php echo $item["Img_url"];?>"  /></a>
                    <div class="text-overlay"><?php echo $item["Title"];?></div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
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
    </script>