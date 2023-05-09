<?php
include("connection.php");
$id=$_REQUEST['del'];
$sql="DELETE FROM `machine_new` WHERE uid='$id'";
$data=mysqli_query($conn,$sql);
if ($data) 
{
	//echo "delete performed";
	header("location:student-list.php");
}
else
{
	echo "delete not performed";
}

?>