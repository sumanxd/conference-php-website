<?php
require('db.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> Conferences and Events</title>
<link rel="shortcut icon" href="photos/about4.jpg">  
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<style>
	.hed1{
		color:white;
		font-size:68px;
		font-family:roboto;
		text-transform:uppercase;
		 }
	.subhed{
		color:blue;
		font-size:50px;
		font-family:roboto;
		 }    
	.countdown{
		color:white;
		font-size:60px;
		font-weight:700;
		text-align:center;
			  }
	.countdown_text{
		color:red;
		font-size:20px;
		font-family:times;
		font-weight:700;
		padding-left:50px;
		margin-top:-20px;
		text-transform:uppercase;
				  }
	.sbox{
		text-transform:uppercase;
		font-size:16px;
		color:green;
		font-weight:700;
		font-family:georgia;
		margin-left:-15px;
		 } 
    .sbox1{
		text-transform:lowercase;
		font-size:15px;
		color:white;
		font-weight:400;
		font-family:georgia;
		margin-left:-15px; 
		text-align:center;
		   }
	.ico{
		color:white;
		font-size:15x;
	    }
	 ::placeholder {
		color: black;
		font-family:times;
		font-size:17px;
		font-weight:500;
		padding-left:10px;
				   }
	.spaeaker_text{
		font-size:20px;
		font-familt:roboto;
		font-weight:700;
				  }
	.form-control{
		height:60px;
		padding:10px;
		width:350px;
				 } 
	.form-control{
		border-radius:15px;
		border:1px solid white;
		width:100%;
		height:70px;
		background-color:white;
		margin-top:10px;
		color:black;
	}
	.form-control1{
		border-radius:15px;
		border:1px solid white;
		width:75%;
		height:50px;
		background-color:white;
		color:black;
		padding:20px;
		color:black;
		font-size:20px;
		font-family:times;
	}
	.fa:hover{
		opacity:0.7;
	}
	a.ex1:hover{
		color:red;
	}
	.nav>li>a:focus{
		background-color:black;
	 }
	.nav>li>a:hover{
		background-color:#4fd9e8;
	 }
	.nav>li>a:active{
		background-color:black;
	 }
	.fed1{
		color:black;
		border:1px solid black;
		border-radius:15px;
		line-height:2.5;
		padding:10px;
		font-size:20px;	
		background:#5ad1d8de;
		overflow:hidden;
		margin-left:20px;
	}
	.fed{
		color:white;
	}
	.fed0{
		color:black;
		font-size:20px;
		font-family:times;
		font-weight:700;
		text-transform:uppercase;
		background:#5ad1d8de;
		border-radius:5px;
		padding:5%;
	}
	#myBtn{
		display:none;
		color:black;
		outline:none;
		cursor:pointer;
		font-weight:600;
		background-color:green;
		position:fixed;
		bottom:10px;
		left:653px;
		z-index:99;
		font-size:30px;
		border:none;
		text-color:black;
		padding-left:13px;
		padding-right:13px;
		border-radius:100%;
	}
	#myBtn:hover{
		background-color:blue;
	}
	.speaker_img{
		border-radius:100px;
		overflow:hidden;
		width:200px;
		height:200px;
		text-align:center;
		position:center;
		display:block;
		margin-left: auto;
		margin-right: auto;
	}
	
	
	
	/* Carousel */

#quote-carousel {
    padding: 0 10px 30px 10px;
    margin-top: 30px;
    /* Control buttons  */
    /* Previous button  */
    /* Next button  */
    /* Changes the position of the indicators */
    /* Changes the color of the indicators */
}
#quote-carousel .carousel-control {
    background: none;
    color: #CACACA;
    font-size: 2.3em;
    text-shadow: none;
    margin-top: 30px;
}
#quote-carousel .carousel-control.left {
    left: -60px;
}
#quote-carousel .carousel-control.right {
    right: -60px;
}
#quote-carousel .carousel-indicators {
    right: 50%;
    top: auto;
    bottom: 0px;
    margin-right: -19px;
}
#quote-carousel .carousel-indicators li {
    width: 50px;
    height: 50px;
    margin: 5px;
    cursor: pointer;
    border: 4px solid #CCC;
    border-radius: 50px;
    opacity: 0.4;
    overflow: hidden;
    transition: all 0.4s;
}
#quote-carousel .carousel-indicators .active {
    background: #333333;
    width: 128px;
    height: 128px;
    border-radius: 100px;
    border-color: #f33;
    opacity: 1;
    overflow: hidden;
}
.carousel-inner {
    min-height: 300px;
}
.item blockquote {
    border-left: none;
    margin: 0;
}
.item blockquote p:before {
    content: "\f10d";
    font-family: 'Fontawesome';
    float: left;
    margin-right: 10px;
}
	
	
	
	
	
</style>
</head>
	<body style="background-color:#fbfbfb;">
		<div class="container-fluid" style="background-color:black;">
			<div class="row">
				<div class="col-md-12" style="text-align:center;margin-top:30px;">
					<span id="home"style="color:white;font-family:roboto;font-size:50px;font-weight:700;">Conferences And Events</span>
				</div>
				<div class="col-md-12"  style="text-align:center;color:white;margin-top:30px;">
					<ul style="font-size:18px;font-family:times;">
						<li style="display:inline;padding:11px;"><a href="#home" style="color:white;text-decoration:none;">HOME</a> </li>
						<li style="display:inline;padding:11px;"><a href="#about" style="color:white;text-decoration:none;">ABOUT</a> </li>
						<li style="display:inline;padding:11px;"><a href="#schedule" style="color:white;text-decoration:none;">CONFERENCES</a> </li>
						<li style="display:inline;padding:11px;"><a href="#speakers" style="color:white;text-decoration:none;">SPEAKERS</a> </li>
						<li style="display:inline;padding:11px;"><a href="#register" style="color:white;text-decoration:none;">REGISTER</a> </li>
						<li style="display:inline;padding:11px;"><a href="#contact_us" style="color:white;text-decoration:none;">CONTACT US</a></li>
						<li style="display:inline;padding:11px;"><button style="background-color:transparent;"><a href="admin.php" style="text-decoration:none;color:white;">ADMIN</a></button></li>
					</ul>
				</div>
			</div>
			<div class="row" style="height:510px;overflow:hidden;">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="item active" style="text-align:center;height:400px;">
							<span class="hed1">SRUJANANKURA</span><br/>
							<span class="subhed"><b>
							<?php
							$count=1;
							$sel_query="Select * from conf where id=7;";
							$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) { ?>
							<tr>
								
								
								<?php echo $row["event_date"]; ?>
								
								
							</tr>
							<?php $count++; } ?>
							</b></span><br/>
							<div class="row"  style="margin-top:20px;">
								<div class="col-md-4">
									<span id="countdown_days" class="countdown"></span><br/>
									<span style="color:red;font-size:20px;font-family:times;font-weight:700;text-transform:uppercase;">days</span>
									
								</div>
								<div class="col-md-4">
									<span id="countdown_hours" class="countdown"></span><br/>
									<span style="color:red;font-size:20px;font-family:times;font-weight:700;text-transform:uppercase;">Hours</span>
								</div>
								<div class="col-md-4">
									<span id="countdown_minutes" class="countdown"></span><br/>
									<span style="color:red;font-size:20px;font-family:times;font-weight:700;text-transform:uppercase;">minutes</span>
								</div>
							</div>
								<a href="#register" class="btn btn-info" role="button"style="padding:20px;width:200px;color:white;font-weight:900;font-size:20px;background-color:#dc143c;border-radius:15px;margin-top:20px;"> REGISTER <i class="fa fa-arrow-circle-right"></i></a>
						</div>
						<div class="item" style="text-align:center;height:400px;">
							<span class="hed1">MAHOSTAV </span><br/>
							<span class="subhed"><b>
							
							<?php
							$count=1;
							$sel_query="Select * from conf where id=6;";
							$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) { ?>
							<tr>
								
								
								<?php echo $row["event_date"]; ?>
								
								
							</tr>
							<?php $count++; } ?>
							</b></span>
								<div class="row" style="margin-top:20px;">
									<div class="carousel-inner">
										<div class="col-md-4">
											<span id="countdown_days2" class="countdown"></span><br/>
											<span style="color:red;font-size:20px;font-family:times;font-weight:700;text-transform:uppercase;">days</span>
										</div>
										<div class="col-md-4">
											<span id="countdown_hours2" class="countdown"></span><br/>
											<span style="color:red;font-size:20px;font-family:times;font-weight:700;text-transform:uppercase;">Hours</span>
										</div>
										<div class="col-md-4">
											<span id="countdown_minutes2" class="countdown"></span><br/>
											<span style="color:red;font-size:20px;font-family:times;font-weight:700;text-transform:uppercase;">minutes</span>
										</div>
									</div>
								</div>
							<div style="margin-top:20px;">
								<a href="#register" class="btn btn-primary" role="button"style="padding:20px;width:200px;color:white;font-weight:900;font-size:20px;background-color:#dc143c;margin-right:20px;border-radius:15px;"> REGISTER <i class="fa fa-arrow-circle-right"></i></a>
								<a href="#register" class="btn btn-primary-active" role="button"style="padding:20px;width:200px;color:white;font-weight:900;font-size:20px;border:1px solid white;margin-left:20px;border-radius:15px;"> WATCH VIDEO</a>
							</div>
						</div>
    
						<div class="item" >
							<div class="row">
								<div class="col-md-4">
									<div style="margin-top:10px;margin-left:170px;border:2px solid white;border-radius:15px;background-color:#434a696e;height:385px;width:370px;">
										<div class="form-group">
											<input  type="text" id="name" class="form-control" name="name" title=" Name and Surname" value="" placeholder="Name and Surname" style="height:50px;width:350px;border-radius:15px;margin:10px;color:black;">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" id="mail1"  title="email" value="" required placeholder="Your Email Here" style="height:50px;width:350px;border-radius:15px;margin:10px;color:black;">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" id="number" title="mobile number" value=""  placeholder="Enter Your mobile number Here" style="height:50px;width:350px;border-radius:15px;margin:10px;placeholder-color:black;">
										</div>
										<div class="form-group">
											<select id="select" class="form-control" required style="height:50px;width:350px;border-radius:15px;margin:10px;color:black;opacity:100;font-family:times;font-size:17px;font-weight:500;padding-left:10px;">
												<option  selected="selected" value="">EVENT'S</option>
												<option  value="100">EVENT 01</option>
												<option  value="200">EVENT 02</option>
												<option  value="300">EVENT 03</option>
												<option  value="300">EVENT 04</option>
												<option  value="400">EVENT 05</option>
												<option  value="500">EVENT 06</option>
												<option  value="600">Others</option>
											</select>
										</div>
										<button class="form-control" role="button" onclick="val()"style="padding:20px;width:320px;color:white;font-weight:900;font-size:20px;background-color:#dc143c;border-radius:15px;margin:20px;margin-bottom:20px;overflow:hidden;"> REGISTER <i class="fa fa-arrow-circle-right"></i></button>    
									</div>
								</div>  
								<div class="col-md-8">	  
									<div style="text-align:center;padding-top:60px;margin-right:30px;">
										<span class="hed1" >REGISTER FOR THE EVENTS</span>
									</div>	
								</div>
							</div>
						</div>
						<div class="item" style="text-align:center;height:400px;">
							<span class="hed1">...up comming...</span><br/>
							<span class="hed1"> Conferences</span>
							<p><a class="btn btn-play" href="http://youtube.com/"><i class="glyphicon glyphicon-play" style="font-size:70px;color:red;border:15px solid blue;background-color:white;border-radius:100px;padding:45px;padding-left:50px;"></i></a></p>
						</div>
					</div>
						<a class="left carousel-control" href="#myCarousel" data-slide="prev">
							<span class="fa fa-angle-left" style="font-weight:700;font-size:50px;margin-left:30px;color:white;border:2px solid white;border-radius:10px;padding:12%;padding-right:20px;padding-left:18px;line-height:0;margin-top:50%;"></span>
						</a>
						<a class="right carousel-control" href="#myCarousel" data-slide="next">
							<span class="fa fa-angle-right" style="font-weight:700;font-size:50px;color:white;border:2px solid white;border-radius:10px;padding:12%;padding-right:20px;padding-left:20px;line-height:0;margin-top:50%;" ></span>
						</a>
				</div>
				<div class="row" style="font-family:georgia;font-weight:500;margin-left:125px;border-top-left-radius:25px;border-top-right-radius:25px;margin-right:125px;margin-top:45px;background-color:#434a696e;overflow:hidden;height:90px;">
					<div class="col-md-1" style="padding-top:10px;text-align:right;">
						<span class="ico"><i class="fa fa-calendar fa-2x"></i></span>
					</div>
					<div class="col-md-2" style="padding-top:10px;"><span class="sbox">Date</span><br/>
                        <span class="sbox1"> 
						<?php
							$count=1;
							$sel_query="Select * from conf where id=6;";
							$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) { ?>
							<tr>
								
								
								<?php echo $row["event_date"]; ?>
								
								
							</tr>
							<?php $count++; } ?>
						</span>
					</div>
					<div class="col-md-1" style="padding-top:10px;text-align:right;">
					<span class="ico"><i class="fa fa-map-marker fa-2x"></i></span>
					</div>
					<div class="col-md-2" style="padding-top:10px;"><span class="sbox">Location</span><br/>
                        <span class="sbox1">
						<?php
							$count=1;
							$sel_query="Select * from conf where id=6;";
							$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) { ?>
							<tr>
								
								
								<?php echo $row["eventvenue"]; ?>
								
								
							</tr>
							<?php $count++; } ?>
						</span>
					</div>
					<div class="col-md-1" style="padding-top:10px;text-align:right;">
						<span class="ico"> <i class="fa fa-group fa-2x"></i></span>
					</div>
					<div class="col-md-2" style="padding-top:10px;"><span class="sbox">Register</span><br/>
                        <span class="sbox1">
						<?php
							$count=1;
							$sel_query="Select * from conf where id=6;";
							$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) { ?>
							<tr>
								
								
								<?php echo $row["registerlimit"]; ?>
								
								
							</tr>
							<?php $count++; } ?>
						</span>
					</div>
					<div class="col-md-1" style="padding-top:10px;text-align:right;">
						<span class="ico"><i class="fa fa-microphone fa-2x"></i></span>
					</div>
					<div class="col-md-2" style="padding-top:10px;"><span class="sbox"> Speakers</span><br/>
						<span class="sbox1">
						<?php
							$count=1;
							$sel_query="Select * from conf where id=6;";
							$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) { ?>
							<tr>
								
								
								<?php echo $row["speaker01"]; ?>
								
								
							</tr>
							<?php $count++; } ?>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row" style="padding:30px;">
				<span id="about" style="font-size:35px;font-family:roboto;font-weight:700;"><i class="fa fa-star fa-stack" style="color:red;"></i>WHAT'S ABOUT EVENT</span><span style="font-size:30px;color:gray;font-family:times;"> / what's going on there come and learn</span>	
			</div>
			<div class="row" style="height:400px;">
				<div class="col-md-6" style="padding:30px;">
					<span style="font-size:22px;margin-top:30px;"> here the event description is given for viewers</span><br/><br/>
					<span style="font-size:30px;">Specializations:-</span><br/><br/>
					<span style="font-size:25px;color:gray;">Events are organized in various parts of India regarding various specializations like sports, fests, culturals, arts etc... </span>
				</div>
				<div class="col-md-6" style="padding:30px;">
					<div class="row" style="padding:20px;">
						<span style="padding:20px;"><a href="photos/about1.jpg"> <img src="photos/about1.jpg" alt="about1" style="height:100px;width:200px;border:2px solid gray;border-radius:30px;"></a></span>
						<span style="padding:20px;"><a href="photos/about2.jpg"> <img src="photos/about2.jpg" alt="about2" style="height:100px;width:200px;border:2px solid gray;border-radius:30px;"></a></span>
					</div>
					<div class="row" style="padding:20px;">
						<span style="padding:20px;"><a href="photos/about3.jpg"> <img src="photos/about3.jpg" alt="about3" style="height:100px;width:200px;border:2px solid gray;border-radius:30px;"></a></span> 
						<span style="padding:20px;"><a href="photos/about4.jpg"> <img src="photos/about4.jpg" alt="about4" style="height:100px;width:200px;border:2px solid gray;border-radius:30px;"></a></span>
					</div>
				</div>
			</div>
			<div class="container" style="margin-top:50px;">
				<div class="row" id="schedule">
					<span style="font-size:35px;font-family:roboto;font-weight:700;text-transform:uppercase;"> Conference & Event Schedule</span>
					<a href="#"  style="margin:0px 0px 20px 0px;border:1px solid black;border-radius:15px;width:380px;height:60px;padding:15px;font-size:20px;font-family:times;color;font-weight:600;text-transform:uppercase;" class="btn btn-theme animated flipInY visible  btn-theme-lg btn-theme-transparent-grey pull-right">
					<i class="fa fa-print"></i> Download Event Schedule</a>
				</div>
				<div class="row" style="margin-top:40px;overflow:hidden;">
					<ul class="nav nav-justified" style="border:2px solid gray;font-size:25px;text-transform:uppercase;font-family:roboto;background-color:#435469b5;border-top-left-radius:25px;border-top-right-radius:25px;overflow:hidden;">
						<li class="active"><a href="#event1" data-toggle="tab" style="color:white;"><strong>EVENT 01</strong> <br/>
						
						<?php
							$count=1;
							$sel_query="Select * from conf where id=6;";
							$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) { ?>
							<tr>
								
								
								<?php echo $row["last_date"]; ?>
								
								
							</tr>
							<?php $count++; } ?>
						
						
						
						
						</a></li>
						<li ><a href="#event2" data-toggle="tab" style="color:white;"><strong>EVENT 02</strong> <br/>Updated Soon</a></li>
						<li ><a href="#event3" data-toggle="tab" style="color:white;"><strong>EVENT 03</strong> <br/>Updated Soon</a></li>
						<li ><a href="#event4" data-toggle="tab" style="color:white;"><strong>EVENT 04</strong> <br/>Updated Soon</a></li>
					</ul>
					<div class="tab-content" style="border:1px solid gray;border-bottom-width:10px;">
						<div id="event1" class="tab-pane fade in active">
							<div class="row" style="padding:20px;">
							
							
							
							
				
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
								<div class="col-md-3">
									<span style="padding-left:50px;padding-top:20px;"><a href="#">
									<img src="photos/ablock.jpg" alt="A-Block" style="border:1px solid gray;border-radius:100%;width:150px;height:150px;"></a></span><br/>
									<span style="padding-left:90px;font-size:20px;font-family:times;">
									<?php
							$count=1;
							$sel_query="Select * from conf where id=6;";
							$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) { ?>
							<tr>
								
								
								<?php echo $row["event_location"]; ?>
								
								
							</tr>
							<?php $count++; } ?>
									</span>
								</div>
								<div class="col-md-8" style="background-color:white;border:1px solid gray;border-radius:15px;">
									<span style="color:red;font-size:20px;"><i class="fa fa-clock-o"></i> 
									<?php
							$count=1;
							$sel_query="Select * from conf where id=6;";
							$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) { ?>
							<tr>
								
								
								<?php echo $row["event_date"]; ?>
								
								
							</tr>
							<?php $count++; } ?>
									</span>
									<a href="#" class="pull-right">
									<span class="fa-stack fa-lg"><i class="fa fa-stack-2x fa-circle-thin"></i><i class="fa fa-stack-1x fa-share-alt"></i></span>
									</a>
									<a target="_blank" href="https://twitter.com/"></a>
									<a target="_blank" href="https://www.facebook.com/"></a>
									<a target="_blank" href="https://plus.google.com/"></a>
									<h1><a href="#info" style="">Info</a> <span>
									<?php
							$count=1;
							$sel_query="Select * from conf where id=6;";
							$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) { ?>
							<tr>
								
								
								<?php echo $row["event_Info"]; ?>
								
								
							</tr>
							<?php $count++; } ?>
									</span></h1>
									
									<hr></hr>
									<p style="font-size:20px;color:blue;">EVENT : <span>
									<?php
							$count=1;
							$sel_query="Select * from conf where id=6;";
							$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) { ?>
							<tr>
								
								
								<?php echo $row["event_name"]; ?>
								
								
							</tr>
							<?php $count++; } ?></span></p>
									<br/>
									<h1><a >Location</a><span>
									<?php
							$count=1;
							$sel_query="Select * from conf where id=6;";
							$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) { ?>
							<tr>
								
								
								<?php echo $row["eventvenue"]; ?>
								
								
							</tr>
							<?php $count++; } ?></span></h1>
									<hr><hr>
									<p style="font-size:20px;color:blue;"> 
									<?php
							$count=1;
							$sel_query="Select * from conf where id=6;";
							$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) { ?>
							<tr>
								
								
								<?php echo $row["event_location"]; ?>
								
								
							</tr>
							<?php $count++; } ?>
									</p>
								</div>
							</div>
							
						</div>
						<div id="event2" class="tab-pane">
							<div class="row" style="padding:20px;">
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
								<div class="col-md-3">
									<span style="padding-left:50px;padding-top:20px;"><a href="#">
										<img src="photos/hblock.jpg" alt="A-Block" style="border:1px solid gray;border-radius:100%;width:150px;height:150px;"></a></span><br/>
										<span style="padding-left:90px;font-size:20px;font-family:times;">
										<?php
							$count=1;
							$sel_query="Select * from conf where id=7;";
							$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) { ?>
							<tr>
								
								
								<?php echo $row["event_location"]; ?>
								
								
							</tr>
							<?php $count++; } ?>
										</span>
								</div>
								<div class="col-md-8" style="background-color:white;border:1px solid gray;border-radius:15px;">
									<span style="color:red;font-size:20px;"><i class="fa fa-clock-o"></i> 
									<?php
							$count=1;
							$sel_query="Select * from conf where id=7;";
							$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) { ?>
							<tr>
								
								
								<?php echo $row["event_date"]; ?>
								
								
							</tr>
							<?php $count++; } ?>
									</span>
										<a href="#" class="pull-right">
											<span class="fa-stack fa-lg">
												<i class="fa fa-stack-2x fa-circle-thin"></i>
												<i class="fa fa-stack-1x fa-share-alt"></i>
											</span>
										</a>
										<a target="_blank" href="https://twitter.com/"></a>
										<a target="_blank" href="https://www.facebook.com/"></a>
										<a target="_blank" href="https://plus.google.com/"></a>
										<h1><a >Info</a><span>
										<?php
							$count=1;
							$sel_query="Select * from conf where id=7;";
							$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) { ?>
							<tr>
								
								
								<?php echo $row["event_Info"]; ?>
								
								
							</tr>
							<?php $count++; } ?>
										</span></h1>
										<hr></hr>
										<p style="font-size:20px;color:blue;">EVENT :  <span>
										<?php
							$count=1;
							$sel_query="Select * from conf where id=7;";
							$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) { ?>
							<tr>
								
								
								<?php echo $row["event_name"]; ?>
								
								
							</tr>
							<?php $count++; } ?></span></p>
										<br/>
										<h1 class="post-title"><a >Location</a><span>
										<?php
							$count=1;
							$sel_query="Select * from conf where id=7;";
							$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) { ?>
							<tr>
								
								
								<?php echo $row["eventvenue"]; ?>
								
								
							</tr>
							<?php $count++; } ?>
										</span></h1>
										<hr></hr>
										<p style="font-size:20px;color:blue;"> 
										<?php
							$count=1;
							$sel_query="Select * from conf where id=7;";
							$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) { ?>
							<tr>
								
								
								<?php echo $row["event_location"]; ?>
								
								
							</tr>
							<?php $count++; } ?>
										</p>
								</div>	
							</div>
							
						</div>
						<div id="event3" class="tab-pane">
							<div class="row" style="padding:20px;">
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
								<div class="col-md-3">
									<span style="padding-left:50px;padding-top:20px;"><a href="#">
										<img src="photos/ablock.jpg" alt="A-Block" style="border:1px solid gray;border-radius:100%;width:150px;height:150px;"></a></span><br/>
										<span style="padding-left:90px;font-size:20px;font-family:times;">
										<?php
							$count=1;
							$sel_query="Select * from conf where id=8;";
							$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) { ?>
							<tr>
								
								
								<?php echo $row["event_location"]; ?>
								
								
							</tr>
							<?php $count++; } ?>
										</span>
								</div>
								<div class="col-md-8" style="background-color:white;border:1px solid gray;border-radius:15px;">
									<span style="color:red;font-size:20px;"><i class="fa fa-clock-o"></i>
									<?php
							$count=1;
							$sel_query="Select * from conf where id=8;";
							$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) { ?>
							<tr>
								
								
								<?php echo $row["event_date"]; ?>
								
								
							</tr>
							<?php $count++; } ?>
									</span>
										<a href="#" class="pull-right">
											<span class="fa-stack fa-lg">
												<i class="fa fa-stack-2x fa-circle-thin"></i>
												<i class="fa fa-stack-1x fa-share-alt"></i>
											</span>
										</a>
										<a target="_blank" href="https://twitter.com/"></a>
										<a target="_blank" href="https://www.facebook.com/"></a>
										<a target="_blank" href="https://plus.google.com/"></a>
										<h2><a >Info</a><span>
										<?php
							$count=1;
							$sel_query="Select * from conf where id=8;";
							$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) { ?>
							<tr>
								
								
								<?php echo $row["event_Info"]; ?>
								
								
							</tr>
							<?php $count++; } ?>
										</span></h2>
										<hr></hr>
										<p style="font-size:20px;color:blue;">EVENT : <span>
										<?php
							$count=1;
							$sel_query="Select * from conf where id=8;";
							$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) { ?>
							<tr>
								
								
								<?php echo $row["event_name"]; ?>
								
								
							</tr>
							<?php $count++; } ?>
										</span></p>
										<br/>
										<h2 class="post-title"><a >Location</a><span>
										<?php
							$count=1;
							$sel_query="Select * from conf where id=8;";
							$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) { ?>
							<tr>
								
								
								<?php echo $row["eventvenue"]; ?>
								
								
							</tr>
							<?php $count++; } ?></span></h2>
										<hr></hr>
										<p style="font-size:20px;color:blue;">
										<?php
							$count=1;
							$sel_query="Select * from conf where id=8;";
							$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) { ?>
							<tr>
								
								
								<?php echo $row["event_location"]; ?>
								
								
							</tr>
							<?php $count++; } ?>
										</p>
								</div>
							</div>
						</div>
						<div id="event4" class="tab-pane">
							<div class="row" style="padding:20px;">
								<div class="col-md-3" style="padding-top:20px">
									<span style="padding-left:50px;"><a href="#">
										<img src="photos/lara.jpg" alt="A-Block" style="border:1px solid gray;border-radius:100%;width:150px;height:150px;"></a></span>
								</div>
								<div class="col-md-8" style="background-color:white;border:1px solid gray;border-radius:15px;padding:20px;">
									<div class="row">
										<div class="col-md-2">
											<span style="color:red;font-size:20px;"><i class="fa fa-clock-o">TIME</i> </span>
												<hr></hr>
												<h2><a >Info</a></h2>
												<hr></hr>
												<h2><a href="#">Location</a></h2>
												<hr></hr>
										</div>
										<div class="col-md-6" style="padding:50px;">
											<h1 >UPDATED SOON...</h1>
										</div>
									</div>
								</div>
							</div>						
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">			
			<div class="row"  id="speakers" style="padding:20px;">  
				<h3 ><span style="font-size:40px;color:#0af50a;" class="fa fa-user fa-stack"></span>
				<span style="font-size:30px;font-family:roboto;color:black;font-weight:600;">Event Speakers <small> / meet with greaters</small></span></h3>
				<div class="col-md-3">
							<a style="text-align:center;position:center;" href="photos/speaker1.jpg"><img src="photos/speaker1.jpg" class="speaker_img"/></a>	
						<br/>
					<div style="text-align:center;"> 
						<span class="spaeaker_text" style="">
						<?php
							$count=1;
							$sel_query="Select * from conf where id=6;";
							$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) { ?>
							<tr>
								
								
								<?php echo $row["speaker01"]; ?>
								
								
							</tr>
							<?php $count++; } ?>
						</span>
							<p>details about <span>
							<?php
							$count=1;
							$sel_query="Select * from conf where id=6;";
							$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) { ?>
							<tr>
								
								
								<?php echo $row["speaker01"]; ?>
								
								
							</tr>
							<?php $count++; } ?>
							</span></p>
							<ul class="list-inline">		   
								<li style="background-color:#55ACEE;border:2px solid transparent;border-radius:100px;width:30px;height:30px;padding:2px;">
								<span style="font-size:20px;"><a href="twitter.com" class="fa fa-twitter" style="color:white;"></a></span></li>
								<li style="background-color:#3B5998;border:2px solid transparent;border-radius:100px;width:30px;height:30px;padding:2px;">
								<span style="font-size:20px;"><a href="facebook.com" class="fa fa-facebook" style="color:white;"></a></span></li>
								<li style="background-color:#dd4b39;border:2px solid transparent;border-radius:100px;width:30px;height:30px;padding:2px;">
								<span style="font-size:20px;"><a href="google-plus.com" class="fa fa-google-plus" style="color:white;"></a></span></li>
								<li style="background-color:#007bb5;border:2px solid transparent;border-radius:100px;width:30px;height:30px;padding:2px;">
								<span style="font-size:20px;"><a href="linkedin.com" class="fa fa-linkedin" style="color:white;"></a></span></li>
							</ul>
					</div>
				</div>
				<div class="col-md-3">
						<a href="photos/speaker2.jpg"><img src="photos/speaker2.jpg" class="speaker_img"/></a>
						<br/>
					<div style="text-align:center;">
						<span class="spaeaker_text">
						<?php
							$count=1;
							$sel_query="Select * from conf where id=7;";
							$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) { ?>
							<tr>
								
								
								<?php echo $row["speaker01"]; ?>
								
								
							</tr>
							<?php $count++; } ?>
						</span>
						<p>details about <span>
						<?php
							$count=1;
							$sel_query="Select * from conf where id=7;";
							$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) { ?>
							<tr>
								
								
								<?php echo $row["speaker01"]; ?>
								
								
							</tr>
							<?php $count++; } ?>
						</span></p>	
						<ul class="list-inline">		   
							<li style="background-color:#55ACEE;border:2px solid transparent;border-radius:100px;width:30px;height:30px;padding:2px;">
							<span style="font-size:20px;"><a href="twitter.com" class="fa fa-twitter" style="color:white;"></a></span></li>
							<li style="background-color:#3B5998;border:2px solid transparent;border-radius:100px;width:30px;height:30px;padding:2px;">
							<span style="font-size:20px;"><a href="facebook.com" class="fa fa-facebook" style="color:white;"></a></span></li>
							<li style="background-color:#dd4b39;border:2px solid transparent;border-radius:100px;width:30px;height:30px;padding:2px;">
							<span style="font-size:20px;"><a href="google-plus.com" class="fa fa-google-plus" style="color:white;"></a></span></li>
							<li style="background-color:#007bb5;border:2px solid transparent;border-radius:100px;width:30px;height:30px;padding:2px;">
							<span style="font-size:20px;"><a href="linkedin.com" class="fa fa-linkedin" style="color:white;"></a></span></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3">  
						
						<a href="photos/speaker3.jpg"><img src="photos/speaker3.jpg" class="speaker_img"/></a>
						<br/>
					<div style="text-align:center;">
						<span class="spaeaker_text">
						<?php
							$count=1;
							$sel_query="Select * from conf where id=8;";
							$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) { ?>
							<tr>
								
								
								<?php echo $row["speaker01"]; ?>
								
								
							</tr>
							<?php $count++; } ?>
						</span>
						<p>details about <span>
						<?php
							$count=1;
							$sel_query="Select * from conf where id=8;";
							$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) { ?>
							<tr>
								
								
								<?php echo $row["speaker01"]; ?>
								
								
							</tr>
							<?php $count++; } ?>
						</span></p>
						<ul class="list-inline">		   
							<li style="background-color:#55ACEE;border:2px solid transparent;border-radius:100px;width:30px;height:30px;padding:2px;">
								<span style="font-size:20px;"><a href="twitter.com" class="fa fa-twitter" style="color:white;"></a></span>
							</li>
							<li style="background-color:#3B5998;border:2px solid transparent;border-radius:100px;width:30px;height:30px;padding:2px;">
								<span style="font-size:20px;"><a href="facebook.com" class="fa fa-facebook" style="color:white;"></a></span>
							</li>
							<li style="background-color:#dd4b39;border:2px solid transparent;border-radius:100px;width:30px;height:30px;padding:2px;">
								<span style="font-size:20px;"><a href="google-plus.com" class="fa fa-google-plus" style="color:white;"></a></span>
							</li>
							<li style="background-color:#007bb5;border:2px solid transparent;border-radius:100px;width:30px;height:30px;padding:2px;">
								<span style="font-size:20px;"><a href="linkedin.com" class="fa fa-linkedin" style="color:white;"></a></span>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-3"> 
						
						<a href="photos/speaker4.jpg"><img src="photos/speaker4.jpg" class="speaker_img"/><a>
						<br/>
					<div style="text-align:center;">
						<span class="spaeaker_text">speaker 04</span>
						<p>details about speaker 04</p>
					 		 <ul class="list-inline">		   
								<li style="background-color:#55ACEE;border:2px solid transparent;border-radius:100px;width:30px;height:30px;padding:2px;">
									<span style="font-size:20px;"><a href="twitter.com" class="fa fa-twitter" style="color:white;"></a></span>
								</li>
								<li style="background-color:#3B5998;border:2px solid transparent;border-radius:100px;width:30px;height:30px;padding:2px;">
									<span style="font-size:20px;"><a href="facebook.com" class="fa fa-facebook" style="color:white;"></a></span>
								</li>
								<li style="background-color:#dd4b39;border:2px solid transparent;border-radius:100px;width:30px;height:30px;padding:2px;">
									<span style="font-size:20px;"><a href="google-plus.com" class="fa fa-google-plus" style="color:white;"></a></span>
								</li>
								<li style="background-color:#007bb5;border:2px solid transparent;border-radius:100px;width:30px;height:30px;padding:2px;">
									<span style="font-size:20px;"><a href="linkedin.com" class="fa fa-linkedin" style="color:white;"></a></span>
								</li>
							</ul>
					</div>
				</div>
			</div>
           <div>
			<div class="row" id="register" style="margin-top:70px;height:200px;line-height:50px;">
				<span style="font-size:25px;font-family:times;color:black;font-weight:600;padding:20px;text-transform:uppercase;"><i class="hexagon"><i class="hexagon-inside"><i class="hexagon3"><i style="font-size:40px;color:#0af50a;" class="fa fa-ticket fa-stack"></i></i></i></i>Register now</span>
			<form id="myForm" action="insert2.php" method="post">
					<div class="col-md-12" style="padding-top:30px;">
						<div class="col-md-3">
							<div class="form-group">
								<input  type="text" title="Name and Surname" id="name2" name="nameandsurname" value="" placeholder="Name and Surname" class="form-control" style="background-color:white;border:1px solid black;color:black;">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<input type="email" class="form-control" id="mail2" title="email" value="" name="email" placeholder="Your Email Here" style="background-color:white;border:1px solid black;color:black;">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<input type="number" id="number2" class="form-control" title="number" value="" name="phnumber" placeholder="Your Phone Number" style="background-color:white;border:1px solid black;color:black;">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<select  title="Specialization" class="form-control"  name="specialization" style="background-color:white;border:1px solid black;color:black;" >
									<option  selected="selected" value="Specialization">Events</option>
									<option  value="event 01">Event 01</option>
									<option  value="event 02">Event 02</option>
									<option  value="event 03">Event 03</option>
									<option  value="event 04">Event 04</option>
									<option  value="event 05">Event 05</option>
									<option  value="event 06">Event 06</option>
									<option  value="Others">Others</option>
								</select>
							</div>
						</div>
						<div class="row">
				<div class="form-group" style="padding-left:400px;padding-right:400px">
					<textarea type="text" class="form-control" id="address2" title="address" value="" name="address" placeholder="Your address" style="background-color:white;border:1px solid black;"></textarea>
				</div>
			</div>
					</div>
					
			</div>
			
			<div class="row">
				<div class="form-group" style="padding-left:550px;">
					<input type="submit" id="sub" class="form-control" style="width:225px;height:70px;font-size:25px;font-family:times;text-transform:uppercase;font-weight:800;background:#dc143c;color:white;border:none;border-radius:20px;">
				</div>
			</div>
			</form>
			<span id="result"></span>
			<script src='https://code.jquery.com/jquery-2.1.3.min.js'></script>
<script src="my_script.js" type="text/javascript"></script>
		</div>
			<div class="row" id="location" style="text-align:center;background-color:rgba(29, 14, 47, 0.83);height:350px;border:1px solid black;padding-top:30px;">
				<p style="font-size:40px;font-weight:700;font-family:times;text-transform:uppercase;color:white;">Get in Touch with us</p>
				<div class="col-md-6" style="border-right:1px solid white;height:170px;margin-top:50px;">
					<span style="color:white;font-size:30px;font-family:times;">Address</span><br/><br/>
					<span style="font-size:20px;color:white;padding:10px;"><i class="glyphicon glyphicon-phone-alt" style="font-size:20px;color:red;"></i> +91-9490300417<br/>2-139, vadlamudi<br/>guntur district, Andhra pradesh</span>	
				</div>
				<div class="col-md-6" style="margin-top:30px;">
					<p style="font-size:30px;font-family:times;color:white;">Our Location</p>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3830.7481991068767!2d80.54871921423661!3d16.23337973933119!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a4a0953a362f945%3A0x11aa0de9063844ab!2sVignan&#39;s+University!5e0!3m2!1sen!2sin!4v1516884210810"  style="border:1px solid black;width:500px;height:130px;margin:5px;">google map</iframe>
				</div>
			</div>
					
			<div class="container-fluid">		
				<div class="row" id="contact_us" style="background-color:#dc143c;padding:80px;border:2px solid black;">
					<span style="font-size:30px;font-family:times;font-weight:700;color:white;text-transform:uppercase;">Contact Us </span>
					<span style="font-size:25px;color:white;font-family:times;"> / for support</small></span>
					<form id="myForm2" action="insert3.php" method="post">
					<div class="form-group">
						<input type="text" class="form-control" id="name3"  value="" size="30"  name="name" tabindex="1"  placeholder="Your Name ..." style="border-radius:15px;">
					</div>
					<div class="form-group">	
						<input type="email" class="form-control" id="mail3"  value="" size="40"  name="email" tabindex="2"  placeholder="Your email..." style="width:100%;">
					</div>
					<div class="form-group">
						<textarea  style="width:100%;" id="message" cols="50" rows="4"  name="input_message" tabindex="3"  placeholder="Your Message ..." class="form-control" ></textarea>
					</div>
					<div class="form-group" style="padding-left:350px;">
						<input type="submit" id="sub2" name="submit" value="Insert" class="form-control" id="submit_btn" style="width:250px;color:black;font-weight:700;font-size:20px;font-family:times;text-transform:uppercase;border-radius:25px;background-color:white;margin-left:100px;">
					</div>
					</form>
					<script src='https://code.jquery.com/jquery-2.1.3.min.js'></script>
<script src="my_script2.js" type="text/javascript"></script>
				</div>
			</div>
		</div>    					
		<div class="container-fluid" style="border:1px solid transparent;padding:30px;height:600px;">
			<div class="row">
				<p style="margin:10px;font-size:30px;font-family:roboto;font-weight:700;text-transform:uppercase;color:black;"><i class="fa fa-envelope"></i>feedback</p>
				<div class="col-md-6">
				<form class="" action="insert4.php" method="post">
					<table>
						<tr>
						<td style="border-radius:20px;padding-left:10px;"><span class="fed0">email:</span></td>
						<td>
							<div class="form-group">
								<input type="email" class="form-control1" required id="email1" placeholder="Enter email" name="email">
							</div>			
						</td>
						</tr>
						<tr>
							<td style="border-radius:20px;padding-left:10px;"><span class="fed0">name:</span></td>
							<td>
								<div class="form-group">
									<input type="text" class="form-control1" required id="name1" placeholder="enter_name" name="user_name">
								</div>
							</td>
						</tr>
						<tr>
							<td style="border-radius:20px;padding-left:10px;"> <span class="fed0">number:</span></td>
							<td>				
								<div class="form-group">
									<input type="number" class="form-control1" required  placeholder="mobile-number" id="number1" name="mobile">
								</div>			
							</td>
						</tr>
						<tr>
							<td style="border-radius:20px;padding-left:10px;"><span  class="fed0">Place your <br/>comment:</span></td>
							<td>
								<div class="form-group">
									<textarea style="width:400px;border-radius:15px;padding:10px;color:black;font-family:times;font-size:20px;" rows="5" cols="50" required id="feedback1" tabindex="3" placeholder="Your comment please..." name="comments"></textarea>
								</div>	
							</td>
						</tr>
						<tr>
							<td>
								<div class="form-group">
									<button  type="submit" name="submit" value="Insert" style="width:150px;height:50px;border-radius:15px;margin-left:0px;color:black;font-size:20px;font-family:times;font-weight:700;">SUBMIT</button>
								</div>
							</td>
							</tr>
					</table>
					</form>
				</div>
				
				
				
				
					
					
					
					
					
					
					
					
					
					<div class="container">
<div class="row">
                    <div class="col-md-12" data-wow-delay="0.2s">
                        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                            <!-- Bottom Carousel Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive " src="https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg" alt="">
                                </li>
                                <li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/rssems/128.jpg" alt="">
                                </li>
                                <li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/adellecharles/128.jpg" alt="">
                                </li>
                            </ol>

                            <!-- Carousel Slides / Quotes -->
                            <div class="carousel-inner text-center">

                                <!-- Quote 1 -->
                                <div class="item active">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">

                                                <p>
												<?php
							$count=1;
							$sel_query="Select * from feedback where id=1;";
							$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) { ?>
							<tr>
								
								
								<?php echo $row["comments"]; ?>
								
								
							</tr>
							<?php $count++; } ?>
												</p>
                                                <small>
												<?php
							$count=1;
							$sel_query="Select * from feedback where id=1;";
							$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) { ?>
							<tr>
								
								
								<?php echo $row["user_name"]; ?>
								
								
							</tr>
							<?php $count++; } ?>
												</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- Quote 2 -->
                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">

                                                <p>
													<?php
							$count=1;
							$sel_query="Select * from feedback where id=2;";
							$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) { ?>
							<tr>
								
								
								<?php echo $row["comments"]; ?>
								
								
							</tr>
							<?php $count++; } ?>
												</p>
                                                <small>
												<?php
							$count=1;
							$sel_query="Select * from feedback where id=2;";
							$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) { ?>
							<tr>
								
								
								<?php echo $row["user_name"]; ?>
								
								
							</tr>
							<?php $count++; } ?>
												</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- Quote 3 -->
                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">

                                                <p>
												<?php
							$count=1;
							$sel_query="Select * from feedback where id=3;";
							$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) { ?>
							<tr>
								
								
								<?php echo $row["comments"]; ?>
								
								
							</tr>
							<?php $count++; } ?>
												</p>
                                                <small>
												<?php
							$count=1;
							$sel_query="Select * from feedback where id=3;";
							$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) { ?>
							<tr>
								
								
								<?php echo $row["user_name"]; ?>
								
								
							</tr>
							<?php $count++; } ?>
												</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>

                            <!-- Carousel Buttons Next/Prev -->
                            <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                            <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
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
		<script>

			var countDownDate = new Date("mar 1, 2018 15:37:25").getTime();
	
			// Update the count down every 1 second
			var x = setInterval(function() {

			// Get todays date and time
			var now = new Date().getTime();
		
			// Find the distance between now an the count down date
			var distance = countDownDate - now;
    
			// Time calculations for days, hours, minutes and seconds
			var days = Math.floor(distance / (1000 * 60 * 60 * 24));
			var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    
				document.getElementById("countdown_days").innerHTML = days;
				document.getElementById("countdown_hours").innerHTML = hours;
				document.getElementById("countdown_minutes").innerHTML =minutes;

	  
				document.getElementById("countdown_days2").innerHTML = days;
				document.getElementById("countdown_hours2").innerHTML = hours;
				document.getElementById("countdown_minutes2").innerHTML =minutes;
    
			// If the count down is over, write some text 
				if (distance < 0) {
					clearInterval(x);
					document.getElementById("countdown_days").innerHTML = "EXPIRED";
					document.getElementById("countdown_hours").innerHTML = "EXPIRED";
					document.getElementById("countdown_minutes").innerHTML = "EXPIRED";
		
					document.getElementById("countdown_days2").innerHTML = "EXPIRED";
					document.getElementById("countdown_hours2").innerHTML = "EXPIRED";
					document.getElementById("countdown_minutes2").innerHTML = "EXPIRED";
				}
			}, 1000);

		</script>	
	<script>
	function val(){
		var name=document.getElementById("name").value;
			p=/^[A-Za-z0-9 ]{8,}$/;
		var r=new RegExp(p);
			if(r.test(name)){
				alert("name success");
					}else{
				alert("enter name field");
						}
		var number = document.getElementById('number').value;
			p1= /^[0-9]{10}$/;
		var r2 = new RegExp(p1);
			if(r2.test(number)){ 
				alert("number success");
				}
				else{ 
				alert("enter mobile number");
					}
					}
</script>
<script>
	function val1(){
		var name2=document.getElementById("name2").value;
			p=/^[A-Za-z0-9 ]{8,}$/;
		var r=new RegExp(p);
			if(r.test(name2)){
				alert("name success");
			}else{
				alert("enter name field");
				 }
		var number2 = document.getElementById('number2').value;
			p2= /^[0-9]{10}$/;
		var r2 = new RegExp(p2);
			if(r2.test(number2)){ 
				alert("number success");
								}
				else{ 
				alert("enter mobile number");
					}
				}
</script>
<script>
	function val2(){
		var name3=document.getElementById("name3").value;
			p=/^[A-Za-z0-9 ]{8,}$/;
				var r=new RegExp(p);
					if(r.test(name3)){
						alert("name success");
						}else{
						alert("enter name field");
							}
				var mail3 = document.getElementById('mail3').value;
					if(mail3.length==0){ 
						alert("enter mail-id");
						}
				var message = document.getElementById('message').value;
					if(message.length==0){ 
						alert("comment please.");
						}
					}
</script>

						
						<div class="row">
						<button onclick="topFunction()" id="myBtn" title="go to top"><i class="fa fa-angle-up"></i></button>
						<script>
							window.onscroll=function()
						{
						scrollFunction()
						}
						function scrollFunction(){
						if(document.body.scrollTop>20||document.documentElement.scrollTop>20){
						document.getElementById("myBtn").style.display="block";}
						else{
						document.getElementById("myBtn").style.display="none";
						}
						}
						function topFunction(){
						document.body.scrollTop=0;
						document.documentElement.scrollTop=0;
						}
						</script>
						</div> 
						
</body>
</html>