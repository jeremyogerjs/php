<?php

class Voiture
{
    public $_marque;
    private $_model;
    private $_couleur;
    private $_nbPortes;
    private $_estElectrique;


    public function __construct($marque, $model, $couleur, $nbPortes, $electrique)
    {
        $this -> setMarque($marque);
        $this -> setModel($model);
        $this -> setCouleur($couleur);
        $this->setNbPorte($nbPortes);
        $this->setEstElectrique($electrique);
    }


    //methods
    public function afficherVoiture()
    {
        echo "marque : " . $this->_marque . " || modele : " . $this->_model . " || couleur  : " . $this->_couleur . " || " . $this->_nbPortes . " portes <br> " ;
    }
    
    //setter
    public function setMarque ($marque)
    {
        $this -> _marque = $marque;
    }
    public function setModel ($model)
    {
        $this ->_model = $model;
    }
    public function setCouleur( $couleur)
    {
        $this -> _couleur = $couleur;
    }

    public function setNbPorte ($nbPortes)
    {
        $this -> _nbPortes = $nbPortes;
    }
    public function setEstElectrique ($electrique)
    {
        $this -> _estElectrique = $electrique;
    }


};

$voiture1 = new Voiture("Yotota","Ryas","noir",5,true);
$voiture2 = new Voiture("Yotota","Risau","rouge",3,false);
$voiture3 = new Voiture("Troen","5C","rouge",5,true);

$tab = [$voiture1,$voiture2,$voiture3];

foreach($tab as $voiture)
{
    $voiture -> afficherVoiture();
}
afficherVoitureMarque($tab,'Troen');
function afficherVoitureMarque($tab, $marqueRechercher)
{
    echo "Voici les véhicules de la marque " . $marqueRechercher . "<br>";

    foreach($tab as  $voiture )
    {
        if( $voiture -> _marque === $marqueRechercher)
        {
            $voiture -> afficherVoiture();
        }
        
    }
}
?>