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
    <title>Inscription</title>

    <style>

        label{
            width: 20%;
            display: inline-block;
            text-align: left;
            font-weight: bold;
        }

        body{
            width: 50%;
            font-family: Arial;
            margin: 5px auto;
            padding: 20px;
        }

        fieldset{
            border-radius: 10px;
            background-color: rgb(229, 231, 241);
        }

        legend{
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
            text-align: center;
        }

        input[type="text"], input[type="number"], input[type="email"] {
            border-radius: 5px;
            padding: 10px;
            width: 60%;
            background-color: #fff;
            margin: 15px;
        }

        input[type="submit"] {
            position: relative;
            padding: 10px;
            font-size: 17px;
            font-weight: bold;
            border: 1px solid black;
            border-radius: 5px;
            background-color: #1577FA;
            color: white;
            margin-top: 10px;
            width: 100%;
        }

        ul{
            list-style: none;
            padding: 10px;
            overflow: hidden;
            margin: 10px;
            background-color: rgb(33, 32, 32);
        }

        li{
            display: inline;
            padding: 15px;
            margin: 10px;
        }

        li a {
            padding: 20px;
            margin: 20px;
            text-decoration: none;
            color: white;
        }

    </style>

</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>

    <?php 

    include "connexion.php";

    if( isset ($_POST["id"]))
    {
        $id=$_POST["id"];

        $req=mysqli_query($conn, " SELECT * FROM user WHERE id='$id' ");

        $res=mysqli_fetch_array($req);
    }

    else 
    {
        echo "Champs manquant";
    }

    ?>

    <form action="modifier.php" method="POST">
        <fieldset>
            <legend>DETAIL</legend>
            <input type="hidden" name="id" value=" <?php echo $res["id"] ; ?> ">
            <label for="">Nom</label><input type="text" name="nom" value=" <?php echo $res["nom"] ; ?> " placeholder="Votre nom ici"><br>
            <label for="">Prénom</label><input type="text" name="prenom" value=" <?php echo $res["prenom"] ; ?> "  placeholder="Votre prenom ici"><br>
            <label for="">Téléphone</label><input type="number" name="phone" value=" <?php echo $res["tel"] ; ?> "  placeholder="Votre numero de telephone ici"><br>
            <label for="">Email</label><input type="email" name="mail" value=" <?php echo $res["mail"] ; ?> "  placeholder="Votre email ici"><br>
            <label for="">Sexe</label>
            <?php
            if($res["sexe"]=="Homme")

             { 

            ?>

            <input type="radio" name="gender" value="Homme" checked="true">Homme 
            <input type="radio" name="gender" value="Femme">Femme<br>

            <?php

             }

             else

             {
            ?>

                <input type="radio" name="gender" value="Homme">Homme 
                <input type="radio" name="gender" value="Femme" checked="true">Femme<br>

            <?php

             }

            ?>

            <input type="submit" value="Modifier">
        </fieldset>
    </form>
</body>
</html>