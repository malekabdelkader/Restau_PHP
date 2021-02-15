<?php
session_start();
include "cnx_basedonne.php";

$email = $_POST["email"];
$text = $_POST["text"];

try {
    $req= "insert into messagerie values (null,'".$email."','".$text."')";

    $conn->exec($req);
    
    $_SESSION["nom_prenom"]= $name_prenom;

    header("Location:commande.php");

} catch (PDOException $th) {
    echo "Probleme";
}?>