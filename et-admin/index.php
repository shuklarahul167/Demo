<?php include 'database.php';?>
<?php include 'session.php';?>
<?php
if($_SESSION['admin']['status']===TRUE)
{
	header("location:dashboard.php");
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Panel - Flipmart</title>

       
        <!-- Bootstrap -->
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap rtl -->
        <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
        <!-- Pe-icon-7-stroke -->
        <link href="assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <!-- Theme style -->
        <link href="assets/dist/css/component_ui.min.css" rel="stylesheet" type="text/css"/>
        <!-- Theme style rtl -->
        <!--<link href="assets/dist/css/component_ui_rtl.css" rel="stylesheet" type="text/css"/>-->
        <!-- Custom css -->
        <link href="assets/dist/css/custom.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <!-- Content Wrapper -->
        <div class="login-wrapper">
            <div class="container-center">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <div class="view-header">
						<center><img src="../img/logo.jpeg" alt="Flipmart" class="img-responsive"  /></center>
						<br/>
                            <div class="header-icon" style="    margin-top: 10px;">
                                <i class="pe-7s-unlock"></i>
                            </div>
                            <div class="header-title">
							
                                <h3>Admin Panel</h3>
								<br/>
                                <small><strong>Please enter your credentials to login.</strong></small>
                              
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
					 <div class="header-title"  style="color:red; text-align:center">				
                             <?php if(isset($_REQUEST['msg'])){?>
                              
                                <small><strong><?php echo $_REQUEST['msg'];?></strong></small>
							 <?php }?>
                            </div>
                        <form action="check.php" method="post" id="" >
                            <!--Social Buttons--> 
                          
                            <div class="form-group">
                                <label class="control-label">Username</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input id="username" type="text" class="form-control" name="username" placeholder="Username">
                                </div>
                               
                            </div>
                            <div class="form-group">
                                <label class="control-label">Password</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                    <input id="password" type="password" class="form-control" name="password" placeholder="******">
                                </div>
                               
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary pull-right" onclick="return validate_form();">Login</button>
                                <div class="checkbox checkbox-success" style="width:150px">
                                    <input id="checkbox3" type="checkbox" checked>
                                    <label for="checkbox3">Keep me signed in</label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
               

            </div>
        </div>
        <!-- /.content-wrapper -->
        <!-- jQuery -->
        <script src="assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
        <!-- bootstrap js -->
        <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script>
    function validate_form() {
		    
			if (document.getElementById("username").value == "") {			
				 //form_no.style.border = "1px solid red";
               alert("Enter Your Username !");
                return false;
            }
			if (document.getElementById("password").value == "") {
				// x.style.display = "block";
				// roll_no.style.border = "1px solid red";
              alert("Enter Your Password !");
                return false;
            }
			
			  
        }
	
        
</script>

    </body>

</html>