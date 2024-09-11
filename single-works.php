<?php
/**
 * Single page for post type works
 */
get_header(); ?>

<?php
while ( have_posts() ) : the_post(); ?>

<!-- MAIN -->
<main id="main">
    <section class="worksdetail">
        <div class="container">
            <div class="worksdetail__row">
                <div class="worksdetail__col1">
                <?php $terms = get_the_terms(get_the_ID(), 'works_category');?>
                    <div class="worksdetail__head">
                        <a href="<?php echo get_term_link($terms[0]);?>" class="category"><?php echo str_replace('|', '', $terms[0] -> name ); ?></a>
                        <p class="date"><?php echo get_the_date('Y.m.d'); ?></p>
                        <h1 class="title"><?php the_title(); ?></h1>
                    </div>
                    <div class="worksdetail__body">
                        <?php if (has_post_thumbnail( $post->ID ) ): ?>
                        <img loading="lazy" class="img-fluid" src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        <div class="worksdetail__list">
                        <?php else: ?>
                        <div class="worksdetail__list mt-0">
                        <?php endif; ?>
                            <table>
                                <?php if (get_field('works_owner') ): ?>
                                    <tr>
                                        <td class="listtitle">施主</td>
                                        <td><?php the_field('works_owner'); ?></td>
                                    </tr>
                                <?php endif; ?>
                                <?php if (get_field('works_location') ): ?>
                                    <tr>
                                        <td class="listtitle">所在地</td>
                                        <td><?php the_field('works_location'); ?></td>
                                    </tr>
                                <?php endif; ?>
                                <?php if (get_field('works_storarea') ): ?>
                                    <tr>
                                        <td class="listtitle">店舗面積</td>
                                        <td><?php the_field('works_storarea'); ?></td>
                                    </tr>
                                <?php endif; ?>
                                <?php if (get_field('works_design') ): ?>
                                    <tr>
                                        <td class="listtitle">設計</td>
                                        <td><?php the_field('works_design'); ?></td>
                                    </tr>
                                <?php endif; ?>
                                <?php if (get_field('works_const') ): ?>
                                    <tr>
                                        <td class="listtitle">施工</td>
                                        <td><?php the_field('works_const'); ?></td>
                                    </tr>
                                <?php endif; ?>
                                <?php if (get_field('works_other') ): ?>
                                    <tr>
                                        <td class="listtitle">その他</td>
                                        <td><?php the_field('works_other'); ?></td>
                                    </tr>
                                <?php endif; ?>
                            </table>
                        </div>
                        <div class="worksdetail__imggroup">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
                <div class="worksdetail__col2">
                    <?php
                        $args = array('post_type' => 'works' , 
                        'posts_per_page' => 7, 
                        'orderby' => 'date', 
                        'order' => 'DESC',
                        'post_status' => 'publish');
                        $loop = new WP_Query($args);

                        while ($loop -> have_posts()) : $loop -> the_post();
                        $terms = get_the_terms(get_the_ID(), 'works_category');
                    ?>
                    <div class="recentblock">
                        <a href="<?php the_permalink(); ?>" class="recentblock__img">
                            <?php if (has_post_thumbnail( $post->ID ) ): ?>
                                <img class="img-fluid" src="<?php echo the_post_thumbnail_url('thumbnail'); ?>" alt="<?php the_title(); ?>">
                            <?php else: ?>
                                <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/noimage.png" alt="image-unavailiable">
                            <?php endif; ?>
                        </a>
                        <div class="recentblock__desc">
                            <a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a>
                            <a href="<?php echo get_term_link($terms[0]);?>" class="category"><?php echo str_replace('|', '', $terms[0] -> name ); ?></a>
                        </div>
                    </div>
                    <?php endwhile; wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </section>
</main>    

<?php endwhile; // End of the loop.
?>     

<?php get_footer();