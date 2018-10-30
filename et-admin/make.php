<?php include('database.php');
include('header.php');
if(isset($_REQUEST['id'])){
$rs=mysqli_query($con,"SELECT * FROM `tbl_make` WHERE `id`='".$_REQUEST['id']."'");
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
                                <h1>Make Tire </h1>
                              
                                <ol class="breadcrumb">
                                    <li><a href="dashboard.php"><i class="pe-7s-home"></i> Dashboard</a></li>                                       
                                    <li class="active">Make Tire </li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <!-- Form controls -->
                            <div class="col-sm-6">
                                <div class="panel panel-bd ">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Make Tire Add</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                              <?php if(isset($_REQUEST['suc_msg'])){?>
                                            <div class="alert alert-success alert-dismissible" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                    <strong>Success!</strong> <?php echo $_REQUEST['suc_msg'];?>
                                                </div>
											  <?php }?>

												
                                            <form name="Tread Width Add"  action="post.php" method="post" >                                           
										   <input type="hidden" name="edit_id" value="<?php echo $_REQUEST['id'];?>">	
                                           
                                           
                                            <div class="form-group row">
                                                <label for="exampleInputFile" class="col-sm-4">Make </label>
												<div class="col-sm-8">
                                                <input type="text" name="make" class="form-control" value="<?php echo $row['make'];?>"  required />
                                               
                                            </div>
											
                                            </div>
                                          
                                            
                                           <center>
										   <?php if(!empty($_GET['id'])){?>
										   <button type="submit" class="btn btn-primary" name="MAKE">Update</button>
										   <?php }else{?>
										   <button type="submit" class="btn btn-primary" name="MAKE">Submit</button>
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
                                            <h4>Make Tire List </h4>
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
                                                        <th>Make</th>
                                                        <th>Action</th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>
												<?php 
	$i=1;
	$query="SELECT * FROM `tbl_make` ORDER BY `id` DESC";
	$res=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($res)){
		?>
                                                   		<tr>
		<td><?php echo $i; $i++;?> </td>
		
	
			 
		<td><?php echo $row['make'];?></td>
		
		
	<td><a href="make.php?id=<?php echo $row['id'];?>" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a>
	/ 
	  <a href="post.php?id=<?php echo $row['id']; ?>&DELETE_MAKE" class="btn btn-danger" onclick="return confirm('Are you sure?');">
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
            <!-- start footer -->
 <footer class="main-footer">
                <div class="container" align="center">
                   
                    <strong>Copyright &copy; 2018-2019 <a href="#">Atlantic Tire King</a>.</strong> All rights reserved. 
                </div>
            </footer><!-- /. footer -->
        </div> <!-- ./wrapper -->
        <!-- jQuery -->
        <script data-cfasync="false" src="../../../../cdn-cgi/scripts/d07b1474/cloudflare-static/email-decode.min.js"></script><script src="assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
        <!-- jquery-ui -->
        <script src="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
        <!-- Bootstrap js -->
        <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- lobipanel js -->
        <script src="assets/plugins/lobipanel/lobipanel.min.js" type="text/javascript"></script>
        <!-- animsition js -->
        <script src="assets/plugins/animsition/js/animsition.min.js" type="text/javascript"></script>
        <!-- bootsnav js -->
        <script src="assets/plugins/bootsnav/js/bootsnav.js" type="text/javascript"></script>
        <!-- SlimScroll js -->
        <script src="assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <!-- FastClick js-->
        <script src="assets/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
        <!-- End Core Plugins
        =====================================================================-->
        <!-- Start Page Lavel Plugins
        =====================================================================-->
        <!-- dataTables js -->
        <script src="assets/plugins/datatables/dataTables.min.js" type="text/javascript"></script>
        <!-- Start Theme label Script
        =====================================================================-->
        <!-- Dashboard js -->
        <script src="assets/dist/js/dashboard.js" type="text/javascript"></script>
        <!-- End Theme label Script
        =====================================================================-->
        <script>
            $(document).ready(function () {

                "use strict"; // Start of use strict

                $('#dataTableExample1').DataTable({
                    "dom": "<'row'<'col-sm-6'l><'col-sm-6'f>>t<'row'<'col-sm-6'i><'col-sm-6'p>>",
                    "lengthMenu": [[6, 25, 50, -1], [6, 25, 50, "All"]],
                    "iDisplayLength": 6
                });

                $("#dataTableExample2").DataTable({
                    dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
                    "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                    buttons: [
                        {extend: 'copy', className: 'btn-sm'},
                        {extend: 'csv', title: 'ExampleFile', className: 'btn-sm'},
                        {extend: 'excel', title: 'ExampleFile', className: 'btn-sm'},
                        {extend: 'pdf', title: 'ExampleFile', className: 'btn-sm'},
                        {extend: 'print', className: 'btn-sm'}
                    ]
                });

            });
        </script>
    </body>
</html>