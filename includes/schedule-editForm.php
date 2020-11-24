<div class="hover_bkgr edit-<?php echo get_the_ID(); ?>" id="postbox">
    <span class="helper"></span>
<div>
<div class="popupCloseButton">&times;</div>




<form action="" id="primaryAddForm" class="schedForm" method="POST">
    <fieldset>
        <label for="postTitle"><?php _e('Post Title:' , 'framework') ?></label>
        <input type="text" name="postTitle" id="postTitle" class="required" value="<?php the_title();?> " />
    </fieldset>
    <fieldset>
        <label for="postContent"><?php _e('Post Content:', 'framework') ?></label>
        <textarea name="postContent" id="postContent" rows="8" cols="30" class="required"><?php echo get_the_content();?>
        </textarea>
    </fieldset>
    <fieldset>
        <label for="startTime"><?php _e('Schedule Start Date:' , 'framework') ?></label>
        <input type="datetime-local" name="startTime" id="startTime" class="required" value="<?php the_field('schedule_start_date');?>" />
    </fieldset>
    <fieldset>
        <label for="endTime"><?php _e('Schedule End Date:' , 'framework') ?></label>    
        <input type="datetime-local" name="endTime" id="endTime" class="required" value="<?php the_field('schedule_end_date');?>" />
    </fieldset>
    <fieldset>
        <input type="hidden" name="Editsubmitted" id="Editsubmitted" value="true" />
        <input type="hidden" name="postEditID" id="postEditID" value="<?php echo get_the_ID(); ?>" />
            <?php wp_nonce_field( 'post_nonce', 'post_nonce_field' ); ?>
        <button type="submit"><?php _e('Update Event', 'framework') ?></button>
    </fieldset>

  <?php if ( $postTitleError != '' ) { ?>
      <span class="error"><?php echo $postTitleError; ?></span>
      <div class="clearfix"></div>
  <?php } ?>

</form>
</div>
</div>