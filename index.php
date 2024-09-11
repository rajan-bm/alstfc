<?php /**
 * 
 * Template Name: Front Page
 * 
 */ ?>
<?php get_header() ?>
<!-- HERO -->
<div class="hero">
    <div class="hero__mv">
        <div class="hero__vid">
            <video playsinline muted loop preload autoplay="1" id="mv-vid">
                <source src="<?php echo get_template_directory_uri(); ?>/assets/video/mv-pc.mp4" type="video/mp4" />
            </video>
        </div>

        <div class="hero__wrpr">
            <div class="hero__heading">
                <h1 class="hero__ttl">充実のカーエレで、<br class="d-md-none">もっと楽しいレンタカー！</h1>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/logo-white.svg" alt="ALSTA RENTAL" class="img-fluid" width="547" height="47" loading="lazy">
            </div>
            <div class="hero-contact__wrapper -abs">
                <div class="hero-contact__iframe" id="alstasearch">
                    <iframe src="https://okiren8131.com/car/external-search/1" width="100%" height="310" scrolling="no" loading="lazy" referrerpolicy="no-referrer"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<main id="main">
    <section class="about">
        <div class="about__wrapper">
            <div class="container">
                <div class="about__row">
                    <div class="about__col">
                        <div class="heading__wrapper">
                            <h2 class="heading__primary">
                                <span>
                                    About us
                                </span>
                            </h2>
                        </div>
                        <p class="heading__desc">
                            沖縄のレンタカーなら<br><span>アルスタレンタカー！</span>
                        </p>
                        <p class="heading__details">
                            アルスタレンタカーは沖縄本島を中心にレンタカーを展開しています。簡単予約ですぐ出発！豊富な車種であなたの沖縄旅行を全力でサポートします。
                        </p>
                        <a href="#alstasearch" class="btn__primary btn__primary--icon clickButton">レンタカーを検索</a>
                    </div>
                    <div class="about__col d-none d-md-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-01.svg" alt="アルスタFCは沖縄本島を中心にレンタカーを展開しています。" width="681" height="681" loading="lazy" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="swiper" dir="rtl">
        <div class="container">
            <div class="swiper__wrapper">
                <div class="slick__carousal">
                    <div class="slick__carousal-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/carousal/carousal-01.jpg" alt="SLIDER IMAGE 01" width="396" height="363" loading="lazy" class="img-fluid">
                    </div>
                    <div class="slick__carousal-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/carousal/carousal-02.jpg" alt="SLIDER IMAGE 02" width="396" height="363" loading="lazy" class="img-fluid">
                    </div>
                    <div class="slick__carousal-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/carousal/carousal-03.jpg" alt="SLIDER IMAGE 03" width="396" height="363" loading="lazy" class="img-fluid">
                    </div>
                    <div class="slick__carousal-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/carousal/carousal-04.jpg" alt="SLIDER IMAGE 04" width="396" height="363" loading="lazy" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="m-scroll -toppage">
        <div class="m-scroll__title">
            <div>
                <p>HAVE FUN WITH A RENT A CAR.</p>
                <p>HAVE FUN WITH A RENT A CAR.</p>
            </div>
        </div>
    </div>
    <!-- store -->
    <?php echo get_template_part( 'template-parts/lp/part', 'store'); ?>
    <!-- store -->
    
    <div class="section-group section-group--bg">
        <div class="banner-motor">
            <div class="banner-motor__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/logo-cals-motor.svg" alt="CAL'S MOTOR" class="img-fluid" width="371" height="83" loading="lazy">
            </div>

            <p class="banner-motor__text">アルスタFC加盟店の1部店舗では、<br>アルパインスタイルのCal’sMotorをレンタカー配備しています。</p>

            <a href="<?php echo home_url(); ?>/calsmotor" class="banner-motor__link">貸し出し店舗はこちら</a>
        </div>

        <!-- news section -->
        <?php get_template_part( 'template-parts/lp/part', 'news' ); ?>
        
        <!-- Topics -->
        <?php get_template_part( 'template-parts/lp/part', 'topics' ); ?>
    </div>
</main>
<?php get_footer();
