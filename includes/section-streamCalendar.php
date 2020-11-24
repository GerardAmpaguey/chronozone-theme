<h2>Calendar</h2>

<div class="page-header">
<div class="pull-right form-inline">
<div class="btn-group">
<button class="btn btn-primary" data-calendar-nav="prev"><< Prev</button>
<button class="btn btn-default" data-calendar-nav="today">Today</button>
<button class="btn btn-primary" data-calendar-nav="next">Next >></button>
</div>
<div class="btn-group">
<button class="btn btn-warning" data-calendar-view="year">Year</button>
<button class="btn btn-warning active" data-calendar-view="month">Month</button>
<button class="btn btn-warning" data-calendar-view="week">Week</button>
<button class="btn btn-warning" data-calendar-view="day">Day</button>
</div>
</div>
<h3></h3>

</div>
<div class="row">
<div class="col-md-9">
<div id="showEventCalendar"></div>
</div>
<div class="col-md-3">
<h4>All Events List</h4>
<ul id="eventlist" class="nav nav-list"></ul>
</div>
</div>





<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/calendar.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/events.js"></script>

<link rel='stylesheet' type='text/css' href='/wp-content/scripts/fullcalendar/fullcalendar.css' />
<script type='text/javascript' src='/wp-content/scripts/fullcalendar//jquery/jquery-ui-custom.js'></script>
<script type='text/javascript' src='/wp-content/scripts/fullcalendar/fullcalendar.min.js'></script>
<script type='text/javascript'>
    $(document).ready(function() {
     
        $('#calendar').fullCalendar({
         
            editable: false,
             
            events: "wp-content/themes/chronozone-theme/js/sql-event.php",
             
            eventDrop: function(event, delta) {
                alert(event.title + ' was moved ' + delta + ' days\n' +
                    '(should probably update your database)');
            }
             
 
             
        });
         
    });
 
</script>
<style type='text/css'>
        #calendar{padding-right:20px}
</style>
 <div class="main-content" style='width:950px;padding:20px;'>
<h1 class='title'>Event Calendar</h1>
<div id='calendar'></div>
<?php the_content(); ?>
</div>