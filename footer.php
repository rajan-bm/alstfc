<?php /**
 * The template for displaying the footer
 *
 */ ?>

<!-- SCROLL-TO-TOP -->
<!-- FOOTER -->
<footer class="footer" id="footer">
    <!-- Scroll to top code -->
    <div class="scroll-to-top" id="js-scrollToTop">
        <div class="scroll-to-top__wrapper">
            <p>TOPへ</p>
        </div>
    </div>
    <div class="footer__block">
        <div class="container">
            <div class="footer__wrapper">
                <div class="footer__left">
                    <div class="footer__logo">
                        <a href="<?php echo home_url(); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/logo-white.svg" alt="ALSTA FC" width="304" height="40">
                        </a>
                    </div>
                    <div class="footer__address">
                        <p>
                            〒902-0068<br>
                            沖縄県那覇市安里381-1　ZORKS沖縄
                        </p>
                    </div>
                </div>
                <div class="footer__right">
                    <div class="footer__links">
                        <a href="<?php echo home_url(); ?>/store">店舗一覧</a>
                        <a href="<?php echo home_url(); ?>/news">お知らせ</a>
                        <a href="<?php echo home_url(); ?>/topics">トピックス</a>
                        <a href="#">お問い合わせ</a>
                        <a href="https://o-naz.com/" target="_blank">運営会社</a>
                        <a href="<?php echo home_url(); ?>/privacy-policy">プライバシーポリシー</a>
                    </div>
                    <div class="footer__rbottom">
                        <a href="#" class="footer__rbottom-insta">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon-instagram.svg" alt="INSTAGRAM" width="62" height="62"
                                loading="lazy" class="img-fluid">
                        </a>
                        
                        <div class="footer__rbottom-inside">
                            <a href="https://okiren8131.com/" class="footer__rbottom-okiren" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon-okiren.svg" alt="OKIREN" width="199" height="63"
                                    loading="lazy" class="img-fluid">
                            </a>
                            <a href="#" class="footer__rbottom-fc">FC加盟をご希望の事業者様</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p class="footer__copyright">2024 &amp;O-NAZ.inc</p>
    </div>
</footer>
<!-- JS -->
<?php wp_footer(); ?>
<?php if(is_home() || is_front_page()) : ?>
    <script>
        window.addEventListener('message', function (e) {
            if (e.origin === 'https://okiren8131.com' || e.origin === 'https://okiren8131.com') {
                if (e.data.action === 'okiren_external_car_search') {
                    window.parent.open(e.origin + e.data.url, '_blank');
                }
            }
        });
    </script>
<?php endif; ?>
</body>
</html>