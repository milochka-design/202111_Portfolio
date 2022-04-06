<?php get_header(); ?>
<main>
    <div class="p-pagehead js-parallax">
        <div class="p-pagehead__title c-sectiontitle">
            <h2 class="c-sectiontitle__en">
                Contact
            </h2>
            <p class="c-sectiontitle__lead">
                お問い合わせ
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
    <section class="p-sub-contact l-sub-contact">
        <div class="l-inner">

            <p class="p-sub-contact__text">制作のご依頼やお見積りなど、<br class="u-hidden-pc">お気軽にご相談ください。</p>
            <div class="p-sub-contact__container">
                <?php the_content(); ?>
            </div>
            <p class="p-sub-contact__recaptcha"><span class="material-icons-outlined">
                    lock
                </span>このサイトはreCAPTCHAによって保護されており、Googleの<a href="https://policies.google.com/privacy">プライバシーポリシー</a>と<a href="https://policies.google.com/terms">利用規約</a>が適用されます。</p>
        </div>
    </section>

</main>


<?php get_footer(); ?>