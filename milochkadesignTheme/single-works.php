<?php
get_header()
?>
<main>
    <div class="p-pagehead">
        <div class="p-pagehead__title c-sectiontitle">
            <h2 class="c-sectiontitle__en">
                Works
            </h2>
            <p class="c-sectiontitle__lead">
                制作実績
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

    <section class="p-worksitem l-worksitem">
        <div class="l-inner">
            <div class="p-worksitem__contents">

                <h2 class="p-worksitem__title"><?php the_title(); ?></h2>

                <p class="p-worksitem__tags c-tags">
                    <?php
                    if ($terms = get_the_terms($post->ID, 'tool')) {
                        foreach ($terms as $term) {
                    ?>
                            <span class="c-tags__tag1"><?php echo esc_html($term->name); ?></span>
                    <?php
                        }
                    }
                    ?>

                    <?php
                    if ($terms = get_the_terms($post->ID, 'role')) {
                        foreach ($terms as $term) {
                    ?>
                            <span class="c-tags__tag2"><?php echo esc_html($term->name); ?></span>
                    <?php
                        }
                    }
                    ?>
                </p>
                <div class="p-worksitem__content">
                    <div class="p-worksitem__imgbox">
                        <?php if (get_field('screenshot')) : ?>
                            <img src="<?php the_field('screenshot'); ?>" />
                        <?php endif; ?>
                    </div>
                    <div class="p-worksitem__text">
                        <div class="p-worksitem__description">
                            <?php //値が空の場合出力を除外する
                            $field = get_field('description');
                            if ($field) :  echo $field; ?>
                            <?php endif; ?>
                        </div>
                        <?php //値が空の場合出力を除外する
                        $field = get_field('linkurl');
                        if ($field) : ?>
                            <a class="p-worksitem__link c-button c-button--gcenterout" href="<?php echo $field; ?>" target="_blank" rel="noopener noreferrer"><span>LINK</span></a>
                        <?php endif; ?>

                        <?php //値が空の場合出力を除外する
                        $field = get_field('password');
                        if ($field) : ?>
                            <p class="p-worksitem__password">【Basic認証】<br> <?php echo $field; ?>
                            <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <!--WP PageNaviが生成するコード-->
        <div class="p-worksitem__pagenavi wp-pagenavi">
            <?php previous_post_link('%link', '< PREV'); ?>
            <a class="width-l" href="<?php echo esc_url(home_url('/works/')); ?>">一覧</a>
            <?php next_post_link('%link', 'NEXT >'); ?>

        </div>
        <!--WP PageNaviが生成するコード　ここまで-->
        </div>
    </section>

    <?php get_template_part('template-parts/contact'); ?>
</main>

<?php get_footer() ?>