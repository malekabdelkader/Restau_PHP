<?php
 include "cnx_basedonne.php";

 $cle=$_SESSION['cle'];
 $req ='select * from boisson where cle='.$cle ;
 
 
 $res = $conn->query($req);
 
 $rep = $res->fetchAll(PDO:: FETCH_OBJ );
 foreach ($rep as $i) :
 echo '<td>'.$i->qte.'*'.$i->nom.'</td>';
 endforeach;
 ?>