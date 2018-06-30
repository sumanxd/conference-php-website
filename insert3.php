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
$name=$_POST['name'];
$email=$_POST['email'];
$input_message=$_POST['input_message'];


$sql="INSERT INTO contact(name, email,input_message) VALUES
('$name','$email','$input_message')";
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




















