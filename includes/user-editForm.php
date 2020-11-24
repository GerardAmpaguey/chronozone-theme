<?php $post_id = get_the_ID(); ?>
<div class="hover_bkgr user" id="postUser">
    <span class="helper"></span>
<div>
<div class="popupCloseButton">&times;</div>

<form action="" id="primaryPostForm" class="schedForm" method="POST">

    <fieldset>
        <label for="userTitle"><?php _e('Name:' , 'framework') ?></label>
        <input type="text" name="userTitle" id="userTitle" class="required" value="<?php echo get_the_title();?> " />
    </fieldset>
    <fieldset>
        <input type="hidden" name="Userid" id="Userid" value="<?php echo $post_id; ?>" />
        <input type="hidden" name="Usersubmitted" id="Usersubmitted" value="true" />
        <?php wp_nonce_field( 'post_nonce', 'post_nonce_field' ); ?>
        <button type="submit"><?php _e('update', 'framework') ?></button>
    </fieldset>

 </form>
</div>
</div>