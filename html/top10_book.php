<?php 
    require_once("function/calligraphy.php");
    $top_book = top_books();


?>
<div class="top10_book">
        <h4>TOP 10 book Styles For Beginners</h4>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php foreach($top_book as $item):?>
                <div class="swiper-slide top10_card_book">
                    <a href=""><img src="/images/<?php echo $item["thumbnail"];?>"  /></a>
                    <div class="text-overlay"><b><?php echo $item["name"];?></b></div>
                </div>
                <?php endforeach;?>
                
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