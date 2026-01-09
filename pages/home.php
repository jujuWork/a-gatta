<?php
get_header();

$aside_bg = get_template_directory_uri() . '/assets/backgrounds/aside-bg.webp';
$aside_live_icon = get_template_directory_uri() . '/assets/backgrounds/aside/link-icons/live.png';
$aside_detail_icon = get_template_directory_uri() . '/assets/backgrounds/aside/link-icons/detail.png';
?>

<main>
    <div class="main__card-3d">
        <div>
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/backgrounds/aside/wrapper-item/LP.png') ?>" alt="sample1">
            <span class="main__card-3d-link">
                <a href="#lp">More Info</a>
            </span>
        </div>
        <div>
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/backgrounds/aside/wrapper-item/HP.png') ?>" alt="sample1">
            <span class="main__card-3d-link">
                <a href="#hp">More Info</a>
            </span>
        </div>
        <div>
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/backgrounds/aside/wrapper-item/brand.png') ?>" alt="sample1">
            <span class="main__card-3d-link">
                <a href="#brand">More Info</a>
            </span>
        </div>
        <div>
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/backgrounds/aside/wrapper-item/design.webp') ?>" alt="sample1">
            <span class="main__card-3d-link">
                <a href="#design">More Info</a>
            </span>
        </div>
        <div>
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/backgrounds/aside/wrapper-item/flyer.png') ?>" alt="sample1">
            <span class="main__card-3d-link">
                <a href="#flyer">More Info</a>
            </span>
        </div>
        <div>
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/backgrounds/aside/wrapper-item/illustrator.png') ?>" alt="sample1">
            <span class="main__card-3d-link">
                <a href="#illustrator">More Info</a>
            </span>
        </div>
        <div>
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/backgrounds/aside/wrapper-item/HP.png') ?>" alt="sample1">
            <span class="main__card-3d-link">
                <a href="#hp">More Info</a>
            </span>
        </div>
        <div>
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/backgrounds/aside/wrapper-item/LP.png') ?>" alt="sample1">
            <span class="main__card-3d-link">
                <a href="#lp">More Info</a>
            </span>
        </div>
        <div>
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/backgrounds/aside/wrapper-item/flyer.png') ?>" alt="sample1">
            <span class="main__card-3d-link">
                <a href="#flyer">More Info</a>
            </span>
        </div>
        <div>
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/backgrounds/aside/wrapper-item/design.webp') ?>" alt="sample1">
            <span class="main__card-3d-link">
                <a href="#design">More Info</a>
            </span>
        </div>
    </div>
</main>

<article>
    <div class="article__forum-container">
        <div class="forum__text">
            <p>
                2025・10・14
                <span>
                    <a href="#forum1">Lorem ipsum, dolor sit amet consectetur</a>
                </span>
            </p>
            <p>
                2025・11・19
                <span>
                    <a href="#forum2">Lorem ipsum, dolor sit amet consectetur</a>
                </span>
            </p>
            <p>
                2025・12・25
                <span>
                    <a href="#forum3">Lorem ipsum, dolor sit amet consectetur</a>
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
            <a href="#forum" class="forum__item-card-btn">More</a>
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
            <a href="#news" class="article__item-card-btn">More</a>
        </div>
        <div class="article__text">
            <p>
                2025・01・05
                <span>
                    <a href="#news1">Lorem ipsum, dolor sit amet consectetur</a>
                </span>
            </p>
            <p>
                2025・12・26
                <span>
                    <a href="#news2">Lorem ipsum, dolor sit amet consectetur</a>
                </span>
            </p>
        </div>
    </div>
</article>

<aside>
    <div class="aside__title">
        <h2>Works</h2>
    </div>
    <div class="aside__post">
        <div class="aside__wrapper">
            <div class="aside__wrapper-item">
                <div class="aside__wrapper-item-img">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/backgrounds/aside/wrapper-item/LP.png') ?>" alt="LP Page">
                </div>
                <ul class="aside__wrapper-link">
                    <li>
                        <a href="#live">
                            <img src="<?php echo esc_url($aside_live_icon) ?>" alt="Live" loading="lazy">
                        </a>
                        <p class="aside__wrapper-link-text">Live</p>
                    </li>
                    <li>
                        <a href="#details">
                            <img src="<?php echo esc_url($aside_detail_icon) ?>" alt="Details" loading="lazy">
                        </a>
                        <p class="aside__wrapper-link-text">Details</p>
                    </li>
                </ul>
                <div class="aside__wrapper-item-info">
                    <p>
                        <a href="#lp">LP ページ</a>
                    </p>
                </div>
            </div>
            <div class="aside__wrapper-item">
                <div class="aside__wrapper-item-img">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/backgrounds/aside/wrapper-item/HP.png') ?>" alt="HP Page" loading="lazy">
                </div>
                <ul class="aside__wrapper-link">
                    <li>
                        <a href="#live">
                            <img src="<?php echo esc_url($aside_live_icon) ?>" alt="Live" loading="lazy">
                        </a>
                        <p class="aside__wrapper-link-text">Live</p>
                    </li>
                    <li>
                        <a href="#details">
                            <img src="<?php echo esc_url($aside_detail_icon) ?>" alt="Details" loading="lazy">
                        </a>
                        <p class="aside__wrapper-link-text">Details</p>
                    </li>
                </ul>
                <div class="aside__wrapper-item-info">
                    <p>
                        <a href="#hp">Home ページ</a>
                    </p>
                </div>
            </div>
            <div class="aside__wrapper-item">
                <div class="aside__wrapper-item-img">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/backgrounds/aside/wrapper-item/flyer.png') ?>" alt="LP Page" loading="lazy">
                </div>
                <ul class="aside__wrapper-link">
                    <li>
                        <a href="#live">
                            <img src="<?php echo esc_url($aside_live_icon) ?>" alt="Live" loading="lazy">
                        </a>
                        <p class="aside__wrapper-link-text">Live</p>
                    </li>
                    <li>
                        <a href="#details">
                            <img src="<?php echo esc_url($aside_detail_icon) ?>" alt="Details" loading="lazy">
                        </a>
                        <p class="aside__wrapper-link-text">Details</p>
                    </li>
                </ul>
                <div class="aside__wrapper-item-info">
                    <p>
                        <a href="#flyer">チラシ</a>
                    </p>
                </div>
            </div>
            <div class="aside__wrapper-item">
                <div class="aside__wrapper-item-img">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/backgrounds/aside/wrapper-item/brand.png') ?>" alt="LP Page" loading="lazy">
                </div>
                <ul class="aside__wrapper-link">
                    <li>
                        <a href="#live">
                            <img src="<?php echo esc_url($aside_live_icon) ?>" alt="Live" loading="lazy">
                        </a>
                        <p class="aside__wrapper-link-text">Live</p>
                    </li>
                    <li>
                        <a href="#details">
                            <img src="<?php echo esc_url($aside_detail_icon) ?>" alt="Details" loading="lazy">
                        </a>
                        <p class="aside__wrapper-link-text">Details</p>
                    </li>
                </ul>
                <div class="aside__wrapper-item-info">
                    <p>
                        <a href="#logo">ロゴ</a>
                    </p>
                </div>
            </div>
            <div class="aside__wrapper-item">
                <div class="aside__wrapper-item-img">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/backgrounds/aside/wrapper-item/illustrator.png') ?>" alt="LP Page" loading="lazy">
                </div>
                <ul class="aside__wrapper-link">
                    <li>
                        <a href="#live">
                            <img src="<?php echo esc_url($aside_live_icon) ?>" alt="Live" loading="lazy">
                        </a>
                        <p class="aside__wrapper-link-text">Live</p>
                    </li>
                    <li>
                        <a href="#details">
                            <img src="<?php echo esc_url($aside_detail_icon) ?>" alt="Details" loading="lazy">
                        </a>
                        <p class="aside__wrapper-link-text">Details</p>
                    </li>
                </ul>
                <div class="aside__wrapper-item-info">
                    <p>
                        <a href="#illustrator">イラスト</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</aside>



<?php get_footer(); ?>