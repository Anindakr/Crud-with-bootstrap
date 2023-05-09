<?php
include("connection.php");
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
	echo "password and confirm password doesn't matched";
	header("location:add-details.php");
}
else
{
	$sql="INSERT INTO `machine_new`(`uid`, `name`, `gender`, `address`, `age`, `roll`, `marks`, `phone`, `email`, `photo`, `password`) VALUES ('','$name','$gender','$address','$age','$roll','$marks','$phone','$email','$folder','$confpass')";
	$data=mysqli_query($conn,$sql);
	if($data) 
	{
		//echo "Insert data done";
		header("location:add-details.php");

	}
	else
	{
		echo "Insert data failed";
	}
}
?>