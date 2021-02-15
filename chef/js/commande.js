function validateFormClient() {
 
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
      alert("Client ="+id+" "+name+" "+phone1+" "+phone2+" "+adress+" okay");
      document.getElementById("Form_Client").reset();
      
     }
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