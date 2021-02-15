<?php 

include "cnx_basedonne.php";

$id = $_GET["id"];
$req ="delete  from messagerie where id=".$id;
$conn->exec($req);

header("location:messages.php");

?>