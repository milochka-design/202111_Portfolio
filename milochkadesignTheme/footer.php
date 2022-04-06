<footer class="p-footer l-footer">
    <div class="p-footer__container">
        <section class="p-contact js-parallax">
            <div class="l-inner p-contact__inner">
                <div class="p-contact__title c-sectiontitle">
                    <h2 class="c-sectiontitle__en c-sectiontitle__en--white">
                        Contact
                    </h2>
                    <p class="c-sectiontitle__lead">
                        お問い合わせ
                    </p>
                </div>
                <p class="p-contact__text">
                    制作のご依頼やお見積りなど、<br class="u-hhidden-pc">お気軽にご相談ください。
                </p>
                <a href="<?php echo esc_url(home_url('/contact/')) ?>" class="p-contact__button c-button c-button--gcenterout"><span>
                        Contact</span></a>

            </div>
        </section>
        <div class="p-footernavarea">
            <div class="l-inner p-footernavarea__inner"></div>
            <div class="p-footernavarea__container">
                <ul class="p-footernavarea__list c-footernav">
                    <?php
                    $home = esc_url(home_url('/'));
                    $about = esc_url(home_url('/about/'));
                    $service = esc_url(home_url('/service/'));
                    $works = esc_url(home_url('/works/'));
                    $contact = esc_url(home_url('/contact/'));
                    ?>
                    <li class="c-footernav__item"><a class="c-footernav__link" href="<?php echo $home ?>">Top</a></li>
                    <li class="c-footernav__item"><a class="c-footernav__link" href="<?php echo $about ?>">About</a></li>
                    <li class="c-footernav__item"><a class="c-footernav__link" href="<?php echo $service ?>">Service</a></li>
                    <li class="c-footernav__item"><a class="c-footernav__link" href="<?php echo $works ?>">Works</a></li>
                    <li class="c-footernav__item"><a class="c-footernav__link" href="<?php echo $contact ?>">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
    <p class="c-copyright">
        © milochka design
    </p>
    <div class="p-pagetop js-pagetop">
        <img class="p-pagetop__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/pagetop__img.svg" alt="">
    </div>
</footer>



<?php wp_footer(); ?>
<script defer src="<?php echo get_template_directory_uri(); ?>/assets/js/swiper-setting.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.3.0/swiper-bundle.min.js"></script>
</body>

</html>