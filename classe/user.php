<?php
class user
{
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

    public function inscription($nom, $mdp, $confMDP)
    {
        $nom = htmlspecialchars($nom);
        if ($confMDP == $mdp) {
            $vérifname = $this->_BDD->query("SELECT * FROM `user` WHERE `Nom` = '$nom' ");
            $exit = $vérifname->rowCount();
            if ($exit != 1) {
                $mdp = hash('sha256', $mdp);
                $requetprepar = $this->_BDD->prepare("INSERT INTO `user`(`Nom`, `Mdp`, `Admin`) VALUES (?, ?, ?)");
                $requetprepar->execute(array($nom, $mdp, '1'));
                $this->conection($nom, $confMDP);
            } else {
                return "Ce nom est deja utiliser";
            }
        } else {
            return "les mots de passe son déférent";
        }
    }

    /**
     * function qui permet de se connecter sur l'application web.
     *
     * @param $nom est le nom rentrer par l'utilisateur de dans le formumlaire de connection
     * @param $mdp est le mots de passe entrer par l'utilisateur dans le formulaire de connection
     *
     */
    public function conection($nom, $mdp)
    {
        $nom = htmlspecialchars($nom);
        $mdp = hash('sha256', $mdp);
        $requetprepar = $this->_BDD->prepare("SELECT * FROM `user` WHERE `Nom` = ? AND `Mdp` = ?");
        $requetprepar->execute(array($nom, $mdp));
        $exit = $requetprepar->rowCount();

        if ($exit == 1) {
            $data = $requetprepar->fetch();
            $this->_id = $data['idUser'];
            $this->_nom = $data['Nom'];
            $this->_mdp = $data['Mdp'];
            $this->_status = $data['Admin'];
            $_SESSION['id'] = $this->_id;
            echo '<meta http-equiv="refresh" content="0">';
        } else {
            return "incorecte";
        }
    }

    /**
     * function qui permet de se déconnecter de l'application Web.
     *
     */
    public function deconnection()
    {
        session_destroy();
        echo '<meta http-equiv="refresh" content="0">';
    }
}
