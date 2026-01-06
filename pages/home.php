<?php
get_header();

$aside_bg = get_template_directory_uri() . '/assets/backgrounds/sub-bg.webp';
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
    <!-- <div class="aside__sub-bg"></div> -->
    <div class="aside__radio-inputs">
        <label class="aside__radio">
            <input type="radio" name="radio" checked="" />
            <span class="aside__name">
                <span class="aside__pre-name"></span>
                <span class="aside__pos-name"></span>
                <span>Tabs</span>
            </span>
            <div class="aside__content">
                <div>
                    <div>Content</div>
                </div>
            </div>
        </label>
        <label class="aside__radio">
            <input type="radio" name="radio" />
            <span class="aside__name">
                <span class="aside__pre-name"></span>
                <span class="aside__pos-name"></span>
                <span>And</span>
            </span>
            <div class="aside__content">
                <div>
                    <div>And content</div>
                </div>
            </div>
        </label>

        <label class="aside__radio">
            <input type="radio" name="radio" />
            <span class="aside__name">
                <span class="aside__pre-name"></span>
                <span class="aside__pos-name"></span>
                <span>More</span>
            </span>
            <div class="aside__content">
                <div>
                    <div>More content</div>
                </div>
            </div>
        </label>

        <label class="aside__radio">
            <input type="radio" name="radio" />
            <span class="aside__name">
                <span class="aside__pre-name"></span>
                <span class="aside__pos-name"></span>
                <span>Tabs</span>
            </span>
            <div class="aside__content">
                <div>
                    <div>And Even More content</div>
                </div>
            </div>
        </label>
    </div>

</aside>



<?php get_footer(); ?>