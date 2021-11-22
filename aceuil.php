<?php
require "session.php";
require "classe/user.php";
$user = new user($BDD);
if(!isset($_SESSION['id'])){
    header("Location: index.php");
}

if(isset($_POST['déconnexion'])){
    $user->deconnection();
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Cloche en redstone</title>
    <link rel="stylesheet" href="Messagerie.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
</head>

<body>

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
<form action="" method="post">
    <input type="submit" value="déconnexion" name="déconnexion">
</form>
</body>

<script>
    let UserCorrect;
</script>

<script src="WebSocket.js"></script>
<script>
    function Cloche1() {

        /*Je vérifie que l'utilisateur est connecté*/
        if (UserCorrect) {

            /*J'envoie le message au format JSON au serveur afin qu'il puisse être stocké en BDD*/
            var cloche = [{
                "cloche1": 1,
                "user": UserCorrect,
            }];

            socket.send(JSON.stringify(cloche));
            console.log(cloche);

        } else {

            alert('Veulliez vous connecter pour détruire les oreilles de la salle');

        }
    }

    function Cloche2() {

        /*Je vérifie que l'utilisateur est connecté*/
        if (UserCorrect) {

            /*J'envoie le message au format JSON au serveur afin qu'il puisse être stocké en BDD*/
            var cloche = [{
                "cloche1": 2,
                "user": UserCorrect,
            }];

            socket.send(JSON.stringify(cloche));
            console.log(cloche);

        } else {

            alert('Veulliez vous connecter pour détruire les oreilles de la salle');

        }
    }

    function Cloche3() {

        /*Je vérifie que l'utilisateur est connecté*/
        if (UserCorrect) {

            /*J'envoie le message au format JSON au serveur afin qu'il puisse être stocké en BDD*/
            var cloche = [{
                "cloche1": 3,
                "user": UserCorrect,
            }];

            socket.send(JSON.stringify(cloche));
            console.log(cloche);

        } else {

            alert('Veulliez vous connecter pour détruire les oreilles de la salle');

        }
    }

    function Cloche4() {

        /*Je vérifie que l'utilisateur est connecté*/
        if (UserCorrect) {

            /*J'envoie le message au format JSON au serveur afin qu'il puisse être stocké en BDD*/
            var cloche = [{
                "cloche1": 4,
                "user": UserCorrect,
            }];

            socket.send(JSON.stringify(cloche));
            console.log(cloche);

        } else {

            alert('Veulliez vous connecter pour détruire les oreilles de la salle');

        }
    }

    /* Fonction pour faire apparaitre le formulaire de connexion*/
    function afficheConnexion() {
        document.querySelector('.login').style.display = 'flex';
        document.querySelector('.inscription').style.display = 'none';
    }

    /* Fonction pour faire apparaitre le formulaire d'incription*/
    function afficheInscription() {
        document.querySelector('.login').style.display = 'none';
        document.querySelector('.inscription').style.display = 'flex';
    }
</script>

</html>