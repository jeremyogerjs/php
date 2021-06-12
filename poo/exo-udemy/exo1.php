<?php
class Personnage
{
    private $_nom;
    private $_classe;
    private $_attaque;
    private $_pv;
    private $_forceDuBien;


    public function __construct($nom ,$classe, $attaque, $pv, $forceDuBien)
    {

        $this -> setNom($nom);
        $this -> setClasse($classe);
        $this -> setAttaque($attaque);
        $this -> setPv($pv);
        $this -> setForceDuBien($forceDuBien);
    }


    //Getter
    public function degat ()
    {
        return $this -> _degat;
    }

    //methods
    public function calculDegat ()
    {
        return $this -> _pv / 100 * $this -> _attaque + 1;
    }

    public function afficherDegat ()
    {
        echo "Dégats infligés : " . $this -> calculDegat() . " dégats ";
    }
    //setter

    public function setNom($nom)
    {
        $this -> _nom = $nom;
    }
    public function setClasse($classe)
    {
        $this -> _classe = $classe;
    }

    public function setAttaque ($attaque)
    {
        $this -> _attaque = $attaque;
    }

    public function setPv ($pv)
    {
        $this -> _pv = $pv;
    }

    public function setForceDuBien ($forceDuBien)
    {
        $this -> _forceDuBien = $forceDuBien;
    }
}

$perso1 = new Personnage('Miko','guerrier',10,100,true);
$perso2 = new Personnage('Tya','archère',5,50,true);
$perso3 = new Personnage('Lili','archère',5,55,false);
$perso4 = new Personnage('Gael','voleur',2,10,false);

$perso1 -> afficherDegat();
$perso2 -> afficherDegat();
$perso3 -> afficherDegat();
$perso4 -> afficherDegat();
?>