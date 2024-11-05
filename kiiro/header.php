<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title><?php echo bloginfo('name');?></title>
    <meta name="description" content="<?php bloginfo('description');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo esc_url(get_theme_file_uri('img/favicon.ico'));?>">
    
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
        <a href="<?php echo esc_url(home_url());?>"><img class="logo" src="<?php echo esc_url(get_theme_file_uri("img/logo.png"));?>"></a>
        <nav>
        <img class="logo-nav mob-only" src="<?php echo esc_url(get_theme_file_uri("img/logo_w.png"));?>">
            <ul>
                <li><a class="button" href="<?php echo esc_url(home_url("/about/"));?>">きいろについて</a></li>        
                <li class="pc-only"><a class="button" href="<?php echo esc_url(home_url("/service/"));?>">事業内容</a></li>        
                <li><a class="button" href="<?php echo esc_url(home_url("/company/"));?>">会社概要</a></li>
                <li><a class="button" href="<?php echo esc_url(home_url("/jobs/"));?>">採用情報</a></li>                
                <li class="mob-only"><a class="button" href="<?php echo esc_url(home_url("/contact/"));?>">お問い合わせ</a></li>
                <li class="mob-only"><a class="button" href="<?php echo esc_url(home_url("/service/"));?>">事業内容</a></li>
                <li class="mob-only dotted"><a class="button" href="#">児童発達支援事業<br>〇〇〇〇〇　〇〇町教室</a></li>
                <li class="mob-only dotted"><a class="button" href="#">児童発達支援事業<br>〇〇〇〇〇　〇〇町教室</a></li>
            </ul>
        </nav>
        <a href="<?php echo esc_url(home_url("/contact/"));?>" class="button contact-button">お問い合わせ</a>
        <div class="hamburger-bg mob-only"></div>
        <div class="hamburger mob-only">
            <span></span>
        </div>
    </header>