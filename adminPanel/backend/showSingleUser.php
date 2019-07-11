<?php 

include 'DBConfig.php';



	$json = file_get_contents('php://input');
 
	 // decoding the received JSON and store into $obj variable.
     $obj = json_decode($json,true);
     
     $id = $obj['id'];

	$result= $con->query("SELECT u_id,u_name,phone,email,username,role,approve from users where u_id='$id'");
	
	
		if($result->num_rows>0){

            while($row[] = $result->fetch_assoc()) {

                $tem = $row;
                
                $json = json_encode($tem);
                
                }
                echo $json;	
		}
		else
		{		
		    echo  json_encode('No Transactions'); // alert msg in react native

		}
	

?>


