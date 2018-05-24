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
				  
				<!--START--> 
				  
				<div class="col-md-12 col-sm-12 col-xs-12">
				
                <br>    
        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                       <!--<th>Product ID</th>-->
                        <th>ID</th>
                        <th>Client Name</th>
                        <th>Email</th>
                        <th>Contact No.</th>
                        <th>Message</th>
                        <th></th>
         
                        
                      </tr>
                    </thead>
					<tbody> 
			
			      <?php foreach($webinquiry as $wi):?>  

                      
              <tr>

              <td><?php echo $wi['contactid']; ?></td>
		          <td><?php echo $wi['clientname']; ?></td>
              <td><?php echo $wi['email']; ?></td>
              <td><?php echo $wi['contactno']; ?></td>
              <td><?php echo $wi['message']; ?></td>
  
              <td><a href="<?php echo site_url('/dashboard/webinquiryview/'.$wi['contactid']); ?>" class="btn  btn-primary "><i class="fa fa-edit"> View Details</i></a></td>
       
		
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