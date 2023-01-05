<?php

    include "connexion.php";

    if(isset ($_POST["id"]))
    {

        $id=$_POST["id"];

        $req=mysqli_query($conn, " DELETE FROM user WHERE id='$id' ");

        if($req) 
        {
            header("location:liste.php");

        }

        else
        {
            echo "Erreur de suppression";
        }

    }

    else
    {
       echo "champs manquant";
        
    }

?>