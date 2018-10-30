<?php 
include('database.php');
if(isset($_REQUEST['COUNTRY'])){
$target_path2="assets/region/";
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
$name=mysqli_real_escape_string($con,$_REQUEST['name']);
$get_id=mysqli_real_escape_string($con,$_REQUEST['edit_id']);
if(empty($get_id)){
$query=mysqli_query($con,"INSERT INTO `region`(`name`,`photo`) VALUES ( '$name','$photo')");
echo'<script language="javascript">
window.location.href="region-list.php?msg=succesfully Your Country Save...";
</script>';
}else{
$query=mysqli_query($con,"UPDATE `region` SET `name`='$name',`photo`='$photo' WHERE `id`='$get_id'");
echo'<script language="javascript">
window.location.href="region-list.php?msg=succesfully Your Country Updated...";
</script>';
}
}
if(isset($_REQUEST['DEL_COUNTRY'])){
$get_id=$_REQUEST['id'];	
$del=mysqli_query($con,"DELETE FROM `region` WHERE `id`='$get_id'");
echo'<script language="javascript">
window.location.href="region-list.php";
</script>';	
}
?>


