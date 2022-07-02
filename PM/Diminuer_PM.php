<?php
include('../connexion.php');    

    $id=$_GET['id'];

    $sql="UPDATE pm set PM_Quantite = PM_Quantite-1 where id='$id' and PM_Quantite>=0";

    //pour l'execution
    $query=mysqli_query($con,$sql);
    if(isset($query)){
        header("location:../aff.php");
    }
?>