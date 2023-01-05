<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Liens Bootstrap -->
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <script src="./bootstrap/js/bootstrap.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="./bootstrap/js/bootstrap.bundle.js"></script>
    <title>Liste utilisateurs</title>

    <style>

        body{
            width: 50% auto;
            font-family: Arial;
            margin: auto;
            padding: 30px;

        }

        h2{
            text-align: center;
            font-weight: bold;
            margin-bottom: 20px;
        }

        thead{
            background-color: #1577FA;
            color: white;
        }

        table{
            text-align: center;
        }

        input[type="submit"]{
            color:white; 
            width: 8em;
        }


    </style>

</head>
<body>
    <h2>LISTE DES UTILISATEURS</h2>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Identifiant</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Téléphone</th>
                <th>Email</th>
                <th>Sexe</th>
                <th>Action</th>
            </tr>
        </thead>

        <?php
            
            include "connexion.php";
            
            $req=mysqli_query($conn, " SELECT * FROM user ");

            while($res=mysqli_fetch_array($req) )

            { 

        ?>
        <tbody>
        <tr>
            <td> <?php echo $res["id"] ; ?> </td>
            <td> <?php echo $res["nom"] ;  ?> </td>
            <td> <?php echo $res["prenom"] ; ?> </td>
            <td> <?php echo $res["tel"] ; ?> </td>
            <td> <?php echo $res["mail"] ; ?> </td>
            <td> <?php echo $res["sexe"] ; ?> </td>

            <td>
                <form action="detail.php" method="POST">
                    <input type="hidden" name="id"  value = " <?php echo $res["id"] ; ?> ">
                    <input class="btn btn-info" type="submit" value = "Detail">
                </form>

                <form action="delete.php" method="POST">
                    <input type="hidden" name="id"  value = " <?php echo $res["id"] ; ?> ">
                    <input class="btn btn-danger" type="submit" value = "Supprimer">
                </form>
            </td>
        </tr>
        </tbody>
        <?php

            }

        ?>

        <!-- <tfoot>
            <tr>
                <td colspan="7">

                     Liste des utilisateurs inscrits

                </td>
            </tr>
        </tfoot> -->
    </table>
</body>
</html>