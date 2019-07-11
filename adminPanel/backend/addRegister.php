<?php 


include 'DBConfig.php';


	$json = file_get_contents('php://input');
 
	 // decoding the received JSON and store into $obj variable.
	 $obj = json_decode($json,true);

     $name = htmlspecialchars($obj['name']);
     $phone = htmlspecialchars($obj['phone']);
     $email = htmlspecialchars($obj['email']);
     $username = htmlspecialchars($obj['username']);
     $password = htmlspecialchars($obj['password']);
     
    
    $result = $con->query("insert into users(u_name, phone, email, username, pass, role, approve) values ('$name','$phone','$email','$username','$password','Organizer','no')");

    // $result = $con->query("insert into users(u_name) values('Checking')");

    

    if($result){
				echo json_encode("Success");
			}
			else{
			   echo json_encode(mysqli_error($con)); // our query fail 		

                echo "assad";
			}

?>







