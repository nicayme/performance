<script src="<?php echo base_url(); ?>assets/js/jquery.lightbox-0.5.js"></script>
<script src="<?php echo base_url(); ?>assets/js/responsiveslides.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/jquery.lightbox-0.5.css" /> 
<script type="text/javascript">
        // script to activate lightbox
        $(function() {
            $('#gallery a').lightBox();
        });
    </script>

<!-- Button trigger modal -->

<div class="agileits-welcome" id="about">
		<div class="container w3ls w3-welcome">
			<div class="w3-text">
			 <h3>
			 	Projects
			 </h3>
			</div>
		</div>
</div>
	<div class="container w3ls-service" id="service">
		<h3 class="center">List of Projects</h3> <br>
		<p class="center"></p>
		<div class="row-agile lightboximg" id="gallery">

			<?php foreach($projects as $prj): ?>
		
			<div class="col-md-4 col-sm-4 col-xs-6 part1 ">
			<a href="<?php echo base_url();?>/assets/projects/<?php echo $prj['img']; ?>"  rel='lightbox[philippines]'  class="lightbox" alt="" title='<?php echo $prj['description']; ?>'/>

				 	<img class="img-responsive"  alt="image" src="<?php echo base_url();?>/assets/projects/<?php echo $prj['img']; ?>" >

			</a>
				<p> </p>

			</div>
		
			
			  <?php endforeach; ?> 
			
			
			
			
			
			
			
			
			
			
			
		</div>
	</div>




