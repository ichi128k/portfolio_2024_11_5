
<?php

//Load CSS File

function my_enqueue_styles()
{
    wp_enqueue_style('ress','//unpkg.com/ress/dist/ress.min.css',array(),false,'all');
    wp_enqueue_style('style', get_stylesheet_uri(), array('ress'), false, 'all');
}
add_action('wp_enqueue_scripts', 'my_enqueue_styles');

//Load JS File
function my_enqueue_scripts()
{
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery','//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js' ,array(),'3.5.1', false );
    wp_enqueue_script('inview', get_theme_file_uri('js/jquery.inview.min.js'), array('jquery'), false, true);
    wp_enqueue_script('main', get_theme_file_uri('js/main.js'), array('jquery'), false, true);
}
add_action('wp_enqueue_scripts','my_enqueue_scripts');
add_theme_support('post-thumbnails');

/*
function pagination($pages = '', $range = 2)
{
    $showitems = ($range * 2) + 1;

    //Current page count
    global $paged;
    if(empty($paged))
    {
        $paged = 1;
    }

    //All pages count
    if($pages == '')
    {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if(!$pages)
        {
            $pages = 1;
        }
    }

    echo '<div class="pagination">';
    echo '<ul>';

    //Show page number
    for($i=1;$i <= $pages;$i++)
    {
        if(1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems ))
        {
            if($paged == $i)
            {
                echo '<li classs="active">'.$i.'</li>';
            }
            else
            {
                echo '<li><a href="'.esc_url(get_pagenum_link($i)).'">'.$i.'</a></li>';
            }
        }
    }

    echo '</ul>';
    echo '</div>';
}
*/