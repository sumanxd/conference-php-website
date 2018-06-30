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
$nameandsurname=$_POST['nameandsurname'];
$email=$_POST['email'];
$phnumber=$_POST['phnumber'];
$specialization=$_POST['specialization'];
$address=$_POST['address'];

$sql="INSERT INTO register(nameandsurname, email,phnumber,specialization, address) VALUES
('$nameandsurname','$email','$phnumber','$specialization','$address')";
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




















