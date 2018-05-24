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
<?php if($this->session->flashdata('add_testimonial')): ?>
<?php echo '<p class="alert alert-success">'.$this->session->flashdata('add_testimonial').'</p>'; ?>
<?php endif; ?> 

<?php if($this->session->flashdata('testimonials_deleted')): ?>
<?php echo '<p class="alert alert-danger">'.$this->session->flashdata('testimonials_deleted').'</p>'; ?>
<?php endif; ?> 
				  
				<!--START--> 
				  <?php echo form_open_multipart('dashboard/testimonials'); ?>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add Testimonial
</button>  


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $title; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" name="testimonialname" class="form-control" >
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Testimonial</label>
            <input type="text" name="testimonialstext" class="form-control" >
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Image</label>
          
               <input type="file" name="userfile" accept="image/*" size="20">
          </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Save changes</button> 
      </div>
  
    </div>
  </div>
</div>
        <!--START--> 
       </form>    
				<div class="col-md-12 col-sm-12 col-xs-12">
				
                <br>    
        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                       <!--<th>Product ID</th>-->
                        <th>ID</th>
                        <th>Testimonial</th>
                        <th>Image</th>
                        <th></th>
                        
                      </tr>
                    </thead>
					<tbody> 
			
			      <?php foreach($testimonials as $testi):?>  

                      
              <tr>

		          <td><?php echo $testi['testimonialsid']; ?></td>
              <td><?php echo $testi['testimonialstext']; ?></td>
              <td><img class="img-responsive" alt="image" style="width:150px;" src="<?php echo base_url();?>/assets/images/<?php echo $testi['img']; ?>"></td>
              <td>
                <a href="<?php echo site_url('/dashboard/testimonialsedit/'.$testi['testimonialsid']); ?>" class="btn  btn-primary "><i class="fa fa-edit"> View Details</i></a>

               <?php echo form_open('dashboard/deletetestimonials'); ?>
                <input type="hidden" name="testiid" value="<?php echo $testi['testimonialsid']; ?>">
                <button  type="submit" name="delete" class="btn  btn-danger "> <i class="fa fa-close"> Delete</i></button>
              </form>

              </td>
       
		
              </tr>
            <?php endforeach;?>      	
                       
                      
          </tbody>
				  
					  
                    </table>
    </div>	  
				  
				  
     
		
		
				<!---END --> 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->