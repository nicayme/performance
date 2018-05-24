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
				  
				  
				<?php echo form_open_multipart('dashboard/updatewebinquiry'); ?>
	
            
		<div class="col-md-5"> 
		<br>
			
			<input type="hidden" name="id" value="<?php echo $webinquiry['contactid']; ?>">
			<div  class="form-group">
			  <label for="exampleInputEmail1">ID</label>
			  <input type="text" name="contactid" id="testimonialstext" value="<?php echo $webinquiry['contactid']; ?>" class="form-control" placeholder=""  autocomplete="off" readonly>

			</div>
			
			<div  class="form-group">
			  <label for="exampleInputEmail1">Client Name</label>
			  <input type="text" name="clientname" id="tesclientnametimonialstext" value="<?php echo $webinquiry['clientname']; ?>" class="form-control" placeholder=""  autocomplete="off" readonly>

			</div>

			<div  class="form-group">
			  <label for="exampleInputEmail1">Email</label>
			  <input type="text" name="email" id="email" value="<?php echo $webinquiry['email']; ?>" class="form-control" placeholder=""  autocomplete="off" readonly>

			</div>
			
			<div  class="form-group">
			  <label for="exampleInputEmail1">Contact No.</label>
			  <input type="text" name="contactno" id="contactno" value="<?php echo $webinquiry['contactno']; ?>" class="form-control" placeholder=""  autocomplete="off" readonly>

			</div>


			
		</div>	
			<div class="col-md-12"> 
	
	
			<div  class="form-group">
			  <label for="exampleInputEmail1">Message</label>
			
			  <textarea id="editor1" class="form-control" name="message" readonly><?php echo $webinquiry['message'];?></textarea>

			</div>
				
			<br><br><br><br>
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