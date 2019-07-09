<?php 

include 'DBConfig.php';



	$json = file_get_contents('php://input');
 
	 // decoding the received JSON and store into $obj variable.
     $obj = json_decode($json,true);
     
     $id = $obj['id'];

	$result= $con->query("SELECT e.e_id, e.name, e.description, c.c_name,e.c_id, e.location, e.map_link, e.fees, e.date, e.start_time, e.end_time, e.website, e.image_name, e.image_length, e.addToCalender from event as e inner join category as c on e.c_id=c.c_id where e.e_id='$id'");
	
	
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


