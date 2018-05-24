<?php foreach($systemsettings as $ss): ?>
<div class="w3ls-contact" id="contact">
		<div class="container agile-contact ">
			<div class="info col-md-4 col-sm-4 col-xs-6">
				<h4>Contact Information</h4>
				<ul>
					<li><span class="fa fa-map-marker" aria-hidden="true"></span><?php echo $ss['address']; ?></li>
					<li><span class="fa fa-phone" aria-hidden="true"></span><?php echo $ss['contactnumber']; ?></li>
					<!--<li><a href="mailto:abcd@yoursite.com"><span class="fa fa-envelope-o" aria-hidden="true" ></span>admin@exclvb.com</a></li>-->
					
				</ul>	
			</div>
			<div class="links col-md-4 col-sm-4 col-xs-6">
				<h4>Stay in Touch</h4>
				<ul>
				<li>
					<a href="<?php echo $ss['facebooklink']; ?>" target="_blank"><span class="fa fa-facebook" aria-hidden="true"></span></a>

					<a href="<?php echo $ss['linkedinlink']; ?>" target="_blank"><span class="fa fa-linkedin" aria-hidden="true"></span></a>

					<a href="<?php echo $ss['youtubelink']; ?>" target="_blank"><span class="fa fa-youtube" aria-hidden="true"></span></a>

					<a href="<?php echo $ss['yelplink']; ?>" target="_blank"><span class="fa fa-yelp" aria-hidden="true"></span></a>

				</li>
				</ul>
			</div>
			<div class="form col-md-4 col-sm-4 col-xs-12">
				<h4>Payments</h4>
				<img src="<?php echo base_url()?>assets/images/cc2.jpg" alt="Payments"></a>
			</div>
		</div>
	</div>
	
	<!-- //cotact section -->
	<!-- footer -->
	<div class="footer">
	<hr>
		<p><?php echo $ss['footer']; ?></p>
	</div>

<?php endforeach; ?> 	



	<!-- //footer -->
	<!-- Script chocolat -->
	<script>
		$(document).ready(function(){
			$('.chocolat-parent').Chocolat();
		});
	</script>
	<!-- //Script chocolat -->
	<!-- script responsive tabs -->
	  <script type="text/javascript">
    $(document).ready(function () {

        $('#parentHorizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            tabidentify: 'hor_1', // The tab groups identifier
            activate: function (event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#nested-tabInfo');
                var $name = $('span', $info);
    
                $name.text($tab.text());
    
                $info.show();
            }
        });

 
    });
</script>
	<!-- //script responsive tabs -->
	<!-- scrolling script -->
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script> 
<!-- //scrolling script -->
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->


</body>
</html>
