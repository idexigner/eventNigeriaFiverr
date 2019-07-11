<?php
// error_reporting(0);
//$protocol = $_SERVER['HTTPS'] == 'on' ? 'https' : 'http';
$protocol = 'http';
$url= $protocol.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

if (strpos($url, "localhost")) { 
    //Define your host here.
    $HostName = "localhost";
    
    //Define your database name here.
    $DatabaseName = "eventnigeria";
    
    //Define your database username here.
    $HostUser = "root";
    
    //Define your database password here.
    $HostPass = "";

}
else {
   

    $HostName = "localhost";
 
    // //Define your database name here.
     $DatabaseName = "eventnigeria";
     
    // //Define your database username here.
     $HostUser = "eventnigeria";
     
    // //Define your database password here.
     $HostPass = "Domain786!";

     
}




 $con = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);
 

 
?>

