<div class="agileits-welcome" id="about">
		<div class="container w3ls w3-welcome">
			<div class="w3-text">
			 <h3>
			 	Testimonials
			 </h3>
			</div>
		</div>
</div>
<center>
<!-- Services columns -->
	<div class="container w3ls-service" id="service" >
	
		<!--<p class="center">Our Services</p>-->
		
		
	
		<?php foreach($testimonials as $testi): ?>

		<div class="col-md-4">
			<div class="block-heading-two">
				
			</div>	
				
			     <div class="testimonials">
					<div >
						
					  <blockquote><p><?php echo $testi['testimonialstext']; ?></p></blockquote>
					  <div class="carousel-info">
						<img alt="" src="<?php echo base_url(); ?>assets/images/<?php echo $testi['img']; ?>" class="pull-left">
						<div class="pull-left">
						  <span class="testimonials-name"><?php echo $testi['testimonialname']; ?></span>
						  
						</div>
					  </div>

					</div>
				</div>

		


		</div>

		<?php endforeach; ?> 




	</div>
	<!-- //Services columns -->
</center>