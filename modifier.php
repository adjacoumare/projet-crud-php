<?php

include "connexion.php";

if ( isset($_POST["id"])  && isset($_POST["nom"]) && isset ($_POST["prenom"]) && isset ($_POST["phone"]) && isset ($_POST["mail"]) && isset ($_POST["gender"]))
{
    $id=$_POST["id"];
    $nom= $_POST["nom"];
    $prenom= $_POST["prenom"];
    $tel= $_POST["phone"];
    $email= $_POST["mail"];
    $sexe= $_POST["gender"];

    $req=mysqli_query($conn, " UPDATE user SET nom='$nom',prenom='$prenom', tel='$tel',mail='$email',sexe='$sexe' WHERE id='$id' ");

    if($req)
    {
        header("location:liste.php");
    }

    else 
    {
        echo "Erreur de mise à jour";
    }
}

else

{

    echo "Champs manquant";

}



?>