<?php
    $con=mysqli_connect("localhost","root","","chu");
    if( !$con){
   echo "Desolé, connexion à localhost impossible"; 
   exit; 
  }
 if( !mysqli_select_db($con,'CHU_gestion_de_stock')) 
 { 
  echo "Désolé, accès à la BD est impossible";  
  exit;
 }
?>