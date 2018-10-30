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
                                <h1>Product List </h1>
                              
                                <ol class="breadcrumb">
                                    <li><a href="dashboard.php"><i class="pe-7s-home"></i> Dashboard</a></li>                                  
                                    <li class="active">Product List </li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                       
                            <!-- Inline form -->
							
                           <div class="col-sm-12">
                                <div class="panel panel-bd ">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Product List </h4>
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
                                 <th>Category</th>
                                 <th>Sub Category</th>                               
                                 <th>Model</th>
                                 <th>Size</th>
                                 <th>Price</th>
								   <th>Offer</th>
                                 <th>Action</th>
                                 </tr>
                           </thead>
                       <tbody>
				        <?php 
						$i=1;
						$query="SELECT * FROM `mk_product` ORDER BY `id` DESC";
						$res=mysqli_query($con,$query);
						while($row=mysqli_fetch_array($res)){
		                       ?>
							<tr>
							<td><?php echo $i; $i++;?> </td>
							<td><img src="assets/products/<?php echo $row['img'];?>" width='40' height='50' /></td>		
							<td><?php echo $row['product_code'] ?></td>
							<td><?php echo $row['product_name'] ?></td>
							<td><?php $cate_sql=mysqli_query($con,"SELECT * FROM `mk_category` WHERE `id`='".$row['category']."'"); $row_c=mysqli_fetch_array($cate_sql); echo $row_c['category']; ?></td>
							<td><?php $scate_sql=mysqli_query($con,"SELECT * FROM `mk_sub_category` WHERE `id`='".$row['sub_category']."'"); $row_sc=mysqli_fetch_array($scate_sql); echo $row_sc['sub_category']; ?></td>
					
							<td><?php echo $row['model']; ?></td>
							<td><?php echo $row['size']; ?></td>
							<td><?php echo $row['price']; ?></td>
							<td><?php echo $row['offer'] ?></td>
							<td><a href="product.php?id=<?php echo $row['id'];?>" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a>
								/ <a href="post.php?id=<?php echo $row['id']; ?>&DEL_PRODUCT" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>	
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