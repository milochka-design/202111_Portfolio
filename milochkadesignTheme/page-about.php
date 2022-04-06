<?php get_header(); ?>
<main>
    <div class="p-pagehead js-parallax">
        <div class="p-pagehead__title c-sectiontitle">
            <h2 class="c-sectiontitle__en">
                About
            </h2>
            <p class="c-sectiontitle__lead">
                ミラチカデザインについて
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

    <section class="p-sub-about l-about">
        <div class="l-inner p-sub-about__inner">

            <?php //値が空の場合出力を除外する
            $field = get_field('about-lead');
            if ($field) : ?><p class="p-sub-about__lead"><?php echo $field; ?></p>
            <?php endif; ?>

            <div class="p-sab-about">
                <div class="p-sub-about__content p-sub-about__content--rev js-animation">
                    <div class="p-sub-about__imgcontainer">
                        <div class="p-sub-about__imgbox">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/profile.png" alt="">
                        </div>
                    </div>
                    <div class=" p-sub-about__title c-sectiontitle">
                        <h2 class="c-sectiontitle__en">
                            Profile
                        </h2>
                        <p class="p-sub-about">
                            <span class="p-sub-about__name">セキモトリエ</span><br>
                            <?php //値が空の場合出力を除外する
                            $field = get_field('about-profile');
                            if ($field) :  echo $field; ?>
                            <?php endif; ?>
                        </p>


                    </div>
                </div>
                <div class="p-sub-about__content js-animation">
                    <div class=" p-sub-about__title c-sectiontitle">
                        <h2 class="c-sectiontitle__en ">
                            Skill
                        </h2>
                        <ul class="p-sub-about__skill1">
                            <li>HTML/CSS</li>
                            <li>JavaScript</li>
                            <li>jQuery</li>
                            <li>WordPress</li>
                            <li>STUDIO</li>
                            <li>Adobe Photoshop （バナー制作に使用）</li>
                            <li>Adobe Xd（HP・LPデザイン制作に使用）</li>
                        </ul>
                        <p class="p-sub-about__skill2">
                            <?php //値が空の場合出力を除外する
                            $field = get_field('about-skill');
                            if ($field) :  echo $field; ?>
                            <?php endif; ?>
                        </p>



                    </div>
                    <div class="p-sub-about__imgcontainer">
                        <div class="p-sub-about__iconbox">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/html.png" alt="htmlのアイコン">
                        </div>
                        <div class="p-sub-about__iconbox">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/css.png" alt="cssのアイコン">
                        </div>
                        <div class="p-sub-about__iconbox">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/javascript.png" alt="javascriptのアイコン">
                        </div>
                        <div class="p-sub-about__iconbox">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/jquery.png" alt="jqueryのアイコン">
                        </div>
                        <div class="p-sub-about__iconbox">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sass.png" alt="sassのアイコン">
                        </div>
                        <div class="p-sub-about__iconbox">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/wordpress.png" alt="wordpressのアイコン">
                        </div>

                        <div class="p-sub-about__iconbox">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/STUDIO.svg" alt="STUDIOのアイコン">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>
<?php get_footer(); ?>