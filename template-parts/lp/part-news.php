<?php /**
 *  
 * News List for Top page  
 * 
 */ ?>
 
<?php
$args = array(
    'post_type' => 'news' , 
    'posts_per_page' => 3, 
    'post_status' => 'publish',
);
$loop = new WP_Query($args);
if($loop -> have_posts()) :?>
    <section class="news">
        <div class="container--md">
            <div class="news__wrapper">
                <div class="heading__wrapper">
                    <h2 class="heading__primary"><span>News</span></h2>
                </div>
                <div class="news-content">
                    <div class="news-content__left">
                        <p class="heading__desc">お知らせ</p>
                        <p class="heading__details">最新情報をお届け！</p>
                        <a href="<?php echo home_url(); ?>/news" class="btn__primary btn__primary--blue">お知らせ一覧</a>
                    </div>
                    <div class="news-content__right">
                        <?php while ($loop -> have_posts()) : $loop -> the_post(); ?>
                            <a href="<?php echo get_the_permalink( ) ?>" class="news-content__link">
                                <div class="news-content__info">
                                    <span class="news-content__date"><?php echo get_the_date('Y.m.d'); ?></span>
                                    <p class="news-content__text"><?php echo get_the_title(); ?></p>
                                </div>
                            </a>
                        <?php endwhile; wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif;

