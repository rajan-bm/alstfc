<?php /**
 * 
 * Single Page: Store
 * 
 */ ?>
<?php get_header(); ?>
<!-- Breadcrumbs -->
<?php if( function_exists('ah_breadcrumb') ) ah_breadcrumb(); ?>
<!-- Breadcrumbs -->
<?php while ( have_posts() ) : the_post();
    $store_sliders = get_field('store_slider') ? get_field('store_slider') : ''; // slider array
    $is_store_calsmotors = get_field('store_is_calsmotor'); // boolean val
    $map_iframe = get_field('store_map_iframe'); // map iframe
    $map_src = extract_src($map_iframe);
    $map_id = extract_mapid($map_src);
    $store_address = get_field('store_address');
    $thumbnail_url = get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : '';

    $store_post_type = get_post_type();
    $store_details = '';
    
    if ($store_post_type == 'southern_store') {
        $store_details = 'southern_details';
    } elseif ($store_post_type == 'chubu_store') {
        $store_details = 'chubu_details';
    } elseif ($store_post_type == 'northen_store') {
        $store_details = 'northen_details';
    } ?>
    <main id="main" class="page__store-list">
        <div class="main__wrapper">
            <div class="m-scroll -ab">
                <div class="m-scroll__title">
                    <div>
                        <p>STORES<span class="m-scroll__title-span">STORES</span>STORES<span class="m-scroll__title-span">STORES</span></p>
                        <p>STORES<span class="m-scroll__title-span">STORES</span>STORES<span class="m-scroll__title-span">STORES</span></p>
                    </div>
                </div>
            </div>
            <section class="store__list">
                <div class="store__list-wrapper">
                    <div class="store__list-row">
                        <div class="store__list-col">
                            <div class="heading__box">
                                <div class="heading__tertiary">
                                    <?php if($is_store_calsmotors): ?>
                                        <span class="heading__tag"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-carls-motor.svg" class="img-fluid" height="16" width="73" alt="" loading="lazy">取扱店</span>
                                    <?php endif; ?>
                                    <h1 class="heading__tertiary-ttl"><?php echo get_the_title(); ?></h1>
                                </div>
                            </div>
                            <?php if($store_address): ?>
                                <p class="store__list-address"><?php echo $store_address; ?></p>
                            <?php endif;?>
                            <div class="store__list-info">
                                <?php if(get_field('store_tel')): ?>
                                    <div class="store__list-info-flex">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/store-list/phone.svg" class="img-fluid" height="26" width="26" alt="phone" loading="lazy"><span class="phone"><?php echo get_field('store_tel'); ?></span>
                                    </div>
                                <?php endif;
                                if(get_field('store_time')): ?>
                                    <div class="store__list-info-flex">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/store-list/calender.svg" class="img-fluid" height="26" width="26" alt="calender" loading="lazy"><span class="calender"><?php echo get_field('store_time'); ?></span>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <?php $store_rental_link = get_field('store_search_link');
                            if($store_rental_link): ?>
                            <div class="store__list-btn -top">
                                <a href="<?php echo $store_rental_link; ?>" class="btn__primary btn__yellow" target="_blank">レンタカー検索</a>
                            </div>
                            <p class="store__list-notice">※外部予約サイトへ遷移します</p>
                            <?php endif; ?>
                        </div>
                        <div class="store__list-col">
                            <?php if($is_store_calsmotors): ?>
                                <div class="store__list-cars d-block d-md-none">
                                    <div class="store__list-ttl">
                                        <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/logo-cals-motor.svg" height="40" width="175" alt="logo" class="img-fluid"></span>
                                        <span>レンタルできます！</span>
                                    </div>
                                    <div class="store__list-flex">
                                        <div class="store__carica">
                                            <figure>
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/store-list/carica.jpg" class="img-fluid" height="229" width="232" loading="lazy" alt="carica">
                                                <figcaption>Carica</figcaption>
                                            </figure>
                                        </div>
                                        <div class="store__havana">
                                            <figure>
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/store-list/havana.jpg" class="img-fluid" height="229" width="232" loading="lazy" alt="carica">
                                                <figcaption>Havana</figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                    <?php /* <p class="store__list-desc d-none">※色は一例です。在庫状況により変動しますので予めご了承ください。<br>※Cal'sMotorの取り扱い車種は店舗にお問い合わせください。</p> */ ?>
                                </div>
                            <?php endif; ?>
                            <!-- slider -->
                            <?php if($store_sliders || $thumbnail_url):?>
                                <div class="store__swiper ">
                                    <?php if($store_sliders):
                                     foreach($store_sliders as $slider): ?>
                                        <div class="store__card">
                                            <div class="store__card-img">
                                                <img src="<?php echo $slider['full_image_url']; ?>" alt="" width="690" height="453" loading="lazy" class="img-fluid">
                                            </div>
                                        </div>
                                    <?php endforeach;
                                    else: ?>
                                    <div class="store__card">
                                        <div class="store__card-img">
                                            <img src="<?php echo $thumbnail_url; ?>" alt="" width="690" height="453" loading="lazy" class="img-fluid">
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <!-- slider -->
                                <div class="store__swiper-ab">
                                    <div class="store__swiper-btns">
                                        <div class="store__swiper-btn store__swiper-prev slick-arrow">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/store-list/store-swiper-prev.png" alt="PREVIOUS BUTTON" width="75" height="75" loading="lazy" class="img-fluid">
                                        </div>
                                        <div class="store__swiper-btn store__swiper-next">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/store-list/store-swiper-next.png" alt="NEXT BUTTON" width="75" height="75" loading="lazy" class="img-fluid">
                                        </div>
                                    </div>
                                    <ul class="custom-dots"></ul>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="store__list-inner">
                    <div class="container--md">
                        <?php if($is_store_calsmotors): ?>
                            <div class="store__list-cars d-none d-md-block ">
                                <div class="store__list-ttl">
                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/logo-cals-motor.svg" height="40" width="175" alt="logo" class="img-fluid"></span>
                                    <span>レンタルできます！</span>
                                </div>
                                <div class="store__list-flex">
                                    <div class="store__carica">
                                        <figure>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/store-list/carica.jpg" class="img-fluid" height="229" width="232" loading="lazy" alt="carica">
                                            <figcaption>Carica</figcaption>
                                        </figure>
                                    </div>
                                    <div class="store__havana">
                                        <figure>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/store-list/havana.jpg" class="img-fluid" height="229" width="232" loading="lazy" alt="carica">
                                            <figcaption>Havana</figcaption>
                                        </figure>
                                    </div>
                                </div>
                                <p class="store__list-desc">※色は一例です。在庫状況により変動しますので予めご了承ください。<br>※Cal'sMotorの取り扱い車種は店舗にお問い合わせください。</p>
                            </div>
                        <?php endif;
                        $store_details = pods_field($store_details);?>
                        <div class="store__list-types">
                            <?php if($store_details):
                                // dd($store_details);
                                foreach($store_details as $detail) :?>
                                <div class="store__item">
                                    <?php if($detail['store_detail_title']): ?>
                                        <h2 class="store__item-ttl"><?php echo $detail['store_detail_title']; ?></h2>
                                    <?php endif;
                                    if($detail['description']): ?>
                                        <p class="store__item-text"><?php echo $detail['description'] ?></p>
                                    <?php endif; ?>
                                </div>
                                <?php endforeach;
                            endif;
                            if($store_address): ?>
                                <div class="store__item">
                                    <h2 class="store__item-ttl">アクセス</h2>
                                    <p class="store__item-text"><?php echo $store_address ?></p>
                                </div>
                            <?php endif; ?>
                        </div>
                        <?php if($map_id): ?>
                            <div class="store__list-map">
                                <iframe src="https://www.google.com/maps/embed?pb=<?php echo $map_id; ?>" width="1380" height="355" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        <?php endif; ?>
                        <div class="store__list-btn">
                            <a href="<?php echo home_url(); ?>/store" class="btn__primary btn__yellow">店舗一覧へ</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
<?php endwhile;
get_footer();
