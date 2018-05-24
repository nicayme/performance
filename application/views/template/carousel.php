<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- Banner -->
	<div class="c">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
				<li data-target="#myCarousel" data-slide-to="4"></li>
				<li data-target="#myCarousel" data-slide-to="5"></li>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				

				<!-- <div class="item active">
					<img src="<?php echo base_url()?>/assets/images/1-99332.jpg" alt="Performance Drywall and Paint" style="width:100%;">
					
				</div> -->

				<?php  
				
				$i = 1;
				foreach($sliderimages as $slider): ?>
				<?php  $item_class = ($i === 1) ? 'item active' : 'item'; ?>	

				<div class="<?php echo $item_class ?>">
					<img src="<?php echo base_url(); ?>assets/images/<?php echo $slider['img']; ?>" alt="Performance Drywall and Paint" style="width:100%;">
					
				</div>
				
		  		<?php $i++; endforeach; ?> 
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="fa fa-chevron-left"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="fa fa-chevron-right"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
<!-- //Banner -->