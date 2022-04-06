<?php get_header(); ?>
<main>
    <div class="p-pagehead js-parallax">
        <div class="p-pagehead__title c-sectiontitle">
            <h2 class="c-sectiontitle__en">
                Service
            </h2>
            <p class="c-sectiontitle__lead">
                お手伝いできること
            </p>
        </div>
    </div>
    <div class="breadcrumbs" vocab="http://schema.org/" typeof="BreadcrumbList">
        <div class="l-inner">
            <?php if (function_exists('bcn_display')) {
                bcn_display();
            } ?>
        </div>
    </div>

    <section class="p-sub-service l-sub-service">
        <div class="l-inner">
            <div class="p-sub-service__contents">
                <div class="p-sub-service__content">
                    <div class="p-sub-service__contenthead">

                        <div class="p-sub-service__imgbox">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service1.png" alt="" class="p-sub-service__img">
                        </div>

                    </div>
                    <div class="p-sub-service__textbox js-animation">
                        <h3 class="p-sub-service__title">コーディング</h3>
                        <div class="p-sub-service__text">
                            <?php //値が空の場合出力を除外する
                            $field = get_field('service-coding');
                            if ($field) : ?><?php echo $field; ?>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="p-sub-service__content">
                    <div class="p-sub-service__contenthead">

                        <div class="p-sub-service__imgbox">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service2.png" alt="" class="p-sub-service__img">
                        </div>

                    </div>
                    <div class="p-sub-service__textbox js-animation">
                        <h3 class="p-sub-service__title">WordPressオリジナルテーマ作成</h3>
                        <div class="p-sub-service__text">
                            <?php //値が空の場合出力を除外する
                            $field = get_field('service-wordpress');
                            if ($field) : ?><?php echo $field; ?>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="p-sub-service__content">
                    <div class="p-sub-service__contenthead">

                        <div class="p-sub-service__imgbox">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service3.png" alt="" class="p-sub-service__img">
                        </div>

                    </div>
                    <div class="p-sub-service__textbox js-animation">
                        <h3 class="p-sub-service__title">Webデザイン</h3>
                        <div class="p-sub-service__text">
                            <?php //値が空の場合出力を除外する
                            $field = get_field('service-design');
                            if ($field) : ?><?php echo $field; ?>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
<?php get_footer(); ?>