<?php
    require 'connexion.php';
    

    $id=$_GET['id'];

    $sql="UPDATE guides set GUIDES_Quantite = GUIDES_Quantite-1";

    //pour l'execution
    $query=mysqli_query($con,$sql);
    if(isset($query)){
        header("location:../aff.php");
    }
?>