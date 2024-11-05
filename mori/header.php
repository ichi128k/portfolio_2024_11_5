<!DOCTYPE html>
<html lang="ja">
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <meta charset="utf-8">
        <title><?php echo bloginfo("name") ?> | <?php 
        
        if(is_front_page())
        { 
            echo get_bloginfo("description");
        }
        else if(is_category())
        { 
            echo "最新・お得情報";
        }
        else if(is_single())
        {
            echo get_the_title();
        }
        else
        {
            echo get_the_title();
        }
        
        ?></title>
        <meta name="description" content="<?php echo bloginfo("description")?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="<?php echo esc_url(get_theme_file_uri("img/favicon.ico"));?>">

        <style>
            header
            {
                background-color: #<?php echo get_option("color1_web")?>aa;
            }
            input[type="checkbox"]::after
            {
                background-color: #<?php echo get_option("color3_web")?>;
            }
            
            .container-footer-menu a:hover
            {
                color: #<?php echo get_option("color3_web")?>;
            }
            .td-arrow::before 
            {
                background-color: #<?php echo get_option("color3_web")?>;
            }
            textarea::-webkit-scrollbar-thumb
            {
                background-color: #<?php echo get_option("color3_web")?>;
            }
            .td-arrow-textarea::before 
            {
                background-color: #<?php echo get_option("color1_web")?>;
            }
            .td-arrow-textarea::after 
            {
                background-color: #<?php echo get_option("color3_web")?>;
            }
            .wpcf7-submit:hover
            {
                color: #<?php echo get_option("color2_web")?>;
            }

            .latest-more-items a::before, 
            .latest-more-items a::after
            {
                background-color:#<?php echo get_option("color1_web")?>;
            }
            .container-voice .container-voice-comment::before,
            .container-voice.reversed .container-voice-comment::before
            {
                background-color:#<?php echo get_option("color1_web")?>;
            }
            .container-footer-menu a
            {
                color:#<?php echo get_option("color2_web")?>;
            }
            .ul-pages li a .pagelist-details .pagelist-more-items::before, 
            .ul-pages li a .pagelist-details .pagelist-more-items::after
            {
                background-color: #<?php echo get_option("color1_web")?>;
            }
            #form .container-table
            {
                border:2px solid #<?php echo get_option("color1_web")?>;
            }
            select, input, textarea
            {
                background-color: #<?php echo get_option("color1_web")?>;
                color: #<?php echo get_option("color2_web")?>;
            }
            input[type="checkbox"]::before
            {
                background-color: #<?php echo get_option("color1_web")?>;
            }
            textarea::-webkit-scrollbar-thumb
            {
                border:4px solid #<?php echo get_option("color1_web")?>;
            }
            .container-button
            {
                border: 2px solid #<?php echo get_option("color1_web")?>;
            }
            .wpcf7-submit
            {
                color: #<?php echo get_option("color1_web")?>;
            }
            .container-button .button-bg
            {
                background-color: #<?php echo get_option("color1_web")?>;
            }
            .container-button:hover .button-bg
            {
                background-color: #<?php echo get_option("color1_web")?>;
            }
            .wpcf7-not-valid-tip
            {
                color: #<?php echo get_option("color1_web")?> !important;
            }
            @media screen and (max-width:900px)
            {
                header.open.mvmode
                {
                    background-color: #<?php echo get_option("color3_web")?>aa;
                }
                .hamburger::before, .hamburger::after, .hamburger span::before
                {
                    background-color: #<?php echo get_option("color2_web")?>;
                }
                #form .container-table
                {
                    border:2px solid #<?php echo get_option("color2_web")?>;
                }
            }

        </style>

        <?php wp_head();?>
    </head>
    <body style="color:#<?php echo get_option("color1_web")?>; background-color:#<?php echo get_option("color2_web")?>;">
        <header>
            <!-- logo -->
            <a href="<?php echo esc_url(home_url('')); ?>"><img class="img-logo_header" src="<?php echo esc_attr(get_option("image_directory_logo")); ?>"></a>
            <!-- menu -->
            <nav class="nav-header">
                <ul style="color:#<?php echo get_option("color2_web")?>;">
                    <li><a class="close_menu" href="<?php echo esc_url(home_url('/category/news/')); ?>"><?php echo get_option("title_latest");?></a></li>
                    <li style="<?php if(get_option("visible_about1")) {echo "display:none";} ?>"><a class="close_menu" href="<?php echo esc_url(home_url('#about1')); ?>"><?php echo get_option("title_about1");?></a></li>
                    <li style="<?php if(get_option("visible_about2")) {echo "display:none";} ?>"><a class="close_menu" href="<?php echo esc_url(home_url('#about2')); ?>"><?php echo get_option("title_about2");?></a></li>
                    <li style="<?php if(get_option("visible_about3")) {echo "display:none";} ?>"><a class="close_menu" href="<?php echo esc_url(home_url('#about3')); ?>"><?php echo get_option("title_about3");?></a></li>
                    <li style="<?php if(get_option("visible_about4")) {echo "display:none";} ?>"><a class="close_menu" href="<?php echo esc_url(home_url('#about4')); ?>"><?php echo get_option("title_about4");?></a></li>
                    <li style="<?php if(get_option("visible_voices")) {echo "display:none";} ?>"><a class="close_menu" href="<?php echo esc_url(home_url('#customer-voices')); ?>">お客様の声</a></li>                    
                    <li style="<?php if(get_option("visible_hours")) {echo "display:none";} ?>"><a class="close_menu" href="<?php echo esc_url(home_url('#hours')); ?>">営業案内</a></li>
                    <li style="<?php if(get_option("visible_access")) {echo "display:none";} ?>"><a class="close_menu" href="<?php echo esc_url(home_url('#access')); ?>">アクセス</a></li>
                    <li style="<?php if(get_option("visible_tel")) {echo "display:none";} ?>"><a href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a></li>
                </ul>
            </nav>
            <div class="hamburger">
                <span></span>
            </div>
            <!-- sns -->
            <ul class="container-sns">
                <li><a href="<?php echo get_option("sns1_url"); ?>" style="<?php if(get_option("sns1_visible")) {echo "display:none";} ?>"><p class="fab fa-2x fa-x-twitter"></p></a></li>
                <li><a href="<?php echo get_option("sns2_url"); ?>" style="<?php if(get_option("sns2_visible")) {echo "display:none";} ?>"><p class="fab fa-2x fa-facebook"></p></a></li>
                <li><a href="<?php echo get_option("sns3_url"); ?>" style="<?php if(get_option("sns3_visible")) {echo "display:none";} ?>"><p class="fab fa-2x fa-instagram"></p></a></li>
                <li><a href="<?php echo get_option("sns4_url"); ?>" style="<?php if(get_option("sns4_visible")) {echo "display:none";} ?>"><p class="fab fa-2x fa-youtube"></p></a></li>
            </ul>
        </header>
        <a class="belowbar visible-pc" href="<?php 
                echo "tel:".preg_replace("/\D/","",get_option("tel_num"));
                ?>">
            <div style="background-color:#<?php echo get_option("color3_web")?>; <?php if(get_option("belowbar_visible")) {echo "display:none";} ?>">
                <p class="belowbar-come" style="color: #<?php echo get_option("color2_web")?>"><?php echo get_option("tel_lower");?></p>
                <p class="belowbar-reservation" style="color: #<?php echo get_option("color2_web")?>"><?php echo get_option("tel_upper");?></p>
                <p class="belowbar-number" style="color:#<?php echo get_option("color2_web")?>;"><span class="fas fa-phone"></span> <?php echo get_option("tel_num");?></p>
            </div>
        </a>
        <div class="to-the-top open" style="background-color:#<?php echo get_option("color3_web")?>;">
            <p class="fas fa-arrow-up fa-lg" style="color: #<?php echo get_option("color2_web")?>"></p>
        </div>
        <div class="sns-toggle" style="background-color:#<?php echo get_option("color3_web")?>; <?php if(get_option("sns1_visible") && get_option("sns2_visible") && get_option("sns3_visible") && get_option("sns4_visible")) {echo "display:none";}?>">
            <p style="color: #<?php echo get_option("color2_web")?>">SNS</p>
        </div>