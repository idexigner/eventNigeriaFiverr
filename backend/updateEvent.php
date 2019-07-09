<?php 

include 'DBConfig.php';

//    $conn = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);

	$json = file_get_contents('php://input');
 
	 // decoding the received JSON and store into $obj variable.
	 $obj = json_decode($json,true);

     $eventId = $obj['eventId'];
     $eventName = $obj['eventName'];
     $eventDescription = $obj['eventDescription'];
     $categoryValue = $obj['categoryValue'];
     $eventLocation = $obj['eventLocation'];
     $eventMap = $obj['eventMap'];
     $eventFees = $obj['eventFees'];
     $eventDateInput = $obj['eventDateInput'];
     $eventStartTimeInput = $obj['eventStartTimeInput'];
     $eventEndTimeInput = $obj['eventEndTimeInput'];
     $eventWebsite = $obj['eventWebsite'];
     $PicName = $obj['PicName'];
     $PicLength = $obj['PicLength'];
    $btnAddToCalender = $obj['btnAddToCalender'];
    //  $s_id = $obj['s_id'];
    //  $categoryName = $obj['categoryName'];
     



    $result= $con->query("update event set name='$eventName',  description='$eventDescription', c_id='$categoryValue', location='$eventLocation', map_link='$eventMap', fees='$eventFees', date='$eventDateInput', start_time='$eventStartTimeInput', end_time='$eventEndTimeInput', website='$eventWebsite', image_name='$PicName', image_length='$PicLength',addToCalender='$btnAddToCalender'  where e_id='$eventId'");
	
    if($result){
				echo json_encode("Success");
			}
			else{
			   echo json_encode(mysqli_error($con)); // our query fail 		

                echo "Failed";
			}



?>


