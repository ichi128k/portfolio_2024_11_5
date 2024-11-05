
<?php get_header();?>
        <main>
        <section id="mv" class="mv-subpage">
                <ul class="slicked">
                    <li><img class="mv-pc" src="<?php echo esc_attr(get_option("image_directory_mv1")); ?>"></li>
                    <li><img class="mv-pc" src="<?php echo esc_attr(get_option("image_directory_mv2")); ?>"></li>
                    <li><img class="mv-pc" src="<?php echo esc_attr(get_option("image_directory_mv3")); ?>"></li>
                </ul>
            </section>
            <section id="singlepage" class="max-width-restrictor">
                <?php if(have_posts()): ?>
                    <?php while(have_posts()):the_post(); ?>

                        <img src="<?php
                                        if(has_post_thumbnail())
                                        {
                                            the_post_thumbnail_url('full'); 
                                        }
                                        else
                                        {
                                            echo esc_attr(get_option("image_directory_logo"));
                                        }

                                        ?>" class="img-singlepage" style="background-color: #<?php echo get_option("color3_web");?>">
                        <h2><?php the_title(); ?></h2>
                        <p class="p-created">作成日時: <time><?php echo get_the_date(); ?></time></p>
                        <p class="p-updated">更新日時: <time><?php echo get_the_modified_date(); ?></time></p>
                        <div class="p-article">
                            <?php the_content(); ?>
                        </div>
                        <ul class="single-below">
                            <li class="back"><?php next_post_link('%link', '<p class="fas fa-arrow-left fa-lg"></p><div class="container-slidetext"><p>次の投稿へ</p></div>'); ?></li>
                            <li class="top"><a href="<?php echo esc_url(home_url('/category/news/')); ?>">投稿一覧へ</a></li>
                            <li class="next"><?php previous_post_link('%link', '<div class="container-slidetext"><p>前の投稿へ</p></div><p class="fas fa-arrow-right fa-lg"></p>'); ?></li>
                        </ul>
                    <?php endwhile; ?>
                <?php endif; ?>
            </section>
        </main>

<?php get_footer();?>