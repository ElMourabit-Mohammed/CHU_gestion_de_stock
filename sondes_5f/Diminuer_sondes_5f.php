<?php
    require 'connexion.php';
    

    $id=$_GET['id'];

    $sql="UPDATE sondes_5f set S5F_Quantite = S5F_Quantite-1 where id='$id'";

    //pour l'execution
    $query=mysqli_query($con,$sql);
    if(isset($query)){
        header("location:../aff.php");
    }
?>