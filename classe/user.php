<?php
class user{
//priver
    private $_id;
    private $_nom;
    private $_mdp;
    private $_status;
    private $_BDD;

//public


/**
* Constructeur de la classe.
*
* @param $BDD la connection a la base de donner
*
*/
    public function __construct($BDD)
    {
        $this->_BDD = $BDD;
    }



/**
* function qui permet de s'inscrire sur l'application web.
*
* @param $nom est le nom rentrer par l'utilisateur de dans le formumlaire d'inscription
* @param $mdp est le mots de passe entrer par l'utilisateur dans le formulaire d'inscription
*
*/

    public function inscription($nom, $mdp){
        $nom = htmlspecialchars($nom);
        $vérifname = $this->_BDD->query("SELECT * FROM `user` WHERE `Nom` = $nom");
        $exit = $vérifname->rowCount();
        if($exit != 1){
            $mdp = hash('sha256', $mdp);
            $requetprepar = $this->BDD->prepare("INSERT INTO `user`(`Nom`, `Mdp`, `Admin`) VALUES ('?','?','?')");
            $requetprepar->execute(array($nom, $mdp, 1));
        }else{
            return "se nom est deja utiliser";
        }

    }

    /**
    * function qui permet de se connecter sur l'application web.
    *
    * @param $nom est le nom rentrer par l'utilisateur de dans le formumlaire de connection
    * @param $mdp est le mots de passe entrer par l'utilisateur dans le formulaire de connection
    *
    */
    public function coonection($nom, $mdp){
        $nom = htmlspecialchars($nom);
        $mdp = hash('sha256', $mdp);
        $requetprepar = $this->BDD->prepare("SELECT * FROM `user` WHERE `Nom` = ? AND `Mdp` = ?");
        $requetprepar->execute(array($nom, $mdp));
        $exit = $requetprepar->rowCount();
        
        if($exit == 1){
            $data = $requetprepar->fetch();
            $this->_id = $data['idUser'];
            $this->_nom = $data['Nom'];
            $this->_mdp = $data['Mdp'];
            $this->_status = $data['Admin'];
        }else{
            return "incorecte";
        }
    }
    

}
?>