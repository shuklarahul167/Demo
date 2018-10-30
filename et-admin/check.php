<?php session_start();
require_once 'database.php';
# Response Data Array
$resp = array();
// Fields Submitted
$username = trim(mysqli_real_escape_string($con,$_POST["username"]));
$password = trim(mysqli_real_escape_string($con,$_POST["password"]));


// This array of data is returned for demo purpose, see assets/js/neon-forgotpassword.js
$resp['submitted_data'] = $_POST;


// Login success or invalid login data [success|invalid]
// Your code will decide if username and password are correct
$login_status = 'invalid';
$md5=sha1($password);
$query="SELECT * FROM `mk_admin` WHERE `username`='$username' AND `password`='$md5'";
$get_res=mysqli_query($con,$query);
$get_num=mysqli_num_rows($get_res);
if($get_num>0)
{
	$get_rows=mysqli_fetch_assoc($get_res);
	$login_status = 'success';
	$_SESSION['admin']['id']=$get_rows['id'];
	$_SESSION['admin']['username']=$get_rows['username'];
	$_SESSION['admin']['status']=TRUE;
}

$resp['login_status'] = $login_status;


// Login Success URL
if($login_status == 'success')
{
echo"<script>
window.location.href='dashboard.php';
</script>";	
}else{	
echo"<script>
window.location.href='index.php?msg=Invalid Wrong Username and Password !';
</script>";
}

?>