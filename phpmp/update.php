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


if(isset($_POST['updatedata']))
{
    $Medical_ID = $_POST['Medical_ID'];
    $Medical_Name = $_POST['Medical_Name'];
    $Owner_Name = $_POST['Owner_Name'];
    $Phone_No = $_POST['Phone_No'];
    $Medicines = $_POST['Medicines'];
    $Products = $_POST['Products'];
    $Address = $_POST['Address'];


$sql=" UPDATE  student SET Medical_ID='$Medical_ID',Medical_Name='$Medical_Name',Owner_Name='$Owner_Name',
Phone_No='$Phone_No',Medicines='$Medicines',Products='$Products',Address='$Address' WHERE Medical_ID='$Medical_ID' ";


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


