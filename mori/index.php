<?php get_header(); ?>

<?php
    $args = array("cat" => 1,"posts_per_page" => 6);
    $query = new WP_Query($args);
?>

<main>
            <section id="mv" style="color:#<?php echo get_option("color2_web")?>;">
                <ul class="slicked">
                    <li><img class="mv-pc" src="<?php echo esc_attr(get_option("image_directory_mv1")); ?>"></li>
                    <li><img class="mv-pc" src="<?php echo esc_attr(get_option("image_directory_mv2")); ?>"></li>
                    <li><img class="mv-pc" src="<?php echo esc_attr(get_option("image_directory_mv3")); ?>"></li>
                </ul>
                <p class="mv-title"><?php echo get_option("mv_featured_1");?></p>
                <p class="mv-title mv-title2"><?php echo get_option("mv_featured_2");?></p>
            </section>
            <section id="latest">
                <h1 class="heading-general"><?php echo get_option("title_latest");?></h1>
                <div class="container-latest">
                    <ul class="ul-latestnews">
                        <?php if($query->have_posts()): ?>
                        <?php $cnt = 0;?>
                            <?php while($query->have_posts()):$query->the_post(); ?>
                                <li>
                                    <a href="<?php the_permalink(); ?>" style="background-color: #<?php echo get_option("color3_web");?>">
                                        <img src="<?php
                                        if(has_post_thumbnail())
                                        {
                                            the_post_thumbnail_url('full'); 
                                        }
                                        else
                                        {
                                            echo esc_attr(get_option("image_directory_logo"));
                                        }
                                        ?>">
                                        <p class="p-postdate" style="color: #<?php echo get_option("color2_web");?>;"><time><?php echo get_the_modified_date(); ?></time></p>
                                        <p class="p-latesttitle" style="color: #<?php echo get_option("color2_web");?>;"><?php the_title(); ?></p>    
                                    </a>
                                </li>
                                <?php 
                                    $cnt++;
                                    if($cnt >= 6)
                                    {
                                        break;
                                    }
                                ?>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata();?>
                        <?php endif; ?>
                    </ul>
                    <p class="latest-more-items"><a href="<?php echo esc_url(home_url('/category/uncategorized/')); ?>">もっと見る</a></p>    
                </div>
            </section>
            <section id="about1" style="color:#<?php echo get_option("color2_web");?>; background-image: url('<?php echo get_option("image_directory_about1")?>'); <?php if(get_option("visible_about1")) {echo "display:none";} ?>">
                <div class="about-blur_filter"></div>
                <div class="max-width-restrictor max-width-restrictor-about">
                    <h1 class="heading-about"><?php echo get_option("title_about1");?></h1>
                    <p class="p-about-details"><?php echo esc_attr(get_option("details_about1")); ?></p>
                </div>
            </section>
            <section id="about2" style="color:#<?php echo get_option("color2_web");?>; background-image: url('<?php echo get_option("image_directory_about2")?>'); <?php if(get_option("visible_about2")) {echo "display:none";} ?>">
                <div class="about-blur_filter"></div>
                <div class="max-width-restrictor max-width-restrictor-about">
                    <h1 class="heading-about"><?php echo get_option("title_about2");?></h1>
                    <p class="p-about-details"><?php echo esc_attr(get_option("details_about2")); ?></p>
                </div>
            </section>
            <section id="about3" style="color:#<?php echo get_option("color2_web");?>; background-image: url('<?php echo get_option("image_directory_about3")?>'); <?php if(get_option("visible_about3")) {echo "display:none";} ?>">
                <div class="about-blur_filter"></div>
                <div class="max-width-restrictor max-width-restrictor-about">
                    <h1 class="heading-about"><?php echo get_option("title_about3");?></h1>
                    <p class="p-about-details"><?php echo esc_attr(get_option("details_about3")); ?></p>
                </div>
            </section>
            <section id="about4" style="color:#<?php echo get_option("color2_web");?>; background-image: url('<?php echo get_option("image_directory_about4")?>'); <?php if(get_option("visible_about4")) {echo "display:none";} ?>">
                <div class="about-blur_filter"></div>
                <div class="max-width-restrictor max-width-restrictor-about">
                    <h1 class="heading-about"><?php echo get_option("title_about4");?></h1>
                    <p class="p-about-details"><?php echo esc_attr(get_option("details_about4")); ?></p>
                </div>
            </section>
            <section id="customer-voices" style="<?php  if(get_option("visible_voices")) {echo "display:none";}?>">
                <h1 class="heading-general">お客様の声</h1>
                    <div class="max-width-restrictor">
                        <section class="section-voice" style="<?php  if(get_option("voice1_voice2_visible")) {echo "display:none";}?>">
                            <h2><?php echo get_option("voice1_voice2_title");?></h2>
                            <div class="container-voice">
                                <div class="container-voice-comment" style="background-color:#<?php echo get_option("color1_web")?>; color: #<?php echo get_option("color2_web")?>">
                                    <h3><?php echo get_option("voice1_heading");?></h3>
                                    <p><?php echo get_option("voice1_details");?></p>
                                </div>
                                <div class="container-voice-icon">
                                    <p style="color: #<?php echo get_option("color3_web")?>; background-color: #<?php echo get_option("color1_web")?>"><span class="fas fa-user"></span></p>
                                    <p style="color: #<?php echo get_option("color1_web")?>"><?php echo get_option("voice1_profile");?></p>
                                </div>
                            </div>
                            <div class="container-voice reversed">
                                <div class="container-voice-comment" style="background-color:#<?php echo get_option("color1_web")?>; color: #<?php echo get_option("color2_web")?>">
                                    <h3><?php echo get_option("voice2_heading");?></h3>
                                    <p><?php echo get_option("voice2_details");?></p>
                                </div>
                                <div class="container-voice-icon">
                                    <p style="color: #<?php echo get_option("color3_web")?>; background-color: #<?php echo get_option("color1_web")?>"><span class="fas fa-user"></span></p>
                                    <p style="color: #<?php echo get_option("color1_web")?>"><?php echo get_option("voice2_profile");?></p>
                                </div>
                            </div>
                        </section>
                        <section class="section-voice" style="<?php  if(get_option("voice3_voice4_visible")) {echo "display:none";}?>">
                            <h2><?php echo get_option("voice3_voice4_title");?></h2>
                            <div class="container-voice">
                                <div class="container-voice-comment" style="background-color:#<?php echo get_option("color1_web")?>; color: #<?php echo get_option("color2_web")?>">
                                    <h3><?php echo get_option("voice3_heading");?></h3>
                                    <p><?php echo get_option("voice3_details");?></p>
                                </div>
                                <div class="container-voice-icon">
                                    <p style="color: #<?php echo get_option("color3_web")?>;  background-color: #<?php echo get_option("color1_web")?>"><span class="fas fa-user"></span></p>
                                    <p style="color: #<?php echo get_option("color1_web")?>"><?php echo get_option("voice3_profile");?></p>
                                </div>                         
                            </div>
                            <div class="container-voice reversed">
                                <div class="container-voice-comment" style="background-color:#<?php echo get_option("color1_web")?>; color: #<?php echo get_option("color2_web")?>">
                                    <h3><?php echo get_option("voice4_heading");?></h3>
                                    <p><?php echo get_option("voice4_details");?></p>
                                </div>
                                <div class="container-voice-icon">
                                    <p style="color: #<?php echo get_option("color3_web")?>;  background-color: #<?php echo get_option("color1_web")?>"><span class="fas fa-user"></span></p>
                                    <p style="color: #<?php echo get_option("color1_web")?>"><?php echo get_option("voice4_profile");?></p>
                                </div>                     
                            </div>
                        </section>
                        <section class="section-voice" style="<?php  if(get_option("voice5_voice6_visible")) {echo "display:none";}?>">
                            <h2><?php echo get_option("voice5_voice6_title");?></h2>
                            <div class="container-voice">
                                <div class="container-voice-comment" style="background-color:#<?php echo get_option("color1_web")?>; color: #<?php echo get_option("color2_web")?>">
                                    <h3><?php echo get_option("voice5_heading");?></h3>
                                    <p><?php echo get_option("voice5_details");?></p>
                                </div>
                                <div class="container-voice-icon">
                                    <p style="color: #<?php echo get_option("color3_web")?>; background-color: #<?php echo get_option("color1_web")?>"><span class="fas fa-user"></span></p>
                                    <p style="color: #<?php echo get_option("color1_web")?>"><?php echo get_option("voice5_profile");?></p>
                                </div>                       
                            </div>
                            <div class="container-voice reversed">
                                <div class="container-voice-comment" style="background-color:#<?php echo get_option("color1_web")?>; color: #<?php echo get_option("color2_web")?>">
                                    <h3><?php echo get_option("voice6_heading");?></h3>
                                    <p><?php echo get_option("voice6_details");?></p>
                                </div>
                                <div class="container-voice-icon">
                                    <p style="color: #<?php echo get_option("color3_web")?>; background-color: #<?php echo get_option("color1_web")?>"><span class="fas fa-user"></span></p>
                                    <p style="color: #<?php echo get_option("color1_web")?>"><?php echo get_option("voice6_profile");?></p>
                                </div>             
                            </div>
                        </section>
                    </div>
            </section>
            <section id="hours" style="<?php  if(get_option("visible_hours")) {echo "display:none";}?>">
                <div class="max-width-restrictor">
                    <h1 class="heading-general">営業案内</h1>
                    <p class="p-hours"><?php echo get_option("hours_details");?></p>
                    <p class="p-hours_notice"><strong><?php echo get_option("hours_notice");?></strong></p>
                </div>
            </section>
            <section id="access" style="<?php  if(get_option("visible_access")) {echo "display:none";}?>">
                <h1 class="heading-general">アクセス</h1>
                <div class="container-access max-width-restrictor">
                    <p><strong><?php echo get_option("access_title");?></strong>

<?php echo get_option("access_address");?>



<strong>交通のご案内</strong>

<?php echo get_option("access_howto");?></p>
                    <!-- embed google map here -->
                    <div class="container-map">
                        <?php echo get_option("embed"); ?>
                    </div>
                </div>
            </section>
            <section id="contact" style="<?php  if(get_option("visible_tel")) {echo "display:none";}?>">
                <h1 class="heading-general">ご予約・お問い合わせ</h1>
                <a class="button-contact max-width-restrictor" style="background-color:#<?php echo get_option("color1_web")?>;" href="<?php 
                echo "tel:".preg_replace("/\D/","",get_option("tel_num"));
                ?>">
                    <p class="p-button-contact-reserve" style="color: #<?php echo get_option("color3_web").";"; if (!get_option("tel_upper")) {echo "margin-bottom: 26px;";} ?>"><?php echo get_option("tel_upper");?></p>
                    <p class="p-button-contact-number" style="color: #<?php echo get_option("color2_web")?>; "><span class="fas fa-phone"></span> <?php echo get_option("tel_num");?></p>
                </a>
                <p class="p-withreservation"><?php echo get_option("tel_lower");?></p>
            </section>
        </main>

<?php get_footer();?>