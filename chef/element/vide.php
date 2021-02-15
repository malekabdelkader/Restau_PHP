<?php
session_start();

$cle=$_SESSION['cle'];
if($cle==0){
    echo '<h3 style="color:red;margin-left:20%">Vous avez pas de commande !</h3>
         <h4 style="color:red;margin-left:23%">Pour commander <a href="index.html"> cliquer ici</a></h4>';
}else{
    echo '<button type="submit" id="button">Confirmer</button>';
}
?>