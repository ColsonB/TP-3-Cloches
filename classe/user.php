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
                $requetprepar->execute(array($nom, $mdp, '0'));
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
     * function qui permet de recuperer les information du user en basse de donner
     *
     * @param $idUser est l'id de l'utilisateur que on souete récuperer c'est imformation
     * 
     */
    public function giveUser($idUser)
    {
        $this->_id = $idUser;
        $requetprepar = $this->_BDD->prepare("SELECT * FROM `user` WHERE `idUser` = ?");
        $requetprepar->execute(array($this->_id));
        $data = $requetprepar->fetch();
        $this->_nom = $data['Nom'];
        $this->_mdp = $data['Mdp'];
        $this->_status = $data['Admin'];

    }
    /**
     * function qui permet de supprimer des utilisateur en base de donner
     * 
     * @param $idUser est l'id de l'utilisateur que on ve supprimer
     * 
     */
    public function supprUser($idUser){
        $requetprepar = $this->_BDD->prepare("DELETE FROM `user` WHERE `idUser` = ?");
        $requetprepar->execute(array($idUser));
    }

    /**
     * function qui permet de recuperer les utilisateur en base de donner et les inserer dans le tableau du panel admin
     * 
     */
    public function getUserPanelAdmin()
    {
        $requetprepar = $this->_BDD->prepare("SELECT * FROM `user` WHERE 1");
        $requetprepar->execute();
        while ($data = $requetprepar->fetch()) { ?>
            <tr>
                <th scope="row">
                    <label class="custom-control custom-checkbox m-0 p-0">
                        <input type="checkbox" class="custom-control-input table-select-row">
                        <span class="custom-control-indicator"></span>
                    </label>
                </th>
                <td><?= $data['Nom'] ?></td>
                <td><?= $data['Mdp'] ?></td>
                <td>@mdo</td>
                <td>
                    <?php if ($data['Admin'] == 1) { ?>
                        <span class="badge badge-pill badge-primary">Admin</span>
                    <?php } else { ?>
                        <span class="badge badge-pill badge-danger">utilisateur</span>
                    <?php } ?>
                </td>
                <td>
                    <button onclick="window.location.href=''" class="btn btn-sm btn-primary">Edit</button>
                    <button onclick="window.location.href='?suppr=<?=$data['idUser'] ?>'" class="btn btn-sm btn-danger">Delete</button>
                </td>
            </tr>
<?php }
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


    /**
     * function qui permet de returner le status de l'utilisateur.
     *
     * @return $this->_status le grade de l'utilisateur
     */
    public function getStatue()
    {
        return $this->_status;
    }
}
