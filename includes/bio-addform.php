<?php $post_id = get_the_ID(); ?>
<div class="hover_bkgr bio" id="postBio">
    <span class="helper"></span>
<div>
<div class="popupCloseButton">&times;</div>

<form action="" id="primaryPostForm" class="schedForm" method="POST">

    <fieldset>
        <label for="biocontent"><?php _e('Bio:' , 'framework') ?></label>
        <?php /*<input type="textarea" name="bio" id="bio" class="required" value="<?php echo $PostInfo;?> yada" />*/?>
        <textarea name="biocontent" id="biocontent" rows="8" cols="30" class="required"><?php echo get_field('bio');?>
        </textarea>


    </fieldset>
    <fieldset>
        <input type="hidden" name="Bioid" id="Bioid" value="<?php echo $post_id; ?>" />
        <input type="hidden" name="Biosubmitted" id="Biosubmitted" value="true" />
        <?php wp_nonce_field( 'post_nonce', 'post_nonce_field' ); ?>
        <button type="submit"><?php _e('update', 'framework') ?></button>
    </fieldset>

 </form>
</div>
</div>