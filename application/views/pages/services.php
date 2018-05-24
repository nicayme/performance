<div class="agileits-welcome" id="about">
		<div class="container w3ls w3-welcome">
			<div class="w3-text">
			 <h3>
			 	Services
			 </h3>
			</div>
		</div>
</div>
<center>
<!-- Services columns -->
	<div class="container w3ls-service" id="service" >
	
		<!--<p class="center">Our Services</p>-->
		


		<div class="row-agile">

			<?php foreach($services as $srvs): ?>

			<div class="col-md-6 col-sm-6 col-xs-6 part1">
				<img class="img-responsive" alt="image" src="<?php echo base_url();?>/assets/images/<?php echo $srvs['img']; ?>">
				<h2><?php echo $srvs['servicesheader']; ?></h2>
		
	
			</div>


			 <?php endforeach; ?> 
		
		
			
		
			
		</div>
	</div>
	<!-- //Services columns -->
</center>