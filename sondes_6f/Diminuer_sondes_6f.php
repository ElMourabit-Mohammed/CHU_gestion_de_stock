<?php
     include('connexion.php');
    

    $id=$_GET['id'];

    $sql="UPDATE sondes_6f set S6F_Quantite = S6F_Quantite-1 where id='$id'";

    //pour l'execution
    $query=mysqli_query($con,$sql);
    if(isset($query)){
        header("location:../aff.php");
    }
?>