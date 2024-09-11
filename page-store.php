<?php /**
 * 
 * Template Name: Store Page
 * 
 */ ?>
<?php get_header(); ?>

<!-- Breadcrumbs -->
<?php if( function_exists('ah_breadcrumb') ) ah_breadcrumb(); ?>
<?php 
    $args_northen = array(
        'post_type' =>  'northen_store',
        'post_status' => 'publish',
        'posts_per_page'    =>  -1,
    );
    $args_chubu = array(
        'post_type' =>  'chubu_store',
        'post_status' => 'publish',
        'posts_per_page' =>  -1,
    );
    $args_southern = array(
        'post_type' =>  'southern_store',
        'post_status' => 'publish',
        'posts_per_page'    =>  -1,
    );

    $query_northen = new WP_Query( $args_northen );
    $query_chubu = new WP_Query( $args_chubu );
    $query_southern = new WP_Query( $args_southern );

    $total_northen_stores = $query_northen -> found_posts;
    $total_chubu_stores = $query_chubu -> found_posts;
    $total_southern_stores = $query_southern -> found_posts;
?>
<main id="main" class="page__store">
    <div class="main__wrapper">
        <div class="m-scroll -ab">
            <div class="m-scroll__title">
                <div><p>STORES<span class="m-scroll__title-span">STORES</span>STORES<span class="m-scroll__title-span">STORES</span></p>
                    <p>STORES<span class="m-scroll__title-span">STORES</span>STORES<span class="m-scroll__title-span">STORES</span></p>
                </div>
            </div>
        </div>
        <section class="store page__bg">
            <div class="container">
                <div class="heading__box">
                    <h2 class="heading__secondary"><span>stores</span>加盟店舗一覧</h2>
                    <p class="heading__secondary-desc">アルスタFCに加盟している店舗を紹介します。</p>
                </div>
                <?php if( $query_northen -> have_posts() || $query_chubu -> have_posts() || $query_southern -> have_posts() ) : ?>
                    <div class="page__store-box">
                        <div class="store__row">
                            <div class="store__col">
                                <div class="store__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/store-map.svg" alt="STORE MAP" width="460" height="600" loading="lazy" class="img-fluid">
                                    <?php if( $total_northen_stores > 0 ) : ?>
                                        <div class="store__img-location --first">
                                            <a href="#" class="store__img-link acctrigger" data-accordion="acc-1">
                                                <span class="store__img-link-black">北部エリア</span>
                                                <span class="store__img-link-inner">
                                                    <span>
                                                        <span>
                                                            <span class="store__img-link-blue"><?php echo $total_northen_stores; ?></span>
                                                            <span class="store__img-link-black">店舗</span>
                                                        </span>
                                                        <span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20.274"
                                                                height="16.907" viewBox="0 0 20.274 16.907">
                                                                <g id="Group_143" data-name="Group 143"
                                                                    transform="translate(-1039 -3072.487)">
                                                                    <path id="Path_260" data-name="Path 260"
                                                                        d="M0,.625A.76.76,0,0,1,.823,0C1.987.012,3.15.009,4.314,0a.835.835,0,0,1,.72.383q2.772,3.725,5.555,7.438a.917.917,0,0,1,0,1.263Q7.811,12.8,5.035,16.523a.836.836,0,0,1-.72.383c-1.164-.008-2.328-.011-3.491,0A.76.76,0,0,1,0,16.281v-.315a4.627,4.627,0,0,1,.289-.512Q2.806,12.076,5.33,8.706c.061-.082.121-.165.185-.254-.066-.091-.119-.164-.173-.235Q2.809,4.827.277,1.435A4.35,4.35,0,0,1,0,.94V.625"
                                                                        transform="translate(1039 3072.487)" fill="#266fbf">
                                                                    </path>
                                                                    <path id="Path_261" data-name="Path 261"
                                                                        d="M171.625,8.5l-.98-1.313q-2.154-2.884-4.309-5.768a.854.854,0,0,1,.029-1.192.749.749,0,0,1,.45-.169c1.232-.013,2.465-.007,3.7-.008a.692.692,0,0,1,.575.314q2.821,3.779,5.645,7.556a.883.883,0,0,1,0,1.161q-2.821,3.779-5.645,7.556a.7.7,0,0,1-.594.313q-1.83,0-3.66,0a.653.653,0,0,1-.667-.466.908.908,0,0,1,.167-.9q2.494-3.332,4.985-6.669l.305-.411"
                                                                        transform="translate(882.322 3072.436)" fill="#266fbf">
                                                                    </path>
                                                                </g>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    <?php endif;
                                    if( $total_chubu_stores > 0 ) : ?>
                                        <div class="store__img-location --second">
                                            <a href="#" class="store__img-link acctrigger" data-accordion="acc-2">
                                                <span class="store__img-link-black">中部エリア</span>
                                                <span class="store__img-link-inner">
                                                    <span>
                                                        <span>
                                                            <span class="store__img-link-blue"><?php echo $total_chubu_stores; ?></span>
                                                            <span class="store__img-link-black">店舗</span>
                                                        </span>
                                                        <span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20.274"
                                                                height="16.907" viewBox="0 0 20.274 16.907">
                                                                <g id="Group_143" data-name="Group 143"
                                                                    transform="translate(-1039 -3072.487)">
                                                                    <path id="Path_260" data-name="Path 260"
                                                                        d="M0,.625A.76.76,0,0,1,.823,0C1.987.012,3.15.009,4.314,0a.835.835,0,0,1,.72.383q2.772,3.725,5.555,7.438a.917.917,0,0,1,0,1.263Q7.811,12.8,5.035,16.523a.836.836,0,0,1-.72.383c-1.164-.008-2.328-.011-3.491,0A.76.76,0,0,1,0,16.281v-.315a4.627,4.627,0,0,1,.289-.512Q2.806,12.076,5.33,8.706c.061-.082.121-.165.185-.254-.066-.091-.119-.164-.173-.235Q2.809,4.827.277,1.435A4.35,4.35,0,0,1,0,.94V.625"
                                                                        transform="translate(1039 3072.487)" fill="#266fbf">
                                                                    </path>
                                                                    <path id="Path_261" data-name="Path 261"
                                                                        d="M171.625,8.5l-.98-1.313q-2.154-2.884-4.309-5.768a.854.854,0,0,1,.029-1.192.749.749,0,0,1,.45-.169c1.232-.013,2.465-.007,3.7-.008a.692.692,0,0,1,.575.314q2.821,3.779,5.645,7.556a.883.883,0,0,1,0,1.161q-2.821,3.779-5.645,7.556a.7.7,0,0,1-.594.313q-1.83,0-3.66,0a.653.653,0,0,1-.667-.466.908.908,0,0,1,.167-.9q2.494-3.332,4.985-6.669l.305-.411"
                                                                        transform="translate(882.322 3072.436)" fill="#266fbf">
                                                                    </path>
                                                                </g>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    <?php endif;
                                    if( $total_southern_stores > 0 ) : ?>
                                        <div class="store__img-location --third">
                                            <a href="#" class="store__img-link acctrigger" data-accordion="acc-3">
                                                <span class="store__img-link-black">南部エリア</span>
                                                <span class="store__img-link-inner">
                                                    <span>
                                                        <span>
                                                            <span class="store__img-link-blue"><?php echo $total_southern_stores; ?></span>
                                                            <span class="store__img-link-black">店舗</span>
                                                        </span>
                                                        <span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20.274"
                                                                height="16.907" viewBox="0 0 20.274 16.907">
                                                                <g id="Group_143" data-name="Group 143"
                                                                    transform="translate(-1039 -3072.487)">
                                                                    <path id="Path_260" data-name="Path 260"
                                                                        d="M0,.625A.76.76,0,0,1,.823,0C1.987.012,3.15.009,4.314,0a.835.835,0,0,1,.72.383q2.772,3.725,5.555,7.438a.917.917,0,0,1,0,1.263Q7.811,12.8,5.035,16.523a.836.836,0,0,1-.72.383c-1.164-.008-2.328-.011-3.491,0A.76.76,0,0,1,0,16.281v-.315a4.627,4.627,0,0,1,.289-.512Q2.806,12.076,5.33,8.706c.061-.082.121-.165.185-.254-.066-.091-.119-.164-.173-.235Q2.809,4.827.277,1.435A4.35,4.35,0,0,1,0,.94V.625"
                                                                        transform="translate(1039 3072.487)" fill="#266fbf">
                                                                    </path>
                                                                    <path id="Path_261" data-name="Path 261"
                                                                        d="M171.625,8.5l-.98-1.313q-2.154-2.884-4.309-5.768a.854.854,0,0,1,.029-1.192.749.749,0,0,1,.45-.169c1.232-.013,2.465-.007,3.7-.008a.692.692,0,0,1,.575.314q2.821,3.779,5.645,7.556a.883.883,0,0,1,0,1.161q-2.821,3.779-5.645,7.556a.7.7,0,0,1-.594.313q-1.83,0-3.66,0a.653.653,0,0,1-.667-.466.908.908,0,0,1,.167-.9q2.494-3.332,4.985-6.669l.305-.411"
                                                                        transform="translate(882.322 3072.436)" fill="#266fbf">
                                                                    </path>
                                                                </g>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="store__col">
                                <div class="store__acc">
                                    <?php if( $total_northen_stores > 0 ) : ?>
                                        <div class="store__acc-box" id="acc-1">
                                            <div class="store__acc-qus acctrigger" data-accordion="acc-1">
                                                <h3 class="store__acc-qus-text">北部エリア</h3>
                                                <span class="store__acc-icon"></span>
                                            </div>
                                            <div class="store__acc-ans">
                                                <div class="store__acc-ans-wrapper">
                                                    <?php $counter = 1;
                                                    while( $query_northen -> have_posts() ) :
                                                        $query_northen -> the_post(); ?>
                                                        <?php echo (($counter % 2) == 1) ? '<div class="store__acc-row">' : ''; ?>
                                                            <div class="store_acc-col">
                                                                <a href="<?php echo get_permalink(); ?>"
                                                                    class="store__acc-card">
                                                                    <div class="store__acc-card-img --img">
                                                                        <img src="<?php echo get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/assets/no-image.jpg'; ?>" alt="<?php echo get_the_title() ?>" width="291" height="210" loading="lazy" class="img-fluid --img">
                                                                        <?php if(get_field('store_is_calsmotor')): ?>
                                                                            <p>
                                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-carls-motor.svg" alt="CARLS MOTORS LOGO" width="73" height="16" loading="lazy" class="img-fluid"><span>取扱店</span>
                                                                            </p>
                                                                        <?php endif; ?>
                                                                    </div>
                                                                    <p class="store__acc-card-ttl"><?php echo get_the_title(); ?></p>
                                                                    <div class="store__acc-card-box">
                                                                        <?php $store_address = get_field('store_address'); 
                                                                        if($store_address):?>
                                                                            <p class="store__acc-card-pcode"><?php echo $store_address; ?></p>
                                                                        <?php endif; ?>
                                                                    </div>
                                                                    <p class="store__acc-card-more">詳細はこちら</p>
                                                                </a>
                                                            </div>
                                                        <?php if ($counter % 2 == 0 || $counter == $total_northen_stores) echo '</div>';
                                                        $counter++;
                                                    endwhile; wp_reset_postdata(); ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif;
                                    if( $total_chubu_stores > 0 ) : ?>
                                        <div class="store__acc-box" id="acc-2">
                                            <div class="store__acc-qus acctrigger" data-accordion="acc-2">
                                                <h3 class="store__acc-qus-text">中部エリア</h3>
                                                <span class="store__acc-icon"></span>
                                            </div>
                                            <div class="store__acc-ans">
                                                <div class="store__acc-ans-wrapper">
                                                    <?php $counter = 1;
                                                    while( $query_chubu -> have_posts() ) :
                                                        $query_chubu -> the_post(); ?>
                                                        <?php echo (($counter % 2) == 1) ? '<div class="store__acc-row">' : ''; ?>
                                                            <div class="store_acc-col">
                                                                <a href="<?php echo get_permalink(); ?>"
                                                                    class="store__acc-card">
                                                                    <div class="store__acc-card-img --img">
                                                                        <img src="<?php echo get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/assets/no-image.jpg'; ?>" alt="<?php echo get_the_title() ?>" width="291" height="210" loading="lazy" class="img-fluid --img">
                                                                        <?php if(get_field('store_is_calsmotor')): ?>
                                                                            <p>
                                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-carls-motor.svg" alt="CARLS MOTORS LOGO" width="73" height="16" loading="lazy" class="img-fluid"><span>取扱店</span>
                                                                            </p>
                                                                        <?php endif; ?>
                                                                    </div>
                                                                    <p class="store__acc-card-ttl"><?php echo get_the_title(); ?></p>
                                                                    <div class="store__acc-card-box">
                                                                        <?php $store_address = get_field('store_address'); 
                                                                        if($store_address):?>
                                                                            <p class="store__acc-card-pcode"><?php echo $store_address; ?></p>
                                                                        <?php endif; ?>
                                                                    </div>
                                                                    <p class="store__acc-card-more">詳細はこちら</p>
                                                                </a>
                                                            </div>
                                                        <?php if ($counter % 2 == 0 || $counter == $total_chubu_stores) echo '</div>';
                                                        $counter++;
                                                    endwhile; wp_reset_postdata(); ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif;
                                    if( $total_southern_stores > 0 ) : ?>
                                        <div class="store__acc-box active" id="acc-3">
                                            <div class="store__acc-qus acctrigger" data-accordion="acc-3">
                                                <h3 class="store__acc-qus-text">南部エリア</h3>
                                                <span class="store__acc-icon"></span>
                                            </div>
                                            <div class="store__acc-ans" style="display: block;">
                                                <div class="store__acc-ans-wrapper">
                                                    <?php $counter = 1;
                                                    while( $query_northen -> have_posts() ) :
                                                        $query_northen -> the_post(); ?>
                                                        <?php echo (($counter % 2) == 1) ? '<div class="store__acc-row">' : ''; ?>
                                                            <div class="store_acc-col">
                                                                <a href="<?php echo get_permalink(); ?>"
                                                                    class="store__acc-card">
                                                                    <div class="store__acc-card-img --img">
                                                                        <img src="<?php echo get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/assets/no-image.jpg'; ?>" alt="<?php echo get_the_title() ?>" width="291" height="210" loading="lazy" class="img-fluid --img">
                                                                        <?php if(get_field('store_is_calsmotor')): ?>
                                                                            <p>
                                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-carls-motor.svg" alt="CARLS MOTORS LOGO" width="73" height="16" loading="lazy" class="img-fluid"><span>取扱店</span>
                                                                            </p>
                                                                        <?php endif; ?>
                                                                    </div>
                                                                    <p class="store__acc-card-ttl"><?php echo get_the_title(); ?></p>
                                                                    <div class="store__acc-card-box">
                                                                        <?php $store_address = get_field('store_address'); 
                                                                        if($store_address):?>
                                                                            <p class="store__acc-card-pcode"><?php echo $store_address; ?></p>
                                                                        <?php endif; ?>
                                                                    </div>
                                                                    <p class="store__acc-card-more">詳細はこちら</p>
                                                                </a>
                                                            </div>
                                                        <?php if ($counter % 2 == 0 || $counter == $total_southern_stores) echo '</div>';
                                                        $counter++;
                                                    endwhile; wp_reset_postdata(); ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    </div>

</main>

<?php get_footer();