<?php session_start();
/**

 * check admin login status 

 * responsible for redirecting user to login page if not authorized

 */

function check_login_admin()

{	

	if(isset($_SESSION['admin'])){

		if($_SESSION['admin']['status']===FALSE || empty($_SESSION['admin']))

		{		

			header("location:index.php");

		}

	}else{

	header("location:index.php");

	}

}
?>