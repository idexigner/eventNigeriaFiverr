<?php
//echo "Reacehed here";
    if(isset($_POST['submit'])){

    $picName=$_POST['picName']; 
    
    $countfiles = count($_FILES['file']['name']);
   
    // Looping all files
    for($i=0;$i<$countfiles;$i++){
    // $filename = $_FILES['file']['name'][$i];
     $filename = $picName."_".$i.".jpg";
     
     // Upload file
     move_uploaded_file($_FILES['file']['tmp_name'][$i],'../upload/'.$filename);
    
    }
   }

   header('Location: '. $_POST['redirect']);

  
?>