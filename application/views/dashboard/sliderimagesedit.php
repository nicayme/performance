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
				  
				<!---START--> 
				  
				  
				<?php echo form_open_multipart('dashboard/updatesliderimages'); ?>
	
            
		<div class="col-md-5"> 
		<br>
			
			<input type="hidden" name="id" value="<?php echo $sliderimages['imgID']; ?>">
			<div  class="form-group">
			  <label for="exampleInputEmail1">Image Header</label>
			  <input type="text" name="imgheader" id="imgheader" value="<?php echo $sliderimages['imgheader']; ?>" class="form-control" placeholder=""  autocomplete="off" >

			</div>

			<div  class="form-group">
			  <label for="exampleInputEmail1">Image Text</label>
			  <input type="text" name="imgtext" id="imgtext" value="<?php echo $sliderimages['imgtext']; ?>" class="form-control" placeholder=""  autocomplete="off" >

			</div>
			
			<div  class="form-group">
			  <label for="exampleInputEmail1">Image  (450x250)</label>
			  <input type="hidden" name="imagedefault"  value="<?php echo $sliderimages['img']; ?>">
			  <input id="uploadImage" class="form-control" type="file" accept="image/*" name="userfile" onchange="PreviewImage();"/>
			  <img src="<?php echo base_url();?>/assets/images/<?php echo $sliderimages['img']; ?>" id="uploadPreview" style="  width: 240px;
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