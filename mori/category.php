
<?php get_header(); ?>

<main>
    <section id="mv" class="mv-subpage">
                <ul class="slicked">
                    <li><img class="mv-pc" src="<?php echo esc_attr(get_option("image_directory_mv1")); ?>"></li>
                    <li><img class="mv-pc" src="<?php echo esc_attr(get_option("image_directory_mv2")); ?>"></li>
                    <li><img class="mv-pc" src="<?php echo esc_attr(get_option("image_directory_mv3")); ?>"></li>
                </ul>
                <h1 class="mv-title mv-title-sub" style="color:#<?php echo get_option("color2_web")?>;"><?php echo get_option("title_latest");?></h1>
            </section>
            <section id="pagelist">
                <ul class="ul-pages max-width-restrictor">
                    <?php if(have_posts()): ?>
                        <?php while(have_posts()):the_post(); ?>
                            <li>
                                <a href="<?php the_permalink(); ?>">
                                    <div class="image-container" style="background-color: #<?php echo get_option("color3_web");?>">
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
                                    </div>
                                    <div class="pagelist-details">
                                        <p><time></time></p>
                                        <h2><?php the_title(); ?></h2>
                                        <p class="pagelist-comments">
                                            <?php
                                                $article = get_the_excerpt();
                                                $wordcount = 110;
                                                if(mb_strlen($article, "UTF-8") > $wordcount)
                                                {
                                                    $article = mb_substr($article, 0, $wordcount, "UTF-8");
                                                    echo $article."...";
                                                }
                                                else
                                                {
                                                    echo $article; 
                                                }
                                            ?>
                                        </p>
                                        <p class="pagelist-more-items">
                                            もっと見る
                                        </p>                          
                                    </div>                          
                                </a>
                            </li>
                        <?php endwhile; ?>

                        <?php
                        if(function_exists("pagination"))
                        {
                            pagination($wp_query->max_num_pages);
                        }

                        ?>
                    <?php endif; ?>
                </ul>
            </section>

</main>

<?php get_footer(); ?>
