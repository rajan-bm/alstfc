<?php /**
 * 
 * Archive Page: Topic
 * 
 */ ?>
<?php get_header(); ?>
<?php
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $args = array(
        'post_type'         =>  'news',
        'paged'             =>  $paged,
        'posts_per_page'    =>  12,
        'post_status'       =>  'publish',
    );
    $query = new WP_Query($args);
?>
<!-- Breadcrumbs -->
<?php /*
<div class="breadcrumb">
    <div class="container">
        <ul class="breadcrumb__box">
            <li><a href="#">TOP</a></li>
            <li>加盟店舗一覧</li>
        </ul>
    </div>
</div>
*/ ?>
<?php if(function_exists('ah_breadcrumb') )  ah_breadcrumb(); ?>
<!-- Breadcrumbs -->
<main id="main" class="page__news">
    <div class="main__wrapper">
        <div class="m-scroll -ab">
            <div class="m-scroll__title">
                <div>
                    <p>NEWS<span class="m-scroll__title-span">NEWS</span></p>
                    <p>NEWS<span class="m-scroll__title-span">NEWS</span></p>
                </div>
            </div>
        </div>
        <section class="news page__bg">
            <div class="container">
                <div class="heading__box">
                    <h2 class="heading__secondary"><span>News</span>お知らせ</h2>
                    <p class="heading__secondary-desc">アルスタFCの最新情報をお届けします！</p>
                </div>
            </div>
            <?php if($query -> have_posts()): ?>
                <div class="page__news-box">
                    <div class="container--sm">
                        <!-- <div class="news__wrapper"> -->
                        <div class="news-content">
                            <div class="news-content__right">
                                <?php while( $query -> have_posts() ) :
                                    $query -> the_post(); ?>
                                    <a href="<?php echo get_the_permalink(); ?>" class="news-content__link">
                                        <div class="news-content__info">
                                            <span class="news-content__date"><?php echo get_the_date('Y.m.d'); ?></span>
                                            <p class="news-content__text"><?php echo get_the_title(); ?></p>
                                        </div>
                                    </a>
                                <?php endwhile; wp_reset_postdata();?>
                            </div>
                        </div>
                        <div class="pagination">
                            <?php if( function_exists('mypagination') ) { mypagination($query -> max_num_pages); } ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </section>
    </div>
</main>

<?php get_footer();