<?php
include("connection.php");
$id=$_REQUEST['uid'];
$name=$_REQUEST['name'];
$gender=$_REQUEST['gender'];
$address=$_REQUEST['address'];
$age=$_REQUEST['age'];
$roll=$_REQUEST['roll'];
$marks=$_REQUEST['marks'];
$phone=$_REQUEST['phone'];
$email=$_REQUEST['email'];
$filename=$_FILES['photo']['name'];
$tmpname=$_FILES['photo']['tmp_name'];
$folder="image/".$filename;
move_uploaded_file($filename, $folder);
$setpass=md5($_REQUEST['Npassword']);
$confpass=md5($_REQUEST['Spassword']);

/*echo $name,$gender,$address,$age,$roll,$marks,$phone,$email,$folder,$confpass;*/
if ($setpass!=$confpass) 
{
	//echo "password and confirm password doesn't matched";
	//echo"<script>alert('password and confirm password doesn't matched')</script>";
	header("location:edit-details.php");
}
else
{
	// $sql="UPDATE `machine_new` SET `name`='$name',`gender`='$gender',`address`='$address',`age`='$age',`roll`='$roll',`marks`='$marks',`phone`='$phone',`email`='$email',`photo`='$folder',`password`='$confpass' WHERE uid='$id'";


	$sql="UPDATE `machine_new` SET `name`='$name',`gender`='$gender',`address`='$address',`age`='$age',`roll`='$roll',`marks`='$marks',`phone`='$phone',`email`='$email',`photo`='$folder',`password`='$confpass' WHERE uid='$id'";
	$data=mysqli_query($conn,$sql);
	if($data) 
	{
		//echo "Update data done";
		header("location:student-list.php");

	}
	else
	{
		echo "Update data failed";
	}
}
?>