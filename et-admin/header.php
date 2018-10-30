<?php include 'database.php';?>
<?php include 'session.php';?>
<?php check_login_admin();?>
<!DOCTYPE html>
<html lang="en">    
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Panel Dashboard</title>
        <!-- Start Global Mandatory Style
        =====================================================================-->
        <link href="assets/dist/css/base.css" rel="stylesheet" type="text/css"/>
         <!-- Toastr css -->
        <link href="assets/plugins/toastr/toastr.min.css" rel="stylesheet" type="text/css"/>
        <!-- Emojionearea -->
        <link href="assets/plugins/emojionearea/emojionearea.min.css" rel="stylesheet" type="text/css" />
        <!-- Monthly css -->
        <link href="assets/plugins/monthly/monthly.min.css" rel="stylesheet" type="text/css"/>
        <!-- amchat css -->
        <link href="assets/plugins/amcharts/export.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="assets/dist/css/component_ui.min.css" rel="stylesheet" type="text/css"/>
        <!-- Theme style rtl -->
        <link href="assets/dist/css/custom.css" rel="stylesheet" type="text/css"/>
        <!-- End Theme Layout Style
        =====================================================================-->
    </head>
    <body> 
        <div class="wrapper animsition">
            <!-- main header -->
            <header class="main-header">
                <!-- top navigation -->
                <nav class="navbar top-nav">
                    <div class="container">
                        <div class="navbar-header hidden-xs">
                            <a class="navbar-brand" href="."> <img src="../img/logo.jpeg" alt="" style="    height: 64px;    margin-top: -12px;"></a>
                        </div>
                        
                        <!-- /.navbar-header -->
                        <ul class="nav navbar-top-links navbar-right">
                           
                          
                            <!-- /.dropdown -->
                            <li class="dropdown">
                                <a  href="logout.php" title="Logout">
                                    <i class="dropdowm-icon ti-lock"></i>
                                </a>
                              
                                <!-- /.dropdown-user -->
                            </li> <!-- /.dropdown -->
                        </ul> <!-- /.navbar-top-links -->
                    </div> <!-- /. container -->
                </nav> <!-- /. top navigation -->
                <!--  main navigation -->
                <nav class="navbar navbar-default navbar-mobile navbar-sticky bootsnav">
                    <!-- Start Top Search -->
                    <div class="top-search">
                        <div class="container">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="ti-search"></i></span>
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="input-group-addon close-search"><i class="ti-close"></i></span>
                            </div>
                        </div>
                    </div>
                    <!-- End Top Search -->
                    <div class="container">
                        <!-- Start Header Navigation -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                                <i class="fa fa-bars"></i>
                            </button>
                            <a class="navbar-brand hidden-md hidden-lg" href="#brand" style=""><img src="../images/logo.png" class="logo" alt="" style="    margin-top: -17px;    height: 80px;"></a>
                        </div>
                        <!-- End Header Navigation -->
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="navbar-menu">
                            <ul class="nav navbar-nav navbar-left" data-in="" data-out="">
                                <li class="active"><a href="dashboard.php"><i class="ti-home"></i> dashboard</a></li>
                             
							   
							    <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="ti-menu"></i>Category</a>
                                    <ul class="dropdown-menu">
                                         <li><a href="category.php" > Category</a></li>
                               <li><a href="sub_category.php" >Sub Category</a></li>
                              
                                        
                                    </ul>
                                </li>	
								<li class="">
                                    <a href="slider.php"  ><i class="ti-menu"></i>Slider</a>
                                   
                                </li>
								<li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="ti-menu"></i>Contest</a>
                                    <ul class="dropdown-menu">
                                         <li><a href="cont_slider.php" >Add Slider</a></li>
                               <li><a href="reg_img.php">Register Image</a></li>
                              
                                        
                                    </ul>
                                </li>	
								 <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="ti-menu"></i>Product</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="product.php">Product Add</a></li>
                                        <li><a href="product-list.php"> Product List</a></li>
                                        
                                    </ul>
                                </li>		
                          
 <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="ti-menu"></i>Order</a>
                                    <ul class="dropdown-menu">
                                       
                                        <li><a href="order.php"> Order List</a></li>
                                        
                                    </ul>
                                </li>
 <li class="">
                                    <a href="user-list.php" ><i class="ti-menu"></i>User List</a>
                                   
                                </li>	
 <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="ti-menu"></i>Blog</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog.php">Blog Add</a></li>
                                        <li><a href="blog-list.php"> Blog List</a></li>
                                        
                                    </ul>
                                </li>									
								
								
								
							
								                         
                             
                               
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>                  
                    
                </nav> <!-- /. main navigation -->
              
            </header> <!-- /. main header -->