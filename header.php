<header>
    <a href="<?php echo esc_url(home_url('/index.php')); ?>">
        <h1>A型
            <span>Sponago</span>
        </h1>
    </a>
    <nav>
        <ul>
            <li class="list__item">
                <a href="<?php echo esc_url(home_url('/index')); ?>">
                    Home
                </a>
            </li>
            <li class="list__item">
                <div class="dropDown">
                    <button class="dropDown__btn">
                        <a href="<?php echo esc_url(home_url('/production')); ?>">Products</a>
                    </button>
                    <div class="dropDown__content">
                        <a href="#" class="dropDown__link">
                            <span>Landing Page</span>
                        </a>
                        <a href="#" class="dropDown__link">
                            <span>Home Page</span>
                        </a>
                        <a href="#" class="dropDown__link">
                            <span>Design</span>
                        </a>
                        <a href="#" class="dropDown__link">
                            <span>Logo</span>
                        </a>
                        <a href="#" class="dropDown__link">
                            <span>Illustrator</span>
                        </a>
                    </div>
                </div>
            </li>
            <li class="list__item">
                <a href="<?php echo esc_url(home_url('/manual')); ?>">
                    Manuals
                </a>
            </li>
            <li class="list__item">
                <a href="<?php echo esc_url(home_url('/shift')); ?>">
                    Shifts
                </a>
            </li>
            <li class="list__item">
                <a href="<?php echo esc_url(home_url('/daily')); ?>">
                    Daily
                </a>
            </li>
            <li class="list__item">
                <a href="<?php echo esc_url(home_url('/case')); ?>">
                    Case
                </a>
            </li>
        </ul>
    </nav>
</header>