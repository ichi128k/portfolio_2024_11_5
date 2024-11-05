
<?php

//Load CSS files
function my_enqueue_styles()
{    
    wp_enqueue_style('ress',get_theme_file_uri('sanitize.css-main/sanitize.css'),array(),false,'all'); 
    wp_enqueue_style('notosansjp',"https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap",array(),false,'all'); 
    wp_enqueue_style('style', get_stylesheet_uri(), array(), false, 'all');        
    wp_enqueue_style('slick',get_theme_file_uri('js/slick-1.8.1/slick/slick.css'),array(),false,'all'); 
    wp_enqueue_style('slick-theme',get_theme_file_uri('js/slick-1.8.1/slick/slick-theme.css'),array(),false,'all'); 
    wp_enqueue_style('font-awesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css',array(),false,'all'); 
}
add_action('wp_enqueue_scripts','my_enqueue_styles');

//Load JS File
function my_enqueue_scripts()
{
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery','//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.js' ,array(),'3.5.1', false );
    wp_enqueue_script('main', get_theme_file_uri('js/main.js'), array(), false, true);
    wp_enqueue_script('slick', get_theme_file_uri('js/slick-1.8.1/slick/slick.min.js'), array(), false, true);
    wp_enqueue_script('inview', get_theme_file_uri('js/jquery.inview.min.js'), array(), false, true);
}
add_action('wp_enqueue_scripts','my_enqueue_scripts');

//
add_theme_support('post-thumbnails');

function pagination($pages = '', $range = 2) {
    $showitems = ($range * 2) + 1;
  
    // Current page
    global $paged;
    if(empty($paged)) {
      $paged = 1;
    }
  
    // Max number of pages
    if($pages == '') {
      global $wp_query;
      $pages = $wp_query->max_num_pages;
      if(!$pages) {
        $pages = 1;
      }
    }
  
    // Show the pagination if max page number is greater than 2
    if(1 != $pages) {
      echo '<div class="pagination">';
      echo '<ul>';
      // Show "Previous Page" if you are not in the first page
      if($paged > 1) {
        echo '<li class="prev"><a href="' . esc_url(get_pagenum_link($paged - 1)) . '"><p class="fas fa-arrow-left fa-lg"></p></a></li>';
      }
      else
      {
        echo '<li class="prev arrow-invalid"><p class="fas fa-arrow-left fa-lg"></p></li>';
      }
  
      // Show page number
      for ($i=1; $i <= $pages; $i++) {
        if (1 != $pages &&(!($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
          if ($paged == $i) {
            echo '<li class="active">' .$i. '</li>';
          } else {
            echo '<li><a href="' . esc_url(get_pagenum_link($i)) . '">' .$i. '</a></li>';
          }
        }
      }
  
      // Show "Next Page" if you are not in the last page
      if ($paged < $pages) {
        echo '<li class="next"><a href="' . esc_url(get_pagenum_link($paged + 1)) . '"><p class="fas fa-arrow-right fa-lg"></p></a></li>';
      }
      else
      {
        echo '<li class="next arrow-invalid"><p class="fas fa-arrow-right fa-lg"></p></li>';
      }
      echo '</ul>';
      echo '</div>';
  }
}

//Dashboard Page
/*
The `add_menu_page` function in WordPress requires a capability to determine whether a user has permission to access the menu page. Here are some common capabilities you can use:

1. **`manage_options`**: Allows access to the settings and options pages. Typically used for administrators.
2. **`edit_posts`**: Allows users to edit their own posts. Suitable for authors and contributors.
3. **`edit_pages`**: Allows users to edit pages. Typically used for editors and administrators.
4. **`publish_posts`**: Allows users to publish posts. Suitable for authors and administrators.
5. **`delete_posts`**: Allows users to delete their own posts. Suitable for authors and administrators.
6. **`edit_others_posts`**: Allows users to edit posts created by other users. Suitable for editors and administrators.
7. **`delete_others_posts`**: Allows users to delete posts created by other users. Suitable for editors and administrators.
8. **`read`**: Allows users to read the site. Suitable for all user roles.
9. **`upload_files`**: Allows users to upload files. Suitable for authors, editors, and administrators.
10. **`edit_theme_options`**: Allows users to edit theme options. Suitable for administrators.

These capabilities are part of WordPress's roles and capabilities system, which helps manage permissions for different user roles¹².

If you need more specific capabilities or have any other questions, feel free to ask!

*/
function custom_dashboard_menu() {
  add_menu_page(
      'Website images', // Page title
      'Website images', // Menu title
      'edit_pages',   // Capability
      'site-image-settings', // Menu slug
      'site_image_settings_page', // Function to display the page
      'dashicons-admin-generic', // Icon
      2 // Position
  );
  add_menu_page(
    'Website texts', // Page title
    'Website texts', // Menu title
    'edit_pages',   // Capability
    'site-text-settings', // Menu slug
    'site_text_settings_page', // Function to display the page
    'dashicons-admin-generic', // Icon
    3 // Position
  );
  add_menu_page(
    'Theme colors', // Page title
    'Theme colors', // Menu title
    'edit_pages',   // Capability
    'site-color-settings', // Menu slug
    'site_color_settings_page', // Function to display the page
    'dashicons-admin-generic', // Icon
    4 // Position
  );
}
add_action('admin_menu', 'custom_dashboard_menu');

function site_image_settings_page() {
  include get_template_directory().'\site-image-setting.php';
}
function site_text_settings_page() {
  include get_template_directory().'\site-text-setting.php';
}
function site_color_settings_page() {
  include get_template_directory().'\site-color-setting.php';
}

function custom_dashboard_enqueue() {
  wp_enqueue_media();
  wp_enqueue_script('jquery');
}
add_action('admin_enqueue_scripts', 'custom_dashboard_enqueue');

//Custom config values
function register_settings()
{
  register_setting('settings-mori', 'image_directory_logo', array(
    'type' => 'string',
    'description' => 'Logo',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));
  register_setting('settings-mori', 'image_directory_mv1', array(
    'type' => 'string',
    'description' => 'Main Visual 1',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));
    register_setting('settings-mori', 'image_directory_mv2', array(
    'type' => 'string',
    'description' => 'Main Visual 2',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));
    register_setting('settings-mori', 'image_directory_mv3', array(
    'type' => 'string',
    'description' => 'Main Visual 3',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));
  register_setting('settings-mori', 'image_directory_about1', array(
    'type' => 'string',
    'description' => 'About Image 1',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));
  register_setting('settings-mori', 'image_directory_about2', array(
    'type' => 'string',
    'description' => 'About Image 2',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));
  register_setting('settings-mori', 'image_directory_about3', array(
    'type' => 'string',
    'description' => 'About Image 3',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));
  register_setting('settings-mori', 'image_directory_about4', array(
    'type' => 'string',
    'description' => 'About Image 4',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));

  //mainvisual text of the 1st column
  register_setting('settings-mori-texts', 'mv_featured_1', array(
    'type' => 'string',
    'description' => 'mv featured 1',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));
  //mainvisual text of the 2st column
  register_setting('settings-mori-texts', 'mv_featured_2', array(
    'type' => 'string',
    'description' => 'mv featured 2',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));
  //the name of "latest" section
  register_setting('settings-mori-texts', 'title_latest', array(
    'type' => 'string',
    'description' => 'title latest',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));
  //the visibility of "latest" section
  register_setting('settings-mori-texts', 'visible_latest', array(
    'type' => 'boolean',
    'description' => 'visibility of Latest',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));
  //About 1
  register_setting('settings-mori-texts', 'title_about1', array(
    'type' => 'string',
    'description' => 'title featured 1',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));
  register_setting('settings-mori-texts', 'details_about1', array(
    'type' => 'string',
    'description' => 'details text of about1',
    'sanitize_callback' => 'sanitize_multiline_string',
    'show_in_rest' => true,
  ));
  register_setting('settings-mori-texts', 'visible_about1', array(
    'type' => 'boolean',
    'description' => 'visibility of about1',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));
  //About 2
  register_setting('settings-mori-texts', 'title_about2', array(
    'type' => 'string',
    'description' => 'title featured 2',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));
  register_setting('settings-mori-texts', 'details_about2', array(
    'type' => 'string',
    'description' => 'details text of about2',
    'sanitize_callback' => 'sanitize_multiline_string',
    'show_in_rest' => true,
  ));
  register_setting('settings-mori-texts', 'visible_about2', array(
    'type' => 'boolean',
    'description' => 'visibility of about2',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));
  //About 3
  register_setting('settings-mori-texts', 'title_about3', array(
    'type' => 'string',
    'description' => 'title featured 3',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));
  register_setting('settings-mori-texts', 'details_about3', array(
    'type' => 'string',
    'description' => 'details text of about3',
    'sanitize_callback' => 'sanitize_multiline_string',
    'show_in_rest' => true,
  ));
  register_setting('settings-mori-texts', 'visible_about3', array(
    'type' => 'boolean',
    'description' => 'visibility of about3',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));
  //About 4
  register_setting('settings-mori-texts', 'title_about4', array(
    'type' => 'string',
    'description' => 'title featured 4',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));
  register_setting('settings-mori-texts', 'details_about4', array(
    'type' => 'string',
    'description' => 'details text of about4',
    'sanitize_callback' => 'sanitize_multiline_string',
    'show_in_rest' => true,
  ));
  register_setting('settings-mori-texts', 'visible_about4', array(
    'type' => 'boolean',
    'description' => 'visibility of about4',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));

  //titles of subsection of "voices"
  register_setting('settings-mori-texts', 'voice1_voice2_title', array(
    'type' => 'string',
    'description' => 'voice1 voice2 title',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));
  register_setting('settings-mori-texts', 'voice3_voice4_title', array(
    'type' => 'string',
    'description' => 'voice3 voice4 title',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));
  register_setting('settings-mori-texts', 'voice5_voice6_title', array(
    'type' => 'string',
    'description' => 'voice5 voice6 title',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));

  //visibilities of subsection of "voices"
  register_setting('settings-mori-texts', 'voice1_voice2_visible', array(
    'type' => 'boolean',
    'description' => 'voice1 voice2 visible',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));
  register_setting('settings-mori-texts', 'voice3_voice4_visible', array(
    'type' => 'boolean',
    'description' => 'voice3 voice4 visible',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));
  register_setting('settings-mori-texts', 'voice5_voice6_visible', array(
    'type' => 'boolean',
    'description' => 'voice5 voice6 visible',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));

  //review 1 of "about this business"
  register_setting('settings-mori-texts', 'voice1_profile', array(
    'type' => 'string',
    'description' => 'profile voice1',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));
  register_setting('settings-mori-texts', 'voice1_heading', array(
    'type' => 'string',
    'description' => 'heading voice1',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));
  register_setting('settings-mori-texts', 'voice1_details', array(
    'type' => 'string',
    'description' => 'details voice1',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));
  //review 2 of "about this business"
  register_setting('settings-mori-texts', 'voice2_profile', array(
    'type' => 'string',
    'description' => 'profile voice2',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));
  register_setting('settings-mori-texts', 'voice2_heading', array(
    'type' => 'string',
    'description' => 'heading voice2',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));
  register_setting('settings-mori-texts', 'voice2_details', array(
    'type' => 'string',
    'description' => 'details voice2',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));
  //review 3 of "about this business"
  register_setting('settings-mori-texts', 'voice3_profile', array(
    'type' => 'string',
    'description' => 'profile voice3',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));
  register_setting('settings-mori-texts', 'voice3_heading', array(
    'type' => 'string',
    'description' => 'heading voice3',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));
  register_setting('settings-mori-texts', 'voice3_details', array(
    'type' => 'string',
    'description' => 'details voice3',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));
  //review 4 of "about this business"
  register_setting('settings-mori-texts', 'voice4_profile', array(
    'type' => 'string',
    'description' => 'profile voice4',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));
  register_setting('settings-mori-texts', 'voice4_heading', array(
    'type' => 'string',
    'description' => 'heading voice4',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));
  register_setting('settings-mori-texts', 'voice4_details', array(
    'type' => 'string',
    'description' => 'details voice4',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));
  //review 5 of "about this business"
  register_setting('settings-mori-texts', 'voice5_profile', array(
    'type' => 'string',
    'description' => 'profile voice5',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));
  register_setting('settings-mori-texts', 'voice5_heading', array(
    'type' => 'string',
    'description' => 'heading voice5',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));
  register_setting('settings-mori-texts', 'voice5_details', array(
    'type' => 'string',
    'description' => 'details voice5',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));
  //review 6 of "about this business"
  register_setting('settings-mori-texts', 'voice6_profile', array(
    'type' => 'string',
    'description' => 'profile voice6',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));
  register_setting('settings-mori-texts', 'voice6_heading', array(
    'type' => 'string',
    'description' => 'heading voice6',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));
  register_setting('settings-mori-texts', 'voice6_details', array(
    'type' => 'string',
    'description' => 'details voice6',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));
  //the visibility of "voices" section
  register_setting('settings-mori-texts', 'visible_voices', array(
    'type' => 'boolean',
    'description' => 'visibility of Voices',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));
  //the visibility of "hours" section
  register_setting('settings-mori-texts', 'hours_details', array(
    'type' => 'string',
    'description' => 'hours details',
    'sanitize_callback' => 'sanitize_multiline_string',
    'show_in_rest' => true,
  ));
  //the visibility of "notice" section
  register_setting('settings-mori-texts', 'hours_notice', array(
    'type' => 'string',
    'description' => 'hours notice',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));
  //the visibility of "hours" section
  register_setting('settings-mori-texts', 'visible_hours', array(
    'type' => 'boolean',
    'description' => 'visibility of hours',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));
  //the upper section of "access" section
  register_setting('settings-mori-texts', 'access_title', array(
    'type' => 'string',
    'description' => 'access title',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));
  //the address
  register_setting('settings-mori-texts', 'access_address', array(
    'type' => 'string',
    'description' => 'access address',
    'sanitize_callback' => 'sanitize_multiline_string',
    'show_in_rest' => true,
  ));
  //the access
  register_setting('settings-mori-texts', 'access_howto', array(
    'type' => 'string',
    'description' => 'access howto',
    'sanitize_callback' => 'sanitize_multiline_string',
    'show_in_rest' => true,
  ));
  //the visibility of "access" section
  register_setting('settings-mori-texts', 'visible_access', array(
    'type' => 'boolean',
    'description' => 'visibility of access',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true, 
  ));
  //the telephone number
  register_setting('settings-mori-texts', 'tel_num', array(
    'type' => 'string',
    'description' => 'tel num',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));
  //the text on top of the telephone number
  register_setting('settings-mori-texts', 'tel_upper', array(
    'type' => 'string',
    'description' => 'tel upper',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));
  //the text on bottom of the telephone number
  register_setting('settings-mori-texts', 'tel_lower', array(
    'type' => 'string',
    'description' => 'tel lower',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));
  //the visibility of "reservation (telephone number)" section
  register_setting('settings-mori-texts', 'visible_tel', array(
    'type' => 'boolean',
    'description' => 'visibility of tel',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true, 
  ));

  //SNS 1
  register_setting('settings-mori-texts', 'sns1_url', array(
    'type' => 'string',
    'description' => 'SNS1 URL',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));
  register_setting('settings-mori-texts', 'sns1_visible', array(
    'type' => 'boolean',
    'description' => 'visibility of SNS1',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));

  //SNS 2
  register_setting('settings-mori-texts', 'sns2_url', array(
    'type' => 'string',
    'description' => 'SNS1 URL',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));
  register_setting('settings-mori-texts', 'sns2_visible', array(
    'type' => 'boolean',
    'description' => 'visibility of SNS2',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));

  //SNS 3
  register_setting('settings-mori-texts', 'sns3_url', array(
    'type' => 'string',
    'description' => 'SNS3 URL',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));
  register_setting('settings-mori-texts', 'sns3_visible', array(
    'type' => 'boolean',
    'description' => 'visibility of SNS3',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));

  //SNS 4
  register_setting('settings-mori-texts', 'sns4_url', array(
    'type' => 'string',
    'description' => 'SNS4 URL',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));
  register_setting('settings-mori-texts', 'sns4_visible', array(
    'type' => 'boolean',
    'description' => 'visibility of SNS4',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));

  //the visibility of "below bar"
  register_setting('settings-mori-texts', 'belowbar_visible', array(
    'type' => 'boolean',
    'description' => 'visibility of Below bar',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));

  //theme color 1
  register_setting('settings-mori-colors', 'color1_web', array(
    'type' => 'string',
    'description' => 'color 1',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));

  //theme color 2
  register_setting('settings-mori-colors', 'color2_web', array(
    'type' => 'string',
    'description' => 'color 2',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));

  //theme color 3
  register_setting('settings-mori-colors', 'color3_web', array(
    'type' => 'string',
    'description' => 'color 3',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));

  //for radio buttons
  register_setting('settings-mori-colors', 'themecolor', array(
    'type' => 'string',
    'description' => 'theme color',
    'sanitize_callback' => 'sanitize_text_field',
    'show_in_rest' => true,
  ));

  //tag for the embed section
  register_setting('settings-mori-texts', 'embed', array(
    'type' => 'string',
    'description' => 'embed',
    'sanitize_callback' => 'sanitize_tag_string',
    'show_in_rest' => true,
  ));
}
add_action('admin_init', 'register_settings');

function sanitize_multiline_string($input) {
  // Sanitize each line of the input
  $lines = explode("\n", $input);
  return implode("\n", $lines);
}

function sanitize_tag_string($input) {
  // Sanitize each line of the input
  $lines = explode("\n", $input);
  $newstr = implode("\n", $lines);
  $newstr = str_replace("'",'"',$newstr);

  return $newstr;
}

function remove_menus()
{
  //remove_menu_page("");

}
add_action("admin_menu","remove_menus");


/*
Parameters of register_setting
option_group (string, required):
The name of the settings group. This should correspond to an allowed option key name, such as ‘general’, ‘discussion’, ‘media’, ‘reading’, ‘writing’, and ‘options’.
option_name (string, required):
The name of the option to sanitize and save.
args (array, optional):
An array of arguments used to describe the setting when registered. Here are some of the key arguments:
type (string): The type of data associated with this setting. Valid values are ‘string’, ‘boolean’, ‘integer’, ‘number’, ‘array’, and ‘object’.
label (string): A label for the data attached to this setting.
description (string): A description of the data attached to this setting.
sanitize_callback (callable): A callback function that sanitizes the option’s value.
show_in_rest (bool|array): Whether data associated with this setting should be included in the REST API. When registering complex settings, this argument may optionally be an array with a ‘schema’ key.
default (mixed): The default value when calling get_option()1.
*/

/*
function register_endpoint() {
  register_rest_route('mori/v1', '/settings', array(
      'methods' => 'POST',
      'callback' => 'register_endpoint_callback',
      'permission_callback' => function () {
          return current_user_can('manage_options');
      }
  ));
}
add_action('rest_api_init', 'register_endpoint');

function register_endpoint_callback(WP_REST_Request $request) {
  $new_value = $request->get_param('image_directory_mv');
  if ($new_value) {
      update_option('image_directory_mv', sanitize_text_field($new_value));
      return new WP_REST_Response('Setting updated', 200);
  }
  return new WP_REST_Response('Invalid setting value', 400);
}
*/