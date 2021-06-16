<?php
global $post,$_HEADER;

// URLを取得
$http = is_ssl() ? 'https' : 'http' . '://';
$_HEADER['url'] = $http . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];

//ディスクリプションを取得
$_HEADER['description'] = wp_trim_words ( strip_shortcodes( $post->post_content  ), 55 );

//ogp画像を取得
$_HEADER['og_image'] = get_the_post_thumbnail_url($post->ID);

//ページタイトルを取得
if(is_single() || is_page()) {
    $_HEADER['title'] = (get_the_title($post->ID)) ? get_the_title($post->ID) : get_bloginfo('name');
} else {
    $_HEADER['title'] = get_bloginfo('name');
}

$og_image .= '?' . time(); // UNIXTIMEのタイムスタンプをパラメータとして付与（OGPのキャッシュ対策）

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:title" content="<?php echo $_HEADER['title']; ?>">
    <meta property="og:type" content="blog">
    <meta name="twitter:card" content="summary_large_image" />
    <meta property="og:url" content="<?php echo $_HEADER['url']; ?>">
    <meta property="og:image" content="<?php echo $_HEADER['og_image'].$og_image; ?>">
    <meta property="og:site_name" content="<?php echo get_bloginfo('name'); ?>">
    <meta property="og:description" content="<?php echo $_HEADER['description']; ?>">
    <meta property="og:locale" content="ja_JP">
    <meta name="description" content="<?php echo $_HEADER['description']; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $_HEADER['title'];?></title>
    <link rel="canonical" href="<?php echo $_HEADER['url'];?>">

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <script type="text/javascript" src="//code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/wow.min.js" defer></script>
    <script src="<?php echo get_template_directory_uri();?>/js/script.js" defer></script>
    <?php wp_head(); ?>
</head>
<body>

    <header class="header">
        <div class="header-fixed">
            <h1 class="header-logo"><a href="/"><img src="<?php echo get_template_directory_uri();?>/image/logo.png" alt="極楽亭"></a></h1>
            <button type="button" class="nav-btn js-hamburger" aria-label="メニュー" aria-controls="nav" aria-expanded="false"><span></span><span></span><span></span></button>
        </div>
        <div class="nav heaader-nav">
            <nav class="nav-wrap">
                <ul class="nav-list">
                    <li class="nav-item"><a href="#">宿泊予約</a></li>
                    <li class="nav-item"><a href="#">観光情報</a></li>
                    <li class="nav-item"><a href="#">よくあるご質問</a></li>
                    <li class="nav-item"><a href="/contact/">お問い合わせ</a></li>
                </ul>
            </nav>
        </div>
    </header>