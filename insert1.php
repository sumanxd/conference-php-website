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
$event_name=$_POST['event_name'];
$event_Info=$_POST['event_Info'];
$event_date=$_POST['event_date'];
$last_date=$_POST['last_date'];
$program=$_POST['program'];
$speaker01=$_POST['speaker01'];
$mailid01=$_POST['mailid01'];
$facebookid01=$_POST['facebookid01'];
$twitterid01=$_POST['twitterid01'];
$linkedinid01=$_POST['linkedinid01'];
$eventvenue=$_POST['eventvenue'];
$event_location=$_POST['event_location'];
$registerlimit=$_POST['registerlimit'];
$sql="INSERT INTO conf(event_name, event_Info,event_date,last_date, program,speaker01,mailid01,facebookid01,twitterid01 ,linkedinid01,eventvenue,event_location,registerlimit) VALUES
('$event_name','$event_Info','$event_date','$last_date','$program','$speaker01','$mailid01','$facebookid01','$twitterid01','$linkedinid01','$eventvenue','$event_location','$registerlimit')";
if(!mysqli_query($con,$sql))
{
	echo '<script type="text/javascript">alert("Problem in database");</script>';
}
else
{
	echo '<script type="text/javascript">alert("Data inserted successfully");</script>';
}
header("refresh:0; url=adminpage.php");

?>




















