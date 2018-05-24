<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?php echo $title; ?></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
				  
				<!------ START--> 
		<?php if($this->session->flashdata('settings_updated')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('settings_updated').'</p>'; ?>
        <?php endif; ?>		  
				  
			<?php echo form_open_multipart('dashboard/settings'); ?>
	
	
            
		<div class="col-md-5"> 
		<br>
			
			<?php foreach($settings as $setting):?>
			<div  class="form-group">
			  <label for="exampleInputEmail1">Header Name</label>
			  <input type="text" name="websitetitle" id="websitetitle" value="<?php echo $setting['websitetitle'];?>" class="form-control" placeholder=""  autocomplete="off" required>

			</div>
			
			<div  class="form-group">
			  <label for="exampleInputEmail1">Contact Number</label>
			  <input type="text" name="contactnumber" id="contactnumber" value="<?php echo $setting['contactnumber'];?>" class="form-control" placeholder=""  autocomplete="off" >

			</div>
			
			<div  class="form-group">
			  <label for="exampleInputEmail1">Address</label>
			  <input type="text" name="address" id="address" value="<?php echo $setting['address'];?>" class="form-control" placeholder="" autocomplete="off" >

			</div>
			
			<div  class="form-group">
			  <label for="exampleInputEmail1">Facebook</label>
			  <input type="text" name="facebooklink" id="facebooklink" value="<?php echo $setting['facebooklink'];?>"  class="form-control" placeholder="" autocomplete="off" >

			</div>
			
			<div  class="form-group">
			  <label for="exampleInputEmail1">LinkedIn</label>
			  <input type="text" name="linkedinlink" id="linkedinlink" value="<?php echo $setting['linkedinlink'];?>" class="form-control" placeholder="" autocomplete="off" >

			</div>
			
			<div  class="form-group">
			  <label for="exampleInputEmail1">Youtube</label>
			  <input type="text" name="youtubelink" id="youtubelink" value="<?php echo $setting['youtubelink'];?>" class="form-control" placeholder="" autocomplete="off" >

			</div>
			
			<div  class="form-group">
			  <label for="exampleInputEmail1">Yelp</label>
			  <input type="text" name="yelplink" id="yelplink" value="<?php echo $setting['yelplink'];?>" class="form-control" placeholder="" autocomplete="off" >

			</div>
			
			<div  class="form-group">
			  <label for="exampleInputEmail1">Footer</label>
			  <input type="text" name="footer" id="footer" value="<?php echo $setting['footer'];?>" class="form-control" placeholder="" autocomplete="off" >

			</div>
			
			
			
			
			
			
			
			
			
			</div>		
		
		<div class="col-md-5"> 
			<br>
			
			<div  class="form-group">
			  <label for="exampleInputEmail1">Email 1</label>
			  <input type="text" name="email1" id="email1" value="<?php echo $setting['email1'];?>" class="form-control" placeholder="" autocomplete="off" >

			</div>
			
			<div  class="form-group">
			  <label for="exampleInputEmail1">Email 2</label>
			  <input type="text" name="email2" id="email2" value="<?php echo $setting['email2'];?>" class="form-control" placeholder="" autocomplete="off" >

			</div>
			
			<div  class="form-group">
			  <label for="exampleInputEmail1">Email 3</label>
			  <input type="text" name="email3" id="email3" value="<?php echo $setting['email3'];?>" class="form-control" placeholder="" autocomplete="off" >

			</div>
			
			
			<div  class="form-group">
			  <label for="exampleInputEmail1">Image Logo  (217x63)</label>
			  <input type="hidden" name="imagedefault"  value="<?php echo $setting['logo']; ?>">
			  <input id="uploadImage" class="form-control" type="file" accept="image/*" name="userfile" onchange="PreviewImage();"/>
			 <img src="<?php echo base_url();?>/assets/images/<?php echo $setting['logo']; ?>" id="uploadPreview" style="  width: 240px;
			  height: 120px;

			  /* float: right; */
			 /* position: absolute;
			  right: 45px;
				*/"  />

			</div>
			
			
			<?php endforeach;?>
			
			            
		</div>
		
	
	<div class="col-md-12"> 
			
			
	
			<div  class="form-group">
			
			</div>
				<button type="submit" name="submit" id="saveinfo" class="btn-lg  btn-primary " > Save Changes</button>
			<br><br><br><br>
			</div>	
					
	</form>	    
				  
     
		
		
				<!------ END --> 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->