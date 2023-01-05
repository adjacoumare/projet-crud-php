<?php
$username="root";
$password="";
$dbname="crudphp";
$servername="localhost";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn) {

    // echo "Connexion établie avec succès!";

}

else {

    die (mysqli_connect_error());
}

?>