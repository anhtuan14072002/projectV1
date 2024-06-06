<div class="feedback_calligraphy">
    <h2>Posts left by students</h2>
    <h6>Articles by people who have learned calligraphy from this site</h6>
    <div class="slideshow-container">
        <!-- chèn ảnh có đầu fb -->
        <div class="slideshow-content">
            <div class="feedback_calligraphy_detail">
                <a href="">
                    <img src="/images/latest_articles.jpg" alt="">
                </a>
            </div>
            <div class="feedback_calligraphy_detail">
                <a href="">
                    <img src="/images/latest_articles.jpg" alt="">
                </a>
            </div>
            <div class="feedback_calligraphy_detail">
                <a href="">
                    <img src="/images/latest_articles.jpg" alt="">
                </a>
            </div>
            <div class="feedback_calligraphy_detail">
                <a href="">
                    <img src="/images/latest_articles.jpg" alt="">
                </a>
            </div>
            <div class="feedback_calligraphy_detail">
                <a href="">
                    <img src="/images/latest_articles.jpg" alt="">
                </a>
            </div>
            <div class="feedback_calligraphy_detail">
                <a href="">
                    <img src="/images/latest_articles.jpg" alt="">
                </a>
            </div>
            <div class="feedback_calligraphy_detail">
                <a href="">
                    <img src="/images/latest_articles.jpg" alt="">
                </a>
            </div>
            <div class="feedback_calligraphy_detail">
                <a href="">
                    <img src="/images/latest_articles.jpg" alt="">
                </a>
            </div>
            <div class="feedback_calligraphy_detail">
                <a href="">
                    <img src="/images/latest_articles.jpg" alt="">
                </a>
            </div>
            <div class="feedback_calligraphy_detail">
                <a href="">
                    <img src="/images/latest_articles.jpg" alt="">
                </a>
            </div>
            <div class="feedback_calligraphy_detail">
                <a href="">
                    <img src="/images/latest_articles.jpg" alt="">
                </a>
            </div>
            <div class="feedback_calligraphy_detail">
                <a href="">
                    <img src="/images/latest_articles.jpg" alt="">
                </a>
            </div>
            <div class="feedback_calligraphy_detail">
                <a href="">
                    <img src="/images/latest_articles.jpg" alt="">
                </a>
            </div>
        </div>
    </div>
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
</script>
