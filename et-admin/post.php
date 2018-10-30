	<?php
include('database.php');
include 'session.php';
check_login_admin();
//tread width insert edit delete
if(isset($_REQUEST['CATEGORY'])){
if(empty($_REQUEST['edit_id'])){
$sql=mysqli_query($con,"INSERT INTO `mk_category`(`category`) VALUES ('".$_REQUEST['category']."')");
echo '<script language="javascript">
window.location.href="category.php?suc_msg=succesfully Your Category insert...";
</script>';
exit();
}else{
$sql=mysqli_query($con,"UPDATE `mk_category` SET `category`='".$_REQUEST['category']."' WHERE `id`='".$_REQUEST['edit_id']."'");
echo '<script language="javascript">
window.location.href="category.php?id='.$id.'&suc_msg=succesfully Your Category updated...";
</script>';
exit();
}
}
if(isset($_REQUEST['DELETE_CAT'])){
$del=mysqli_query($con,"DELETE FROM `mk_category` WHERE `id`='".$_REQUEST['id']."'");
echo '<script language="javascript">
window.location.href="category.php?err_msg=succesfully Your recode delete...";
</script>';
exit();
}
if(isset($_REQUEST['SUB_CATEGORY'])){
if(empty($_REQUEST['edit_id'])){
$sql=mysqli_query($con,"INSERT INTO `mk_sub_category`(`category`,`sub_category`) VALUES ('".$_REQUEST['category']."','".$_REQUEST['sub_category']."')");
echo '<script language="javascript">
window.location.href="sub_category.php?suc_msg=succesfully Your Sub Category insert...";
</script>';
exit();
}else{
$sql=mysqli_query($con,"UPDATE `mk_sub_category` SET `category`='".$_REQUEST['category']."',`sub_category`='".$_REQUEST['sub_category']."' WHERE `id`='".$_REQUEST['edit_id']."'");
echo '<script language="javascript">
window.location.href="sub_category.php?id='.$id.'&suc_msg=succesfully Your Sub Category updated...";
</script>';
exit();
}
}
if(isset($_REQUEST['DELETE_SUBCAT'])){
$del=mysqli_query($con,"DELETE FROM `mk_sub_category` WHERE `id`='".$_REQUEST['id']."'");
echo '<script language="javascript">
window.location.href="sub_category.php?err_msg=succesfully Your recode delete...";
</script>';
exit();
}
// Product insert edit delete
if(isset($_REQUEST['PRODUCT'])){
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
$product_code=mysqli_real_escape_string($con,$_REQUEST['product_code']);
$desc=mysqli_real_escape_string($con,$_REQUEST['desc']);
if(empty($_REQUEST['edit_id'])){
$sql=mysqli_query($con,"INSERT INTO `mk_product`(`product_name`, `product_code`, `category`, `sub_category`, `model`, `size`, `price`, `offer`, `img`, `desc`) VALUES ('".$_REQUEST['product_name']."','$product_code','".$_REQUEST['category']."','".$_REQUEST['sub_category']."','".$_REQUEST['model']."','".$_REQUEST['size']."','".$_REQUEST['price']."','".$_REQUEST['offer']."','$photo','".$_REQUEST['desc']."')");
   foreach($_FILES["img"]["tmp_name"] as $key=>$tmp_name)
            {		
 $target_path2="assets/products/";			
 $file_name=$_FILES["img"]["name"][$key];
 $extn1 = explode(".",$file_name);
 $extnname1= $extn1[1];
 $img22 = date("dmYHs")[$key].".".$extnname1;
$img23 =  date("dmYHs").$img22;
$target_path_2 = $target_path2 . $img23;
move_uploaded_file($_FILES['img']['tmp_name'][$key],$target_path_2);
$sql=mysqli_query($con,"INSERT INTO `mk_tbl_img`(`product_code`, `img`) VALUES ('$product_code','$img23')");

}
echo '<script language="javascript">
window.location.href="product.php?suc_msg=succesfully Your Product insert...";
</script>';
exit();
}else{
	if(empty($photo)){
$sql=mysqli_query($con,"UPDATE `mk_product` SET `product_name`='".$_REQUEST['product_name']."',`product_code`='".$_REQUEST['product_code']."',`category`='".$_REQUEST['category']."',`sub_category`='".$_REQUEST['sub_category']."',`model`='".$_REQUEST['model']."',`size`='".$_REQUEST['size']."',`price`='".$_REQUEST['price']."',`offer`='".$_REQUEST['offer']."',`desc`='".$desc."' WHERE `id`='".$_REQUEST['edit_id']."'");
}else{
$sql=mysqli_query($con,"UPDATE `mk_product` SET `product_name`='".$_REQUEST['product_name']."',`product_code`='".$_REQUEST['product_code']."',`category`='".$_REQUEST['category']."',`sub_category`='".$_REQUEST['sub_category']."',`model`='".$_REQUEST['model']."',`size`='".$_REQUEST['size']."',`price`='".$_REQUEST['price']."',`offer`='".$_REQUEST['offer']."',`desc`='".$desc."',`img`='$photo' WHERE `id`='".$_REQUEST['edit_id']."'");
}
echo '<script language="javascript">
window.location.href="product.php?id='.$id.'&suc_msg=succesfully Your Product updated...";
</script>';
exit();
}
}
// Product insert edit delete
if(isset($_REQUEST['DELETE_PT'])){
$del=mysqli_query($con,"DELETE FROM `mk_product` WHERE `id`='".$_REQUEST['id']."'");
echo '<script language="javascript">
window.location.href="product-list.php?err_msg=succesfully Your recode delete...";
</script>';
exit();
}
// Contest Slider
if(isset($_REQUEST['CONT_SLIDER'])){
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
$order_no=mysqli_real_escape_string($con,$_REQUEST['order_no']);
$edit_id=mysqli_real_escape_string($con,$_REQUEST['edit_id']);
if(empty($edit_id)){
$sql=mysqli_query($con,"INSERT INTO `mk_cont_slider`(`order_no`, `img`) VALUES ('$order_no','$photo')");
  echo '<script language="javascript">
window.location.href="cont_slider.php?suc_msg=succesfully Your Slider insert...";
</script>';
exit();
}else{
	if(empty($photo)){
$sql=mysqli_query($con,"UPDATE `mk_cont_slider` SET `order_no`='$order_no' WHERE `id`='".$_REQUEST['edit_id']."'");
}else{
$sql=mysqli_query($con,"UPDATE `mk_cont_slider` SET `order_no`='$order_no',`img`='$photo' WHERE `id`='".$_REQUEST['edit_id']."'");
}
echo '<script language="javascript">
window.location.href="cont_slider.php?id='.$id.'&suc_msg=succesfully Your Slider updated...";
</script>';
exit();
}
}
if(isset($_REQUEST['DELETE_CONTSL'])){
$del=mysqli_query($con,"DELETE FROM `mk_cont_slider` WHERE `id`='".$_REQUEST['id']."'");
echo '<script language="javascript">
window.location.href="cont_slider.php?err_msg=succesfully Your recode delete...";
</script>';
exit();
}
// Slider
if(isset($_REQUEST['SLIDER'])){
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
//$order_no=mysqli_real_escape_string($con,$_REQUEST['order_no']);
$edit_id=mysqli_real_escape_string($con,$_REQUEST['edit_id']);
if(empty($edit_id)){
$sql=mysqli_query($con,"INSERT INTO `mk_slider`( `img`) VALUES ('$photo')");
  echo '<script language="javascript">
window.location.href="slider.php?suc_msg=succesfully Your Slider insert...";
</script>';
exit();
}else{
$sql=mysqli_query($con,"UPDATE `mk_slider` SET `img`='$photo' WHERE `id`='".$_REQUEST['edit_id']."'");
echo '<script language="javascript">
window.location.href="slider.php?id='.$id.'&suc_msg=succesfully Your Slider updated...";
</script>';
exit();
}
}
if(isset($_REQUEST['DELETE_SLIDER'])){
$del=mysqli_query($con,"DELETE FROM `mk_slider` WHERE `id`='".$_REQUEST['id']."'");
echo '<script language="javascript">
window.location.href="slider.php?err_msg=succesfully Your recode delete...";
</script>';
exit();
}
// REGISTER_IMG 
if(isset($_REQUEST['REGISTER_IMG'])){
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
$edit_id=mysqli_real_escape_string($con,$_REQUEST['edit_id']);
if(empty($edit_id)){
$sql=mysqli_query($con,"INSERT INTO `mk_regimg`( `img`) VALUES ('$photo')");
  echo '<script language="javascript">
window.location.href="reg_img.php?suc_msg=succesfully Your Slider insert...";
</script>';
exit();
}else{
	$sql=mysqli_query($con,"UPDATE `mk_regimg` SET `img`='$photo' WHERE `id`='".$_REQUEST['edit_id']."'");

echo '<script language="javascript">
window.location.href="reg_img.php?id='.$id.'&suc_msg=succesfully Your Slider updated...";
</script>';
exit();
}
}
if(isset($_REQUEST['DELETE_REG'])){
$del=mysqli_query($con,"DELETE FROM `mk_regimg` WHERE `id`='".$_REQUEST['id']."'");
echo '<script language="javascript">
window.location.href="reg_img.php?err_msg=succesfully Your recode delete...";
</script>';
exit();
}
//Blog insert edit delete
if(isset($_REQUEST['BLOG'])){
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
$title=mysqli_real_escape_string($con,$_REQUEST['title']);
$desc=mysqli_real_escape_string($con,$_REQUEST['desc']);
if(empty($_REQUEST['edit_id'])){
$sql=mysqli_query($con,"INSERT INTO `mk_blog`( `title`, `img`, `desc`) VALUES ('$title','$photo','$desc')");
echo '<script language="javascript">
window.location.href="blog.php?suc_msg=succesfully Your Blog insert...";
</script>';
exit();
}else{
	if(empty($photo)){
$sql=mysqli_query($con,"UPDATE `mk_blog` SET `title`='".$_REQUEST['title']."',`desc`='$desc' WHERE `id`='".$_REQUEST['edit_id']."'");
}else{
$sql=mysqli_query($con,"UPDATE `mk_blog` SET `title`='".$_REQUEST['title']."',`desc`='$desc',`img`='$photo' WHERE `id`='".$_REQUEST['edit_id']."'");
}
echo '<script language="javascript">
window.location.href="blog.php?id='.$id.'&suc_msg=succesfully Your Blog updated...";
</script>';
exit();
}
}
if(isset($_REQUEST['DELETE_BLOG'])){
$del=mysqli_query($con,"DELETE FROM `mk_blog` WHERE `id`='".$_REQUEST['id']."'");
echo '<script language="javascript">
window.location.href="blog-list.php?err_msg=succesfully Your recode delete...";
</script>';
exit();
}
//Wheels & TIRE Product insert edit delete
if(isset($_REQUEST['PRODUCT_WHEELS_TIRE'])){
//Tire img upload
$target_path2="assets/products/";
$img= $_FILES['tire']['name'];
$extn2 = explode(".",$img);
$extnname2= $extn2[1];
$img2 = date("dmYHis").".".$extnname2;
$target_path_2 = $target_path2 . $img2;
move_uploaded_file($_FILES['tire']['tmp_name'],$target_path_2);
if(empty($img)){
$photo='';
}else{
	$photo=$img2;
}
//wheels img upload
$target_path2="assets/products/";
$wheels= $_FILES['wheels']['name'];
$extn3 = explode(".",$wheels);
$extnname12= $extn3[1];
$img21 = date("dmYHi").".".$extnname12;
$target_path_21 = $target_path2 . $img21;
move_uploaded_file($_FILES['wheels']['tmp_name'],$target_path_21);
if(empty($wheels)){
$wheels='';
}else{
	$wheels=$img21;
}
$code=rand();
$size=mysqli_real_escape_string($con,$_REQUEST['size']);
$product_name=mysqli_real_escape_string($con,$_REQUEST['product_name']);
if(empty($_REQUEST['edit_id'])){
$sql=mysqli_query($con,"INSERT INTO `tbl_wheels_tire_product`(`code`,`product_name`, `yr_id`, `make_id`, `ml_id`, `diameter`, `type`, `size`, `retail`, `total`, `tire`, `wheels`) VALUES ('$code','".$product_name."','".$_REQUEST['yr_id']."','".$_REQUEST['make_id']."','".$_REQUEST['ml_id']."','".$_REQUEST['diameter']."','".$_REQUEST['type']."','".$size."','".$_REQUEST['retail']."','".$_REQUEST['total']."','$photo','$wheels')");
echo '<script language="javascript">
window.location.href="wheels_tire_product.php?suc_msg=succesfully Your Wheels  & Tire Product insert...";
</script>';
exit();
}else{	
$sql=mysqli_query($con,"UPDATE `tbl_wheels_tire_product` SET `product_name`='".$_REQUEST['product_name']."',`yr_id`='".$_REQUEST['yr_id']."',`make_id`='".$_REQUEST['make_id']."',`ml_id`='".$_REQUEST['ml_id']."',`diameter`='".$_REQUEST['diameter']."',`type`='".$_REQUEST['type']."',`size`='".$size."',`retail`='".$_REQUEST['retail']."',`total`='".$_REQUEST['total']."',`img`='$photo',`wheels`='$wheels' WHERE `id`='".$_REQUEST['edit_id']."'");
echo '<script language="javascript">
window.location.href="wheels_tire_product.php?id='.$id.'&suc_msg=succesfully Your Wheels & Tire Product updated...";
</script>';
exit();
}
}
if(isset($_REQUEST['DELETE_WHEELS_TIRE'])){
$del=mysqli_query($con,"DELETE FROM `tbl_wheels_tire_product` WHERE `id`='".$_REQUEST['id']."'");
echo '<script language="javascript">
window.location.href="wheels_tire_list.php?err_msg=succesfully Your recode delete...";
</script>';
exit();
}
?>