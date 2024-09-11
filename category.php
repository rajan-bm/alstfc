<?php 
/*
* Taxonomy page for news
*/
get_header();?>

<main>
    <section class="workslist-heading">
        <div class="container">
            <?php 
                $terms = get_the_terms(get_the_ID(), 'category'); ?>
            <h2 class="heading__primary heading__primary--black heading__primary--ml"><?php echo $terms[0] -> name; ?></h2>
        </div>
    </section>
    <section class="workslist">
        <div class="container">
            <div class="newslist-1">
            <?php
                while (have_posts()) : the_post();
              ?>
                <!-- block  -->
                <div class="top">
                    <span class="date"><?php echo get_the_date('Y.m.d'); ?></span>
                    <a href="<?php echo get_term_link($terms[0]);?>" class="date date--2"><?php echo $terms[0] -> name; ?></a>
                </div>
                <div class="newslist-1__block">
                    <div class="left">
                        <span class="date"><?php echo get_the_date('Y.m.d'); ?></span>
                        <p class="title"><?php the_title(); ?></p>
                        <div class="catewrapper">
                            <a href="<?php echo get_term_link($terms[0]);?>" class="category"><?php echo $terms[0] -> name; ?></a>
                        </div>
                    </div>
                    <div class="right">
                        <p class="title"><?php the_title(); ?></p>
                        <div class="catewrapper">
                            <a href="<?php echo get_term_link($terms[0]);?>" class="category"><?php echo $terms[0] -> name; ?></a>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="btn-half">詳しく見る<span class="halfarrow"></span></a>
                    </div>
                </div>
              <?php endwhile; wp_reset_postdata(); ?>
            </div>
            <div class="news-pagination">
                <div class="mypagination">
                    <?php mypagination(); ?>
              </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer();?>