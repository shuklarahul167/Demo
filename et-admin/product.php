<?php include('database.php');
include('header.php');
if(isset($_REQUEST['id'])){
$rs=mysqli_query($con,"SELECT * FROM `mk_product` WHERE `id`='".$_REQUEST['id']."'");
$row = mysqli_fetch_assoc($rs);
}?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#category').on('change',function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'../ajax.php',
                data:'country_id='+countryID,
                success:function(html){
                    $('#sub_category').html(html);                    
                }
            }); 
        }
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
                                <h1>Product Add </h1>
                              
                                <ol class="breadcrumb">
                                    <li><a href="dashboard.php"><i class="pe-7s-home"></i> Dashboard</a></li>                             
                                    <li class="active">Product Add </li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <!-- Form controls -->  
                            <div class="col-sm-12">
						
							
                                <div class="panel panel-bd ">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4> Product Add</h4>
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
                                                <label for="exampleInputFile" class="col-sm-3">Product's Name <span style="color:#e62323d6;">*</span></label>
												<div class="col-sm-6">
												<input type="text"  name="product_name" value="<?php echo $row['product_name'];?>" class="form-control"  required />
												
                                               
                                            </div>
										
                                            </div>
										   
										   <div class="form-group row">
                                                <label for="exampleInputFile" class="col-sm-3">Product's Code <span style="color:#e62323d6;">*</span></label>
												<div class="col-sm-6">
												<input type="text"  name="product_code" value="<?php if(empty($row['product_code'])){echo date('diYs');}else{echo $row['product_code'];}?>" class="form-control"  readonly />
												
                                               
                                            </div>
										
                                            </div>
                                            <div class="form-group row">
                                                <label for="exampleInputFile" class="col-sm-3">Category <span style="color:#e62323d6;">*</span></label>
												<div class="col-sm-6">
												<select name="category" id="category" class="form-control"  required >
												<option value="">Select Category</option>
												<?php $cat_sql=mysqli_query($con,"SELECT * FROM `mk_category` ORDER BY `category` ASC");
												while($cat_row=mysqli_fetch_array($cat_sql)){?>
												<option value="<?php echo $getid=$cat_row['id'];?>" <?php if($row['category']==$getid)echo'selected';?>><?php echo $cat_row['category'];?></option>
												<?php }?>
												</select>
                                               
                                            </div>
										
                                            </div>
											 <div class="form-group row">
                                                <label for="exampleInputFile" class="col-sm-3">Sub Category </label>
												<div class="col-sm-6">
                                                <select name="sub_category" id="sub_category" class="form-control"  >
												<option value="">Select Sub Category</option>
												<?php if(!empty($row['sub_category'])){
												 $wt1=mysqli_query($con,"SELECT * FROM `mk_sub_category` WHERE `id`='".$row['sub_category']."' ORDER BY `sub_category` ASC");
												while($row_wt1=mysqli_fetch_array($wt1)){?>
												<option value="<?php echo $get_id=$row_wt1['id'];?>" <?php if($row['sub_category']==$get_id)echo"selected";?>><?php echo $row_wt1['sub_category'];?></option>
												<?php }}?>
												</select>
                                               
                                            </div>
											
                                            </div>
											
											<div class="form-group row">
                                                <label for="exampleInputFile" class="col-sm-3"> Model <span style="color:#e62323d6;">*</span></label>
												<div class="col-sm-6">
                                              <input type="text"  name="model" value="<?php echo $row['model'];?>" class="form-control"  required >
												
                                            </div>
										
                                            </div>
											
												<div class="form-group row">
                                                <label for="exampleInputFile" class="col-sm-3"> Size <span style="color:#e62323d6;">*</span></label>
												<div class="col-sm-6">
                                              <input type="text"  name="size" value="<?php echo $row['size'];?>" class="form-control"  required >
												
                                            </div>
										
                                            </div>
											 <div class="form-group row">
                                                <label for="exampleInputFile" class="col-sm-3"> Price (&#8377;.) <span style="color:#e62323d6;">*</span></label>
												<div class="col-sm-6">
                                              <input type="text"  name="price" value="<?php echo $row['price'];?>" class="form-control"  required >
												
                                            </div>
										
                                            </div>
											
											
											<div class="form-group row">
                                                <label for="exampleInputFile" class="col-sm-3">Offer(%) <span style="color:#e62323d6;">*</span></label>
												<div class="col-sm-6">
                                              <input type="text"  name="offer" value="<?php echo $row['offer'];?>" class="form-control"  required >
												
                                            </div>
										
                                            </div>
																				
											
											
											
											 <div class="form-group row">
                                                <label for="exampleInputFile" class="col-sm-3">Image Upload <span style="color:#e62323d6;">*</span></label>
												<div class="col-sm-6">
                                              <input type="file" name="file" class="form-control"  <?php if(empty($_GET['id'])){?>required <?php }?>>
											  <div id='TextBoxesGroup'></div>
												
                                            </div><div class="col-sm-3"><input type="button" value="Add" id='addButton' />
											<input type="button" value="Remove" id="removeButton">
											
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
										   <button type="submit" class="btn btn-primary" name="PRODUCT">Update</button>
										   <?php }else{?>
										   <button type="submit" class="btn btn-primary" name="PRODUCT">Submit</button>
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
    
