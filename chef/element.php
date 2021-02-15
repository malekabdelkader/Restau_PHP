<?php
session_start();
include "cnx_basedonne.php";

unset($_SESSION['cle']);

$j1 = $_POST["j1"];
$j2 = $_POST["j2"];
$j3 = $_POST["j3"];

$p1 = $_POST["p1"];
$p2 = $_POST["p2"];
$p3 = $_POST["p3"];

$s1 = $_POST["s1"];
$s2 = $_POST["s2"];
$s3 = $_POST["s3"];

$b1 = $_POST["b1"];
$b2 = $_POST["b2"];
$b3 = $_POST["b3"];

$c1 = $_POST["c1"];
$c2 = $_POST["c2"];
$c3 = $_POST["c3"];



$m1 = $_POST["m1"];
$m2 = $_POST["m2"];
$m3 = $_POST["m3"];

$cle=random_int(1,99999);
$_SESSION["cle"]= 0;
try {

        if($j1!=0){
        $req= "insert into jus values (null,".$cle.",'Jus multifruits','".$j1."')";
        $conn->exec($req);
        $_SESSION["cle"]= $cle;
        
                }
        if($j2!=0){
        $req= "insert into jus values (null,".$cle.",'jus pasteque','".$j2."')";
        $conn->exec($req);
         $_SESSION["cle"]= $cle;
                }
        if($j3!=0){
        $req= "insert into jus values (null,".$cle.",'Citronnade','".$j3."')";
        $conn->exec($req);
        $_SESSION["cle"]= $cle;
                }



        if($s1!=0){
        $req= "insert into salade values (null,".$cle.",'Poulet betterave','".$s1."')";
        $conn->exec($req);
        $_SESSION["cle"]= $cle;
                }
        if($s2!=0){
        $req= "insert into salade values (null,".$cle.",'grec maison','".$s2."')";
        $conn->exec($req);
 $_SESSION["cle"]= $cle;
                }
        if($s3!=0){
        $req= "insert into salade values (null,".$cle.",'tomates mozarella','".$s3."')";
        $conn->exec($req);
 $_SESSION["cle"]= $cle;
                }

        if($b1!=0){
        $req= "insert into burger values (null,".$cle.",'Légendaire','".$b1."')";
        $conn->exec($req);
 $_SESSION["cle"]= $cle;
                }
        if($b2!=0){
        $req= "insert into burger values (null,".$cle.",'Villageois','".$b2."')";
        $conn->exec($req);
 $_SESSION["cle"]= $cle;
                }
        if($b3!=0){
        $req= "insert into burger values (null,".$cle.",'Basique','".$b3."')";
        $conn->exec($req);
 $_SESSION["cle"]= $cle;
                }
        
        if($p1!=0){
        $req= "insert into pizza values (null,".$cle.",'Caprapiquante','".$p1."')";
        $conn->exec($req);
 $_SESSION["cle"]= $cle;
                }
        if($p2!=0){
        $req= "insert into pizza values (null,".$cle.",'Villageois','".$p2."')";
        $conn->exec($req);
 $_SESSION["cle"]= $cle;
                }
        if($p3!=0){
        $req= "insert into pizza values (null,".$cle.",'Basique','".$p3."')";
        $conn->exec($req);
 $_SESSION["cle"]= $cle;
                }        
        
         if($c1!=0){
        $req= "insert into cafe values (null,".$cle.",'Direct','".$c1."')";
        $conn->exec($req);
 $_SESSION["cle"]= $cle;
                }
        if($c2!=0){
        $req= "insert into cafe values (null,".$cle.",'Capuccino','".$c2."')";
        $conn->exec($req);
 $_SESSION["cle"]= $cle;
                }
        if($c3!=0){
        $req= "insert into cafe values (null,".$cle.",'Express','".$c3."')";
        $conn->exec($req);
 $_SESSION["cle"]= $cle;
                }        
       
        if($m1!=0){
        $req= "insert into boisson values (null,".$cle.",'Milkshake','".$m1."')";
        $conn->exec($req);
 $_SESSION["cle"]= $cle;
                }
        if($m2!=0){
        $req= "insert into boisson values (null,".$cle.",'Mojito','".$m2."')";
        $conn->exec($req);
 $_SESSION["cle"]= $cle;
                }
        if($m3!=0){
        $req= "insert into boisson values (null,".$cle.",'Smoothies','".$m3."')";
        $conn->exec($req);
 $_SESSION["cle"]= $cle;
                }   

    $_SESSION["nom_prenom"]= $name_prenom;

    header("Location:commande.php#commande");

    
    
} catch (PDOException $th) {
    echo "Probleme";
}
?>