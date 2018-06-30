<?php
$con=mysqli_connect('localhost','root','');
if(!$con)
{
	echo 'not connected to server';
}
if(!mysqli_select_db($con,'conference'))
{
	echo 'database not selected';
}

$email=$_POST['email'];
$user_name=$_POST['user_name'];
$mobile=$_POST['mobile'];
$comments=$_POST['comments'];


$sql="INSERT INTO feedback(email, user_name,mobile,comments) VALUES
('$email','$user_name','$mobile','$comments')";
if(!mysqli_query($con,$sql))
{
	echo '<script type="text/javascript">alert("Problem in database");</script>';
}
else
{
	echo '<script type="text/javascript">alert("Data inserted successfully");</script>';
}
header("refresh:0; url=index1.php");

?>




















