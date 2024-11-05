<footer style="background-color: #<?php echo get_option("color1_web")?>">                          
            <div class="container-footer max-width-restrictor">
                <!-- Left Side -->
                <div class="container-footer-left">
                    <a href="<?php echo esc_url(home_url('')); ?>"><img src="<?php echo esc_attr(get_option("image_directory_logo")); ?>"></a>
                    <p style="color: #<?php echo get_option("color2_web")?>"><strong><?php echo get_option("access_title");?></strong>
<?php echo get_option("access_address");?></p>
                </div>
                <!-- Right Side -->
                <div class="container-footer-right">
                    <!-- sns -->
                    <ul class="container-sns">
                        <li><a href="<?php echo get_option("sns1_url"); ?>" style="<?php if(get_option("sns1_visible")) {echo "display:none";} ?>"><p class="fab fa-2x fa-x-twitter"></p></a></li>
                        <li><a href="<?php echo get_option("sns2_url"); ?>" style="<?php if(get_option("sns2_visible")) {echo "display:none";} ?>"><p class="fab fa-2x fa-facebook"></p></a></li>
                        <li><a href="<?php echo get_option("sns3_url"); ?>" style="<?php if(get_option("sns3_visible")) {echo "display:none";} ?>"><p class="fab fa-2x fa-instagram"></p></a></li>
                        <li><a href="<?php echo get_option("sns4_url"); ?>" style="<?php if(get_option("sns4_visible")) {echo "display:none";} ?>"><p class="fab fa-2x fa-youtube"></p></a></li>
                    </ul>
                    <ul class="container-footer-menu">
                    <li><a href="<?php echo esc_url(home_url('/category/news/')); ?>">最新・お得情報</a></li>
                    <li style="<?php if(get_option("visible_about1")) {echo "display:none";} ?>"><a href="<?php echo esc_url(home_url('#about1')); ?>"><?php echo get_option("title_about1");?></a></li>
                    <li style="<?php if(get_option("visible_about2")) {echo "display:none";} ?>"><a href="<?php echo esc_url(home_url('#about2')); ?>"><?php echo get_option("title_about2");?></a></li>
                    <li style="<?php if(get_option("visible_about3")) {echo "display:none";} ?>"><a href="<?php echo esc_url(home_url('#about3')); ?>"><?php echo get_option("title_about3");?></a></li>
                    <li style="<?php if(get_option("visible_about4")) {echo "display:none";} ?>"><a href="<?php echo esc_url(home_url('#about4')); ?>"><?php echo get_option("title_about4");?></a></li>
                    <li style="<?php if(get_option("visible_voices")) {echo "display:none";} ?>"><a href="<?php echo esc_url(home_url('#customer-voices')); ?>">お客様の声</a></li>                    
                    <li style="<?php if(get_option("visible_hours")) {echo "display:none";} ?>"><a href="<?php echo esc_url(home_url('#hours')); ?>">営業案内</a></li>                    
                    <li style="<?php if(get_option("visible_access")) {echo "display:none";} ?>"><a href="<?php echo esc_url(home_url('#access')); ?>">アクセス</a></li>
                    <li style="<?php if(get_option("visible_tel")) {echo "display:none";} ?>"><a href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a></li>
                    </ul>
                </div>                
            </div>
        </footer>

        <?php wp_footer(); ?>
    </body>
</html>