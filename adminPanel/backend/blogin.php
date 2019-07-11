<?php
error_reporting(0);
// session_start();
include('DBConfig.php');	


$json = file_get_contents('php://input');
 
	 // decoding the received JSON and store into $obj variable.
	 $obj = json_decode($json,true);

	 $username = htmlspecialchars($obj['username']); 
	 $password = htmlspecialchars($obj['pass']);



	// $username = strip_tags(mysqli_real_escape_string($con,trim($username)));
	// $password = strip_tags(mysqli_real_escape_string($con,trim($password)));

	// $username = htmlspecialchars($username);
	// $password= htmlspecialchars($password);

	// $query = "select * from users where username='".$username."' and pass = '".$password."' and approve='yes' ";
	// $query = "select * from users";

	$result= $con->query("select * from users where username='".$username."' and pass = '".$password."' and approve='yes' ");

	// $result= $con->query("select * from census_users where username='$username'");

	// $query = "select * from users where username='admin' and pass = 'admin' where approve='yes' ";


	// $tbl = mysqli_query($con,$query);
	// if(mysqli_num_rows($tbl)>0){
		if($result->num_rows>0){
	
			// while($row[] = $result->fetch_assoc()) {

            //     $tem = $row;
                
            //     $json = json_encode($tem);
                
			//     }
			
		echo json_encode($result->fetch_assoc());
                // echo $json;	
		 
	}
	else{

		echo json_encode(mysqli_error($con));
		echo json_encode('Wrong Details');	
	}


?>