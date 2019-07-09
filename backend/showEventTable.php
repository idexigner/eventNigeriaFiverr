<?php 
include 'DBConfig.php';
// Create connection


	$json = file_get_contents('php://input');
 
	 // decoding the received JSON and store into $obj variable.
	 $obj = json_decode($json,true);


		 $q = "SELECT e.e_id, e.name, e.description, c.c_name, e.location, e.map_link, e.fees, e.date, e.start_time, e.end_time, e.website, e.image_name, e.image_length from event as e inner join category as c on e.c_id=c.c_id";
	
	

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