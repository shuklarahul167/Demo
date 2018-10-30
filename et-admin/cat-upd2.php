<?php        include('database.php');
				$id=$_REQUEST['id'];
			$title =mysqli_real_escape_string($con,$_REQUEST['title']);			
				$target_path = "assets/category/";
				$photo= $_FILES['file']['name'];
				//if(!empty($photo)){				
				$extn = explode(".",$photo);
				$extnname= $extn[1];
				$photo2 = date("dmYHis").".".$extnname;				
				//$target_path = $target_path . basename( $_FILES['photo']['name']); 
				$target_path = $target_path . $photo2 ; 				 
			    move_uploaded_file($_FILES['file']['tmp_name'], $target_path);
				if(!empty($photo)){
				$query3=mysqli_query($con,"update category set title='$title',photo='$photo2' where id='$id'");
				}else{
				$query3=mysqli_query($con,"update category set title='$title' where id='$id'");
				}
              echo '<script language="javascript">
				  window.location.href="category-list.php";
				  </script>';
                 exit();
                ?>
				