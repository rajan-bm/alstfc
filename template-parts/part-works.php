<?php 
/*
* Works List for Top page  
*/
?>

<section class="work">
    <section class="worksec">
        <div class="container">
            <div class="worksec__heading">
                <h2 class="heading__primary heading__primary--black heading__primary--ml">Works</h2>
            </div>
            <div class="workslist__row workslist__row--2">
                <?php
                    $ourCurrentPage = get_query_var('paged',1);
                    query_posts( array('post_type' => 'performance', 
                    'posts_per_page' =>2, 
                    'orderby' => 'date', 
                    'order' => 'DESC',
                    'post_status' => 'publish',
                    'paged' => $ourCurrentPage ));
                    while (have_posts()) : the_post();
                ?>
                <div class="workslist__col workslist__col--2">
                    <div class="workscard workscard--2">
                        <a href="<?php the_permalink(); ?>" class="workscard__image">
                            <?php if (has_post_thumbnail( $post->ID ) ): ?>
                                <img src="<?php echo the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>" class="img-fluid">
                            <?php else: ?>
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/noimage.png" alt="image-unavailiable" class="img-fluid">
                            <?php endif; ?>
                        </a>
                        <div class="workscard__desc">
                            <p><?php the_title(); ?><a href="<?php the_permalink(); ?>" class="link-wrapper"></a></p>
                            <div class="workscard__btn">
                                <a href="<?php echo get_term_link($terms[0]);?>" class="category"><?php echo str_replace('|', '', $terms[0] -> name ); ?>
                                    
                                </a>
                                <a href="<?php the_permalink(); ?>" class="btn-half">詳しく見る<span class="halfarrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; wp_reset_query(); ?>
            </div>
            <div class="workslist__btn">
                <a href="<?php echo home_url('/works'); ?>/" class="btn btn__primary btn__primary">MORE</a>
            </div>
        </div>
    </section>
</section>