<?php 
global $wpdb;
$schedules = $wpdb->get_results( "SELECT id, title, start_date, post_id FROM stream_calendar" );
//$sqlEvents = "SELECT id, title, start_date, end_date FROM events LIMIT 20";
//$resultset = mysqli_query($conn, $sqlEvents) or die("database error:". mysqli_error($conn));






$calendar = array();
foreach($schedules as $rows){  
    // convert  date to milliseconds
    $time = strtotime($rows->start_date);
    $start = date("Y-m-d", $time) ;
    $end = $rows->end_date ; 
    $calendar[] = array(
        'id' =>$rows->id,
        'title' => $rows->title,
        'url' => "?p=$rows->post_id",
        "class" => 'event-important',
        'start' => "$start"
    );
}

?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
  <script>
   
  $(document).ready(function() {
  	var ar = <?php echo json_encode($calendar) ?>;
   var calendar = $('#calendar').fullCalendar({
    editable:true,
    header:{
     left:'prev,next today',
     center:'title',
     right:'month,agendaWeek,agendaDay'
    },
    events: ar,
    selectable:true,
    selectHelper:true,
    editable:false,


    eventClick:function(event)
    {
     info.jsEvent.preventDefault(); // don't let the browser navigate

	    if (info.event.url) {
	      window.open(info.event.url);
	    }
    },

   });
  });
   
  </script>
<div class="container">
   <div id="calendar"></div>
  </div>