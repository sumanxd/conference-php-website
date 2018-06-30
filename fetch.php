<?php
        include_once('db.php');
 
		$sql = "SELECT * FROM register";
		$res = mysqli_query($con, $sql);
		$result = array();
 
		while( $row = mysqli_fetch_array($res) )
		    array_push($result, array('nameandsurname' => $row[0],
			                          'email'  => $row[1],
						  'phnumber' => $row[2],
						  'specialization' => $row[3],
						  'address' => $row[4]
						  ));
 
		echo json_encode(array("result" => $result));
					
?>