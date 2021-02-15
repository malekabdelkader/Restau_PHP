<?php
session_start();
include "cnx_basedonne.php";
$id=$_SESSION['cle'];
$name_prenom = $_POST["a"];
$tel1 = $_POST["b"];
$tel2 = $_POST["c"];
$adr = $_POST["d"];
$reg = $_POST["f"];

try {
    
    $req= "insert into client values (null,'".$name_prenom."','".$tel1."','".$tel2."','".$adr."','".$reg."','".$id."')";
    $conn->exec($req);
    
    $_SESSION["nom_prenom"]= $name_prenom;
   
    
    $_SESSION['cle']=0;
    header("Location:chef.php");

} catch (PDOException $th) {
    echo "Probleme";
}
?>