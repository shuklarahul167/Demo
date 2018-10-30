<?php include('database.php');
include('header.php');
if(isset($_REQUEST['id'])){
$rs=mysqli_query($con,"SELECT * FROM `mk_cont_slider` WHERE `id`='".$_REQUEST['id']."'");
$row = mysqli_fetch_assoc($rs);
}?>
            <!-- /.content-wrapper -->
            <div class="content-wrapper">
                <div class="container">
                    <!-- main content -->
                    <div class="content">
                        <!-- Content Header (Page header) -->
                        <div class="content-header">
                            
                            <div class="header-title">
                                <h1>Slider </h1>
                              
                                <ol class="breadcrumb">
                                    <li><a href="dashboard.php"><i class="pe-7s-home"></i> Dashboard</a></li>                                       
                                    <li class="active">Slider </li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <!-- Form controls -->
                            <div class="col-sm-6">
                                <div class="panel panel-bd ">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Slider Add</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                              <?php if(isset($_REQUEST['suc_msg'])){?>
                                            <div class="alert alert-success alert-dismissible" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                    <strong>Success!</strong> <?php echo $_REQUEST['suc_msg'];?>
                                                </div>
											  <?php }?>

												
                                            <form name="Category Add"  action="post.php" method="post" enctype="multipart/form-data">                                           
										   <input type="hidden" name="edit_id" value="<?php echo $_REQUEST['id'];?>">	
                                           
                                           
                                            <div class="form-group row">
                                                <label for="exampleInputFile" class="col-sm-4">Order Number </label>
												<div class="col-sm-8">
                                                <input type="text" name="order_no" class="form-control" value="<?php echo $row['order_no'];?>"  required />
                                               
                                            </div>
											
                                            </div>
											 <div class="form-group row">
                                                <label for="exampleInputFile" class="col-sm-4">Image Upload </label>
												<div class="col-sm-8">
                                                <input type="file" name="file" class="form-control"   <?php if(empty($row['img']))echo'required';?> />
												<?php if(!empty($row['img'])){?><img src="assets/products/<?php echo $row['img'];?>" width="70" height="50"><?php }?>
                                               
                                            </div>
											
                                            </div>
                                          
                                            
                                           <center>
										   <?php if(!empty($_GET['id'])){?>
										   <button type="submit" class="btn btn-primary" name="CONT_SLIDER">Update</button>
										   <?php }else{?>
										   <button type="submit" class="btn btn-primary" name="CONT_SLIDER">Submit</button>
										   <?php }?>
										   
										   </center>
                                        </form>
                                    </div>
                                </div>
                            </div>
							
		
                            <!-- Inline form -->
							
                           <div class="col-sm-6">
                                <div class="panel panel-bd ">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Slider List </h4>
                                        </div>
                                    </div>
									<div class="panel-body">
									<?php if(isset($_REQUEST['err_msg'])){?>
                                            <div class="alert alert-danger alert-dismissible" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                    <strong>Success!</strong> <?php echo $_REQUEST['err_msg'];?>
                                                </div>
											  <?php }?>
                                    <div class="table-responsive">
                                            <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Sr. No.</th>
                                                        <th>Order No.</th>
                                                        <th>Img</th>
                                                        <th>Action</th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>
												<?php 
	$i=1;
	 $query1="SELECT * FROM `mk_cont_slider` ORDER BY `order_no` ASC";
	$res1=mysqli_query($con,$query1);
	while($row1=mysqli_fetch_array($res1)){
		?>
                                                   		<tr>
		<td><?php echo $i; $i++;?> </td>
		
	
			 
		<td><?php echo $row1['order_no'];?></td>
		<td><img src="assets/products/<?php echo $row1['img'];?>" width="70" height="50"></td>
		
		
	<td><a href="cont_slider.php?id=<?php echo $row1['id'];?>" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a>
	/ 
	  <a href="post.php?id=<?php echo $row1['id']; ?>&DELETE_CONTSL" class="btn btn-danger" onclick="return confirm('Are you sure?');">
	<i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
	
	</tr>
	
	
	<?php }?>
	
                                              
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                        </div>
                                </div>
                            </div>
                       
                        </div>
                        
                        
                    </div> <!-- /.main content -->
                </div> <!-- /.container -->
            </div> <!-- /.content-wrapper -->
            <!-- start footer -->
			<?php include('footer2.php');?>
