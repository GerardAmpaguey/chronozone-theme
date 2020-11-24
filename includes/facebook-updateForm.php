<?php $post_id = get_the_ID(); ?>
<div class="hover_bkgr facebookUpdate button" id="postBio">
    <span class="helper"></span>
<div>
<div class="popupCloseButton">&times;</div>

<form action="" id="primaryPostForm" class="schedForm" method="POST">

    <fieldset>
       <label for="facebookTitle"><?php _e('Stream Title:' , 'framework') ?></label>
        <?php /*<input type="textarea" name="bio" id="bio" class="required" value="<?php echo $PostInfo;?> yada" />*/?>
        <input type="text" name="facebookTitle" id="facebookTitle" class="required" <?php the_title();?>>
        </input>


    </fieldset>

    <fieldset>
        <label for="facebookContent"><?php _e('Details:', 'framework') ?></label>
        <textarea name="facebookContent" id="facebookContent" rows="8" cols="30" class="required"<?php echo get_the_content();?>>
        </textarea>
    </fieldset>
     <fieldset>
        <label for="fstartTime"><?php _e('Start Date:' , 'framework') ?></label>
        <input type="datetime-local" name="fstartTime" id="fstartTime" class="required" value="<?php the_field('start_date');?>" />
    </fieldset>
    <fieldset>
        <input type="hidden" name="streamerTimezone" id="streamerTimezone" value="true"/>
    </fieldset>
    <fieldset>
        <label for="fendTime"><?php _e('End Date:' , 'framework') ?></label>
        <input type="datetime-local" name="fendTime" id="fendTime" class="required" value="<?php the_field('end_date');?>" />
    </fieldset>

<fieldset>
        <input type="hidden" name="Facebooksubmitted" id="Facebooksubmitted" value="true" />
        <input type="hidden" name="fID" id="fID" value="<?php echo get_the_ID(); ?>" />
            <?php wp_nonce_field( 'post_nonce', 'post_nonce_field' ); ?>
        <button type="submit"><?php _e('Update', 'framework') ?></button>
    </fieldset>

  <?php if ( $postTitleError != '' ) { ?>
      <span class="error"><?php echo $postTitleError; ?></span>
      <div class="clearfix"></div>
  <?php } ?>

</form>
</div>
</div>