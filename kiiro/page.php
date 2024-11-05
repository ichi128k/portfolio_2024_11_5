

<?php get_header(); ?>
    <main>
        <div class="hero">
            <img class="mainvisual pc-only" src="<?php echo esc_url(get_theme_file_uri('img/page_mv01.png'));?>">
            <img class="mainvisual mob-only" src="<?php echo esc_url(get_theme_file_uri('img/page_mv01.png'));?>">
        </div>
        <div class="container">
          <?php the_content();?>
        </div>
    </main>
<?php get_footer(); ?>  