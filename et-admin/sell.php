<?php include('database.php');
include('header.php');
if(isset($_REQUEST['id'])){
$rs=mysqli_query($con,"SELECT * FROM `sell` WHERE `id`='".$_REQUEST['id']."'");
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
                                <h1>Sell Leads Add </h1>
                              
                                <ol class="breadcrumb">
                                    <li><a href="dashboard.php"><i class="pe-7s-home"></i> Dashboard</a></li>                                       
                                    <li class="active">Sell Leads Add </li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <!-- Form controls -->
                            <div class="col-sm-2">&nbsp;</div>
                            <div class="col-sm-8">
                                <div class="panel panel-bd ">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Sell Leads Add</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
									
                                       <form name="Sell Leads Add"  action="addsell.php" method="post" enctype="multipart/form-data">
									
                                          
                                           
										   <input type="hidden" name="edit_id" value="<?php echo $_REQUEST['id'];?>">	
                                           
                                           
										    <div class="form-group row">
                                                <label for="exampleInputFile" class="col-sm-3">Country's Name </label>
												<div class="col-sm-6">
                                                <input type="text" name="loc" class="form-control"  value="<?php echo $row['loc']?>" required />
                                               
                                            </div>
											
                                            </div>
											<div class="form-group row">
                                                <label for="exampleInputFile" class="col-sm-3">Description </label>
												<div class="col-sm-6">
												<textarea id="some-textarea" name="description" class="form-control" rows="10" placeholder="" required ><?php echo $row['description']?></textarea>
                                               
                                               
                                            </div>
											
                                            </div>
                                            
											
											
                                            
                                           <center>
										   <?php if(!empty($_GET['id'])){?>
										   <button type="submit" class="btn btn-primary" name="SELL">Update</button>
										   <?php }else{?>
										   <button type="submit" class="btn btn-primary" name="SELL">Submit</button>
										   <?php }?>
										   
										   </center>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Inline form -->
						
                       
                        </div>
                        
                        
                    </div> <!-- /.main content -->
                </div> <!-- /.container -->
            </div> <!-- /.content-wrapper -->
            <!-- start footer -->
 <footer class="main-footer">
                <div class="container" align="center">
                   
                    <strong>Copyright &copy; 2018-2019 <a href="#">Wakanda Traders</a>.</strong> All rights reserved. 
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