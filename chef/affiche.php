<style>
.houcine:hover{
    transform: scale(1.2);
    transition: 0.3s all; 

}
.houcine{
    margin-left:35%;
}
</style>
<?php
/*
session_start();
echo "Bienvenue Mr/Mme ".$_SESSION["nom_prenom"]."<br>";
session_destroy();

*/


include "cnx_basedonne.php";


$req ="select * from messagerie";


$res = $conn->query($req);

$rep = $res->fetchAll(PDO:: FETCH_OBJ );
foreach ($rep as $i) :

    
    echo '<tr>
    <td> 
    <ul>
        <li style="list-style-type: none;font-family: Arial, Helvetica, sans-serif;color: black;
        font-size: 20px;color:red">
             '.$i->email.'
        </li>    
    </ul>    
    </td>


    <td>
    <ul>
    <li style="list-style-type: none;font-family: Arial, Helvetica, sans-serif;color: black;
    font-size: 20px;">
    '.$i->text.'

    </li>
    </ul>    
    </td>
    <td>
    <a href="deletemessage.php?id='.$i->id.'"><button class="button1"  type="button">Supprimer<button></a>
    </td>';


endforeach;


?>
</html>