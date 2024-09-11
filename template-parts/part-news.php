<?php 
/*
* News List for Top page  
*/
?>
<div class="news">
    <div class="container">
        <div class="news__box newslist">
        <div class="news__title">
            <h2 class="heading heading__primary heading__primary--black">News</h2>
        </div>
        <div class="news__list-box">
        <?php
        $args = array(
            'post_type' => 'slider' , 
            'posts_per_page' => -1, 
            'post_status' => 'publish',
        );
        $loop = new WP_Query($args);
        while ($loop -> have_posts()) : $loop -> the_post();
        ?>
            <div class="newslist__block">
                <span class="date"><?php echo get_the_date('Y.m.d'); ?></span>
                <p class="title"><?php the_title(); ?></p>
                <a href="<?php the_permalink(); ?>" class="link-wrapper d-sm-none"></a>
                <a href="<?php the_permalink(); ?>" class="btn-half">詳しく見る<span class="halfarrow"></span></a>
            </div>
        <?php endwhile; wp_reset_query(); ?>
        </div>
        </div>
        <div class="news__btn-wrapper">
            <a href="<?php echo home_url('/news'); ?>/" class="btn btn__primary btn__primary">MORE</a>
        </div>
    </div>
</div>