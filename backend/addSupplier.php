<?php 

include 'DBConfig.php';


	$json = file_get_contents('php://input');
 
	 // decoding the received JSON and store into $obj variable.
	 $obj = json_decode($json,true);

     $supplierName = htmlspecialchars($obj['supplierName']);

    //  $academicStr = strip_tags(mysqli_real_escape_string($con,trim($obj['academicStr'])));
    //  $professionalStr = strip_tags(mysqli_real_escape_string($con,trim($obj['professionalStr'])));
    
    
    $result = $con->query("insert into supplier(supplier_name) values ('$supplierName')");

    if($result){
				echo json_encode("Success");
			}
			else{
			   echo json_encode(mysqli_error($con)); // our query fail 		

                echo "assad";
			}

?>







