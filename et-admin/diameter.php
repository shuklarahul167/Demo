<?php include('database.php');
include('header.php');
if(isset($_REQUEST['id'])){
$rs=mysqli_query($con,"SELECT * FROM `tbl_diameter` WHERE `id`='".$_REQUEST['id']."'");
$row = mysqli_fetch_assoc($rs);
}?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#wt_id').on('change',function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'ajax.php',
                data:'country_id='+countryID,
                success:function(html){
                    $('#profile').html(html);
                   //$('#city').html('<option value="">Select state first</option>'); 
                }
            }); 
        }
		/*else{
            $('#state').html('<option value="">Select country first</option>');
            $('#city').html('<option value="">Select state first</option>'); 
        }*/
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
                                <h1>Diameter </h1>
                              
                                <ol class="breadcrumb">
                                    <li><a href="dashboard.php"><i class="pe-7s-home"></i> Dashboard</a></li>                                       
                                    <li class="active">Diameter </li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <!-- Form controls -->
                            <div class="col-sm-6">
                                <div class="panel panel-bd ">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Diameter Add</h4>
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
                                                <label for="exampleInputFile" class="col-sm-4">Width </label>
												<div class="col-sm-8">
												
                                                <select name="wt_id" class="form-control"  id="wt_id"   required>
												<option value="">Select Width </option>
												<?php $wt=mysqli_query($con,"SELECT * FROM `trade_width` ORDER BY `width` ASC");
												while($row_wt=mysqli_fetch_array($wt)){?>
												<option value="<?php echo $get_id=$row_wt['id'];?>" <?php if($row['wt_id']==$get_id)echo"selected";?>><?php echo $row_wt['width'];?></option>
												<?php }?>
												</select>
                                               
                                            </div>
											
                                            </div>
											 <div class="form-group row">
                                                <label for="exampleInputFile" class="col-sm-4">Profile </label>
												<div class="col-sm-8">
                                                <select name="profile_nu" id="profile" class="form-control"  required >
												<option value="">Select Profile</option>
												<?php if(!empty($row['profile_nu'])){
												 $wt1=mysqli_query($con,"SELECT * FROM `tbl_profile` WHERE `wt_id`='".$row['wt_id']."' ORDER BY `profile_nu` ASC");
												while($row_wt1=mysqli_fetch_array($wt1)){?>
												<option value="<?php echo $get_id=$row_wt1['id'];?>" <?php if($row['profile_nu']==$get_id)echo"selected";?>><?php echo $row_wt1['profile_nu'];?></option>
												<?php }}?>
												</select>
                                               
                                            </div>
											
                                            </div>
											<div class="form-group row">
                                                <label for="exampleInputFile" class="col-sm-4">Diameter </label>
												<div class="col-sm-8">
                                                <input type="text" name="diameter" class="form-control" value="<?php echo $row['diameter'];?>"  required />
                                               
                                            </div>
											
                                            </div>
                                          
                                            
                                           <center>
										   <?php if(!empty($_GET['id'])){?>
										   <button type="submit" class="btn btn-primary" name="DIAMETER">Update</button>
										   <?php }else{?>
										   <button type="submit" class="btn btn-primary" name="DIAMETER">Submit</button>
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
                                            <h4>Diameter List </h4>
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
                                                        <th>Width</th>
                                                        <th>Profile</th>
                                                        <th>Diameter</th>
                                                        <th>Action</th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>
												<?php 
	$i=1;
	$query="SELECT * FROM `tbl_diameter` ORDER BY `id` DESC";
	$res=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($res)){
		?>
                                                   		<tr>
		<td><?php echo $i; $i++;?> </td>
		
	
			 
		<td><?php $wt_sql=mysqli_query($con,"SELECT * FROM `trade_width` WHERE `id`='".$row['wt_id']."'"); $rowwt=mysqli_fetch_array($wt_sql); echo $rowwt['width'];?></td>
		<td><?php $pro_sql=mysqli_query($con,"SELECT * FROM `tbl_profile` WHERE `id`='".$row['profile_nu']."'"); $rowpt=mysqli_fetch_array($pro_sql); echo $rowpt['profile_nu'];?></td>
		<td><?php echo $row['diameter'];?></td>
		
		
	<td><a href="diameter.php?id=<?php echo $row['id'];?>" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a>
	/ 
	  <a href="post.php?id=<?php echo $row['id']; ?>&DELETE_DT" class="btn btn-danger" onclick="return confirm('Are you sure?');">
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