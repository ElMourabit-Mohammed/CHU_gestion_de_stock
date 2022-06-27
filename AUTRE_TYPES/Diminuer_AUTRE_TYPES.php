<?php
    require 'connexion.php';
    

    $id=$_GET['id'];

    $sql="UPDATE autre_materiels set AUTRE_TYPES_Quantite = AUTRE_TYPES_Quantite-1 where id='$id'";

    //pour l'execution
    $query=mysqli_query($con,$sql);
    if(isset($query)){
        header("location:../aff.php");
    }
?>