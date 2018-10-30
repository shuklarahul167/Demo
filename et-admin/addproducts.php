<?php 
include('database.php');
if(isset($_REQUEST['PRODUCT'])){
$get_id=$_REQUEST['edit_id'];
//img upload
$target_path2="assets/products/";
$img= $_FILES['file']['name'];
$extn2 = explode(".",$img);
$extnname2= $extn2[1];
$img2 = date("dmYHis").".".$extnname2;
$target_path_2 = $target_path2 . $img2;
move_uploaded_file($_FILES['file']['tmp_name'],$target_path_2);
if(empty($img)){
$photo='';
}else{
	$photo=$img2;
}
if(empty($get_id)){
$query=mysqli_query($con,"INSERT INTO `products`(`category`, `sub_category`, `product_name`, `price`, `status`, `model`, `unit`, `min_qty`, `offer`, `stock`, `rejected`, `featured`, `img`) VALUES ('".$_REQUEST['category']."','".$_REQUEST['sub_category']."','".$_REQUEST['product_name']."','".$_REQUEST['price']."','".$_REQUEST['status']."','".$_REQUEST['model']."','".$_REQUEST['unit']."','".$_REQUEST['min_qty']."','".$_REQUEST['offer']."','".$_REQUEST['stock']."','".$_REQUEST['rejected']."','".$_REQUEST['featured']."','$photo')");
echo'<script language="javascript">
window.location.href="product-list.php?msg=succesfully Your product Save...";
</script>';
}
else{
$query=mysqli_query($con,"UPDATE `products` SET `category`='".$_REQUEST['category']."',`sub_category`='".$_REQUEST['sub_category']."',`product_name`='".$_REQUEST['product_name']."',`price`='".$_REQUEST['price']."',`status`='".$_REQUEST['status']."',`model`='".$_REQUEST['model']."',`unit`='".$_REQUEST['unit']."',`min_qty`='".$_REQUEST['min_qty']."',`offer`='".$_REQUEST['offer']."',`stock`='".$_REQUEST['stock']."',`rejected`='".$_REQUEST['rejected']."',`featured`='".$_REQUEST['featured']."',`img`='photo' WHERE `id`='$get_id'");
echo'<script language="javascript">
window.location.href="product-list.php?msg=succesfully Your product updated...";
</script>';	
}
}
if(isset($_REQUEST['DEL_PRODUCT'])){
$get_id=$_REQUEST['id'];	
$del=mysqli_query($con,"DELETE FROM `products` WHERE `id`='$get_id'");
echo'<script language="javascript">
window.location.href="product-list.php";
</script>';	
}
?>