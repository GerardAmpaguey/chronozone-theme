<div class="hover_bkgr addsched" id="postbox">
    <span class="helper"></span>
<div>
<div class="popupCloseButton">&times;</div>


<!-- FORM -->
<form action="" id="primaryAddForm" class="schedForm" method="POST">

    <fieldset>
        <label for="postTitle"><?php _e('Stream Title:' , 'framework') ?></label>
        <input type="text" name="postTitle" id="postTitle" class="required" value="<?php if ( isset( $_POST['postTitle'] ) ) echo $_POST['postTitle']; ?>" />
    </fieldset>

    <fieldset>
        <label for="postContent"><?php _e('Details:', 'framework') ?></label>
        <textarea name="postContent" id="postContent" rows="8" cols="30" class="required"><?php if ( isset( $_POST['postContent'] ) ) { if ( function_exists( 'stripslashes' ) ) { echo stripslashes( $_POST['postContent'] ); } else { echo $_POST['postContent']; } } ?>
        </textarea>
    </fieldset>
    <fieldset>
        <label for="startTime"><?php _e('Start Date:' , 'framework') ?></label>
        <input type="datetime-local" name="startTime" id="startTime" class="required" value="<?php if ( isset( $_POST['startTime'] ) ) echo $_POST['startTime']; ?>" />
    </fieldset>
    <fieldset>
    	<input type="hidden" name="streamerTimezone" id="streamerTimezone" value="true"/>
    </fieldset>
    <fieldset>
        <label for="endTime"><?php _e('End Date:' , 'framework') ?></label>
        <input type="datetime-local" name="endTime" id="endTime" class="required" value="<?php if ( isset( $_POST['endTime'] ) ) echo $_POST['endTime']; ?>" />
    </fieldset>
	
    <fieldset>
        <input type="hidden" name="Addsubmitted" id="Addsubmitted" value="true" />
        <?php wp_nonce_field( 'post_nonce', 'post_nonce_field' ); ?>
        <button type="submit"><?php _e('Create Event', 'framework') ?></button>
    </fieldset>
   

    <?php if ( $postTitleError != '' ) { ?>
        <span class="error"><?php echo $postTitleError; ?></span>
        <div class="clearfix"></div>
    <?php } ?>
</form>
</div>
</div>