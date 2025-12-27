<?php
get_header();

$articlebg = get_template_directory_uri() . '/assets/backgrounds/sub-bg.webp';
?>

<main>
    <div class="main__flip-card">
        <div class=" main__flip-card-inner">
            <div class="main__flip-card-front">
                <div class="main__flip-title">
                    <p class="main__flip-title-text-front">
                        Sponago <br>
                        Top <br>
                        Team <br>
                    </p>
                </div>
            </div>
            <div class="main__flip-card-back">
                <div class="main__flip-title">
                    <div class="main__flip-title-text-back">
                        <p>
                            <hr class="horizontal-right">
                            <span>スポナゴA型就労継続支援のポータルサイト</span>
                            <hr class="horizontal-left">
                        </p>
                        <p>
                            「共創」をテーマにこのサイトは運営しています。 <br><br>
                            互いに助け合い、寄り添って問題解決・改善を行いましょう。 <br><br>
                            サイトに関して不便なことがありましたら、支援員にご相談ください。
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<article>
    <div class="article__forum-container">
        <div class="forum__text">
            <p>
                2025・10・14
                <span>
                    <a href="#">Lorem ipsum, dolor sit amet consectetur</a>
                </span>
            </p>
            <p>
                2025・11・19
                <span>
                    <a href="#">Lorem ipsum, dolor sit amet consectetur</a>
                </span>
            </p>
            <p>
                2025・12・25
                <span>
                    <a href="#">Lorem ipsum, dolor sit amet consectetur</a>
                </span>
            </p>
        </div>
        <div class="forum__item-card">
            <div class="forum__item-card-align">
                <span class="red"></span>
                <span class="yellow"></span>
                <span class="green"></span>
            </div>
            <h2>FORUM</h2>
            <a href="#" class="forum__item-card-btn">More</a>
        </div>
    </div>

    <div class="article__news-container">
        <div class="article__item-card">
            <div class="article__item-card-align">
                <span class="blue"></span>
                <span class="violet"></span>
                <span class="orange"></span>
            </div>
            <h2>NEWS</h2>
            <a class="article__item-card-btn">More</a>
        </div>
        <div class="article__text">
            <p>
                2025・01・05
                <span>
                    <a href="#">Lorem ipsum, dolor sit amet consectetur</a>
                </span>
            </p>
            <p>
                2025・12・26
                <span>
                    <a href="#">Lorem ipsum, dolor sit amet consectetur</a>
                </span>
            </p>
        </div>
    </div>
</article>

<aside>
    <!-- 
    BACKGROUND IMAGE 
    -->
    aside
</aside>



<?php get_footer(); ?>