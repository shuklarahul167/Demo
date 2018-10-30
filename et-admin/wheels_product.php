<?php include('database.php');
include('header.php');
if(isset($_REQUEST['id'])){
$rs=mysqli_query($con,"SELECT * FROM `tbl_wheels_product` WHERE `id`='".$_REQUEST['id']."'");
$row = mysqli_fetch_assoc($rs);
}?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#tread_width').on('change',function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'../ajax.php',
                data:'country_id='+countryID,
                success:function(html){
                    $('#profile').html(html);                    
                }
            }); 
        }
    });
    
    $('#profile').on('change',function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'../ajax.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#diameter').html(html);
                }
            }); 
        }
    });
	
	 $('#make').on('change',function(){
        var makeID = $(this).val();
        if(makeID){
            $.ajax({
                type:'POST',
                url:'ajax2.php',
                data:'country_id='+makeID,
                success:function(html){
                    $('#model').html(html);                    
                }
            }); 
        }
    });
});
</script>
            <!-- /.content-wrapper -->
            <div class="content-wrapper">
                <div class="container">
                    <!-- main content -->
                    <div class="content">
                        <!-- Content Header (Page header) -->
                        <div class="content-header">
                            
                            <div class="header-title">
                                <h1>Wheels Product Add </h1>
                              
                                <ol class="breadcrumb">
                                    <li><a href="dashboard.php"><i class="pe-7s-home"></i> Dashboard</a></li>                             
                                    <li class="active">Wheels Product Add </li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <!-- Form controls -->  <div class="col-sm-2">&nbsp;</div>
                            <div class="col-sm-8">
                                <div class="panel panel-bd ">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Wheels Product Add</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
									 <?php if(isset($_REQUEST['suc_msg'])){?>
                                            <div class="alert alert-success alert-dismissible" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                    <strong>Success!</strong> <?php echo $_REQUEST['suc_msg'];?>
                                                </div>
											  <?php }?>
							 <form name="Product Add"  action="post.php" method="post" enctype="multipart/form-data">
								 <input type="hidden" name="edit_id" value="<?php echo $_REQUEST['id'];?>">	
                                           
										    <div class="form-group row">
                                                <label for="exampleInputFile" class="col-sm-3">Product's Name </label>
												<div class="col-sm-6">
												<input type="text"  name="product_name" value="<?php echo $row['product_name'];?>" class="form-control"  required />
												
                                               
                                            </div>
										
                                            </div>
										   
                                           
											
											
										   <div class="form-group row">
                                                <label for="exampleInputFile" class="col-sm-3">Year </label>
												<div class="col-sm-6">
                                              <select  name="yr_id" class="form-control"  required >
												<option value="">Select Year</option>												
												<?php $yr=mysqli_query($con,"SELECT * FROM `tbl_year` ORDER BY `year` DESC ");
													while($row_yr=mysqli_fetch_array($yr)){?>
												<option value="<?php echo $get_id=$row_yr['id'];?>"<?php if($row['yr_id']==$get_id){echo"selected";}?>><?php echo $row_yr['year'];?></option>
												<?php }?>
												</select>
                                            </div>
										
                                            </div>
											
											 <div class="form-group row">
                                                <label for="exampleInputFile" class="col-sm-3">Make Tire </label>
												<div class="col-sm-6">
                                              <select  name="make_id" id="make" class="form-control"  required >
												<option value="">Select Make Tire</option>												
												<?php $mk=mysqli_query($con,"SELECT * FROM `tbl_make` ORDER BY `make` ASC ");
													while($row_mk=mysqli_fetch_array($mk)){?>
												<option value="<?php echo $get_id=$row_mk['id'];?>"<?php if($row['make_id']==$get_id){echo"selected";}?>><?php echo $row_mk['make'];?></option>
												<?php }?>
												</select>
                                            </div>
										
                                            </div>
											
											 <div class="form-group row">
                                                <label for="exampleInputFile" class="col-sm-3">Model Tire</label>
												<div class="col-sm-6">
                                                <select name="ml_id" id="model" class="form-control"  required >
												<option value="">Select Model</option>
												<?php if(!empty($row['pro_id'])){
												 $ml=mysqli_query($con,"SELECT * FROM `tbl_model` WHERE `make`='".$row['make_id']."' ORDER BY `model` ASC");
												while($row_ml=mysqli_fetch_array($ml)){?>
												<option value="<?php echo $get_id=$row_ml['id'];?>" <?php if($row['ml_id']==$get_id)echo"selected";?>><?php echo $row_ml['model'];?></option>
												<?php }}?>
												</select>
                                               
                                            </div>
											
                                            </div>
											<div class="form-group row">
                                                <label for="exampleInputFile" class="col-sm-3">Diameter </label>
												<div class="col-sm-6">
                                                <select name="diameter" class="form-control"  required >
												<option value="">Select Diameter</option>
												<option value="15">15</option>
												<option value="16">16</option>
												<option value="17">17</option>
												<option value="18">18</option>												
												</select>
                                               
                                            </div>
											
                                            </div>											
											
											 <div class="form-group row">
                                                <label for="exampleInputFile" class="col-sm-3"> Type </label>
												<div class="col-sm-6">
                                              <input type="text"  name="type" value="<?php echo $row['type'];?>" class="form-control"  required >
												
                                            </div>
										
                                            </div>
											
											
											<div class="form-group row">
                                                <label for="exampleInputFile" class="col-sm-3"> Size </label>
												<div class="col-sm-6">
                                              <input type="text"  name="size" value="<?php echo $row['size'];?>" class="form-control"  required >
												
                                            </div>
										
                                            </div>
											
											<div class="form-group row">
                                                <label for="exampleInputFile" class="col-sm-3"> Price </label>
												<div class="col-sm-6">
                                              <input type="text"  name="price" value="<?php echo $row['price'];?>" class="form-control"  required >
												
                                            </div>
										
                                            </div>
											<div class="form-group row">
                                                <label for="exampleInputFile" class="col-sm-3"> Total Price </label>
												<div class="col-sm-6">
                                              <input type="text"  name="total" value="<?php echo $row['total'];?>" class="form-control"  required >
												
                                            </div>
										
                                            </div>	
											
											
											
											
											 <div class="form-group row">
                                                <label for="exampleInputFile" class="col-sm-3">Product Image Upload</label>
												<div class="col-sm-6">
                                              <input type="file" name="file" class="form-control"  <?php if(empty($_GET['id'])){?>required <?php }?> >
												
                                            </div><div class="col-sm-3">
											 <?php if(!empty($_GET['id'])){?>

                     <img src="assets/products/<?php echo $row['img']?>" width="100" height="100">

                      <?php }?>
										
                                            </div>
                                            </div>
											
                                           
                                          <br/>
                                            
                                           <center>
										   <?php if(!empty($_GET['id'])){?>
										   <button type="submit" class="btn btn-primary" name="PRODUCT_WHEELS">Update</button>
										   <?php }else{?>
										   <button type="submit" class="btn btn-primary" name="PRODUCT_WHEELS">Submit</button>
										   <?php }?>
										   
										   </center>
                                        </form>
                                    </div>
                                </div>
                            </div>
							<div class="col-sm-2">&nbsp;</div>
                            <!-- Inline form -->
							
                       
                        </div>
                        
                        
                    </div> <!-- /.main content -->
                </div> <!-- /.container -->
            </div> <!-- /.content-wrapper -->
            <!-- start footer -->
 <?php include('footer.php');?>