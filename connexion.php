<?php
    $con=mysqli_connect("localhost","root","","chu");
    if( !$con){
   echo "Desolé, connexion à localhost impossible"; 
   exit; 
  }
 if( !mysqli_select_db($con,'chu')) 
 { 
  echo "Désolé, accès à la BD est impossible";  
  exit;
 }
?>