<?php /**
 * 
 * Archive Page: Topic
 * 
 */ ?>
<?php get_header(); ?>


<?php
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $args = array(
        'post_type'         =>  'topics',
        'paged'             =>  $paged,
        'posts_per_page'    =>  9,
        'post_status'       =>  'publish',
    );

    $query = new WP_Query($args);
?>

<!-- Breadcrumbs -->
<?php if( function_exists('ah_breadcrumb') ) ah_breadcrumb(); ?>
<!-- Breadcrumbs -->

<main id="main" class="">
    <div class="main__wrapper page__topics">
        <div class="m-scroll -ab">
            <div class="m-scroll__title">
                <div>
                    <p>
                        TOPICS<span class="m-scroll__title-span">TOPICS</span>TOPICS<span class="m-scroll__title-span">TOPICS</span>
                    </p>
                    <p>
                        TOPICS<span class="m-scroll__title-span">TOPICS</span>TOPICS<span class="m-scroll__title-span">TOPICS</span>
                    </p>
                </div>
            </div>
        </div>
        <section class="topics">
            <div class="container">
                <div class="heading__box">
                    <h2 class="heading__secondary"><span>Topics</span>トピックス</h2>
                    <p class="heading__secondary-desc">沖縄旅行やドライブに役立つ情報をお届けします！</p>
                </div>
            </div>
            <?php if($query -> have_posts()): ?>
                <div class="page__topics-box">
                    <div class="container--sm">
                        <div class="page__topics-row">
                            <?php while( $query -> have_posts() ) :
                                $query -> the_post(); ?>
                                <a href="<?php echo get_the_permalink(); ?>" class="topic__card">
                                    <div class="topic__card-inner">
                                        <div class="topic__card-img">
                                            <img src="<?php echo get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/assets/no-image.jpg'; ?>" alt="<?php echo get_the_title(); ?>" width="300" height="205" loading="lazy" class="img-fluid">
                                        </div>
                                        <div class="topic__card-dates">
                                            <p class="topic__card-dates-text"><?php echo get_the_date('Y.m.d'); ?></p>

                                            <?php $topic_terms = get_the_terms( get_the_ID(), 'topics_category' );
                                            foreach($topic_terms as $term):
                                                $term_color = get_field('tcat_color', $term); ?>
                                                <p class="topic__card-dates-banner" style="background-color: <?php echo esc_attr($term_color); ?>"><?php echo $term -> name ?> </p>
                                            <?php endforeach; ?>
                                        </div>
                                        <h3 class="topic__card-ttl"><?php echo get_the_title(); ?></h3>
                                        <?php if(get_field('t_desc')): ?>
                                            <p class="topic__card-desc"><?php echo get_field('t_desc'); ?>
                                            </p>
                                        <?php endif; ?>
                                    </div>
                                </a>
                            <?php endwhile; wp_reset_postdata(); ?>
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