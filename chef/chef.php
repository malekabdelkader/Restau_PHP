<!DOCTYPE html>
<html>
    <head>
        <title>HAMMOUDA - Restaurant</title>
        <link rel="icon"  href="images/chef.png" type="image/png" sizes="16x16">
        <meta charset="utf-8">
        <meta http-equiv="refresh" content="5">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <link href="https://fonts.googleapis.com/css2?family=Kenia&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Martel:wght@700&display=swap" rel="stylesheet">
    </head>
    <body>
        <form id="Form" onsubmit=" validateForm();return false">
        <!-- balise pour le haut de page -->
        <header>

            <div class="title-box">
                <!-- titre pour ma page -->
                <h1>HAMMOUDA</h1>
                <!-- slogan pour ma page -->
                <p>Des petits plats tout en douceur</p>
                <a  href="index.html">voir Menu</a>
                <a href="commande.php">Commander</a><a href="messages.php">Consulter Messages</a>
            </div>

            <!-- slider d'images -->
            <div class="slider">
                <div class="slides">
                    <div class="slide"><img src="images/1.jpg"></div>
                    <div class="slide"><img src="images/2.jpg"></div>
                    <div class="slide"><img src="images/3.jpg"></div>
                    <div class="slide"><img src="images/4.jpg"></div>
                </div>
            </div>

        </header>


        



       
       <main id="main1">
           <div class="com1">
        <table style="background: url(images/chef-img.jpg);">
            <thead>
                <tr>
                    <th colspan="3">Table des commandes</th>
                </tr>
            </thead>
            <tbody>
                
               <?php include "affichage.php"; ?>
               
            </tbody>
            
        </table>
        <footer id="footer">


            <p style="color: black;"> &copy; 2020 - Tic-B | Tout droits réservés</p>
        </footer>
    </div>

        </main>

        <!-- pied de page -->
        

        <!-- charge le script javascript -->
        <script src="js/Main.js"></script>
    </form>
    
    </body>
</html>
