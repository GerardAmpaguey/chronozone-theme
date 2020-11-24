<?php $post_id = get_the_ID(); ?>
<div class="socsitebg socsite" id="postSocmed">
    <span class="helper"></span>
<div>
<div class="popupCloseButtonsocsite">&times;</div>

<form action="" id="primaryPostForm" class="schedForm" method="POST">

    <fieldset>
        <label for="facebook"><?php _e('Facebook Link:' , 'framework') ?></label>
        <input type="text" name="facebook" id="facebook" class="required" value="<?php echo get_field('facebook');?> " />
    </fieldset>
    <fieldset>
        <label for="twitter"><?php _e('Twitter Link:' , 'framework') ?></label>
        <input type="text" name="twitter" id="twitter" class="required" value="<?php echo get_field('twitter');?> " />
    </fieldset>
    <fieldset>
        <label for="intsagram"><?php _e('Instragram Link:' , 'framework') ?></label>
        <input type="text" name="intsagram" id="intsagram" class="required" value="<?php echo get_field('instagram');?> " />
    </fieldset>
    <fieldset>
        <label for="twitch"><?php _e('Twitch Link:' , 'framework') ?></label>
        <input type="text" name="twitch" id="twitch" class="required" value="<?php echo get_field('twitch');?> " />
    </fieldset>
    <fieldset>
        <label for="youtube"><?php _e('Youtube Link:' , 'framework') ?></label>
        <input type="text" name="youtube" id="youtube" class="required" value="<?php echo get_field('youtube');?> " />
    </fieldset>
    <fieldset>
        <label for="reddit"><?php _e('Reddit Link:' , 'framework') ?></label>
        <input type="text" name="reddit" id="reddit" class="required" value="<?php echo get_field('reddit');?> " />
    </fieldset>

    <fieldset>
        <input type="hidden" name="socmedid" id="socmedid" value="<?php echo $post_id; ?>" />
        <input type="hidden" name="Socmedsubmitted" id="Socmedsubmitted" value="true" />
        <?php wp_nonce_field( 'post_nonce', 'post_nonce_field' ); ?>
        <button type="submit"><?php _e('update', 'framework') ?></button>
    </fieldset>

 </form>
</div>
</div>