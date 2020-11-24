<div class="hover_bkgr facebook btn" id="postbox">
    <span class="helper"></span>
<div>
<div class="popupCloseButton">&times;</div>


<!-- FORM -->
<form action="" id="primaryAddForm" class="schedForm" method="POST">

    <fieldset>
        <label for="facebookTitle"><?php _e('Stream Title:' , 'framework') ?></label>
        <input type="text" name="facebookTitle" id="facebookTitle" class="required" value="<?php if ( isset( $_POST['facebookTitle'] ) ) echo $_POST['facebookTitle']; ?>" />
    </fieldset>

    <fieldset>
        <label for="facebookContent"><?php _e('Details:', 'framework') ?></label>
        <textarea name="facebookContent" id="facebookContent" rows="8" cols="30" class="required"><?php if ( isset( $_POST['facebookContent'] ) ) { if ( function_exists( 'stripslashes' ) ) { echo stripslashes( $_POST['facebookContent'] ); } else { echo $_POST['facebookContent']; } } ?>
        </textarea>
    </fieldset>
    <fieldset>
        <label for="fstartTime"><?php _e('Start Date:' , 'framework') ?></label>
        <input type="datetime-local" name="fstartTime" id="fstartTime" class="required" value="<?php if ( isset( $_POST['fstartTime'] ) ) echo $_POST['fstartTime']; ?>" />
    </fieldset>
    <fieldset>
        <input type="hidden" name="streamerTimezone" id="streamerTimezone" value="true"/>
    </fieldset>
    <fieldset>
        <label for="fendTime"><?php _e('End Date:' , 'framework') ?></label>
        <input type="datetime-local" name="fendTime" id="fendTime" class="required" value="<?php if ( isset( $_POST['fendTime'] ) ) echo $_POST['fendTime']; ?>" />
    </fieldset>

    <fieldset>
        <input type="hidden" name="fstreamertimezone" id="fstreamertimezone" value="<?php date_default_timezone_get();?>" />
    </fieldset>


    
    <fieldset>
        <input type="hidden" name="Facebooksubmitted" id="Facebooksubmitted" value="true" />
        <?php wp_nonce_field( 'post_nonce', 'post_nonce_field' ); ?>
        <button type="submit"><?php _e('Add', 'framework') ?></button>
    </fieldset>
   

    <?php if ( $facebookTitleError != '' ) { ?>
        <span class="error"><?php echo $facebookTitleError; ?></span>
        <div class="clearfix"></div>
    <?php } ?>
</form>
</div>
</div>