
<?php include('header.php');?>

            <!-- /.content-wrapper -->
            <div class="content-wrapper">
                <div class="container">
                    <!-- main content -->
                    <div class="content">
                        <!-- Content Header (Page header) -->
                        <div class="content-header">
                           
                            <div class="header-title">
                                <h1>Welcome to Flipmart</h1>                                
                                <ol class="breadcrumb">
                                    <li><a href="."><i class="pe-7s-home"></i> Home</a></li>
                                    <li class="active">Dashboard</li>
                                </ol>
                            </div>
                        </div>  <!-- /.Content Header (Page header) -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                <!-- statistic box -->
								<a href="product.php">
                                <div class="statistic-box statistic-filled-1">
								<?php $pd=mysqli_query($con,"SELECT * FROM `tbl_product` ");
								$count=mysqli_num_rows($pd);?>
                                    <h2><span class="count-number"><?php echo $count;?></span></h2>
                                    <div class="small">Total Product</div>
                                    <i class="ti-server statistic_icon"></i>
                                    <div class="sparkline1 text-center"></div>
                                </div> <!-- /. statistic box -->
								<a/>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                <!-- statistic box -->
								<a href="tread_width.php">
                                <div class="statistic-box statistic-filled-2">
								<?php $pdw=mysqli_query($con,"SELECT * FROM `trade_width` ");
								$count2=mysqli_num_rows($pdw);?>
                                    <h2><span class="count-number"><?php echo $count2;?></span>  </h2>
                                    <div class="small">Total Tread Width</div>
                                    <i class="ti-user statistic_icon"></i>
                                    <div class="sparkline2 text-center"></div>
                                </div>  <!-- /.statistic box -->
								<a>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
							<a href="profile.php">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-3">
								<?php $pdw1=mysqli_query($con,"SELECT * FROM `tbl_profile` ");
								$count21=mysqli_num_rows($pdw1);?>
                                    <h2><span class="count-number"><?php echo $count21;?></span> </h2>
                                    <div class="small">Total Profile</div>
                                    <i class="ti-world statistic_icon"></i>
                                    <div class="sparkline3 text-center"></div>
                                </div> <!-- /.statistic box -->
								</a>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
							<a href="diameter.php">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-4">
								<?php $pdw11=mysqli_query($con,"SELECT * FROM `tbl_diameter` ");
								$count211=mysqli_num_rows($pdw11);?>
                                    <h2><span class="count-number"><?php echo $count211;?></span> </h2>
                                    <div class="small">Total Diameter</div>
                                    <i class="ti-bag statistic_icon"></i>
                                    <div class="sparkline4 text-center"></div>
                                </div> <!--/. statistic box -->
								</a>
                            </div>
                        </div>
						
						 <div class="row">
						   <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
						   <a href="year.php">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-4">
								<?php $pdw11=mysqli_query($con,"SELECT * FROM `tbl_year` ");
								$count211=mysqli_num_rows($pdw11);?>
                                    <h2><span class="count-number"><?php echo $count211;?></span> </h2>
                                    <div class="small">Total Year</div>
                                    <i class="ti-bag statistic_icon"></i>
                                    <div class="sparkline4 text-center"></div>
                                </div> <!--/. statistic box -->
								</a>
                            </div>
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
							<a href="make.php">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-3">
								<?php $pdw1=mysqli_query($con,"SELECT * FROM `tbl_make` ");
								$count21=mysqli_num_rows($pdw1);?>
                                    <h2><span class="count-number"><?php echo $count21;?></span> </h2>
                                    <div class="small">Total Make Tire</div>
                                    <i class="ti-world statistic_icon"></i>
                                    <div class="sparkline3 text-center"></div>
                                </div> <!-- /.statistic box -->
								</a>
                            </div>
                            
                          
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                <!-- statistic box -->
								<a href="model.php">
                                <div class="statistic-box statistic-filled-1">
								<?php $pd=mysqli_query($con,"SELECT * FROM `tbl_model` ");
								$count=mysqli_num_rows($pd);?>
                                    <h2><span class="count-number"><?php echo $count;?></span></h2>
                                    <div class="small">Total Model Tire</div>
                                    <i class="ti-server statistic_icon"></i>
                                    <div class="sparkline1 text-center"></div>
                                </div> <!-- /. statistic box -->
								</a>
                            </div>
                              
                          
                        </div>
                     
                                                
                         
                           
                        </div> <!-- /.row -->
                    </div> <!-- /.main content -->
                </div> <!-- /.container -->
            </div> <!-- /.content-wrapper -->
            <!-- start footer -->
           <?php include('footer.php');?>