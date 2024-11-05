
<?php get_header();?>

<main>
    <?php if(have_posts()):while(have_posts()):the_post(); ?>
            <section id="mv" class="mv-subpage" style="color:#<?php echo get_option("color2_web")?>;">
                <ul class="slicked">
                    <li><img class="mv-pc" src="<?php echo esc_attr(get_option("image_directory_mv1")); ?>"></li>
                    <li><img class="mv-pc" src="<?php echo esc_attr(get_option("image_directory_mv2")); ?>"></li>
                    <li><img class="mv-pc" src="<?php echo esc_attr(get_option("image_directory_mv3")); ?>"></li>
                </ul>
                <h1 class="mv-title mv-title-sub"><?php the_title(); ?></h1>
            </section>
            <?php the_content(); ?>
            
            <?php endwhile; endif; ?>
        </main>


<?php get_footer();?>