<?php
require('db.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>ADMIN PAGE</title>
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
		height:45px;
		background-color:white;
		margin-top:10px;
		color:black;
		font-size:17px;
	}
	th{
		text-align:center;
	}
	.control-label{
	color:white;
	font-size:22px;
	font-weight:500;
	margin-top:10px;
	font-family:times;
	}
	.nav nav-pills:hover{
	color:red;
	}
</style>
</head>
	<body style="background-color:black;color:white;">
		<div class="container">
		<h1 style="text-align:center;"> ADMIN PAGE</h1>
			<div class="row" style="margin-top:40px;overflow:hidden;">
					<ul class="nav nav-pills" style="overflow:hidden;border:2px solid blue;font-size:21px;text-transform:uppercase;font-family:roboto;background-color:lightgreen;border-top-left-radius:25px;border-top-right-radius:25px;overflow:hidden;">
						
						<li ><a href="#eventdetails" data-toggle="tab" style="color:white;"><strong>EVENT DETAILS</strong></a></li>
						<li ><a href="#clients" data-toggle="tab" style="color:white;"><strong>Registration Request</strong></a></li>
						
						<li ><a href="#feedback" data-toggle="tab" style="color:white;"><strong>Contact Request</strong></a></li>
						<li ><a href="#feedbackn" data-toggle="tab" style="color:white;"><strong>Feedback</strong></a></li>
						
						
						<li><a href="logout.php" class="btn btn-info btn-lg" style="    float: right;
    margin-top: -48px;
    margin-left: 1014px;">
						  <span class="glyphicon glyphicon-log-out"></span> Log out
						</a></li>
						
						
					</ul>
					<div class="tab-content" style="border:1px solid blue;">
						
						<div id="eventdetails" class="tab-pane fade in active">
							
									<h1 style="color:white;text-align:center;">ENTER EVENT DETAILS</h1>
			<div class="container" style="margin-left:200px;">
			<form class="form-horizontal" action="insert1.php" method="post">
				<div class="form-group">
					<label class="control-label col-md-2" for="Event Name">Event Name</label>
					<div class="col-md-10">
					<input type="text" class="form-control" placeholder="Enter Event Name" name="event_name">
				</div>
				</div>
						<div class="form-group">
							<label class="control-label col-md-2" for="About Event">About Event</label>
							<div class="col-md-10">
								<textarea class="form-control" rows="5" id="address" placeholder="Enter Event Info" name="event_Info"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-2" for="Event Name">Date</label>
							<div class="col-md-10">
								<input id="datetime" type="datetime-local" class="form-control" placeholder="Enter Event Date" name="event_date">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-2" for="Event Name">Last Date To Register</label>
							<div class="col-md-10">
								<input id="datetime" type="datetime-local" class="form-control" placeholder="End Dtae To Register" name="last_date">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-2" for="Event Name">programms</label>
							<div class="col-md-10">
								<select id="select" class="form-control" required style="height:50px;width:350px;border-radius:15px;margin:10px;color:black;opacity:100;font-family:times;font-size:17px;font-weight:500;padding-left:10px;" name="program">
									<option  selected="selected" value="001">Programm 01</option>
									<option  value="002">Programm 02</option>
									<option  value="003">Programm 03</option>
									<option  value="004">Programm 04</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-2" for="speakers">Speakers</label>
							<div class="col-md-10">
								<input type="text" class="form-control" placeholder="speaker 01" name="speaker01">
								
								<input type="email" class="form-control" placeholder="mail id" name="mailid01">
								<input type="email" class="form-control" placeholder="facebook id" name="facebookid01">
								<input type="email" class="form-control" placeholder="twitter id" name="twitterid01">
								<input type="email" class="form-control" placeholder="linkedin id" name="linkedinid01">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-2" for="Event Venue">Event Location</label>
							<div class="col-md-10">
								<textarea class="form-control" rows="5" id="address" placeholder="Event Venue" name="eventvenue"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-2" for="event location">location link</label>
							<div class="col-md-10">
								<input type="text" class="form-control" placeholder="location link" name="event_location">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-2" for="Register limit">Register limit</label>
								<div class="col-md-10">
									<input type="number" class="form-control" placeholder="Register Limit" name="registerlimit">
								</div>
							</div>
							<div class="form-group">
								<div style="margin-top:20px;margin-left:220px;">
									<button type="submit" style="font-size:18px;border-radius:10px;width:120px;color:black;font-weight:600;background-color:skyblue;overflow:hidden;" type="submit" value="Insert">SUBMIT</button>
								</div>
							</div>
						</form>
						</div>
					</div>
					
					
					<div id="clients" class="tab-pane">
					
					
				<div class="row col-md-12 custyle">
				<div class="table-responsive">
					<table class="table table-bordered">
						<thead>
    
							<tr>
								<th>S.No</th>
								<th>Name</th>
								<th>Email</th>
								<th>Phone Number</th>
								<th>Specialization</th>
								<th>Address</th>
								
								
							</tr>
						</thead>
						<tbody>
							<?php
							$count=1;
							$sel_query="Select * from register ORDER BY id desc;";
							$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) { ?>
							<tr>
								<td align="center"><?php echo $count; ?></td>
								<td align="center"><?php echo $row["nameandsurname"]; ?></td>
								<td align="center"><?php echo $row["email"]; ?></td>
								<td align="center"><?php echo $row["phnumber"]; ?></td>
								<td align="center"><?php echo $row["specialization"]; ?></td>
								<td align="center"><?php echo $row["address"]; ?></td>
								
								
							</tr>
							<?php $count++; } ?>
						</tbody>
					</table>
					</div>
				</div>
					
					
					
					
					
					
					</div>
					
					
					
					
					
					
					
					<div id="feedback" class="tab-pane">
					<div class="row col-md-12 custyle">
				<div class="table-responsive">
					<table class="table table-bordered">
						<thead>
    
							<tr>
								<th>S.No</th>
								<th>Name</th>
								<th>Email</th>
								<th>Message</th>
								
								
							</tr>
						</thead>
						<tbody>
							<?php
							$count=1;
							$sel_query="Select * from contact ORDER BY id desc;";
							$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) { ?>
							<tr>
								<td align="center"><?php echo $count; ?></td>
								<td align="center"><?php echo $row["name"]; ?></td>
								<td align="center"><?php echo $row["email"]; ?></td>
								<td align="center"><?php echo $row["input_message"]; ?></td>
								
								
							</tr>
							<?php $count++; } ?>
						</tbody>
					</table>
					</div>
				</div>
					

					</div>
					
					
					<div id="feedbackn" class="tab-pane">
					
					<div class="row col-md-12 custyle">
				<div class="table-responsive">
					<table class="table table-bordered">
						<thead>
    
							<tr>
								<th>S.No</th>
								
								<th>Email</th>
								<th>Username</th>
								<th>Mobile</th>
								<th>Comments</th>
								
								
							</tr>
						</thead>
						<tbody>
							<?php
							$count=1;
							$sel_query="Select * from feedback ORDER BY id desc;";
							$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) { ?>
							<tr>
								<td align="center"><?php echo $count; ?></td>
								<td align="center"><?php echo $row["email"]; ?></td>
								<td align="center"><?php echo $row["user_name"]; ?></td>
								<td align="center"><?php echo $row["mobile"]; ?></td>
								<td align="center"><?php echo $row["comments"]; ?></td>
								
								
							</tr>
							<?php $count++; } ?>
						</tbody>
					</table>
					</div>
				</div>
					
					</div>
					
					
					
					
					
					
					<div id="feedback" class="tab-pane">
					<div  style="height:300px;background:#dc143c;padding:10px;color:white;font-size:20px;font-family:times;overflow:hidden;">
						<div class="row" style="text-align:center;">
							<span class="fed1"><i class="active">user response</i> </span>
						</div>
						<div class="row">
							<span class="fed1">email_id:</span>
							<span id="em1"></span>
						</div>
						<div class="row">
							<span class="fed1">name:</span>
							<span id="na1"></span>
						</div>
						<div class="row">
							<span class="fed1">number:</span>
							<span id="nu1"></span>
						</div>
						<div class="row">
							<span class="fed1">comment</span>
							<span class="fed" id="fe1"></span>
						</div>
						<script>
				function sam(){
					var res=document.getElementById("email1").value;
						document.getElementById("em1").innerHTML=res;
	
					var res1=document.getElementById("name1").value;
						document.getElementById("na1").innerHTML=res1;
 
					var res2=document.getElementById("number1").value;
						document.getElementById("nu1").innerHTML=res2;
 
					var res3=document.getElementById("feedback1").value;
						document.getElementById("fe1").innerHTML=res3;
						}
				</script>
					</div> 
				</div>
				</div>
			</div>
		</div>
	</body>
</html>