<?php
 include "cnx_basedonne.php";
/*try{
    $cle=$_SESSION['cle'];
}catch (Exception $e) {
$cle=0;
echo '<td>Aucune commande</td>';
}*/

$cle=$_SESSION['cle'];
 $req ='select * from pizza where cle='.$cle ;
 
 
 $res = $conn->query($req);
 
 $rep = $res->fetchAll(PDO:: FETCH_OBJ );
 foreach ($rep as $i) :
 echo '<td>'.$i->qte.'*'.$i->nom.'</td>';
 endforeach;

 ?>