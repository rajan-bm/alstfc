<?php /**
 * 
 * Archive Page: Store
 * 
 */ ?>
<?php get_header(); ?>

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
<?php if( function_exists('ah_breadcrumb') ) ah_breadcrumb(); ?>
<!-- Breadcrumbs -->

<main id="main" class="page__store">
    <div class="main__wrapper">
        <div class="m-scroll -ab">
            <div class="m-scroll__title">
                <div>
                    <p>STORES<span class="m-scroll__title-span">STORES</span>STORES<span class="m-scroll__title-span">STORES</span></p>
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
                <div class="page__store-box">
                    <?php $store_terms = get_terms(array(
                        'taxonomy' => 'store_category',
                        'hide_empty' => true,
                    ));
                    if($store_terms):?>
                        <div class="store__row">
                            <div class="store__col">
                                <div class="store__img">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/store-map.svg" alt="STORE MAP" width="460" height="600" loading="lazy" class="img-fluid">
                                    <?php for($i = 0; $i < count($store_terms); $i++):  ?>
                                        <div class="store__img-location <?php if($i == 0 ){ echo '--first'; }elseif($i == 1){ echo '--second'; }elseif($i == 2){ echo '--third'; } ?>">
                                            <a href="#" class="store__img-link acctrigger"  data-accordion="acc-<?php echo (1 + $i); ?>">
                                                <span class="store__img-link-black"><?php echo $store_terms[$i] -> name; ?></span>
                                                <span class="store__img-link-inner">
                                                    <?php 
                                                        $store_args = array(
                                                            'post_type' => 'store',
                                                            'posts_per_page' => -1,
                                                            'post_status' => 'publish',
                                                            'tax_query' => array(
                                                                array(
                                                                    'taxonomy' => $store_terms[$i] -> taxonomy,
                                                                    'fields' => 'term_id',
                                                                    'terms' => array( $store_terms[$i] -> term_id ),
                                                                ),
                                                            ),
                                                        );
                                                        $store_query = new WP_Query($store_args);
                                                        $total_term_posts = $store_query -> found_posts; ?>
                                                    <span>
                                                    <span>
                                                        <span class="store__img-link-blue"><?php echo $total_term_posts; ?></span>
                                                        <span class="store__img-link-black">店舗</span>
                                                    </span>
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20.274" height="16.907" viewBox="0 0 20.274 16.907">
                                                            <g id="Group_143" data-name="Group 143" transform="translate(-1039 -3072.487)">
                                                                <path id="Path_260" data-name="Path 260" d="M0,.625A.76.76,0,0,1,.823,0C1.987.012,3.15.009,4.314,0a.835.835,0,0,1,.72.383q2.772,3.725,5.555,7.438a.917.917,0,0,1,0,1.263Q7.811,12.8,5.035,16.523a.836.836,0,0,1-.72.383c-1.164-.008-2.328-.011-3.491,0A.76.76,0,0,1,0,16.281v-.315a4.627,4.627,0,0,1,.289-.512Q2.806,12.076,5.33,8.706c.061-.082.121-.165.185-.254-.066-.091-.119-.164-.173-.235Q2.809,4.827.277,1.435A4.35,4.35,0,0,1,0,.94V.625" transform="translate(1039 3072.487)" fill="#266fbf" />
                                                                <path id="Path_261" data-name="Path 261" d="M171.625,8.5l-.98-1.313q-2.154-2.884-4.309-5.768a.854.854,0,0,1,.029-1.192.749.749,0,0,1,.45-.169c1.232-.013,2.465-.007,3.7-.008a.692.692,0,0,1,.575.314q2.821,3.779,5.645,7.556a.883.883,0,0,1,0,1.161q-2.821,3.779-5.645,7.556a.7.7,0,0,1-.594.313q-1.83,0-3.66,0a.653.653,0,0,1-.667-.466.908.908,0,0,1,.167-.9q2.494-3.332,4.985-6.669l.305-.411" transform="translate(882.322 3072.436)" fill="#266fbf" />
                                                            </g>
                                                        </svg>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    <?php endfor; ?>
                                </div>
                            </div>
                            <div class="store__col">
                                <div class="store__acc">
                                    <?php for( $i = 0; $i < count($store_terms); $i++ ) : ?>
                                        <div class="store__acc-box" id="acc-<?php echo (1 + $i); ?>">
                                            <div class="store__acc-qus acctrigger" data-accordion="acc-<?php echo (1 + $i); ?>">
                                                <h3 class="store__acc-qus-text"><?php echo $store_terms[$i] -> name; ?></h3>
                                                <span class="store__acc-icon"></span>
                                            </div>
                                            <div class="store__acc-ans">
                                                <div class="store__acc-ans-wrapper">
                                                    <?php $store_args = array(
                                                        'post_type' => 'store',
                                                        'posts_per_page' => -1,
                                                        'post_status' => 'publish',
                                                        'tax_query' => array(
                                                            array(
                                                                'taxonomy' => $store_terms[$i] -> taxonomy,
                                                                'fields' => 'term_id',
                                                                'terms' => array( $store_terms[$i] -> term_id ),
                                                            ),
                                                        ),
                                                    );
                                                    $store_query = new WP_Query($store_args);
                                                    $store_count = $store_query -> post_count;
                                                    $counter = 1;
                                                    if($store_query -> have_posts()):
                                                        while($store_query -> have_posts()):
                                                            $store_query -> the_post(); ?>
                                                            <?php echo (($counter % 2) == 1) ? '<div class="store__acc-row">' : ''; ?>
                                                                <div class="store_acc-col">
                                                                    <a href="<?php echo get_the_permalink(); ?>" class="store__acc-card">
                                                                        <div class="store__acc-card-img --img">
                                                                            <img src="<?php echo get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/assets/no-image.jpg'; ?>" alt="<?php echo get_the_title(); ?>" width="291" height="210" loading="lazy" class="img-fluid --img">
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
                                                            <?php if ($counter % 2 == 0 || $counter == $store_count) echo '</div>';
                                                            $counter++;
                                                        endwhile; wp_reset_postdata();
                                                    endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endfor; ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </div>

</main>

<?php get_footer();