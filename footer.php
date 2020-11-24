		</main>
		<footer>
			<section class="copyright-sc">
				<div class="socials">
					<ul class="plist">
						<li><a href="https://www.facebook.com/" target=_blank><i class="fa fa-facebook-square"></i></a></li>
						<li><a href="https://www.facebook.com/" target=_blank><i class="fa fa-instagram"></i></a></li>
						<li><a href="https://www.facebook.com/" target=_blank><i class="fa fa-twitter-square"></i></a></li>
					</ul>
				</div>
				<p class="copy">copyright © Gerard Ampaguey | 2020</p>
			</section>
		</footer>
		<?php wp_footer(); ?>
	</body>
	<? //ADD FORM POPUP SCRIPT ?>
	<script>
	jQuery(document).ready(function( $ ) {
	    $(".trigger_popup.addsched").click(function(){
	       $('.hover_bkgr.addsched').show();
	    });
	    $(".trigger_popup.editsched").click(function(){
	       $('.hover_bkgr.editsched').show();
	    });
	     $(".trigger_popup.bio").click(function(){
	       $('.hover_bkgr.bio').show();
	    });
	     $(".trigger_popup.user").click(function(){
	       $('.hover_bkgr.user').show();
	    });
	      $(".trigger_popup.socsite").click(function(){
	       $('.socsitebg.socsite').show();
	    });
	      $(".trigger_popup.facebook").click(function(){
	       $('.hover_bkgr.facebook').show();
	    });
	      $(".trigger_popup.facebookUpdate").click(function(){
	       $('.hover_bkgr.facebookUpdate').show();
	    });
	    $(".trigger_popupedit.editAccsched").click(function(){
	       var contentPanelId = $(this).attr("id");
    	   //alert(contentPanelId);
    	   $('.hover_bkgr'+contentPanelId).show();
	    });
	       $(".trigger_popup.editAccsched").click(function(){
	       var contentPanelId = $(this).attr("id");
    	   //alert(contentPanelId);
    	   $('.hover_bkgr.'+contentPanelId).show();
	    });
	    $('.popupCloseButton').click(function(){
	        $('.hover_bkgr').hide();
	    });
	    $('.popupCloseButtonsocsite').click(function(){
	        $('.socsitebg').hide();
	    });
	    $('.login-btn').click(function(){
	        $('.loginform').addClass('show');
	    });
	    $('.login-modal-close').click(function(){
	        $('.loginform').removeClass('show');
	    });



	});


	</script>
</html>