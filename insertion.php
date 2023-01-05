<?php

include "connexion.php";

if (isset($_POST["nom"]) && isset ($_POST["prenom"]) && isset ($_POST["phone"]) && isset ($_POST["mail"]) && isset ($_POST["gender"]));

{
    $nom= $_POST["nom"];
    $prenom= $_POST["prenom"];
    $tel= $_POST["phone"];
    $email= $_POST["mail"];
    $sexe= $_POST["gender"];

    $req= mysqli_query($conn, "INSERT INTO user(nom, prenom, tel, mail, sexe) values ('$nom', '$prenom', '$tel', '$email', '$sexe')");

    if($req){

        echo "Insertion effectuée avec succès!";
    }

    else {

        echo "Erreur d'insertion";
    }

}

?>