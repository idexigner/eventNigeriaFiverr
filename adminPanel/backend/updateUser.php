<?php 

include 'DBConfig.php';

//    $conn = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);

	$json = file_get_contents('php://input');
 
	 // decoding the received JSON and store into $obj variable.
	 $obj = json_decode($json,true);

     $id = $obj['id'];
     $name = $obj['name'];
     $phone = $obj['phone'];
     $email = $obj['email'];
     $username = $obj['username'];
     $role = $obj['role'];
     $approve = $obj['approve'];
    
     



    $result= $con->query("update users set u_name='$name',  phone='$phone', email='$email', username='$username', role='$role', approve='$approve' where u_id='$id'");
	
    if($result){
				echo json_encode("Success");
			}
			else{
			   echo json_encode(mysqli_error($con)); // our query fail 		

                echo "Failed";
			}



?>


