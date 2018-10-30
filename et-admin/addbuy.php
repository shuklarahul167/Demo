<?php 
include('database.php');
if(isset($_REQUEST['BUY'])){
$description=mysqli_real_escape_string($con,$_REQUEST['description']);
$loc= mysqli_real_escape_string($con,$_REQUEST['loc']);
$get_id= mysqli_real_escape_string($con,$_REQUEST['edit_id']);
if(empty($get_id)){
$query=mysqli_query($con,"INSERT INTO `buy`(`description`,`loc`) VALUES ('$description1','$loc')");
echo'<script language="javascript">
window.location.href="buy-list.php?msg=succesfully Your Buy Leads Save...";
</script>';
}else{
$query=mysqli_query($con,"UPDATE `buy` SET `description`='$description',`loc`='$loc' WHERE `id`='$get_id'");
echo'<script language="javascript">
window.location.href="buy-list.php?msg=succesfully Your Buy Leads Updated...";
</script>';
}
}
if(isset($_REQUEST['DEL_BUY'])){
$get_id=$_REQUEST['id'];	
$del=mysqli_query($con,"DELETE FROM `buy` WHERE `id`='$get_id'");
echo'<script language="javascript">
window.location.href="buy-list.php";
</script>';	
}
?>
