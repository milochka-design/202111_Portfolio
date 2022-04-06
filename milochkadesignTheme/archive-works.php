<?php get_header(); ?>

<main>
    <div class="p-pagehead js-parallax">
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

    <section class="p-sub-works l-sub-works">
        <div class="l-inner">
            <p class="p-sub-works__text">こちらに掲載しているもの以外にも非公開案件で多数のHP、LPを作成しております。<br>
                詳しくはお問い合わせ下さい。</p>
            <div class="p-sub-works__container">
                <?php
                $tax_name = 'role';
                $posttype_name = 'works';
                $terms = get_terms($tax_name);
                foreach ($terms as $term) : if (in_array($term->slug, array('design'))) continue;

                    $args = array(
                        'post_type' => $posttype_name,
                        'tax_query' => array(
                            array(
                                'taxonomy' => $tax_name,
                                'field'    => 'slug',
                                'terms'    => $term->slug
                            ),
                        ),
                    );
                    $the_query = new WP_Query($args);
                ?>
                    <!-- ターム名 start -->
                    <h2 class="p-sub-works__category"><?php echo $term->name ?></h2>
                    <!-- ターム名 end -->
                    <div class="p-sub-works__contents">
                        <?php if ($the_query->have_posts()) : ?>
                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                <!-- 記事表示 start -->
                                <div class="p-sub-works__content">
                                    <div class="p-sub-works__imgbox">
                                        <?php the_post_thumbnail('full', ['class' => 'p-sub-works__img']); ?>
                                    </div>
                                    <p class="p-sub-works__tags c-tags">
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
                                    <p class="p-sub-works__title">
                                        <?php the_title(); ?>
                                    </p>
                                    <a href="<?php the_permalink(); ?>" class="p-sub-works__link">
                                    </a>
                                </div>
                                <!-- 記事表示 end -->
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
            </div>
        <?php endforeach;
                wp_reset_postdata(); ?>

    </section>



</main>
<?php get_footer(); ?>