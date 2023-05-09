<?php
$servername="localhost";
$user="root";
$password="";
$db="mwf3to6";
$conn=mysqli_connect($servername,$user,$password,$db);
if ($conn) 
{
	//echo "connected";
}
else
{
	echo "not connected";
}
?>