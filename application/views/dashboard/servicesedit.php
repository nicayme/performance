<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?php echo $title;?></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
				  
				<!---START--> 
				  
				  
				<?php echo form_open_multipart('dashboard/updateservices'); ?>
	
            
		<div class="col-md-5"> 
		<br>
			
			<input type="hidden" name="id" value="<?php echo $services['servicesid']; ?>">
			<div  class="form-group">
			  <label for="exampleInputEmail1">Description</label>
			  <input type="text" name="servicesheader" id="servicesheader" value="<?php echo $services['servicesheader']; ?>" class="form-control" placeholder=""  autocomplete="off" required>

			</div>
			
			<div  class="form-group">
			  <label for="exampleInputEmail1">Image  (450x250)</label>
			  <input type="hidden" name="imagedefault"  value="<?php echo $services['img']; ?>">
			  <input id="uploadImage" class="form-control" type="file" accept="image/*" name="userfile" onchange="PreviewImage();"/>
			  <img src="<?php echo base_url();?>/assets/images/<?php echo $services['img']; ?>" id="uploadPreview" style="  width: 240px;
			  height: 120px;

			  /* float: right; */
			 /* position: absolute;
			  right: 45px;
				*/"  />
			

			</div>
			
			
			
			
			<div class="col-md-12"> 
	
	
			<div  class="form-group">
			
			</div>
				<button type="submit" name="submit" id="saveinfo" class="btn-lg  btn-primary " > Save Changes</button>
			<br><br><br><br>
			</div>
			</div>		
		

			            
		
		
	
		
					
	</form>	    
				  
     
		
		
				<!---END --> 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->