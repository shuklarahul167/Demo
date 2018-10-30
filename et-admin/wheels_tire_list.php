<?php include('database.php');
  include('header.php');
  ?>
            <!-- /.content-wrapper -->
            <div class="content-wrapper">
                <div class="container">
                    <!-- main content -->
                    <div class="content">
                        <!-- Content Header (Page header) -->
                        <div class="content-header">
                            
                            <div class="header-title">
                                <h1>Wheels & Tire Product List </h1>
                              
                                <ol class="breadcrumb">
                                    <li><a href="dashboard.php"><i class="pe-7s-home"></i> Dashboard</a></li>                                  
                                    <li class="active">Wheels & Tire Product List </li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                       
                            <!-- Inline form -->
							
                           <div class="col-sm-12">
                                <div class="panel panel-bd ">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Wheels & Tire Product List </h4>
                                        </div>
                                    </div>
									<div class="panel-body">
                                    <div class="table-responsive">
                      <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                        <thead>
                                 <tr>
                                 <th>Sr. No.</th>														
                                 <th>Img</th>
                                 <th>Code</th>
                                 <th>Product Name</th>
                                 <th>Year</th>
                                 <th>Make</th>
                                 <th>Model</th>
                                 <th>Diameter</th>
                                 <!--<th>Retail</th>-->
                                 <th>Total </th>
                                 <th>Action</th>
                                 </tr>
                           </thead>
                       <tbody>
				        <?php 
						$i=1;
						$query="SELECT * FROM `tbl_wheels_tire_product` ORDER BY `id` DESC";
						$res=mysqli_query($con,$query);
						while($row=mysqli_fetch_array($res)){
		                       ?>
							<tr>
							<td><?php echo $i; $i++;?> </td>
							<td><img src="assets/products/<?php echo $row['wheels'];?>" width='60' height='40' /> + <img src="assets/products/<?php echo $row['tire'];?>" width='60' height='40' /></td>		
							<td><?php echo $row['code'] ?></td>
							<td><?php echo $row['product_name'] ?></td>
							<td><?php $cate_sql=mysqli_query($con,"SELECT * FROM `tbl_year` WHERE `id`='".$row['yr_id']."'"); $row_c=mysqli_fetch_array($cate_sql); echo $row_c['year']; ?></td>
							<td><?php $scate_sql=mysqli_query($con,"SELECT * FROM `tbl_make` WHERE `id`='".$row['make_id']."'"); $row_sc=mysqli_fetch_array($scate_sql); echo $row_sc['make']; ?></td>
							<td><?php $scate_sql2=mysqli_query($con,"SELECT * FROM `tbl_model` WHERE `id`='".$row['ml_id']."'"); $row_sc2=mysqli_fetch_array($scate_sql2); echo $row_sc2['model']; ?></td>
							<td><?php echo $row['diameter'];  ?></td>
							<!--<td><?php echo $row['retail'];  ?></td>-->
							<td><?php echo $row['total'];  ?></td>
							<td><a href="wheels_tire_product.php?id=<?php echo $row['id'];?>" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a>
								/ <a href="post.php?id=<?php echo $row['id']; ?>&DELETE_WHEELS_TIRE" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>	
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
       <script src="assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
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