<?php include('database.php');
include('header.php');
if(isset($_REQUEST['id'])){
$rs=mysqli_query($con,"SELECT * FROM `mk_blog` WHERE `id`='".$_REQUEST['id']."'");
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
                                <h1>Blog Add </h1>
                              
                                <ol class="breadcrumb">
                                    <li><a href="dashboard.php"><i class="pe-7s-home"></i> Dashboard</a></li>                             
                                    <li class="active">Blog Add </li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <!-- Form controls -->  
                            <div class="col-sm-12">
						
							
                                <div class="panel panel-bd ">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4> Blog Add</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body" style="    padding-left: 10%;"	>
									 <?php if(isset($_REQUEST['suc_msg'])){?>
                                            <div class="alert alert-success alert-dismissible" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                    <strong>Success!</strong> <?php echo $_REQUEST['suc_msg'];?>
                                                </div>
											  <?php }?>
							 <form name="Product Add"  action="post.php" method="post" enctype="multipart/form-data">
								 <input type="hidden" name="edit_id" value="<?php echo $_REQUEST['id'];?>">	
                                           
										    <div class="form-group row">
                                                <label for="exampleInputFile" class="col-sm-3">Title <span style="color:#e62323d6;">*</span></label>
												<div class="col-sm-6">
												<input type="text"  name="title" value="<?php echo $row['title'];?>" class="form-control"  required />
												
                                               
                                            </div>
										
                                            </div>
										   
										  
                                           
																				
											
											
											
											 <div class="form-group row">
                                                <label for="exampleInputFile" class="col-sm-3">Image Upload <span style="color:#e62323d6;">*</span></label>
												<div class="col-sm-6">
                                              <input type="file" name="file" class="form-control"  <?php if(empty($_GET['id'])){?>required <?php }?>>
											  <div id='TextBoxesGroup'></div>
												
                                            </div><div class="col-sm-3">
											
											 <?php if(!empty($_GET['id'])){?>

                     <img src="assets/products/<?php echo $row['img']?>" width="100" height="100">

                      <?php }?>
										
                                            </div>
                                            </div>
											<div class="form-group row">
                                                <label for="exampleInputFile" class="col-sm-3">Description  <span style="color:#e62323d6;">*</span></label>
												<div class="col-sm-8">
                                              <textarea name="desc" id="editor1" class="form-control ckeditor"  >
											  <?php echo $row['desc'];?></textarea>
												
                                            </div>
										
                                            </div>
													
											
                                           
                                          <br/>
                                            
                                           <center>
										   <?php if(!empty($_GET['id'])){?>
										   <button type="submit" class="btn btn-primary" name="BLOG">Update</button>
										   <?php }else{?>
										   <button type="submit" class="btn btn-primary" name="BLOG">Submit</button>
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
            <!-- start footer -->       <!-- ckeditor js -->
<script src="assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>

<script type="text/javascript">

    $(document).ready(function(){

	    var counter = 2;
		
	    $("#addButton").click(function () {
				
			if(counter>6){
		        alert("Only 6 Image allow");
		        return false;
		    }   
			
			var newTextBoxDiv = $(document.createElement('div')).attr("id", 'TextBoxDiv' + counter);
                newTextBoxDiv.after().html('<input type="file" name="img[]" id="textbox' + counter + '" class="form-control"  />');
            
			newTextBoxDiv.appendTo("#TextBoxesGroup");
				
		    counter++;
	    });

	    $("#removeButton").click(function () {
		    if(counter==1){
		        //alert("No more textbox to remove");
		        return false;
		    }   
	        counter--;
			
	        $("#TextBoxDiv" + counter).remove();
		});
		
		$("#getButtonValue").click(function () {
		
			var msg = '';
			for(i=1; i<counter; i++){
				msg += "\n Textbox #" + i + " : " + $('#textbox' + i).val();
			}
		   	alert(msg);
		});
		
  });
</script>


	       <script src="assets/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
        <!-- Start Theme label Script
        =====================================================================-->
      
        <!-- End Theme label Script
        =====================================================================-->
        <script>
            $(document).ready(function () {
                "use strict"; // Start of use strict
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace('editor1');
            });
        </script>
 
 <?php include('footer.php');?>
    
