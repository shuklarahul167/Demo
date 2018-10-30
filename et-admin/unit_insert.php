<?php include('database.php');
if(isset($_REQUEST['UNIT'])){
$get_id=$_REQUEST['edit_id'];
if(empty($get_id)){
$sql=mysqli_query($con,"INSERT INTO `tbl_unit`( `unit`) VALUES ('".$_REQUEST['unit']."')");
}else{
$sql=mysqli_query($con,"UPDATE `tbl_unit` SET `unit`='".$_REQUEST['unit']."' WHERE `id`='$get_id'");
}
echo"<script>
window.location.href='unit.php';
</script>";
}
if(isset($_REQUEST['DELETE_UNIT'])){
$get_id=$_REQUEST['id'];
$sql=mysqli_query($con,"DELETE FROM `tbl_unit` WHERE `id`='$get_id'");
echo"<script>
window.location.href='unit.php';
</script>";
}
?>