<html lang="en">
<head>
    <title>ADMIN</title>
<link rel="shortcut icon" href="photos/1.jpg">  
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<style>
	.form-control{
		border-radius:15px;
		width:500px;
		height:50px;
		background-color:white;
		margin-top:10px;
		color:black;
		font-size:17px;
	}
</style>
</head>
	<body style="background-color:black;color:white;line-height:40px;">
<?php
require('dbnew.php');
session_start();

if (isset($_POST['username'])){

	$username = stripslashes($_REQUEST['username']);

	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);

        $query = "SELECT * FROM `user` WHERE username='$username'
and password='".$password."'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;

	    header("Location: adminpage.php");
         }else{
echo "<script type='text/javascript'> alert('username or password is invalid');</script>";
echo "<script>location.href='admin.php'</script>";
	}
    }else{
?>
		<div class="container">
			<div style="text-align:center;">
				<h1>ADMIN PAGE</h1><br/>
			</div>
			<div class="row" style="margin-left:400px;">
				<form class="form-horizontal" method="post" name="admin">
					<div class="form-group">
						<span class="glyphicon glyphicon-user"> ADMIN-ID</span>
						<input type="text" class="form-control"  placeholder="Enter Admin Id" name="username" required>
					</div>
					<div class="form-group">
						<span class="glyphicon glyphicon-lock"> PASSWORD</span>
						<input type="password" class="form-control"  placeholder="Enter Password" name="password" required>
					</div>
					
					<div class="form-group">
						<div style="margin-top:20px;">
							<button type="submit" style="font-size:18px;border-radius:10px;width:120px;color:black;font-weight:600;background-color:skyblue;overflow:hidden;" name="submit" type="submit" value="Login">SUBMIT</button>
						</div>
					</div>
				</form>
			</div>
		</div>
<?php } ?>
	</body>
</html>