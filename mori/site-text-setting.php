
<?php

if (!current_user_can('edit_pages')) {
    wp_die(__('You do not have sufficient permissions to access this page.'));
}
?>

<form method="POST" action="options.php">

    <h1>Website text settings</h1> 

    <p style="margin-top:30px;">the 1st row of the featured of the mainvisual</p> 
    <input type="text" maxlength="10" size="20" id="mv_featured_1" name="mv_featured_1" value="<?php echo get_option("mv_featured_1");?>">
    <p>the 2st row of the featured of the mainvisual</p> 
    <input type="text" maxlength="10" size="20" id="mv_featured_2" name="mv_featured_2" value="<?php echo get_option("mv_featured_2");?>">
    
    <p style="margin-top:30px;">section name of "latest"</p> 
    <input type="text" maxlength="8" size="20" id="title_latest" name="title_latest" value="<?php echo get_option("title_latest");?>">
    <p><input type="checkbox" id="visible_latest" name="visible_latest" <?php if(get_option("visible_latest")) {echo "checked";}?>>hidden</p>


    <p style="margin-top:30px;">the title of detail 1</p> 
    <input type="text" maxlength="8" size="20" id="title_about1" name="title_about1" value="<?php echo get_option("title_about1");?>">
    <p>the description of detail 1</p>
    <textarea maxlength="600" cols="45" type="text" id="details_about1" name="details_about1" style="width:100%; height:300px;"><?php echo get_option("details_about1"); ?></textarea> 
    <p><input type="checkbox" id="visible_about1" name="visible_about1" <?php if(get_option("visible_about1")) {echo "checked";}?>>hidden</p>

    <p style="margin-top:30px;">the title of detail 2</p> 
    <input type="text" maxlength="8" size="20" id="title_about2" name="title_about2" value="<?php echo get_option("title_about2");?>">
    <p>the description of detail 2</p> 
    <textarea maxlength="600" cols="45" type="text" id="details_about2" name="details_about2" style="width:100%; height:300px;"><?php echo get_option("details_about2"); ?></textarea> 
    <p><input type="checkbox" id="visible_about2" name="visible_about2" <?php if(get_option("visible_about2")) {echo "checked";}?>>hidden</p>

    <p style="margin-top:30px;">the title of detail 3</p> 
    <input type="text" maxlength="8" size="20" id="title_about3" name="title_about3" value="<?php echo get_option("title_about3");?>">
    <p>the description of detail 3</p> 
    <textarea maxlength="600" cols="45" type="text" id="details_about3" name="details_about3" style="width:100%; height:300px;"><?php echo get_option("details_about3"); ?></textarea> 
    <p><input type="checkbox" id="visible_about3" name="visible_about3" <?php if(get_option("visible_about3")) {echo "checked";}?>>hidden</p>

    <p style="margin-top:30px;">the title of detail 4</p> 
    <input type="text" maxlength="8" size="20" id="title_about4" name="title_about4" value="<?php echo get_option("title_about4");?>">
    <p>the description of detail 4</p> 
    <textarea maxlength="600" cols="45" type="text" id="details_about4" name="details_about4" style="width:100%; height:300px;"><?php echo get_option("details_about4"); ?></textarea> 
    <p><input type="checkbox" id="visible_about4" name="visible_about4" <?php if(get_option("visible_about4")) {echo "checked";}?>>hidden</p>

    <p style="margin-top:30px;">The title of Customer voice 1</p> 
    <input type="text" maxlength="10" size="20" id="voice1_voice2_title" name="voice1_voice2_title" value="<?php echo get_option("voice1_voice2_title");?>">
    <p>Customer voice 1 of Section 1</p>
    <table>
        <tr><th><label>Profile</label></th><td><input type="text" maxlength="12" id="voice1_profile" name="voice1_profile" value="<?php echo get_option("voice1_profile");?>"></td></tr>
        <tr><th><label>Title</label></th><td><input type="text" maxlength="38" size="80" id="voice1_heading" name="voice1_heading" value="<?php echo get_option("voice1_heading");?>"></td></tr>
        <tr><th><label>contents(*brackets are not allowed)</label></th><td><textarea maxlength="95" rows="2" cols="104" type="text" id="voice1_details" name="voice1_details"><?php echo get_option("voice1_details"); ?></textarea></td></tr>
    </table>
    <p>Customer voice 2 of Section 1</p>
    <table>
        <tr><th><label>Profile</label></th><td><input type="text" maxlength="12" id="voice2_profile" name="voice2_profile" value="<?php echo get_option("voice2_profile");?>"></td></tr>
        <tr><th><label>Title</label></th><td><input type="text" maxlength="38" size="80" id="voice2_heading" name="voice2_heading" value="<?php echo get_option("voice2_heading");?>"></td></tr>
        <tr><th><label>contents(*brackets are not allowed)</label></th><td><textarea maxlength="95" rows="2" cols="104" type="text" id="voice2_details" name="voice2_details"><?php echo get_option("voice2_details"); ?></textarea></td></tr>
    </table>
    <p><input type="checkbox" id="voice1_voice2_visible" name="voice1_voice2_visible" <?php if(get_option("voice1_voice2_visible")) {echo "checked";}?>>hidden</p>

    <p style="margin-top:30px;">The title of Customer voice 2</p> 
    <input type="text" maxlength="10" size="20" id="voice3_voice4_title" name="voice3_voice4_title" value="<?php echo get_option("voice3_voice4_title");?>">
    <p>Customer voice 1 of Section 2</p> 
    <table>
        <tr><th><label>Profile</label></th><td><input type="text" maxlength="12" id="voice3_profile" name="voice3_profile" value="<?php echo get_option("voice3_profile");?>"></td></tr>
        <tr><th><label>Title</label></th><td><input type="text" maxlength="38" size="80" id="voice3_heading" name="voice3_heading" value="<?php echo get_option("voice3_heading");?>"></td></tr>
        <tr><th><label>contents(*brackets are not allowed)</label></th><td><textarea maxlength="95" rows="2" cols="104" type="text" id="voice3_details" name="voice3_details"><?php echo get_option("voice3_details"); ?></textarea></td></tr>
    </table>

    <p>Customer voice 2 of Section 2</p> 
    <table>
        <tr><th><label>Profile</label></th><td><input type="text" maxlength="12" id="voice4_profile" name="voice4_profile" value="<?php echo get_option("voice4_profile");?>"></td></tr>
        <tr><th><label>Title</label></th><td><input type="text" maxlength="38" size="80" id="voice4_heading" name="voice4_heading" value="<?php echo get_option("voice4_heading");?>"></td></tr>
        <tr><th><label>contents(*brackets are not allowed)</label></th><td><textarea maxlength="95" rows="2" cols="104" type="text" id="voice4_details" name="voice4_details"><?php echo get_option("voice4_details"); ?></textarea></td></tr>
    </table>
    <p><input type="checkbox" id="voice3_voice4_visible" name="voice3_voice4_visible" <?php if(get_option("voice3_voice4_visible")) {echo "checked";}?>>hidden</p>

    <p style="margin-top:30px;">The title of Customer voice 3</p> 
    <input type="text" maxlength="10" size="20" id="voice5_voice6_title" name="voice5_voice6_title" value="<?php echo get_option("voice5_voice6_title");?>">
    <p>Customer voice 1 of Section 3</p> 
    <table>
        <tr><th><label>Profile</label></th><td><input type="text" maxlength="12" id="voice5_profile" name="voice5_profile" value="<?php echo get_option("voice5_profile");?>"></td></tr>
        <tr><th><label>Title</label></th><td><input type="text" maxlength="38" size="80" id="voice5_heading" name="voice5_heading" value="<?php echo get_option("voice5_heading");?>"></td></tr>
        <tr><th><label>contents(*brackets are not allowed)</label></th><td><textarea maxlength="95" rows="2" cols="104" type="text" id="voice5_details" name="voice5_details"><?php echo get_option("voice5_details"); ?></textarea></td></tr>
    </table>

    <p>Customer voice 2 of Section 3</p> 
    <table>
        <tr><th><label>Profile</label></th><td><input type="text" maxlength="12" id="voice6_profile" name="voice6_profile" value="<?php echo get_option("voice6_profile");?>"></td></tr>
        <tr><th><label>Title</label></th><td><input type="text" maxlength="38" size="80" id="voice6_heading" name="voice6_heading" value="<?php echo get_option("voice6_heading");?>"></td></tr>
        <tr><th><label>contents(*brackets are not allowed)</label></th><td><textarea maxlength="95" rows="2" cols="104" type="text" id="voice6_details" name="voice6_details"><?php echo get_option("voice6_details"); ?></textarea></td></tr>
    </table>
    <p><input type="checkbox" id="voice5_voice6_visible" name="voice5_voice6_visible" <?php if(get_option("voice5_voice6_visible")) {echo "checked";}?>>hidden</p>
    <br><br>
    <p><input type="checkbox" id="visible_voices" name="visible_voices" <?php if(get_option("visible_voices")) {echo "checked";}?>>hidden</p>

    <p style="margin-top:30px;">details of "hours" section</p> 
    <textarea maxlength="95" rows="3" cols="50" type="text" id="hours_details" name="hours_details"><?php echo get_option("hours_details"); ?></textarea>
    
    <p>notices of "hours" section</p> 
    <input style="margin-bottom:10px;" type="text" maxlength="40" size="80" id="hours_notice" name="hours_notice" value="<?php echo get_option("hours_notice");?>">
    <p><input type="checkbox" id="visible_hours" name="visible_hours" <?php if(get_option("visible_hours")) {echo "checked";}?>>hidden</p>

    <p style="margin-top:30px;">section name of "access"</p>
    <input type="text" maxlength="16" size="32" id="access_title" name="access_title" value="<?php echo get_option("access_title");?>">

    <p>The address</p> 
    <textarea maxlength="250" rows="10" cols="100" type="text" id="access_address" name="access_address"><?php echo get_option("access_address"); ?></textarea>

    <p>The access</p> 
    <textarea maxlength="250" rows="10" cols="100" type="text" id="access_howto" name="access_howto"><?php echo get_option("access_howto"); ?></textarea>    
    
    <p style="margin-top:30px;">Embed code<br>*single quotations will be replaced to double quotations.</p>
    <input type="tel" maxlength="4096" size="128" id="embed" name="embed" value='<?php echo get_option("embed");?>'>
    
    <p><input type="checkbox" id="visible_access" name="visible_access" <?php if(get_option("visible_access")) {echo "checked";}?>>hidden</p>

    <p style="margin-top:30px;">telephone number</p>
    <input type="tel" maxlength="14" size="14" pattern="[0-9\-]+" id="tel_num" name="tel_num" value="<?php echo get_option("tel_num");?>">

    <p>notices on top of telephone number</p>
    <input type="text" maxlength="5" size="10" id="tel_upper" name="tel_upper" value="<?php echo get_option("tel_upper");?>">

    <p>notices on bottom of telephone number</p>
    <input style="margin-bottom:10px;" type="text" maxlength="16" size="40" id="tel_lower" name="tel_lower" value="<?php echo get_option("tel_lower");?>">

    <p><input type="checkbox" id="visible_tel" name="visible_tel" <?php if(get_option("visible_tel")) {echo "checked";}?>>hide telephone number section</p>
    <p><input type="checkbox" id="belowbar_visible" name="belowbar_visible" <?php if(get_option("belowbar_visible")) {echo "checked";}?>>hide bottom bar</p>

    <p style="margin-top:30px;">X URL</p>
    <input type="text" maxlength="1024" size="100" id="sns1_url" name="sns1_url" value="<?php echo get_option("sns1_url");?>">
    <p><input type="checkbox" id="sns1_visible" name="sns1_visible" <?php if(get_option("sns1_visible")) {echo "checked";}?>>hidden</p>
    <p>*requires to insert "https://" or "http://" into the front of the URL.<p>

    <p style="margin-top:30px;">Facebook URL</p>
    <input type="text" maxlength="1024" size="100" id="sns2_url" name="sns2_url" value="<?php echo get_option("sns2_url");?>">
    <p><input type="checkbox" id="sns2_visible" name="sns2_visible" <?php if(get_option("sns2_visible")) {echo "checked";}?>>hidden</p>
    <p>*requires to insert "https://" or "http://" into the front of the URL.<p>

    <p style="margin-top:30px;">Instagram URL</p>
    <input type="text" maxlength="1024" size="100" id="sns3_url" name="sns3_url" value="<?php echo get_option("sns3_url");?>">
    <p><input type="checkbox" id="sns3_visible" name="sns3_visible" <?php if(get_option("sns3_visible")) {echo "checked";}?>>hidden</p>
    <p>*requires to insert "https://" or "http://" into the front of the URL.<p>

    <p style="margin-top:30px;">Youtube URL</p>
    <input type="text" maxlength="1024" size="100" id="sns4_url" name="sns4_url" value="<?php echo get_option("sns4_url");?>">
    <p><input type="checkbox" id="sns4_visible" name="sns4_visible" <?php if(get_option("sns4_visible")) {echo "checked";}?>>hidden</p>
    <p>*requires to insert "https://" or "http://" into the front of the URL.<p>

    <!-- 文章の初期化ボタン -->

    <!-- 画像設定 -->

    <?php settings_fields( 'settings-mori-texts' ); ?>
    <?php do_settings_sections( 'settings-mori-texts' ); ?>
    <?php submit_button(); ?> 
</form>