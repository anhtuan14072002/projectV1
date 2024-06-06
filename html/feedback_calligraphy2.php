<div class="feedback_calligraphy2">
    <div class="slideshow-container2">
        <div class="slideshow-content2">
            <!-- chèn ảnh có đầu fb -->
            <div class="feedback_calligraphy_detail2">
                <a href="">
                    <img src="/images/latest_articles.jpg" alt="">
                </a>
            </div>
            <div class="feedback_calligraphy_detail2">
                <a href="">
                    <img src="/images/latest_articles.jpg" alt="">
                </a>
            </div>
            <div class="feedback_calligraphy_detail2">
                <a href="">
                    <img src="/images/latest_articles.jpg" alt="">
                </a>
            </div>
            <div class="feedback_calligraphy_detail2">
                <a href="">
                    <img src="/images/latest_articles.jpg" alt="">
                </a>
            </div>
            <div class="feedback_calligraphy_detail2">
                <a href="">
                    <img src="/images/latest_articles.jpg" alt="">
                </a>
            </div>
            <div class="feedback_calligraphy_detail2">
                <a href="">
                    <img src="/images/latest_articles.jpg" alt="">
                </a>
            </div>
            <div class="feedback_calligraphy_detail2">
                <a href="">
                    <img src="/images/latest_articles.jpg" alt="">
                </a>
            </div>
            <div class="feedback_calligraphy_detail2">
                <a href="">
                    <img src="/images/latest_articles.jpg" alt="">
                </a>
            </div>
            <div class="feedback_calligraphy_detail2">
                <a href="">
                    <img src="/images/latest_articles.jpg" alt="">
                </a>
            </div>
            <div class="feedback_calligraphy_detail2">
                <a href="">
                    <img src="/images/latest_articles.jpg" alt="">
                </a>
            </div>
            <div class="feedback_calligraphy_detail2">
                <a href="">
                    <img src="/images/latest_articles.jpg" alt="">
                </a>
            </div>
            <div class="feedback_calligraphy_detail2">
                <a href="">
                    <img src="/images/latest_articles.jpg" alt="">
                </a>
            </div>
            <div class="feedback_calligraphy_detail2">
                <a href="">
                    <img src="/images/latest_articles.jpg" alt="">
                </a>
            </div>
        </div>
    </div>
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
</script>
