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
        <div class="page__notice page__bg">
            <div class="container--sm">
                <h1 class="heading__main">
                    <span class="heading__main-span"><?php echo get_the_date('Y.m.d'); ?></span>
                    <?php echo get_the_title(); ?>
                </h1>
                <div class="">
                    <div class="notice__wrapper">
                        <div class="wp-content">
                            <?php the_content(); ?>
                        </div>

                    </div>
                    <div class="notice__btn">
                        <a href="<?php echo home_url(); ?>/news" class="btn__primary btn__yellow">お知らせ一覧へ</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php endwhile; ?>     

<?php get_footer();