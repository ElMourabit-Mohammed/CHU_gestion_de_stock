<?php
include('../connexion.php');    

    $id=$_GET['id'];

    $sql="UPDATE guides set GUIDES_Quantite = GUIDES_Quantite-1 where id='$id'";

    //pour l'execution
    $query=mysqli_query($con,$sql);
    if(isset($query)){
        header("location:../aff.php");
    }
?>