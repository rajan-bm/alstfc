<?php /**
 * 
 * The header for our theme
 * 
 */ ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8" />
    <meta name="format-detection" content="email=no,telephone=no,address=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />

    <title><?php bloginfo( 'name' ); ?></title>
    <meta name="description" content="<?php bloginfo( 'description' ) ?>" />

    <?php /*
    <!-- OGPタグ/twitterカード -->
    <meta property="og:url" content="xxxxxxxxxxxxxxxxxxxxxxx/" />
    <meta property="og:title" content="Site Title" />
    <meta property="og:type" content="website">
    <meta property="og:description" content="" />
    <meta property="og:image" content="xxxxxxxxxxxxxxxxxxxxxxx/assets/img/ogp.jpg" />
    <meta name="twitter:card" content="xxxxxxxxxxxxxxxxxxxxxxx/assets/img/ogp.jpg" />
    <meta name="twitter:site" content="" />
    <meta property="og:site_name" content="Site Title" />
    <meta property="og:locale" content="ja_JP" />
    <meta property="fb:app_id" content="" />

    <!-- canonical -->
    <link rel="canonical" href="xxxxxxxxxxxxxxxxxxxxxxx/" />

    <!-- ファビコン -->
    <link rel="icon" href="画像URL" sizes="16x16" type="image/png" />
    <link rel="icon" href="画像URL" sizes="32x32" type="image/png" />
    <link rel="icon" href="画像URL" sizes="48x48" type="image/png" />
    <link rel="icon" href="画像URL" sizes="62x62" type="image/png" />
    <link rel="apple-touch-icon-precomposed" href="xxxxxxxxxxxxxxxxxxxxxxx/assets/img/ogp.jpg" />
    <meta name="msapplication-TileImage" content="xxxxxxxxxxxxxxxxxxxxxxx/assets/img/ogp.jpg" />
    <meta name="msapplication-TileColor" content="######" />
    <meta name="theme-color" content="######">

    <!-- フィードページのURLを指定 -->
    <link rel="alternate" type="application/rss+xml" title="Site Title" href="xxxxxxxxxxxxxxxxxxxxxxx/" />
    <!-- NOTO_SANS_CJK_JP FONT -->
    */ ?>

    <script>
        (function(d) {
            var config = {
                    kitId: 'bgy8ynd',
                    scriptTimeout: 3000,
                    async: true
                },
                h = d.documentElement,
                t = setTimeout(function() {
                    h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
                }, config.scriptTimeout),
                tk = d.createElement("script"),
                f = false,
                s = d.getElementsByTagName("script")[0],
                a;
            h.className += " wf-loading";
            tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
            tk.async = true;
            tk.onload = tk.onreadystatechange = function() {
                a = this.readyState;
                if (f || a && a != "complete" && a != "loaded") return;
                f = true;
                clearTimeout(t);
                try {
                    Typekit.load(config)
                } catch (e) {}
            };
            s.parentNode.insertBefore(tk, s)
        })(document);
    </script>
    <?php wp_head(); ?>
</head>
    <style>
        .image-mapper-shape {
            fill: rgba(0, 0, 0, 0);
        }

        g:hover .image-mapper-shape {
            stroke: white;
            stroke-width: 2px;
            opacity: 20%;
        }
    </style>
<body>
    <?php wp_body_open(); ?>

    <!-- Google Tag Manager (noscript) -->
    <!-- End Google Tag Manager (noscript) -->
    <!-- HEADER  -->
    <header class="header" id="header">
        <div class="header__wrapper">
            <a href="<?php echo home_url(); ?>" class="header__logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/logo-blue.svg" alt="ALSTA FC" width="236" height="31" class="img-fluid"
                    loading="lazy">
            </a>
            <div class="header__right">
                <div class="header__right-wrapper">
                    <a href="<?php echo home_url(); ?>/store" class="header__btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12.767" height="17.645"
                            viewBox="0 0 12.767 17.645">
                            <path id="Path_1482" data-name="Path 1482"
                                d="M6.046,0c-.181.023-.363.041-.543.07a6.272,6.272,0,0,0-5,3.856A6.2,6.2,0,0,0,.3,8.3a16.174,16.174,0,0,0,1.55,3.478,36.232,36.232,0,0,0,4.015,5.559.6.6,0,0,0,1.049,0,34.44,34.44,0,0,0,4.46-6.374,11.883,11.883,0,0,0,1.264-3.332A6.2,6.2,0,0,0,10.7,1.7,6.2,6.2,0,0,0,7.092.04C6.973.025,6.854.014,6.735,0Zm.366,9.6A3.215,3.215,0,1,1,9.6,6.338,3.218,3.218,0,0,1,6.413,9.605"
                                transform="translate(0 -0.001)" fill="#404040" />
                        </svg>
                        <span>店舗一覧</span>
                    </a>
                    <a href="<?php echo ( !is_home() || !is_front_page() ) ? home_url() . '/?id=alstasearch' : '#alstasearch'; ?>" class="header__btn  header__btn--gray clickButton" data-scroll-to="01">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16.546" height="16.541"
                            viewBox="0 0 16.546 16.541">
                            <path id="search_24dp_FILL0_wght500_GRAD0_opsz24"
                                d="M127.7-828.959l-5.712-5.712a5.394,5.394,0,0,1-1.546.823,5.656,5.656,0,0,1-1.872.3,5.769,5.769,0,0,1-4.241-1.738,5.77,5.77,0,0,1-1.738-4.241,5.77,5.77,0,0,1,1.738-4.241,5.77,5.77,0,0,1,4.241-1.738,5.769,5.769,0,0,1,4.24,1.738,5.77,5.77,0,0,1,1.738,4.241,5.628,5.628,0,0,1-.3,1.872,5.34,5.34,0,0,1-.823,1.535l5.717,5.723Zm-9.129-6.633a3.79,3.79,0,0,0,2.785-1.145,3.79,3.79,0,0,0,1.145-2.785,3.79,3.79,0,0,0-1.145-2.785,3.79,3.79,0,0,0-2.785-1.145,3.79,3.79,0,0,0-2.785,1.145,3.79,3.79,0,0,0-1.144,2.785,3.79,3.79,0,0,0,1.144,2.785A3.791,3.791,0,0,0,118.568-835.593Z"
                                transform="translate(-112.59 845.5)" fill="#fff" />
                        </svg>
                        <span>レンタカー検索</span>
                    </a>
                </div>
            </div>
        </div>
    </header>