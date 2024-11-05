
<?php
if (!current_user_can('edit_pages')) {
    wp_die(__('You do not have sufficient permissions to access this page.'));
}
?>

<form method="POST" action="options.php">

<h1>Website image settings</h1> 
    <p>Logo</p> 
    <button id="upload_image_button_logo">select an image</button> 
    <input type="hidden" id="image_directory_logo" name="image_directory_logo" value="<?php echo esc_attr(get_option("image_directory_logo")); ?>" /> 
    <img id="image_preview_logo" src="<?php echo esc_attr(get_option("image_directory_logo")); ?>" style="width: 100px; height: 100px; object-fit: cover;" /> 

    <p>Main visual 1</p> 
    <button id="upload_image_button_mv1">select an image</button> 
    <input type="hidden" id="image_directory_mv1" name="image_directory_mv1" value="<?php echo esc_attr(get_option("image_directory_mv1")); ?>" /> 
    <img id="image_preview_mv1" src="<?php echo esc_attr(get_option("image_directory_mv1")); ?>" style="width: 100px; height: 100px; object-fit: cover;" /> 

    <p>Main visual 2</p> 
    <button id="upload_image_button_mv2">select an image</button> 
    <input type="hidden" id="image_directory_mv2" name="image_directory_mv2" value="<?php echo esc_attr(get_option("image_directory_mv2")); ?>" /> 
    <img id="image_preview_mv2" src="<?php echo esc_attr(get_option("image_directory_mv2")); ?>" style="width: 100px; height: 100px; object-fit: cover;" /> 

    <p>Main visual 3</p> 
    <button id="upload_image_button_mv3">select an image</button> 
    <input type="hidden" id="image_directory_mv3" name="image_directory_mv3" value="<?php echo esc_attr(get_option("image_directory_mv3")); ?>" /> 
    <img id="image_preview_mv3" src="<?php echo esc_attr(get_option("image_directory_mv3")); ?>" style="width: 100px; height: 100px; object-fit: cover;" /> 


    <p>background of "About"</p> 
    <button id="upload_image_button_b1">select an image</button> 
    <input type="hidden" id="image_directory_about1" name="image_directory_about1" value="<?php echo esc_attr(get_option("image_directory_about1")); ?>" /> 
    <img id="image_preview_b1" src="<?php echo esc_attr(get_option("image_directory_about1")); ?>" style="width: 100px; height: 100px; object-fit: cover;" /> 

    <p>background of "Yoga"</p> 
    <button id="upload_image_button_b2">select an image</button> 
    <input type="hidden" id="image_directory_about2" name="image_directory_about2" value="<?php echo esc_attr(get_option("image_directory_about2")); ?>" /> 
    <img id="image_preview_b2" src="<?php echo esc_attr(get_option("image_directory_about2")); ?>" style="width: 100px; height: 100px; object-fit: cover;" /> 

    <p>background of "Massage"</p> 
    <button id="upload_image_button_b3">select an image</button> 
    <input type="hidden" id="image_directory_about3" name="image_directory_about3" value="<?php echo esc_attr(get_option("image_directory_about3")); ?>" /> 
    <img id="image_preview_b3" src="<?php echo esc_attr(get_option("image_directory_about3")); ?>" style="width: 100px; height: 100px; object-fit: cover;" /> 

    <p>background of "Yoga on your home"</p> 
    <button id="upload_image_button_b4">select an image</button> 
    <input type="hidden" id="image_directory_about4" name="image_directory_about4" value="<?php echo esc_attr(get_option("image_directory_about4")); ?>" /> 
    <img id="image_preview_b4" src="<?php echo esc_attr(get_option("image_directory_about4")); ?>" style="width: 100px; height: 100px; object-fit: cover;" /> 

    <?php settings_fields( 'settings-mori' ); ?>
    <?php do_settings_sections( 'settings-mori' ); ?>
    <?php submit_button(); ?> 
</form>

<script>
jQuery(document).ready(function($){
    var mediaUploader_logo;
    var mediaUploader_mv1;
    var mediaUploader_mv2;
    var mediaUploader_mv3;
    var mediaUploader_a1;
    var mediaUploader_a2;
    var mediaUploader_a3;
    var mediaUploader_a4;

    $('#upload_image_button_logo').click(function(e) {
        loadImage(e, "#image_directory_logo", "#image_preview_logo", mediaUploader_logo);
    });
    $('#upload_image_button_mv1').click(function(e) {
        loadImage(e, "#image_directory_mv1", "#image_preview_mv1", mediaUploader_mv1);
    });
    $('#upload_image_button_mv2').click(function(e) {
        loadImage(e, "#image_directory_mv2", "#image_preview_mv2", mediaUploader_mv2);
    });
    $('#upload_image_button_mv3').click(function(e) {
        loadImage(e, "#image_directory_mv3", "#image_preview_mv3", mediaUploader_mv3);
    });
    $('#upload_image_button_b1').click(function(e) {
        loadImage(e, "#image_directory_about1", "#image_preview_b1", mediaUploader_a1);
    });
    $('#upload_image_button_b2').click(function(e) {
        loadImage(e, "#image_directory_about2", "#image_preview_b2", mediaUploader_a2);
    });
    $('#upload_image_button_b3').click(function(e) {
        loadImage(e, "#image_directory_about3", "#image_preview_b3", mediaUploader_a3);
    });
    $('#upload_image_button_b4').click(function(e) {
        loadImage(e, "#image_directory_about4", "#image_preview_b4", mediaUploader_a4);
    });

    function loadImage(e, inputElement, imgElement, mu)
    {
        e.preventDefault();
        if (mu) {
            mu.open();
            return;
        }

        mu = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });

        mu.on('select', function() {
            var attachment = mu.state().get('selection').first().toJSON();

            $(inputElement).val(attachment.url);
            $(imgElement).attr('src', attachment.url);
        });
        mu.open();
    }

});
</script>