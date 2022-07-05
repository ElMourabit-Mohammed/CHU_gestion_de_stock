<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/style1.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/fontawesome-all.css">
    <script src="https://kit.fontawesome.com/9c0bf29922.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./CSS/Style_login.css">
    <!-- TITLE -->
    <title>LOGIN</title>
</head>

<body>
<!-- ============================================================== -->
<!-- login page  -->
<!-- ============================================================== -->
<div class="container">
  <img src="./Images/Doctors-bro.svg"/>
    <form  id="connecter" class="inputs"  method="POST">
        <h2>
          Bienvenue
        </h2>
        <div class="form-username">
            <input id="username" type="text" placeholder="Nom d'utilisateur" name="email" autocomplete="off" class="form-control" /> 
        </div>

        <div class="form-password">
            <input id="password" type="password" placeholder="Mot de passe" name="mot_de_passe" class="form-control" />
        </div>

        <button class="form-submit" type="submit" name="submit">Connexion</button>
    
    </form>
    
</div>

  <?php
    include ('connexion.php');
    if (isset($_POST['submit']))
    {
      $Email=trim($_POST['email']);
      $Pass=trim($_POST['mot_de_passe']);
      $requete2="select email, password from login";
      $resultat2 = mysqli_query($con ,$requete2);
      $cpt2=0;
      while($ligne2 = mysqli_fetch_object($resultat2))
      {
        if(($ligne2->email==$Email)&&($ligne2->password==$Pass))
        {
          $cpt2++;
        }
      }
      if($cpt2==0)
      {
        echo '<p class="R">Votre nom ou mot de passe est incorrect !</p>';
      }
      if($cpt2!=0)
      {
        session_start();
        $_SESSION['monlogin'] =$Email;
        header('location: ./aff.php');
      }
    }
    mysqli_close($con);
?> 
</div>
</div>
</div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
 

     <?php
     ob_end_flush();
   ?>
</body>
 
</html>