<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Services</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
				  
				<!--START--> 
				  
				<div class="col-md-12 col-sm-12 col-xs-12">
				
                <br>    
        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                       <!--<th>Product ID</th>-->
                        <th>ID</th>
                        <th>Service</th>
                        <th>Image</th>
                        <th></th>
                        
                      </tr>
                    </thead>
					<tbody> 
			
			      <?php foreach($services as $s):?>  

                      
              <tr>

		          <td><?php echo $s['servicesid']; ?></td>
              <td><?php echo $s['servicesheader']; ?></td>
              <td><img class="img-responsive" alt="image" style="width:150px;" src="<?php echo base_url();?>/assets/images/<?php echo $s['img']; ?>"></td>
              <td><a href="<?php echo site_url('/dashboard/servicesedit/'.$s['servicesid']); ?>" class="btn  btn-primary "><i class="fa fa-edit"> View Details</i></a></td>
       
		
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