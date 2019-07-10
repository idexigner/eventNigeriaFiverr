<?php 

include 'DBConfig.php';


	$json = file_get_contents('php://input');
 
	 // decoding the received JSON and store into $obj variable.
	 $obj = json_decode($json,true);

     $eventName = htmlspecialchars($obj['eventName']);
     $eventDesc = htmlspecialchars($obj['eventDesc']);
     $categoryValue = htmlspecialchars($obj['categoryValue']);
     $eventLocation = htmlspecialchars($obj['eventLocation']);
     $eventLongitude = htmlspecialchars($obj['eventLongitude']);
     $eventLatitude = htmlspecialchars($obj['eventLatitude']);
     $eventFees = htmlspecialchars($obj['eventFees']);
     $eventTicket = $obj['eventTicket'];
     $eventDateInput = htmlspecialchars($obj['eventDateInput']);
     $eventStartTimeInput = htmlspecialchars($obj['eventStartTimeInput']);
     $eventEndTimeInput = htmlspecialchars($obj['eventEndTimeInput']);
     $eventWebsite = htmlspecialchars($obj['eventWebsite']);
     $PicName = htmlspecialchars($obj['PicName']);
     $picLength = htmlspecialchars($obj['picLength']);
     $userId = htmlspecialchars($obj['userId']);
     

    
    $result = $con->query("insert into events(name, description, c_id, location, longitude, latitude, fees, ticket, date, start_time, end_time, website,image_name,image_length,u_id) values ('$eventName','$eventDesc','$categoryValue','$eventLocation','$eventLongitude','$eventLatitude','$eventFees','$eventTicket','$eventDateInput','$eventStartTimeInput','$eventEndTimeInput','$eventWebsite','$PicName','$picLength','$userId')");

   //  $result = $con->query("insert into events(name) values ('enven')");

 

    if($result){
				echo json_encode("Success");
			}
			else{
			   echo json_encode(mysqli_error($con)); // our query fail 		

                echo "assad";
			}

?>







