<?php
 global $wpdb;
$postTitleError = '';
$title;
$content;
$startTime;
$endTime;
$userID = get_current_user_id();
if ( isset( $_POST['Addsubmitted'] ) && isset( $_POST['post_nonce_field'] ) && wp_verify_nonce( $_POST['post_nonce_field'], 'post_nonce' ) ) {
 
    if ( trim( $_POST['postTitle'] ) === '' ) {
        $postTitleError = 'Please enter a title.';
        $hasError = true;
    }
    $title = wp_strip_all_tags( $_POST['postTitle'] );
    $content = $_POST['postContent'];
    $post_information = array(
        'post_title' => $title,
        'post_content' => $content,
        'post_type' => 'schedules',
        'post_status' => 'publish',
        'author' => $userID
       
    );
    $startTime = $_POST['startTime'];
    $endTime = $_POST['endTime'];
    $selecttimezone = $_POST['selecttimezone'];

    //wp_insert_post( $post_information );
 
}
$post_id = wp_insert_post( $post_information );

if ( $post_id ) {
    //wp_redirect( home_url() );
    update_post_meta( $post_id, $key = 'schedule_start_date', $value = $startTime );
    update_post_meta( $post_id, $key = 'schedule_end_date', $value = $endTime );
    update_post_meta($post_id, $key='selecttimezone', $value=$selecttimezone);
    
    $wpdb->insert('stream_calendar', 
        array(
            'title'         => $title,
           'description'   => $content,    
            'start_date'    => $startTime,
            'end_date'      => $endTime,
            'time_zone'     => $selecttimezone,
            'post_id'       => $post_id 
        ), array( '%s' ));
    wp_safe_redirect(esc_url(site_url( '/accounts' )));
    exit;
}

?>


<?php

if ( isset( $_POST['Editsubmitted'] ) && isset( $_POST['post_nonce_field'] ) && wp_verify_nonce( $_POST['post_nonce_field'], 'post_nonce' ) ) {
    $post_Editid = $_POST['postEditID'];
    echo $post_Editid;
    $post_author_id = get_post_field( 'post_author', $post_Editid ); //ID of author of sched (streamer)
    if ( trim( $_POST['postTitle'] ) === '' ) {
        $postTitleError = 'Please enter a title.';
        $hasError = true;
    }
    $editTitle = wp_strip_all_tags( $_POST['postTitle'] );
    $editContent = $_POST['postContent'];
    $post_information = array(
        'ID'            =>  $post_Editid,
        'post_title'    => $editTitle,
        'post_content'  => $editContent,
        'post_type'     => 'schedules',
        'post_status'   => 'publish'
    );

    $startTime = $_POST['startTime'];
    $endTime = $_POST['endTime'];
    $selecttimezone = $_POST['selecttimezone'];

    echo $post_id;
    echo $_POST['postContent'];
    update_post_meta( $post_Editid, $key = 'schedule_start_date', $value = $startTime );
    update_post_meta( $post_Editid, $key = 'schedule_end_date', $value = $endTime );
    update_post_meta($post_Editid, $key='selecttimezone', $value=$selecttimezone);
    //pdate_post($post_information);
    $post_update = wp_update_post( $post_information, true );

    $wpdb->update('stream_calendar', 
        array(
            'title'         =>  $editTitle,
            'description'   => $editContent,    
            'start_date'    => $startTime,
            'end_date'      => $endTime,
          'time_zone'     => $selecttimezone
    
        ), 
        array('post_id' => $post_Editid), array( '%s' ));

    wp_redirect($_SERVER['HTTP_REFERER']);
}
?>


<?php /*
        $args = array(  
        'post_type' => 'streamers',
        'post_status' => 'publish',
        'author'=>$userID,
            );
        $streamerBio = new WP_Query( $args );   

        while ( $streamerBio->have_posts() ) : $streamerBio->the_post();
            <?php $bio = $_POST['bio'] */

if ( isset( $_POST['Biosubmitted'] ) && isset( $_POST['post_nonce_field'] ) && wp_verify_nonce( $_POST['post_nonce_field'], 'post_nonce' ) ) {

    $Bio = $_POST['biocontent'];
    //$post_author_id = get_post_field( 'post_author', $post_Bioid );
    $BioID = $_POST['Bioid'];


    //echo $BioVal;

    update_post_meta( $BioID, $key = 'bio', $value = $Bio );
//    $post_update = wp_update_post( $post_information, true );

 
// Update the post into the database
  //wp_update_post( $my_post );

    wp_redirect($_SERVER['HTTP_REFERER']);
}

?>



<?php

   if ( isset( $_POST['Usersubmitted'] ) && isset( $_POST['post_nonce_field'] ) && wp_verify_nonce( $_POST['post_nonce_field'], 'post_nonce' ) ) {

   // $userTitle = $_POST['userTitle'];
   $idUser = $_POST['Userid'];

   // update_post_meta( $idUser, $key = 'post_title', $value = $userTitle );

    $userTitle = wp_strip_all_tags( $_POST['userTitle'] );
    $post_information = array(
        'ID'            =>  $idUser,
        'post_title'    => $userTitle,
        'post_type'     => 'streamers',
        'post_status'   => 'publish'
    );

    $post_update = wp_update_post( $post_information, true );



    wp_redirect($_SERVER['HTTP_REFERER']);
}

?>


<?php 
if ( isset( $_POST['Socmedsubmitted'] ) && isset( $_POST['post_nonce_field'] ) && wp_verify_nonce( $_POST['post_nonce_field'], 'post_nonce' ) ) {

    $Facebook = $_POST['facebook'];
    $Instagram = $_POST['instagram'];
    $Twitter = $_POST['twitter'];
    $Twitch = $_POST['twitch'];
    $Youtube = $_POST['youtube'];
    $Reddit = $_POST['reddit'];
    $SocmedID = $_POST['socmedid'];


    //echo $BioVal;
    update_post_meta( $SocmedID, $key = 'facebook', $value = $Facebook );
    update_post_meta( $SocmedID, $key = 'instagram', $value = $Instagram );
    update_post_meta( $SocmedID, $key = 'twitter', $value = $Twitter );
    update_post_meta( $SocmedID, $key = 'twitch', $value = $Twitch );
    update_post_meta( $SocmedID, $key = 'youtube', $value = $Youtube );
    update_post_meta( $SocmedID, $key = 'reddit', $value = $Reddit );
//    $post_update = wp_update_post( $post_information, true );

 
// Update the post into the database
  //wp_update_post( $my_post );

    wp_redirect($_SERVER['HTTP_REFERER']);
}
?>
   




<?php if ( $postTitleError != '' ) { ?>
    <span class="error"><?php echo $postTitleError; ?></span>
    <div class="clearfix"></div>
<?php } ?>





<?php

$facebookTitleError = '';
$ftitle;
$fcontent;
$fstartTime;
$fendTime;
$fID = get_current_user_id();
if ( isset( $_POST['Facebooksubmitted'] ) && isset( $_POST['post_nonce_field'] ) && wp_verify_nonce( $_POST['post_nonce_field'], 'post_nonce' ) ) {
 
    if ( trim( $_POST['facebookTitle'] ) === '' ) {
        $facebookTitleError = 'Please enter a title.';
        $hasError = true;
    }
    $ftitle = wp_strip_all_tags( $_POST['facebookTitle'] );
    $fcontent = $_POST['FacebookContent'];
    $post_information = array(
        'post_title' => $ftitle,
        'post_content' => $fcontent,
        'post_type' => 'facebookEvents',
        'post_status' => 'publish',
        'author' => $fID
       
    );
    $fstartTime = $_POST['fstartTime'];
    $fendTime = $_POST['fendTime'];

    //wp_insert_post( $post_information );
 
}
$post_id = wp_insert_post( $post_information );

if ( $post_id ) {
    //wp_redirect( home_url() );
    update_post_meta( $post_id, $key = 'start_date', $value = $fstartTime );
    update_post_meta( $post_id, $key = 'end_date', $value = $fendTime );
    
    wp_safe_redirect(esc_url(site_url( '/accounts' )));
    exit;
}

?>


