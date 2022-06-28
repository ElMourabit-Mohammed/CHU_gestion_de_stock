<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produits de moins de 20</title>
    <link rel="stylesheet" href="./stylealert.css">
</head>
<body>
    <h1>Produits de moins de 20</h1><hr>
    <!-- sondes_5f TABLE -->
    <h1 class="type">Sondes 5F</h1>
    <table class="content-table">
        <thead>
            <tr>
                <th>S5F_TYPES</th>
                <th>S5F_Quantite</th>
            </tr>
        </thead>
        <?php
            include('connexion.php');
            $requete_sondes_5f="SELECT * from sondes_5f where S5F_Quantite<20";
            $query_sondes_5f=mysqli_query($con,$requete_sondes_5f);

            while($rows=mysqli_fetch_assoc($query_sondes_5f)){
                //for delete
                    $id=$rows['id'];
                //**** */
                echo "<tr>";
                    echo "<td>".$rows['S5F_TYPES']."</td>";
                    echo "<td>".$rows['S5F_Quantite']."</td>";
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
            </tr>
        </thead>
        <?php
            require 'connexion.php';
            $requete_sondes_6f="SELECT * from sondes_6f where S6F_Quantite<20";
            $query_sondes_6f=mysqli_query($con,$requete_sondes_6f);

            while($rows=mysqli_fetch_assoc($query_sondes_6f)){
                //for delete
                    $id=$rows['S6F_TYPES'];
                //**** */
                echo "<tr>";
                    echo "<td>".$rows['S6F_TYPES']."</td>";
                    echo "<td>".$rows['S6F_Quantite']."</td>";
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
            </tr>
        </thead>
        <?php
            require 'connexion.php';
            $requete_introducteurs="SELECT * from introducteurs where Introducteurs_Quantite<20";
            $query_introducteurs=mysqli_query($con,$requete_introducteurs);

            while($rows=mysqli_fetch_assoc($query_introducteurs)){
                //for delete
                    $id=$rows['Introducteurs_TYPES'];
                //**** */
                echo "<tr>";
                    echo "<td>".$rows['Introducteurs_TYPES']."</td>";
                    echo "<td>".$rows['Introducteurs_Quantite']."</td>";
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
            </tr>
        </thead>
        <?php
            require 'connexion.php';
            $requete_guides="SELECT * from guides where GUIDES_Quantite<20";
            $query_guides=mysqli_query($con,$requete_guides);

            while($rows=mysqli_fetch_assoc($query_guides)){
                //for delete
                    $id=$rows['GUIDES'];
                //**** */
                echo "<tr>";
                    echo "<td>".$rows['GUIDES']."</td>";
                    echo "<td>".$rows['GUIDES_TYPES']."</td>";
                    echo "<td>".$rows['GUIDES_Quantite']."</td>";
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
            </tr>
        </thead>
        <?php
            require 'connexion.php';
            $requete_pm="SELECT * from pm where PM_Quantite<20";
            $query_pm=mysqli_query($con,$requete_pm);

            while($rows=mysqli_fetch_assoc($query_pm)){
                //for delete
                    $id=$rows['PM_TYPES'];
                //**** */
                echo "<tr>";
                    echo "<td>".$rows['PM_TYPES']."</td>";
                    echo "<td>".$rows['PM_Quantite']."</td>";
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
            </tr>
        </thead>
        <?php
            require 'connexion.php';
            $requete_autre_materiels="SELECT * from autre_materiels where AUTRE_TYPES_Quantite<20";
            $query_autre_materiels=mysqli_query($con,$requete_autre_materiels);

            while($rows=mysqli_fetch_assoc($query_autre_materiels)){
                //for delete
                    $id=$rows['AUTRE_TYPES'];
                //**** */
                echo "<tr>";
                    echo "<td>".$rows['AUTRE_TYPES']."</td>";
                    echo "<td>".$rows['AUTRE_TYPES_Quantite']."</td>";
                echo "</tr>";
            }
        ?>
    </table>
    
</body>
</html>