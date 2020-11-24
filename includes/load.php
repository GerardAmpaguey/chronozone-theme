<?php

//load.php

global $wpdb;
$schedules = $wpdb->get_results( "SELECT * FROM events " );

$schedulesID;
$calendar;
if( $schedules ) {
    foreach ( $schedules as $schedule ) {
    $start = strtotime($schedule->post_date) * 1000;
    $end = strtotime($schedule->post_date) * 1000; 
    $calendar[] = array(
        'id' =>$schedule->id,
        'title' => $schedule->title,
        'url' => "#",
        "class" => 'event-important',
        'start' => "$start",
        'end' => "$end"
    );

    }
}else{

}

$calendarData = array(
    "success" => 1, 
    "result"=>$calendar);
echo json_encode($calendarData);

?>
