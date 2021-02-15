<!DOCTYPE html>
<html>
    <head>
        <link rel="icon"  href="images/chef.png" type="image/png" sizes="16x16">
        <title>Croustishop - Restaurant</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <link href="https://fonts.googleapis.com/css2?family=Kenia&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Martel:wght@700&display=swap" rel="stylesheet">
    </head>
    <body onload="Getmenu()">

        <!-- balise pour le haut de page -->
        <header>

            <div class="title-box">
                <!-- titre pour ma page -->
                <h1>HAMMOUDA</h1>
                <!-- slogan pour ma page -->
                <p>Des petits plats tout en douceur</p>
                <a  href="index.html">voir Menu</a>
                <a  href="chef.php">Commandes</a>
                <a  href="messages.php">Messages </a>
            </div>

            <!-- slider dimages -->
            <div class="slider">
                <div class="slides">
                    <div class="slide"><img src="images/1.jpg"></div>
                    <div class="slide"><img src="images/2.jpg"></div>
                    <div class="slide"><img src="images/3.jpg"></div>
                    <div class="slide"><img src="images/4.jpg"></div>
                </div>
            </div>

        </header>


        <main id="main" >
            <img class="offre_img" src="images/offre.png">
        <div class="formdiv" id="commande">
            <div class="divform">
               <form class="myform"  id="Form_Client" action="insert.php" method="POST">
                <label > Nom & Prénom*</label>
                <input type="text" id="nom" name="a" required placeholder="Nom & Prenom"><br><br>
                
                <label >Télephone *</label>
                <input type="tel" id="phone" name="b" required placeholder="+216 -- --- ---"><br><br>

                <label >Télephone 2</label>
                <input type="tel" id="phone2" name="c" required placeholder="+216 -- --- ---"><br><br>

                <label >adresse *</label>
                <input type="text" id="adresse" name="d" required placeholder="Exemple :avenue mongi slim 701"><br><br>
                
                  <!--Cet spam est un deuxiem verification des element -->
                <span id="message" style="color: crimson;"></span>
                
                <label >Region *</label>
                <select id="Region" name="f"  required >
                  <option value="Tunis">Tunis</option>
                  <option value="Ariana">Ariana</option>
                  <option value="Gabes">Gabes</option>
                  <option value="Sfax">Sfax</option>
                </select>
                <br><br>
                <?php include "element/vide.php";  ?>
                
              </form>

            </div>
            <div class="divcommande">
                <img src="images/chef.png" class="chefimage" >
                <h1>Votre Commande :</h1>
                <table >
                    <thead>
                    </thead>
                    <tr>
                        <td class="table_td">Pizza :</td>
                        <?php include "element/pizza.php";  ?>
                    </tr>
                    <tr>
                        <td class="table_td">Salade :</td>
                        <?php include "element/salade.php";  ?>
                    </tr>
                    <tr>
                        <td class="table_td">Burger :</td>
                        <?php include "element/burger.php";  ?>
                    </tr>
                    <tr>
                        <td class="table_td">Jus :</td>
                        <?php include "element/jus.php";  ?>
                    </tr>
                    <tr>
                        <td class="table_td">Boisson :</td>
                        <?php include "element/boisson.php";  ?>
                    </tr>
                    <tr>
                        <td class="table_td">Café :</td>
                        <?php include "element/cafe.php";  ?>
                    </tr>
                 </table>
                 
            </div>
        </div>
        <div class="apropos" id="apropos" >
           <div class="socialmedia">
               <ul class="mediatitle">
                   Social Media : HAMMOUDA Officiel
               </ul>
               <ul>
               <a href="https://www.facebook.com"><img src="images/facebook.png"></a>
               <a href="https://www.instagram.com"><img src="images/instagram.png"></a>
               <a href="https://www.twitter.com"><img src="images/twitter.png"></a>
              </ul>
              <ul class="phone">
                <img  src="images/help.png"> +216 28 437 349 <img src="images/phone.png">
              </ul>  
              
           </div>
           <div class="avis">
           <img src="images/email.png">
           <form class="myform"  id="messagerie" action="insertmessage.php" method="POST">
            <label > Email </label>
            <input type="email" id="email" name="email" required placeholder="Exemple@tek-up.tn"><br><br>

            <label> Exprimez vous</label>
            <textarea rows="12" cols="50" id="text" name="text" required placeholder="Exprimer vous ici "></textarea>
            <button type="submit" id="button">Envoyer</button>
          </form>
           </div>
        </div>

        <!-- pied de page -->
        <footer id="footer">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12770.17716314101!2d10.25049082495238!3d36.85338864893421!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12e2caa8ffcdd42b%3A0x370637670504b1a5!2sEl%20Aouina%2C%20Tunis!5e0!3m2!1sfr!2stn!4v1591046946745!5m2!1sfr!2stn" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

            <p style="color: black;">&copy; 2020 - Tic-B | Tout droits réservés</p>
        </footer>

        <!-- charge le script javascript -->
        <script src="js/Main.js"></script>

    </body>
</html>'

