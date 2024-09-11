<?php 
/*
* taxonomy page for works
*/
get_header();?>

<main>
    <section class="workslist-heading">
        <div class="container">
            <h1 class="heading__primary heading__primary--black heading__primary--ml">施工事例</h1>
        </div>
    </section>
    <section class="workslist">
        <div class="container">
            <?php wp_nav_menu( array( 'theme_location' => 'category' , 'container'=>'', 'items_wrap' => '<ul class="nav">%3$s</ul>' ) ); ?>
            <div class="tab-content" id="myTabContent">
                <!-- tab - all  -->
                <div class="tab-pane fade show active">
                    <div class="workslist__row workslist__row--3">
                        <?php if( have_posts() ) :
                            while ( have_posts() ) : the_post();
                            $terms = get_the_terms(get_the_ID(), 'works_category');
                        ?>
                        <div class="workslist__col workslist__col--3">
                            <div class="workscard">
                                <a href="<?php the_permalink(); ?>" class="workscard__image">
                                    <?php if (has_post_thumbnail( $post->ID ) ): ?>
                                        <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-fluid">
                                    <?php else: ?>
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/noimage.png" alt="image-unavailiable" class="img-fluid">
                                    <?php endif; ?>
                                </a> 
                                <div class="workscard__desc">
                                    <p><?php the_title(); ?></p>
                                    <div class="workscard__btn">
                                        <a href="<?php echo get_term_link($terms[0]);?>" class="category"><?php echo str_replace('|', '', $terms[0] -> name ); ?></a>
                                        <a href="<?php the_permalink(); ?>" class="btn-half">詳しく見る<span class="halfarrow"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; wp_reset_postdata(); ?>
                        <?php endif;?>
                    </div>
                    <?php mypagination(); ?>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer();?>