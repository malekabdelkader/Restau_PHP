<?php

 include "cnx_basedonne.php";

 $cle=$_GET["id"];
 $req ='select * from salade where cle='.$cle ;
 
 
 $res = $conn->query($req);
 
 $rep = $res->fetchAll(PDO:: FETCH_OBJ );
 foreach ($rep as $i) :
 echo ''.$i->qte.'*'.$i->nom.' ';
 endforeach;
 ?>