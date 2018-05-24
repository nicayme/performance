<script src='https://www.google.com/recaptcha/api.js'></script>
<div class="agileits-welcome" id="about">
		<div class="container w3ls w3-welcome">
			<div class="w3-text">
			 <h3>
			 	Contact
			 </h3>
			</div>
		</div>
</div>
<div class="container w3ls-service" id="service" >

		<?php if($this->session->flashdata('contact_saved')): ?>
      	<?php echo '<p class="alert alert-success">'.$this->session->flashdata('contact_saved').'</p>'; ?>
        <?php endif; ?>	
		
		<?php if($this->session->flashdata('contact_notsaved')): ?>
      	<?php echo '<p class="alert alert-warning">'.$this->session->flashdata('contact_notsaved').'</p>'; ?>
        <?php endif; ?>	
	
		<!--<p class="center">Our Services</p>-->
		<div class="form col-md-6 col-sm-6 col-xs-12">
			
				<?php echo form_open('pages/contact'); ?>
					<input type="text" name="clientname" placeholder="NAME" ><br>
					<input type="email" name="email" placeholder="E-MAIL" ><br>
					<input type="text" name="contactno" placeholder="CONTACT NO." ><br>
					<textarea placeholder="MESSAGE" name="message" rows="3" cols="30"></textarea><br>
					<div class="g-recaptcha" data-sitekey="6Ld9cD4UAAAAAGdkQ9ZDtHEsyOQaLEh1OH2dU2kl"></div>
					<br>
					<button type="submit" name="submit" id="saveinfo" class="btn-lg  btn-primary " > Save Changes</button><br>
				</form>
		</div>


		<?php foreach($systemsettings as $ss): ?>
		<div class="form col-md-6 col-sm-6 col-xs-12">
			
				<li><span class="fa fa-map-marker" aria-hidden="true"></span> <?php echo $ss['address']; ?></li>
				<li><span class="fa fa-phone" aria-hidden="true"></span><?php echo $ss['contactnumber']; ?></li>
		</div>
		
	</div>

	
<!-- map section -->
	<div class="mymap" id="mymap">
		<iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=9738%20Golden%20Drive%20Orangevale%2C%20CA%2095662%20United%20States&key=AIzaSyD4H4SaUnzSU910RKNkFXWn5MyUFanwbY0" allowfullscreen></iframe>
	</div>
<!-- //WELCOME SECTION -->


 	<?php endforeach; ?> 
	
	<script src='https://www.google.com/recaptcha/api.js'></script>

