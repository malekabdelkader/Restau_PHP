<?php
/*
session_start();
echo "Bienvenue Mr/Mme ".$_SESSION["nom_prenom"]."<br>";
session_destroy();

*/


include "cnx_basedonne.php";

$req ="select * from client";


$res = $conn->query($req);

$rep = $res->fetchAll(PDO:: FETCH_OBJ );
foreach ($rep as $i) :

    
    echo '<tr>
    <td> 

    <ul>
        <listyle="list-style-type: none;font-family: Arial, Helvetica, sans-serif;color: black;
        font-size: 20px;">
            id : '.$i->id.'

        </li>
        <li style="list-style-type: none;font-family: Arial, Helvetica, sans-serif;color: black;
        font-size: 20px;color:red;font-weight: bold;">
            Nom: '.$i->nom_prenom.'

        </li>
        <li style="list-style-type: none;font-family: Arial, Helvetica, sans-serif;color: black;
        font-size: 20px;font-weight: bold;">
            Télephone1: '.$i->telephone.'

        </li>
        <listyle="list-style-type: none;font-family: Arial, Helvetica, sans-serif;color: black;
        font-size: 20px;">
            Télephone 2 : '.$i->telephone2.'

        </li>
         
    </ul>    
    </td>


    <td>
    <ul>
        <li>pizza :</li>
        <li>burger:</li>
        <li>jus :</li>
       <li>Boisson :</li>
        <li>salade :</li>
        <li>café :</li>
    </ul>    
    </td>
    <td>
        <a href="delete.php?cle='.$i->cle.'"><button class="button1"  type="button">Délivrer<button></a>
    </td>

</tr>';









endforeach;




?>