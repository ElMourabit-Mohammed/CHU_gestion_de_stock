<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page des produits et contrôle de stock</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="top_content">
        <h1>Page des produits et contrôle de stock</h1>
        <a href="alert.php">Produits de moins de 20</a>
        <hr>
    </div>
    <!-- sondes_5f TABLE -->
    <!--hello-->
    <!--Othmane Aghbal-->
    <h1 class="type">Sondes 5F</h1>
    <table class="content-table">
        <thead>
            <tr>
                <th>S5F_TYPES</th>
                <th>S5F_Quantite</th>
                <th> <a href='./sondes_5f/Diminuer_sondes_5f_all.php?id=".$id."'>Diminuer De Produit</a> </th>
                <!-- <th>Diminuer De Produit</th> -->
                <th> <a href='./sondes_5f/Ajouter_sondes_5f_all.php?id=".$id."'>Ajouter De Produit</a> </th>
                <!-- <th>Ajouter De Produit</th> -->
            </tr>
        </thead>
        <?php
            require 'connexion.php';
            $requete_sondes_5f="SELECT * from sondes_5f";
            $query_sondes_5f=mysqli_query($con,$requete_sondes_5f);

            while($rows=mysqli_fetch_assoc($query_sondes_5f)){
                //for delete
                    $id=$rows['id'];
                //**** */
                echo "<tr>";
                    echo "<td>".$rows['S5F_TYPES']."</td>";
                    echo "<td>".$rows['S5F_Quantite']."</td>";
                    echo "<td><a href='./sondes_5f/Diminuer_sondes_5f.php?id=".$id."'>Supprimer</a></td>";
                    echo "<td><a href='./sondes_5f/Ajouter_sondes_5f.php?id=".$id."'>Ajouter</a></td>";
                echo "</tr>";
            }
        ?>
    </table>


    <br>
    <br>

    <!-- sondes_6f TABLE -->
    <h1 class="type">Sondes 6F</h1>
    <table class="content-table">
        <thead>
            <tr>
                <th>S6F_TYPES</th>
                <th>S6F_Quantite</th>
                <th> <a href='./sondes_6f/Diminuer_sondes_6f_all.php?id=".$id."'>Diminuer De Produit</a> </th>
                <!-- <th>Diminuer De Produit</th> -->
                <th> <a href='./sondes_6f/Ajouter_sondes_6f_all.php?id=".$id."'>Ajouter De Produit</a> </th>
                <!-- <th>Ajouter De Produit</th> -->
            </tr>
        </thead>
        <?php
            require 'connexion.php';
            $requete_sondes_6f="SELECT * from sondes_6f";
            $query_sondes_6f=mysqli_query($con,$requete_sondes_6f);

            while($rows=mysqli_fetch_assoc($query_sondes_6f)){
                //for delete
                    $id=$rows['id'];
                //**** */
                echo "<tr>";
                    echo "<td>".$rows['S6F_TYPES']."</td>";
                    echo "<td>".$rows['S6F_Quantite']."</td>";
                    echo "<td><a href='./sondes_6f/Diminuer_sondes_6f.php?id=".$id."'>Supprimer</a></td>";
                    echo "<td><a href='./sondes_6f/Ajouter_sondes_6f.php?id=".$id."'>Ajouter</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
    
    <br>
    <br>

    <!-- Introducteurs TABLE -->
    <h1 class="type">Introducteurs</h1>
    <table class="content-table">
        <thead>
            <tr>
                <th>Introducteurs_TYPES</th>
                <th>Introducteurs_Quantite</th>
                <th> <a href='./Introducteurs/Diminuer_Introducteurs_all.php?id=".$id."'>Diminuer De Produit</a> </th>
                <!-- <th>Diminuer De Produit</th> -->
                <th> <a href='./Introducteurs/Ajouter_Introducteurs_all.php?id=".$id."'>Ajouter De Produit</a> </th>
                <!-- <th>Ajouter De Produit</th> -->
            </tr>
        </thead>
        <?php
            require 'connexion.php';
            $requete_introducteurs="SELECT * from introducteurs";
            $query_introducteurs=mysqli_query($con,$requete_introducteurs);

            while($rows=mysqli_fetch_assoc($query_introducteurs)){
                //for delete
                    $id=$rows['id'];
                //**** */
                echo "<tr>";
                    echo "<td>".$rows['Introducteurs_TYPES']."</td>";
                    echo "<td>".$rows['Introducteurs_Quantite']."</td>";
                    echo "<td><a href='./Introducteurs/Diminuer_introducteurs.php?id=".$id."'>Supprimer</a></td>";
                    echo "<td><a href='./Introducteurs/Ajouter_introducteurs.php?id=".$id."'>Ajouter</a></td>";
                echo "</tr>";
            }
        ?>
    </table>

    <br>
    <br>

    <!-- GUIDES TABLE -->
    <h1 class="type">GUIDES</h1>
    <table class="content-table">
        <thead>
            <tr>
                <th>GUIDES</th>
                <th>GUIDES_TYPES</th>
                <th>GUIDES_Quantite</th>
                <th> <a href='./GUIDES/Diminuer_GUIDES_all.php?id=".$id."'>Diminuer De Produit</a> </th>
                <!-- <th>Diminuer De Produit</th> -->
                <th> <a href='./GUIDES/Ajouter_GUIDES_all.php?id=".$id."'>Ajouter De Produit</a> </th>
                <!-- <th>Ajouter De Produit</th> -->
            </tr>
        </thead>
        <?php
            require 'connexion.php';
            $requete_guides="SELECT * from guides";
            $query_guides=mysqli_query($con,$requete_guides);

            while($rows=mysqli_fetch_assoc($query_guides)){
                //for delete
                    $id=$rows['id'];
                //**** */
                echo "<tr>";
                    echo "<td>".$rows['GUIDES']."</td>";
                    echo "<td>".$rows['GUIDES_TYPES']."</td>";
                    echo "<td>".$rows['GUIDES_Quantite']."</td>";
                    echo "<td><a href='./GUIDES/Diminuer_GUIDES.php?id=".$id."'>Supprimer</a></td>";
                    echo "<td><a href='./GUIDES/Ajouter_GUIDES.php?id=".$id."'>Ajouter</a></td>";
                echo "</tr>";
            }
        ?>
    </table>

    <br>
    <br>

    <!-- PM TABLE -->
    <h1 class="type">PM</h1>
    <table class="content-table">
        <thead>
            <tr>
                <th>PM_TYPES</th>
                <th>PM_Quantite</th>
                <th> <a href='./PM/Diminuer_PM_all.php?id=".$id."'>Diminuer De Produit</a> </th>
                <!-- <th>Diminuer De Produit</th> -->
                <th> <a href='./PM/Ajouter_PM_all.php?id=".$id."'>Ajouter De Produit</a> </th>
                <!-- <th>Ajouter De Produit</th> -->
            </tr>
        </thead>
        <?php
            require 'connexion.php';
            $requete_pm="SELECT * from pm";
            $query_pm=mysqli_query($con,$requete_pm);

            while($rows=mysqli_fetch_assoc($query_pm)){
                //for delete
                    $id=$rows['id'];
                //**** */
                echo "<tr>";
                    echo "<td>".$rows['PM_TYPES']."</td>";
                    echo "<td>".$rows['PM_Quantite']."</td>";
                    echo "<td><a href='./PM/Diminuer_PM.php?id=".$id."'>Supprimer</a></td>";
                    echo "<td><a href='./PM/Ajouter_PM.php?id=".$id."'>Ajouter</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
    
    <br>
    <br>
    <!-- AUTRE_TYPES TABLE -->
    <h1 class="type">AUTRE TYPES</h1>
    <table class="content-table">
        <thead>
            <tr>
                <th>AUTRE_TYPES</th>
                <th>AUTRE_TYPES_Quantite</th>
                <th> <a href='./AUTRE_TYPES/Diminuer_AUTRE_TYPES_all.php?id=".$id."'>Diminuer De Produit</a> </th>
                <!-- <th>Diminuer De Produit</th> -->
                <th> <a href='./AUTRE_TYPES/Ajouter_AUTRE_TYPES_all.php?id=".$id."'>Ajouter De Produit</a> </th>
                <!-- <th>Ajouter De Produit</th> -->
            </tr>
        </thead>
        <?php
            require 'connexion.php';
            $requete_autre_materiels="SELECT * from autre_materiels";
            $query_autre_materiels=mysqli_query($con,$requete_autre_materiels);

            while($rows=mysqli_fetch_assoc($query_autre_materiels)){
                //for delete
                    $id=$rows['id'];
                //**** */
                echo "<tr>";
                    echo "<td>".$rows['AUTRE_TYPES']."</td>";
                    echo "<td>".$rows['AUTRE_TYPES_Quantite']."</td>";
                    echo "<td><a href='./AUTRE_TYPES/Diminuer_AUTRE_TYPES.php?id=".$id."'>Supprimer</a></td>";
                    echo "<td><a href='./AUTRE_TYPES/Ajouter_AUTRE_TYPES.php?id=".$id."'>Ajouter</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
    
</body>
</html>