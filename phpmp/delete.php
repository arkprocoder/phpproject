<?php

$servername="localhost";
$username="root";
$password="";
$database="PHPMP";



// createting dat base

$conn = mysqli_connect($servername,$username,$password,$database);

// check conection

// if(!$conn)

// {
// 	die("failed to connect".mysqli_connect_error());

// }
// else
// {
// 	echo "connection successful from data base";
// }


if(isset($_POST['deletedata']))
{
    $Medical_ID = $_POST['Medical_ID'];
    

$sql=" DELETE FROM student WHERE Medical_ID='$Medical_ID'";

if(mysqli_query($conn,$sql))
 {
    echo " query is  success";
    header('Location:index.php');
}
else
{
	echo "error".mysqli_error($conn);
}


}


?>


