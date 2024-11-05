
<?php get_header(); ?>

<main>
  <div id="top" class="wrapper">
    <ul class="product-list">
      <?php if(have_posts()):?>
        <?php while(have_posts()):the_post();?>
          <li>
            <a href="<?php the_permalink();?>">
              <?php the_post_thumbnail();?>
              <p><?php the_title();?></p>
              <p>¥99,999+tax</p>
            </a>
          </li>
        <?php endwhile;?> 
      <?php endif;?>
    </ul>        
    <?php
          if(function_exists("pagination"))
          {
            pagination($wp_query->max_num_pages);
          }
        ?>   
  </div>
</main>
    
<?php get_footer(); ?>  