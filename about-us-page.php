<? /* Template Name: about-us-theme */?>

<?php get_header();?>



<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), ); ?>



<div class="accounts-background" style="background-image: url('<?php echo $url ?>')"></div>



<div class="streamer-name">
<h1>CHRONOZONE</h1>
</div>
<div class="aboutUs">

  <section class="aboutus-details-section">

	<div class="container abus-chronozone">

	   	

	    <p class=""><i>A Scheduler Time Zone Converter</i></p>

	    <p class="">Our team has created a website for creating schedules and events where in a viewer may view the user's schedule and at the same time adjust the schedule's time to that of the viewers time zone. This website is specifically for the convinience of the streamer as well as its viewers. It is our hope that with the creation of this website, we are able to bring benefits to streamers by enabling them to reach the totality of their audiences around the world to tune in on their live streams.</p>

	</div>

	<div class="streamer-name">

	<h1> OUR TEAM</h1>

	</div>

	<div class="container aboutus-flex">

		<div class="aboutus-50">

			<h1>Name: Gerard Ampaguey</h1>

			<img src="http://www.chronozone.epizy.com/dir/wp-content/uploads/2020/08/Me.jpg"  style="width:60%">

			<h1>Position: Developer and Researcher</h1>

			<p>Gerard's eagerness and ambition in the field of technology combined with his track record of being a hard worker as well as being a positive thinker makes him an ideal professional in the I.T. business. He has displayed remarkable skills and will continue to do so and achieve many other succesful projects.He will surely soon achieve his lifelong dream of being a millionaire</p>

		</div>

		<div class="aboutus-50">

			<h1>Name: Gideon Linggaban</h1>

			<img src="http://www.chronozone.epizy.com/dir/wp-content/uploads/2020/08/Gideon.jpg" style="width:60%"><br>

			<h1>Position: Designer and Researcher</h1>

			<p>Being known as an over achiever, Gideon's work has always been appreciated and has never failed to amaze others. He has designed countless notable art works as well as graphic designs that has awed countless people. He is also known as being an exceptional researcher, thus, it is only a matter of time till he achieves his lifelong dream of being a pastor.

				</p>

		</div>

	</div>

  </section>



  <!-- The Tour Section -->

  <div class="container clockflex">

    <div class="" style="">

      <h2 class="w3-center">Time Zones</h2>

      <p class="w3-center"><i>Check your time here</i></p><br>

      <div class="container dflex">

    	<div class="d50">

      		<?php echo do_shortcode('[mxmtzc_time_zone_clocks time_zone="America/New_York" city_name="New York, United States" time_format="12" digital_clock="false" lang="" lang_for_date="en" clock_type="clock-face6.png" show_days="" clock_font_size="15" show_seconds="true" ]');?>

  		</div>

  		<div class="d50">

      		<?php echo do_shortcode('[mxmtzc_time_zone_clocks time_zone="Pacific/Auckland" city_name="Auckland, New Zealand" time_format="12" digital_clock="false" lang="" lang_for_date="en" clock_type="clock-face11.png" show_days="" clock_font_size="15" show_seconds="true" ]');?>

  		</div>

  		<div class="d50">

	      <?php echo do_shortcode('[mxmtzc_time_zone_clocks time_zone="America/Edmonton" city_name="Edmonton, Canada" time_format="12" digital_clock="false" lang="" lang_for_date="en" clock_type="clock-face12.png" show_days="" clock_font_size="15" show_seconds="true" ]');?>

	    </div>

	    <div class="d50">

	      <?php echo do_shortcode('[mxmtzc_time_zone_clocks time_zone="Asia/Manila" city_name="Manila, Philippines" time_format="12" digital_clock="false" lang="" lang_for_date="en" clock_type="clock-face4.png" show_days="" clock_font_size="15" show_seconds="true" ]');?>

	    </div>

	    <div class="d50">

	      <?php echo do_shortcode('[mxmtzc_time_zone_clocks time_zone="Asia/Shanghai" city_name="Shanghai, China" time_format="12" digital_clock="false" lang="" lang_for_date="en" clock_type="clock-face21.png" show_days="" clock_font_size="15" show_seconds="true" ]');?>

	    </div>

	    <div class="d50">

	      <?php echo do_shortcode('[mxmtzc_time_zone_clocks time_zone="Asia/Tokyo" city_name="Tokyo, Japan" time_format="12" digital_clock="false" lang="" lang_for_date="en" clock_type="clock-face2.png" show_days="" clock_font_size="15" clock_size="10" show_seconds="true" ]');?>

	    </div>

	    <div class="d50">

	       <?php echo do_shortcode('[mxmtzc_time_zone_clocks time_zone="Africa/Cairo" city_name="Cairo, Egypt" time_format="12" digital_clock="false" lang="" lang_for_date="en" clock_type="clock-face5.png" show_days="" clock_font_size="15" show_seconds="true" ]');?>

	    </div>

	   </div>





	   <div class="container dflex">

	   	<div class="d50">

	   		<?php echo do_shortcode('[mxmtzc_time_zone_clocks time_zone="Europe/London" city_name="London, United Kingdom" time_format="1" digital_clock="false" lang="" lang_for_date="en" clock_type="clock-face2.png" show_days="" clock_font_size="15" show_seconds="true" ]');?>

	   	</div>

	   	<div class="d50">

	   		<?php echo do_shortcode('[mxmtzc_time_zone_clocks time_zone="Europe/Berlin" city_name="Berlin, Germany" time_format="12" digital_clock="" lang="" lang_for_date="en" clock_type="clock-face4.png" show_days="" clock_font_size="15" show_seconds="true" ]');?>

	   	</div>

	   	<div class="d50">

	   		<?php echo do_shortcode('[mxmtzc_time_zone_clocks time_zone="Africa/Johannesburg" city_name="Johannesburg, South Africa" time_format="12" digital_clock="false" lang="" lang_for_date="en" clock_type="clock-face5.png" show_days="" clock_font_size="15" show_seconds="true" ]');?>

	   	</div>

	   	<div class="d50">

	   		<?php echo do_shortcode('[mxmtzc_time_zone_clocks time_zone="Asia/Singapore" city_name="" time_format="12" digital_clock="" lang="" lang_for_date="en" clock_type="clock-face6.png" show_days="" clock_font_size="15" show_seconds="true" ]');?>

	   	</div>

	   	<div class="d50">

	   		<?php echo do_shortcode('[mxmtzc_time_zone_clocks time_zone="Europe/Moscow" city_name="Moscow, Russia" time_format="12" digital_clock="" lang="" lang_for_date="en" clock_type="clock-face2.png" show_days="" clock_font_size="15" show_seconds="true" ]');?>

	   	</div>

	   	<div class="d50">

	   		<?php echo do_shortcode('[mxmtzc_time_zone_clocks time_zone="Asia/Seoul" city_name="Seoul, South Korea" time_format="12" digital_clock="" lang="" lang_for_date="en" clock_type="clock-face18.png" show_days="" clock_font_size="15" show_seconds="true" ]');?>

	   	</div>

   		<div class="d50">

   		<?php echo do_shortcode('[mxmtzc_time_zone_clocks time_zone="Asia/Jakarta" city_name="Jakarta, Indonesia" time_format="12" digital_clock="" lang="" lang_for_date="en" clock_type="clock-face12.png" show_days="" clock_font_size="15" show_seconds="true" ]');?>

   		</div>

	   </div>

    </div>

  </div>

</div>

  <!-- The Contact Section -->
<div class="streamer-name">
  <h1>CONTACT US</h1>
</div>

<div class="container contact">
    <p><i>Fan? Drop a note!</i></p>
</div>



<div class="container dflex">

	<div class="c50">

	    <p><i class="fa fa-map-marker"></i>  Email: ampagueyg@gmail.com</p>

	    <p><i class="fa fa-phone"></i>Phone: +63 9514961311 / +63 9662642319</p>

	    <p><i class="fa fa-envelope"></i>  Email: ampagueyg@gmail.com</p>

	</div>

	<div class="c50">

	    <form action="/action_page.php" target="_blank">

	      <div class="w3-row-padding" style="margin:0 -16px 8px -16px">

	        <div class="w3-half">

	          <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">

	        </div>

	        <div class="w3-half">

	          <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">

	        </div>

	      </div>

	      <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">

	      <button class="w3-button w3-black w3-section w3-right" type="submit">SEND</button>

	    </form>

	</div>

</div>

<!-- End PageContent -->





<?php /*<!-- Footer -->

<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">

  <i class="fa fa-facebook-official w3-hover-opacity"></i>

  <i class="fa fa-instagram w3-hover-opacity"></i>

  <i class="fa fa-snapchat w3-hover-opacity"></i>

  <i class="fa fa-pinterest-p w3-hover-opacity"></i>

  <i class="fa fa-twitter w3-hover-opacity"></i>

  <i class="fa fa-linkedin w3-hover-opacity"></i>

  <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>

</footer> */ ?>











<script>

// Automatic Slideshow - change image every 4 seconds

var myIndex = 0;

carousel();



function carousel() {

  var i;

  var x = document.getElementsByClassName("mySlides");

  for (i = 0; i < x.length; i++) {

    x[i].style.display = "none";  

  }

  myIndex++;

  if (myIndex > x.length) {myIndex = 1}    

  x[myIndex-1].style.display = "block";  

  setTimeout(carousel, 4000);    

}



// Used to toggle the menu on small screens when clicking on the menu button

function myFunction() {

  var x = document.getElementById("navDemo");

  if (x.className.indexOf("w3-show") == -1) {

    x.className += " w3-show";

  } else { 

    x.className = x.className.replace(" w3-show", "");

  }

}



// When the user clicks anywhere outside of the modal, close it

var modal = document.getElementById('ticketModal');

window.onclick = function(event) {

  if (event.target == modal) {

    modal.style.display = "none";

  }

}

</script>











<?php get_footer();?>