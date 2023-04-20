<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>joji's YMS blog</title>
    <meta name="description" content="任意入力" />
    <meta name="format-detection" content="telephone=no" />

    <!--  favicon -->
    
    <link rel="icon" href="ファビコン用のURLを記述" type="image/png" />　<!-- pngの場合 -->
    <link rel="icon" href="ファビコン用のURLを記述" type="image/svg+xml" />　<!-- svgの場合 -->
    <link rel="apple-touch-icon" href="webclip.png" /> <!-- アップルタッチアイコンを設定 -->

    <!-- ogp -->
    <meta property="og:site_name" content="joji's YMS blog" />
    <meta property="og:url" content="サイトのURLを入力" />
    <meta property="og:type" content="ページの種類を入力" />
    <meta property="og:title" content="joji's YMS blog" />
    <meta property="og:description" content="任意入力" />
    <meta property="og:image" content="サムネイルに使う画像のURLを入力" />
    <meta property="og:locale" content="ja_JP" />
    <meta property="fb:app_id" content="facebookのidを入力">
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="サイト持ち主のtwitteridを入力" />
    <meta name="twitter:creator" content="サイト作成者のtwitteridを入力" />
    <meta name="twitter:description" content="任意入力" />
    <meta name="twitter:image:src" content="サムネイルに使う画像のURLを入力" />
    
    <?php wp_head(); ?>
</head>

<body>
    <header class="l_header">
        <div class="l_header_inner">
            <div class="l_header_img-box">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/img/Japan.png' ); ?>" class="l_header_img" alt="Japan">
            </div>

            <div class="l_header_img-box">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/img/plane.png' ); ?>" class="l_header_img l_header_img__plane1" alt="plane">
            </div>

            <h1 class="l_header_title">Joji's YMS Diary</h1>

            <div class="l_header_img-box">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/img/plane.png' ); ?>" class="l_header_img l_header_img__plane2" alt="plane">
            </div>

            <div class="l_header_img-box">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/img/Britain.png' ); ?>" class="l_header_img" alt="Britain">
            </div>
        </div>
        
        <button class="m_hamburger m_hamburger__dl">
            <div class="m_hamburger_position">
                <div class="m_hamburger_bar-block">
                    <div class="m_hamburger-bar m_hamburger-bar1 "></div>
                    <span class="m_hamburger_text">Menu</span>
                    <div class="m_hamburger-bar m_hamburger-bar2"></div>
                </div>
            </div>
        </button>

    <nav class="m_nav">

        <ul class="m_nav_list">

            <li class="m_nav_item">
                <a href="<?php echo esc_url(home_url()); ?>" class="m_nav_link">ホーム</a>
            </li>
            <li class="m_nav_item">
                <a href="<?php echo esc_url(home_url('/profile')); ?>" class="m_nav_link">プロフィール</a>
            </li>
            <li class="m_nav_item">
                <a href="<?php echo esc_url( home_url('/display')); ?>" class="m_nav_link">記事一覧</a>
            </li>
            <li class="m_nav_item">
                <a href="<?php echo esc_url( home_url('/contact')); ?>" class="m_nav_link">お問い合わせ</a>
            </li>

        </ul>
        
    </nav>

    </header>
