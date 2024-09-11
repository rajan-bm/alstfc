<?php /**
 * 
 * Single Page: Topics
 * 
 */ ?>
<?php get_header(); ?>
<!-- Breadcrumbs -->
<?php if( function_exists('ah_breadcrumb') ) ah_breadcrumb(); ?>
<!-- Breadcrumbs -->
<?php while ( have_posts() ) : the_post();
    $topics_terms = get_the_terms(get_the_ID(), 'topics_category'); ?>
    <main id="main" class="">
        <div class="page__notice-details page__bg page__bg--white">
            <div class="container--md">
                <h1 class="heading__main">
                    <span class="heading__main-span "><?php echo get_the_date('Y.m.d'); ?>
                    <?php if($topics_terms):
                        foreach( $topics_terms as  $term): ?>
                            <span class="heading__main-banner heading__main-banner--<?php echo ($term -> name == 'グルメ') ? "blue" : 'yellow'; ?>"><?php echo $term -> name; ?></span></span>
                        <?php endforeach;
                    endif;
                    echo get_the_title(); ?>
                </h1>
                <div class="notice__block">
                    <div class="notice__details-wrapper">
                        <div class="notice__left">
                            <div class="notice__wrapper">
                                <div class="notice__details-img d-none d-md-block">
                                    <?php if(get_the_post_thumbnail_url()): ?>
                                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>" width="842" height="582" loading="lazy" class="img-fluid">
                                    <?php endif; ?>
                                </div>
                                <?php if(get_the_content()): ?>
                                    <div class="wp-content">
                                        <?php echo the_content(); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php $l_args = array(
                            'post_type' => 'topics',
                            'post_status' => 'publish',
                            'posts_per_page' => 3,
                        );
                        $l_query = new WP_Query($l_args);
                        if($l_query -> have_posts()): ?>
                            <div class="notice__right">
                                <p class="notice__ttl">最新の記事はこちら</p>
                                <div class="page__notice-details-row">
                                    <?php while($l_query -> have_posts()):
                                        $l_query -> the_post(); ?>
                                        <a href="<?php echo get_the_permalink(); ?>" class="notice__details-card">
                                            <div class="notice__details-card-img">
                                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>" width="356" height="243" loading="lazy" class="img-fluid">
                                            </div>
                                            <p class="notice__details-card-ttl">
                                                <span class="notice__details-card-ttl-date"><?php echo get_the_date('Y.m.d'); ?>
                                                    <?php $topic_terms = get_the_terms( get_the_ID(), 'topics_category' );
                                                    foreach($topic_terms as $term):
                                                        $term_color = get_field('tcat_color', $term); ?>
                                                        <span class="notice__details-card-ttl-banner" style="background-color: <?php echo esc_attr($term_color); ?>"><?php echo $term -> name ?> </span>
                                                    <?php endforeach; ?>
                                                </span>
                                                <span class="notice__details-card-ttl-text"><?php echo get_the_title(); ?></span>
                                            </p>
                                        </a>
                                    <?php endwhile; wp_reset_postdata(); ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="notice__btn">
                        <a href="<?php echo home_url(); ?>/topics" class="btn__primary btn__yellow">お知らせ一覧へ</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php endwhile;
get_footer();
