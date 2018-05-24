<!-- page content -->
	  
        <div class="right_col" role="main">
          <div class="">
            

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>About</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
				  
				<!---START--> 

		<?php if($this->session->flashdata('about_updated')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('about_updated').'</p>'; ?>
        <?php endif; ?>	
				  
				  
				 <?php echo form_open('dashboard/about');?>
	
		
            
		<div class="col-md-12"> 
		<br>
			
			
			<div  class="form-group">
			  <label for="exampleInputEmail1">About Details</label>
			 
			 <?php foreach($about as $a):?> 
			 <textarea id="editor1" class="form-control" name="adescrirption" placeholder="Add About"><?php echo $a['adescrirption'];?></textarea>
			<?php endforeach;?>
			</div>
			
			
			
			
			<div class="col-md-12"> 
	
	
			<div  class="form-group">
			
			</div>
				<button type="submit" name="submit" id="saveinfo" class="btn-lg  btn-primary "> Save Changes</button>
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