<?php 
    require_once("function/calligraphy.php");
    $lib1 = lib1();

    require_once("function/search.php");

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
            <?php foreach($lib1 as $item):?>
            <div class="card_library">
                <div class="card">
                    <img src="/images/<?php echo $item["Img_url"];?>" height="298" width="298" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="font-weight:800;"><?php echo $item["Title"];?></h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="/calligraphy_101.php" class="btn btn-primary">Go somewhere</a>
                        <button class="button_heart"><i class="bi bi-bookmark"></i></button>
                    </div>
                </div>
            </div>
            <? endforeach;?>
            
        </div>
        <nav aria-label="Page navigation example">
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
        </nav>
    </div>

    <div class="video_library">
        <h2>Video</h2>
        <h6>Learn Calligraphy in 5(ish) Minutes With Just a PENCIL!</h6>
        <iframe class="video_hot" width="400" height="200"
            src="https://www.youtube.com/embed/07ePW--MQY4?si=QJKieUgCWV30l3Fp" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <h6>How To: Calligraphy & Hand Lettering for Beginners! Tutorial + Tips!</h6>
        <iframe class="video_hot" width="400" height="200"
            src="https://www.youtube.com/embed/sBoVGqiSzr4?si=pi53yYOnxKEQaOfD" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <h6>How To: Calligraphy & Hand Lettering for Beginners! Tutorial + Tips!</h6>
        <iframe class="video_hot" width="400" height="200"
            src="https://www.youtube.com/embed/wUOPZmqWBS8?si=EBqqmF-ELvV443e4" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <h6>Alif Connections , Laam Alif (ﻻ) and Hay (ه) in Arabic Calligraphy | Urdu/Hindi</h6>
        <iframe class="video_hot" width="400" height="200"
            src="https://www.youtube.com/embed/ur4in9ibWiQ?si=G6pPY06xqZHMEpu3" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <h6>Calligraphy Alphabets | Pencil Calligraphy for beginners | Lowercase Alphabets | Small Letters</h6>
        <iframe class="video_hot" width="400" height="200"
            src="https://www.youtube.com/embed/9fLR5qe6Fbw?si=BnE0hAeWD91MdVq0" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <h6>How to Gothic Calligraphy Capital and Small Letters From A to Z | Blackletters Calligraphy</h6>
        <iframe class="video_hot" width="400" height="200"
            src="https://www.youtube.com/embed/WF6BZQ8VQ-0?si=y0dMSz-TnPVgZL7q" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <h6>How To Write In Cursive Writing || Alphabets || Capital and Small Letters(A-Z) || How To Improve</h6>
        <iframe class="video_hot" width="400" height="200"
            src="https://www.youtube.com/embed/yC2mCPVyGAA?si=zMjsDMVXYu8KoofG" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
</div>