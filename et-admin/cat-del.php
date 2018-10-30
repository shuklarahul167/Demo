<?php include('database.php');
$id=$_GET['id'];
$delete ="delete from category where id='$id'";
mysqli_query($con,$delete);
echo '<script language="javascript">
window.location.href="category-list.php";
</script>';
?>