<?php get_header(); ?>
<?php
$home = esc_url(home_url('/'));
$aboute = esc_url(home_url('/aboute/'));
$service = esc_url(home_url('/servicr/'));
$works = esc_url(home_url('/works/'));
$contact = esc_url(home_url('/contact/'));
?>
<main>
    <section class="p-mainview js-mv js-parallax">
        <div class="p-mainview__container js-fadeInDown">
            <h1 class="p-mainview__title">
                milochka design
            </h1>
            <p class="p-mainview__subtitle">
                なりたい未来に近づくお手伝い<br>
                ミラチカデザイン
            </p>
            <a href="<?php echo $contact ?>" class="p-mainview__button c-button c-button--gcenterout"><span>Contact</span></a>
        </div>
    </section>
    <section class="p-about l-about">
        <div class="l-inner">
            <div class="p-about__container js-animation">
                <div class="p-about__title c-sectiontitle">
                    <h2 class="c-sectiontitle__en c-sectiontitle__en--white">
                        About
                    </h2>
                    <p class="c-sectiontitle__lead">
                        ミラチカデザインについて
                    </p>
                </div>
                <div class="p-about__contents">
                    <?php //値が空の場合出力を除外する
                    $field = get_field('top-about');
                    if ($field) : ?><p><?php echo $field; ?></P>
                    <?php endif; ?>
                    <a href="<?php echo $about ?>" class="p-mainview__button c-button c-button--gcenterout"><span>
                            More</span></a>
                </div>
            </div>
    </section>
    <section class="p-service l-service">
        <div class="l-inner">
            <div class="p-service__title c-sectiontitle">
                <h2 class="c-sectiontitle__en">
                    Service
                </h2>
                <p class="c-sectiontitle__lead">
                    お手伝いできること
                </p>
            </div>
            <div class="p-service__contents js-animation">
                <div class="p-service__content c-column">
                    <div class="c-column__imgbox">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service1.png" alt="" class="c-column__img">
                    </div>
                    <h3 class="c-column__title">コーディング</h3>
                    <p class="c-column__text"> <?php //値が空の場合出力を除外する
                                                $group = get_field('top-service');
                                                if ($group) :
                                                    //グループ内のフィールドを出力
                                                    echo $group['top-coding'];
                                                ?>
                        <?php endif; ?>

                    </p>
                </div>
                <div class="p-service__content c-column">
                    <div class="c-column__imgbox">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service2.png" alt="" class="c-column__img">
                    </div>
                    <h3 class="c-column__title">WordPressオリジナルテーマ作成</h3>
                    <p class="c-column__text"> <?php //値が空の場合出力を除外する
                                                $group = get_field('top-service');
                                                if ($group) :
                                                    //グループ内のフィールドを出力
                                                    echo $group['top-wordpress'];
                                                ?>
                        <?php endif; ?>
                    </p>
                </div>
                <div class="p-service__content c-column">
                    <div class="c-column__imgbox">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service3.png" alt="" class="c-column__img">
                    </div>
                    <h3 class="c-column__title">Webデザイン</h3>
                    <p class="c-column__text"> <?php //値が空の場合出力を除外する
                                                $group = get_field('top-service');
                                                if ($group) :
                                                    //グループ内のフィールドを出力
                                                    echo $group['top-design'];
                                                ?>
                        <?php endif; ?>
                    </p>
                </div>
            </div>
            <a href="<?php echo $service ?>" class="p-service__button c-button c-button--gcenterout"><span>
                    More</span></a>
        </div>
    </section>
    <section class="p-works l-works">
        <div class="p-works__bg1">
            <div class="l-inner">
                <div class="p-works__title c-sectiontitle u-hidden-pc">
                    <h2 class="c-sectiontitle__en">
                        Works
                    </h2>
                    <p class="c-sectiontitle__lead">
                        制作実績
                    </p>
                </div>
                <!-- スライダーのメインコンテナの div 要素（必須） -->
                <div class="p-works__slider swiper js-animation">

                    <!-- スライドを囲む div 要素（必須） -->
                    <div class="swiper-wrapper">
                        <!-- それぞれのスライドの div 要素（必須） -->
                        <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/works1.jpg" alt=""></div>
                        <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/works2.jpg" alt=""></div>
                        <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/works3.jpg" alt=""></div>
                    </div>
                    <!-- ページネーションの div 要素（省略可能） -->
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </div>

        <div class="p-works__bg2">
            <div class="p-works__rightcontainer">
                <div class="p-works__contents">
                    <div class="p-works__title c-sectiontitle u-hidden-sp">
                        <h2 class="c-sectiontitle__en">
                            Works
                        </h2>
                        <p class="c-sectiontitle__lead">
                            制作実績
                        </p>
                    </div>
                    <p class="p-works__text">こちらに掲載しているもの以外にも非公開案件で<br class="u-hidden-sp">
                        多数のHP、LPを作成しております。</p>

                    <a href="<?php echo $works ?>" class="p-service__button c-button c-button--gcenterout"><span>
                            More</span></a>
                </div>
            </div>
        </div>
    </section>

</main>


<?php get_footer(); ?>