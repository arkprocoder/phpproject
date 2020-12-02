<?php

session_start();

$con= mysqli_connect('localhost','root' );
if($con){
	echo "connection success";
}
else
{
	echo "not succes";
}

$db = mysqli_select_db($con, 'login');
if(isset($_POST['submit'])){

	$username = $_POST['User'];
	$password = $_POST['Password'];

	$sql = "select * from msadmin where User = '$username' and Password='$password' ";
	$query=mysqli_query($con,$sql);

	$row = mysqli_num_rows($query);

		if($row==1){
			echo "login succes";
			$_SESSION['User'] = $username;
			header('location:index.php');
		}

		else
		
		{
			echo "login fail";
			header('location:login.php');
		}	
		
	}



?>
