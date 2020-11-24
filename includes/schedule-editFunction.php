<?php

if ( isset( $_POST['Editsubmitted'] ) && isset( $_POST['post_nonce_field'] ) && wp_verify_nonce( $_POST['post_nonce_field'], 'post_nonce' ) ) {
    $post_id = $_POST['postID'];
    //echo $post_id;
    $post_author_id = get_post_field( 'post_author', $post_id ); //ID of author of sched (streamer)
    if ( trim( $_POST['postTitle'] ) === '' ) {
        $postTitleError = 'Please enter a title.';
        $hasError = true;
    }
    
    $post_information = array(
        'post_title' => wp_strip_all_tags( $_POST['postTitle'] ),
        'post_content' => $_POST['postContent'],
        'post_type' => 'schedules',
        'post_status' => 'publish'
    );

 	$startTime = $_POST['startTime'];
 	$endTime = $_POST['endTime'];

    //$mypost = array();

    //$updateContent = $_POST['postContent'];

    //wp_update_post($mypost);
    update_post_meta( $post_id, $key = 'schedule_start_date', $value = $startTime );
    update_post_meta( $post_id, $key = 'schedule_end_date', $value = $endTime );
    //wp_insert_post( $post_information );
    $post_update = wp_update_post( $post_information, true );
    wp_redirect($_SERVER['HTTP_REFERER']);
}


?>


<?php if ( $postTitleError != '' ) { ?>
    <span class="error"><?php echo $postTitleError; ?></span>
    <div class="clearfix"></div>
<?php } ?>