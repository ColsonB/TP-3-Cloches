<!DOCTYPE html>
<html>
<head>
    <title>Cloche en redstone</title>
    <link rel="stylesheet" href="Messagerie.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
</head>
<body>
  
    <section class="login">
      <form id="Connexion" method="POST" onsubmit="return false">
     
        <h1>Se connecter</h1>
        
        <div class="inputs">
          <input type="text" id="usernameConnexion"name="usernameConnexion" placeholder="Pseudo" />
          <input type="password"  id="passwordConnexion" name="passwordConnexion" placeholder="Mot de passe">
        </div>
        
        <p class="PageInscription" onclick="afficheInscription()">Je n'ai pas de compte.</p>
        <div align="center">
          <button type="submit" onclick="connexion()">Se connecter</button>
        </div>
        
      </form>
    </section>
      
      <section class="inscription">
        <form id="Inscription" method="POST" onsubmit="return false">
       
          <h1>Inscription</h1>
          
          <div class="inputs">
            <input type="text" id="usernameInscription"name="usernameInscription" placeholder="Pseudo" />
            <input type="password"  id="passwordInscription" name="passwordInscription" placeholder="Mot de passe">
            <input type="password" id="ConfirmpasswordInscription" name="ConfirmpasswordInscription" placeholder="Confirmer votre mot de passe">
          </div>
          
          <p class="PageConnexion" onclick="afficheConnexion()">Je possède un compte.</p>
          <div align="center">
            <button type="submit" onclick="inscription()">S'inscrire</button>
          </div>
          
        </form>
      </section>
    

    

  <div class="ListeCloche">

    <div class="Cloche" onclick="test()">
      <input type="image" src="Cloche_dorée_ombrée.png" class="ImageCloche" onclick="Cloche1()">
      <h5 class="h5">Cloche 1</h5>
    </div>

    <div class="Cloche">
      <input type="image" src="Cloche_dorée_ombrée.png" class="ImageCloche" onclick="Cloche2()">
      <h5 class="h5">Cloche 2</h5>
    </div>

    <div class="Cloche">
      <input type="image" src="Cloche_dorée_ombrée.png" class="ImageCloche" onclick="Cloche3()">
      <h5 class="h5">Cloche 3</h5>
    </div>

    <div class="Cloche">
      <input type="image" src="Cloche_dorée_ombrée.png" class="ImageCloche" onclick="Cloche4()">
      <h5 class="h5">Cloche 4</h5>
    </div>

  </div>


</body>

<script>

  let UserCorrect;

</script>

<script src="WebSocket.js"></script>
<script>

function Cloche1() {

  /*Je vérifie que l'utilisateur est connecté*/
  if( UserCorrect ){

  /*J'envoie le message au format JSON au serveur afin qu'il puisse être stocké en BDD*/
  var cloche = [{
          "cloche1": 1,
          "user": UserCorrect,
        }];

  socket.send(JSON.stringify(cloche));
  console.log(cloche);

  }else{

    alert('Veulliez vous connecter pour détruire les oreilles de la salle');

  }
}

function Cloche2() {

  /*Je vérifie que l'utilisateur est connecté*/
  if( UserCorrect ){

  /*J'envoie le message au format JSON au serveur afin qu'il puisse être stocké en BDD*/
  var cloche = [{
          "cloche1": 2,
          "user": UserCorrect,
        }];

  socket.send(JSON.stringify(cloche));
  console.log(cloche);

  }else{

    alert('Veulliez vous connecter pour détruire les oreilles de la salle');

  }
}

function Cloche3() {

  /*Je vérifie que l'utilisateur est connecté*/
  if( UserCorrect ){

  /*J'envoie le message au format JSON au serveur afin qu'il puisse être stocké en BDD*/
  var cloche = [{
          "cloche1": 3,
          "user": UserCorrect,
        }];

  socket.send(JSON.stringify(cloche));
  console.log(cloche);

  }else{

    alert('Veulliez vous connecter pour détruire les oreilles de la salle');

  }
}

function Cloche4() {

  /*Je vérifie que l'utilisateur est connecté*/
  if( UserCorrect ){

  /*J'envoie le message au format JSON au serveur afin qu'il puisse être stocké en BDD*/
  var cloche = [{
          "cloche1": 4,
          "user": UserCorrect,
        }];

  socket.send(JSON.stringify(cloche));
  console.log(cloche);

  }else{

    alert('Veulliez vous connecter pour détruire les oreilles de la salle');

  }
}
    
    /* Fonction pour faire apparaitre le formulaire de connexion*/
    function afficheConnexion(){
    document.querySelector('.login').style.display='flex';
    document.querySelector('.inscription').style.display='none';
    }

    /* Fonction pour faire apparaitre le formulaire d'incription*/
    function afficheInscription(){
    document.querySelector('.login').style.display='none';
    document.querySelector('.inscription').style.display='flex';
    }


  function inscription() {
    VerifUsername = document.getElementById("usernameInscription").value;
    VerifPassword =  document.getElementById("passwordInscription").value;
    VerifConfirmPassword =  document.getElementById("ConfirmpasswordInscription").value;

    if(VerifUsername == ""){

      alert("Veulillez rentrer un nom d'utilisateur");

    }else if (VerifPassword == "" || VerifConfirmPassword == ""){

      alert("Certain champ de mot de passe ne sont pas remplies")

    }else if(VerifPassword != VerifConfirmPassword){

      alert("Les mots de passes sont différents")

    }else{

      /*Je convertis mes information en JSON (Le résultat donne un tableaux)*/
      var inscription = [{
        Method: 3,
        username: document.getElementById("usernameInscription").value,
        password: document.getElementById("passwordInscription").value,
        
      }];
    
      /*Envoie du Message JSON vers le serveur WebSocket*/
      socket.send(JSON.stringify(inscription));

      return false;
    }
  }



function connexion() {
    VerifUsername = document.getElementById("usernameConnexion").value;
    VerifPassword =  document.getElementById("passwordConnexion").value;

  if(VerifUsername == ""){

    alert("Veulillez rentrer un nom d'utilisateur");

  }else if (VerifPassword == "" ){

    alert("Veulillez rentrer un mot de passe");

  }else{
    /*Je convertis mes information en JSON (Le résultat donne un tableaux)*/
    var userconnexion = [{
      Method: 1,
      username: document.getElementById("usernameConnexion").value,
      password: document.getElementById("passwordConnexion").value,
        
    }];

    /*Envoie du Message JSON vers le serveur WebSocket*/
    socket.send(JSON.stringify(userconnexion));
    getText(UserCorrect);
    
    return false;
    
  }
}

</script>
</html>
