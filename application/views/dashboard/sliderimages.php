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

<?php if($this->session->flashdata('added_sliderimages')): ?>
<?php echo '<p class="alert alert-success">'.$this->session->flashdata('added_sliderimages').'</p>'; ?>
<?php endif; ?> 

<?php if($this->session->flashdata('slider_deleted')): ?>
<?php echo '<p class="alert alert-danger">'.$this->session->flashdata('slider_deleted').'</p>'; ?>
<?php endif; ?> 

<!--START--> 
          <?php echo form_open_multipart('dashboard/sliderimages'); ?>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add Slider
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
            <label for="recipient-name" class="col-form-label">Header</label>
            <input type="text" name="imgheader" class="form-control" >
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Text</label>
            <input type="text" name="imgtext" class="form-control" >
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
                        <th>Header</th>
                        <th>Text</th>
                        <th>Image</th>
                        <th></th>
                        
                      </tr>
                    </thead>
					<tbody> 
			
			      <?php foreach($sliderimages as $slider):?>  

                      
              <tr>

		          <td><?php echo $slider['imgID']; ?></td>
              <td><?php echo $slider['imgheader']; ?></td>
              <td><?php echo $slider['imgtext']; ?></td>
              <td><img class="img-responsive" alt="image" style="width:150px;" src="<?php echo base_url();?>/assets/images/<?php echo $slider['img']; ?>"></td>
              <td>
                <a href="<?php echo site_url('/dashboard/sliderimagesedit/'.$slider['imgID']); ?>" class="btn  btn-primary "><i class="fa fa-edit"> View Details</i></a>
              <?php echo form_open('dashboard/deletesliderimages'); ?>
                <input type="hidden" name="sliderid" value="<?php echo $slider['imgID']; ?>">
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