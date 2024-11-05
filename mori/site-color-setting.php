
<?php
if (!current_user_can('edit_pages')) {
    wp_die(__('You do not have sufficient permissions to access this page.'));
}
?>

<form method="POST" action="options.php">

<h1>Website color settings</h1> 
    <input type="hidden" id="color1_web" name="color1_web" value="<?php echo esc_attr(get_option("color1_web")); ?>" /> 
    <input type="hidden" id="color2_web" name="color2_web" value="<?php echo esc_attr(get_option("color2_web")); ?>" /> 
    <input type="hidden" id="color3_web" name="color3_web" value="<?php echo esc_attr(get_option("color3_web")); ?>" /> 

    <div class="colorA"><input type="radio" id="colorA" name="themecolor" value="colorA" onchange="onSelectRadio(event)" <?php if(get_option("themecolor") == "colorA") {echo "checked";}?>/><span class="color1"></span><span class="color2"></span><span class="color3"></span></div>
    <div class="colorB"><input type="radio" id="colorB" name="themecolor" value="colorB" onchange="onSelectRadio(event)" <?php if(get_option("themecolor") == "colorB") {echo "checked";}?>/><span class="color1"></span><span class="color2"></span><span class="color3"></span></div>
    <div class="colorC"><input type="radio" id="colorC" name="themecolor" value="colorC" onchange="onSelectRadio(event)" <?php if(get_option("themecolor") == "colorC") {echo "checked";}?>/><span class="color1"></span><span class="color2"></span><span class="color3"></span></div>
    <div class="colorD"><input type="radio" id="colorD" name="themecolor" value="colorD" onchange="onSelectRadio(event)" <?php if(get_option("themecolor") == "colorD") {echo "checked";}?>/><span class="color1"></span><span class="color2"></span><span class="color3"></span></div>
    <div class="colorE"><input type="radio" id="colorE" name="themecolor" value="colorE" onchange="onSelectRadio(event)" <?php if(get_option("themecolor") == "colorE") {echo "checked";}?>/><span class="color1"></span><span class="color2"></span><span class="color3"></span></div>
    <div class="colorF"><input type="radio" id="colorF" name="themecolor" value="colorF" onchange="onSelectRadio(event)" <?php if(get_option("themecolor") == "colorF") {echo "checked";}?>/><span class="color1"></span><span class="color2"></span><span class="color3"></span></div>


    <?php settings_fields( 'settings-mori-colors' ); ?>
    <?php do_settings_sections( 'settings-mori-colors' ); ?>
    <?php submit_button(); ?> 
</form>

<style>
    span
    {
        display:inline-block;
        width:100px;
        height:40px;
    }
    .colorA .color1
    {
        background-color:#86C29C;
    }
    .colorA .color2
    {
        background-color:#F7F7F7;
    }
    .colorA .color3
    {
        background-color:#FFDD88;
    }

    .colorB .color1
    {
        background-color:#3A7D91;
    }
    .colorB .color2
    {
        background-color:#F0F4F8;
    }
    .colorB .color3
    {
        background-color:#FFB88C;
    }

    .colorC .color1
    {
        background-color:#8E9775;
    }
    .colorC .color2
    {
        background-color:#EDECE6;
    }
    .colorC .color3
    {
        background-color:#FFC1A1;
    }
    
    .colorD .color1
    {
        background-color:#C48F65;
    }
    .colorD .color2
    {
        background-color:#F6F4F0;
    }
    .colorD .color3
    {
        background-color:#E5A570;
    }

    .colorE .color1
    {
        background-color:#A4D4AE;
    }
    .colorE .color2
    {
        background-color:#FFFFFF;
    }
    .colorE .color3
    {
        background-color:#FFBBA5;
    }
    
    .colorF .color1
    {
        background-color:#A2C1E1;
    }
    .colorF .color2
    {
        background-color:#FAFAF6;
    }
    .colorF .color3
    {
        background-color:#F3D1DC;
    }
</style>

<script>
    function onSelectRadio(event)
    {
        var selected = event.target.value;

        var color1 = document.getElementById("color1_web");
        var color2 = document.getElementById("color2_web");
        var color3 = document.getElementById("color3_web");

        switch(selected)
        {
            case "colorA":
                color1.value = "86C29C";
                color2.value = "F7F7F7";
                color3.value = "FFDD88";
            break;

            case "colorB":
                color1.value = "3A7D91";
                color2.value = "F0F4F8";
                color3.value = "FFB88C";
            break;

            case "colorC":
                color1.value = "8E9775";
                color2.value = "EDECE6";
                color3.value = "FFC1A1";
            break;

            case "colorD":
                color1.value = "C48F65";
                color2.value = "F6F4F0";
                color3.value = "E5A570";
            break;

            case "colorE":
                color1.value = "A4D4AE";
                color2.value = "FFFFFF";
                color3.value = "FFBBA5";
            break;

            case "colorF":
                color1.value = "A2C1E1";
                color2.value = "FAFAF6";
                color3.value = "F3D1DC";
            break;
        }
    }

</script>