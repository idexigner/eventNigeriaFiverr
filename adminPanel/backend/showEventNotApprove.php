<?php 
include 'DBConfig.php';
// Create connection


	$json = file_get_contents('php://input');
 
	 // decoding the received JSON and store into $obj variable.
	 $obj = json_decode($json,true);


		 $q = "SELECT e.e_id,e.name,e.location,u.u_name,c.c_name from events as e inner join users as u on e.u_id=u.u_id inner join category as c on e.c_id=c.c_id where e.approve='no'";
	
	

	$result= $con->query($q);
	
	
		if($result->num_rows>0){

            while($row[] = $result->fetch_assoc()) {

                $tem = $row;
                
                $json = json_encode($tem);
                
                }
                echo $json;	
		}
		else
		{		
		    echo  json_encode('No Data'); // alert msg in react native

		}
	
	
?>