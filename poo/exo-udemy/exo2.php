<?php

class Livre
{
    //attributs
    public $_titre;
    public $_nbPages;
    private $_couleurCouverture;
    private $_traduitAnglais;

    //constructeur
    public function __construct($nom,$nbPages, $couleurCouverture, $traduitAnglais)
    {
        $this -> setNom($nom);
        $this -> setNbPages($nbPages);
        $this -> setCouleurCouverture($couleurCouverture);
        $this -> setTraduitAnglais($traduitAnglais);
    }

    //setter
    public function setNom ($nom)
    {
        $this -> _titre = $nom;
    }
    public function setNbPages ($nbPages)
    {
        $this -> _nbPages = $nbPages;
    }
    public function setCouleurCouverture ($couleurCouverture)
    {
        $this -> _couleurCouverture = $couleurCouverture;
    }
    public function setTraduitAnglais ($traduitAnglais)
    {
        $this -> _traduitAnglais = $traduitAnglais;
    }
    //methods

    public function afficherLivre ()
    {
        echo "Titre du livre : " . $this -> _titre . " nombre de pages : " . $this ->_nbPages . " couleur : " . $this -> _couleurCouverture . " traduit en anglais : " . $this -> _traduitAnglais . "<br>";
    }
    public function changerCouleur ($couleur)
    {
        $this -> setCouleurCouverture($couleur);
    }
    public function traduitAnglais ()
    {
        $this -> setTraduitAnglais(true);
    }
    public function ajouterPages($nbAAjouter)
    {
        $this -> _nbPages += $nbAAjouter;
    }

    public function basculerAnglais()
    {
        $this -> traduitAnglais();
        $this -> ajouterPages(5);
        $this -> changerCouleur('verte');
    }
}

$livre1 = new Livre("Sherlock Holmes",500,"noir",true);

$livre1 -> afficherLivre();
$livre1 -> _titre = "algoH2Prog";

$livre1 -> _nbPages = 10;

$livre1 -> afficherLivre();
$livre1 -> ajouterPages(10);
$livre1 -> changerCouleur("orange");
$livre1 -> afficherLivre();
$livre1 -> basculerAnglais();
$livre1 -> afficherLivre();



?>



