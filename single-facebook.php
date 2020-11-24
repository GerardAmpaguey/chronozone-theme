<? /* Template Name: accounts-theme */?>
<?php get_template_part('includes/schedule', 'addEditFunction'); ?>



<?php $userID = get_current_user_id(); acf_form_head();?>


<?php get_header();?>



<div class="back">
<button onclick="history.go(-1);"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i></button>
</div>



<?php 
$startDate = new DateTime(get_field('start_date'), new DateTimeZone(get_field('fstreamertimezone')));
$startDate->setTimezone(DateTimeZone(date_default_timezone_get()));


$endDate = new DateTime(get_field('end_date'), new DateTimeZone(get_field('fstreamertimezone')));
$endDate->setTimezone(new DateTimeZone(date_default_timezone_get()));
 */?>


<?php
global $post;
$author_id=$post->post_author;
?>





<? //ADD SCHEDULE LINK POPUP?>		
<div class="streamer-name">
	<h1><span><?php //echo "Stream of " ?><?php echo 'Stream of: '
.get_the_author_meta( 'user_login', $author_id );
?></span></h1>
  </div>
<div class="cardstest">
  <div class="card">
    <h3 class="T">Stream Title</h3>
    
    <div class="bar">
      <div class="emptybar"></div>
      <div class="filledbar"></div>
    </div>
    <div class="circle">
        <h2><?php the_title();?></h2> 
    </div>
  </div> 
  <div class="card2">
    <h3 class="T2">Stream Details</h3>
    <div class="bar2">
      <div class="emptybar2"></div>
      <div class="filledbar2"></div>
    </div>
    <div class="circle">
        <h2><?php get_template_part('includes/section','content');?></h2>
    </div>
  </div>
  <div class="card">
    <h3 class="T">Start Of Stream</h3>
    <div class="bar">
      <div class="emptybar"></div>
      <div class="filledbar"></div>
    </div>
    <div class="circle">
        <li><?php //echo $startDate->format('F-j-Y g:i:A'); //echo $startdate->format('F-j-Y g:i:a');?><?php echo the_field('start_date');?></li>
    </div>
  </div>
  <div class="card">
    <h3 class="T">End Of Stream</h3>
    <div class="bar">
      <div class="emptybar"></div>
      <div class="filledbar"></div>
    </div>
    <div class="circle">
        <li><?php //echo $endDate->format('F-j-Y g:i:A');?><?php //echo $enddate->format('F-j-Y g:i:a');?><?php echo the_field('start_date');?></li>
    </div>
  </div>
</div>






    

<?php 
if($userID == $author_id) :?>
    <section class="edit-button">
        <div class="edit-button">
            <button id="edit-<?php echo get_the_ID(); ?>" class="trigger_popup facebookUpdate"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></i>Edit</button>
        </div>
    </section>
    <?php get_template_part('includes/schedule', 'editForm'); ?>



<?php endif; ?>



<?php get_footer();?>
