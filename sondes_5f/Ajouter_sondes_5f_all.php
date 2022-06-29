<?php
include('../connexion.php');
    $id=$_GET['id'];

    $sql="UPDATE sondes_5f set S5F_Quantite = S5F_Quantite+1";

    //pour l'execution
    $query=mysqli_query($con,$sql);
    if(isset($query)){
        header("location:../aff.php");
    }
?>