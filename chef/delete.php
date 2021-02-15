<?php 

include "cnx_basedonne.php";

$id = $_GET["cle"];



$req ="delete  from client where cle=".$id;
$conn->exec($req);
$req ="delete  from pizza where cle='".$id."'";
$conn->exec($req);
$req ="delete  from salade where cle='".$id."'";
$conn->exec($req);
$req ="delete  from burger where cle='".$id."'";
$conn->exec($req);
$req ="delete  from boisson where cle='".$id."'";
$conn->exec($req);
$req ="delete  from cafe where cle='".$id."'";
$conn->exec($req);
$req ="delete  from jus where cle='".$id."'";
$conn->exec($req);


header("location:chef.php");

?>