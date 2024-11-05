<?php get_header(); ?>

<main>
      <div class="content wrapper">
        <h1 class="page-title"><?php the_title();?></h1>
        <div id="item">
          <div class="item-img">
            <?php the_post_thumbnail();?>
          </div>
          <div class="item-text">
            <?php the_content();?>
          </div>
        </div>
        <a class="link-text" href="<?php echo esc_url(home_url("/category/Products/"));?>">Back To Products</a>
      </div>
    </main>

<?php get_footer(); ?>