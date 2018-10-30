<?php 
include('database.php');
if(isset($_REQUEST['SELL'])){
$description=mysqli_real_escape_string($con,$_REQUEST['description']);
$loc= mysqli_real_escape_string($con,$_REQUEST['loc']);
$get_id= mysqli_real_escape_string($con,$_REQUEST['edit_id']);
if(empty($get_id)){
$query=mysqli_query($con,"INSERT INTO `sell`(`description`,`loc`) VALUES ('$description1','$loc')");
echo'<script language="javascript">
window.location.href="sell-list.php?msg=succesfully Your Sell Leads Save...";
</script>';
}else{
$query=mysqli_query($con,"UPDATE `sell` SET `description`='$description',`loc`='$loc' WHERE `id`='$get_id'");
echo'<script language="javascript">
window.location.href="sell-list.php?msg=succesfully Your Sell Leads Updated...";
</script>';
}
}
if(isset($_REQUEST['DEL_SELL'])){
$get_id=$_REQUEST['id'];	
$del=mysqli_query($con,"DELETE FROM `sell` WHERE `id`='$get_id'");
echo'<script language="javascript">
window.location.href="sell-list.php";
</script>';	
}
?>
