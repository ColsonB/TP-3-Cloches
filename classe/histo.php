<?php
class hisorique{

    private $_BDD;
    private $id;
    private $_id_user;
    private $_cloche;

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
     * fonction qui ajoute la personne qui a fait sonner une cloche en base de donner
     *
     * @param $id_user l'id de l'utilisateur qui a fait sonner la cloche
     * @param $cloche  et la cloche qui a etais sonner par l'utilisateur
     *
     */
    public function ajouthisto($id_user, $cloche){
        $requetprepar = $this->_BDD->prepare("INSERT INTO `HistoCloche`(`User`, `Date`, `Cloche`) VALUES (?, ?, ?)");
        $dates = date('Y-m-d H:i:s');
        $requetprepar->execute(array($id_user, $dates, $cloche));
        }
        
        }
?>