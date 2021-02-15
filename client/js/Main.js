
// detecter lorsqu'on scroll
window.onscroll = function() { sticky() };
// recuperer les elements
let header = document.getElementById('sticky-header');
let footer = document.getElementById('footer');
let stickycomponent = header.offsetTop;
let Hfooter=footer.offsetTop;

// faire la fonction
function sticky() {

    if ((window.pageYOffset > stickycomponent+150) && (window.pageYOffset < Hfooter-450)) {
        
        document.getElementById("ok").innerHTML="<li class="+"ok"+"><button type="+"submit"+"  >Terminer commande</button></li>";
        header.classList.add("sticky");
    }
    else{
        document.getElementById("ok").innerHTML="";
        header.classList.remove("sticky");
    }
}

 // recupere tous les champs (quantite) de la page 
 // j'ai choisi 3 example de pizza 
 // a suivre (on peut calculer montant etc ..)
function validateForm() {

    localStorage.clear();
        //Pizza 
    let Qpizza1 = document.forms["Form"]["Qpizza1"].value;
    let Qpizza2 = document.forms["Form"]["Qpizza2"].value;
    let Qpizza3 = document.forms["Form"]["Qpizza3"].value;
    localStorage.setItem("Qpizza1",Qpizza1);
    localStorage.setItem("Qpizza2",Qpizza2);
    localStorage.setItem("Qpizza3",Qpizza3);
        //Burger 
    let Qburger1 = document.forms["Form"]["Qburger1"].value;
    let Qburger2 = document.forms["Form"]["Qburger2"].value;
    let Qburger3 = document.forms["Form"]["Qburger3"].value;
    localStorage.setItem("Qburger1",Qburger1);
    localStorage.setItem("Qburger2",Qburger2);
    localStorage.setItem("Qburger3",Qburger3);
        //salade 
    let Qsalade1 = document.forms["Form"]["Qsalade1"].value;
    let Qsalade2 = document.forms["Form"]["Qsalade2"].value;
    let Qsalade3 = document.forms["Form"]["Qsalade3"].value;
    localStorage.setItem("Qsalade1",Qsalade1);
    localStorage.setItem("Qsalade2",Qsalade2);
    localStorage.setItem("Qsalade3",Qsalade3);
        //jus
    let Qjus1 = document.forms["Form"]["Qjus1"].value;
    let Qjus2 = document.forms["Form"]["Qjus2"].value;
    let Qjus3 = document.forms["Form"]["Qjus3"].value;
    localStorage.setItem("Qjus1",Qjus1);
    localStorage.setItem("Qjus2",Qjus2);
    localStorage.setItem("Qjus3",Qjus3);
        //cafe
    let Qcafe1 = document.forms["Form"]["Qcafe1"].value;
    let Qcafe2 = document.forms["Form"]["Qcafe2"].value;
    let Qcafe3 = document.forms["Form"]["Qcafe3"].value;
    localStorage.setItem("Qcafe1",Qcafe1);
    localStorage.setItem("Qcafe2",Qcafe2);
    localStorage.setItem("Qcafe3",Qcafe3);
        //boisson
    let Qboisson1 = document.forms["Form"]["Qboisson1"].value;
    let Qboisson2 = document.forms["Form"]["Qboisson2"].value;
    let Qboisson3 = document.forms["Form"]["Qboisson3"].value;
    localStorage.setItem("Qboisson1",Qboisson1);
    localStorage.setItem("Qboisson2",Qboisson2);
    localStorage.setItem("Qboisson3",Qboisson3);
    if(confirm("Vous etes sur")==true){
    window.location.replace("commande.html");}
     // alert("nbre Pizza ="+Qpizza1+" "+Qpizza2+" "+Qpizza3);

  }
//recupuration des information client (page commande)
//j'ai fait un 2eme controle des champs (1er If )
//else faire vider form 
//a suivre ( envoi de formulaire au chef etc ..)

  function validateFormClient() {
      console.log("claire1");
      let message="";
       var id=Math.random().toString(36).substr(2, 9);


       var name = document.forms["Form_Client"]["nom"].value;
       var phone1 = document.forms["Form_Client"]["phone"].value;
       var phone2 = document.forms["Form_Client"]["phone2"].value;
       var adress = document.forms["Form_Client"]["adresse"].value;
       
       if (name == "" ||phone1 == "" ||adress == "" ) {
        
           message="tous les champs sont obligatoire";
           document.getElementById("message").innerHTML=message;
           
       } else {
           //mettre les valeur dans database
           if(confirm("Confirmer votre Commande ?")==true){
           document.getElementById("Form_Client").reset();
           }
        }
        alert("Client ="+id+" "+name+" "+phone1+" "+phone2+" "+adress+" "+"okay");
     
    }

     function Getmenu(){
         var check=0;
         //Get pizza 
        var Qpizza11=localStorage.getItem("Qpizza1");
        var Qpizza22=localStorage.getItem("Qpizza2");
        var Qpizza33=localStorage.getItem("Qpizza3");
         //Get burger 
         var Qburger11=localStorage.getItem("Qburger1");
         var Qburger22=localStorage.getItem("Qburger2");
         var Qburger33=localStorage.getItem("Qburger3");
          //Get salade
        var Qsalade11=localStorage.getItem("Qsalade1");
        var Qsalade22=localStorage.getItem("Qsalade2");
        var Qsalade33=localStorage.getItem("Qsalade3");
         //Get jus
         var Qjus11=localStorage.getItem("Qjus1");
         var Qjus22=localStorage.getItem("Qjus2");
         var Qjus33=localStorage.getItem("Qjus3");
          //Get cafe 
        var Qcafe11=localStorage.getItem("Qcafe1");
        var Qcafe22=localStorage.getItem("Qcafe2");
        var Qcafe33=localStorage.getItem("Qcafe3");
         //Get boisson 
         var Qboisson11=localStorage.getItem("Qboisson1");
         var Qboisson22=localStorage.getItem("Qboisson2");
         var Qboisson33=localStorage.getItem("Qboisson3");
        
        if(Qpizza11!="" || Qpizza22!="" || Qpizza33!=""){
            check++;
            document.getElementById("selected_pizza").innerHTML='<img class="petit" src="images/pizza1.jpg">'+Qpizza11+" "+Qpizza22+" "+Qpizza33+"<br>";
        }
        if(Qsalade11!="" || Qsalade22!="" || Qsalade33!=""){
            check++;
            document.getElementById("selected_salade").innerHTML='<img class="petit" src="images/salade1.jpg">'+Qsalade11+" "+Qsalade22+" "+Qsalade33+"<br>";
        }
        if(Qjus11!="" || Qjus22!="" || Qjus33!=""){
            check++;
            document.getElementById("selected_jus").innerHTML='<img class="petit" src="images/boisson1.jpg">'+Qjus11+" "+Qjus22+" "+Qjus33+"<br>";
        }
        if(Qburger11!="" || Qburger22!="" || Qburger33!=""){
            check++;
            document.getElementById("selected_burger").innerHTML='<img class="petit" src="images/burger1.jpg">'+Qburger11+" "+Qburger22+" "+Qburger33+"<br>";
        }
        if(Qcafe11!="" || Qcafe22!="" || Qcafe33!=""){
            check++;
            document.getElementById("selected_cafe").innerHTML='<img class="petit" src="images/express.jpg">'+Qcafe11+" "+Qcafe22+" "+Qcafe33+"<br>";
        }
        if(Qboisson11!="" || Qboisson22!="" || Qboisson33!=""){
            check++;
            document.getElementById("selected_boisson").innerHTML='<img class="petit" src="images/milkshake.jpg">'+Qboisson11+" "+Qboisson22+" "+Qboisson33+"<br>";
        }
        if(check==0){
            document.getElementById("selected_boisson").innerHTML='Aucune Commande :'+'<a href="index.html">Commander ici </a>'+"<br>";
        }
        
     }