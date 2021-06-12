<?php
// le mot clef private indique que la variable est accessible que dans la class
// le mot clef public indique que la variable est accessible depuis l'exterieur de la classe
// le mot clef $this renvoie a l'instance de la classe ce qui permet d'accéder a tout ses attributs et function
// le mot clef new permet d'instancier uen classe
// class Personnage
// {
//     private $_experience;
//     private $_force;
//     private $_degats;
//     private $_localisation;
//     private $_vie;

//     //déclarer des costantes
//     const VIE_PETITE = 20;
//     const VIE_MOYENNE = 50;
//     const VIE_GRANDE = 80;

//     public function __construct($force,$degat,$vitalite)
//     {
//         $this -> setForce($force);
//         $this -> setDegats($degat);
//         $this -> _experience = 1;
//         $this -> setVie($vitalite);
//     }

//     public function gagnerExperience ()
//     {
//         $this -> _experience ++;
        
//     }

//     public function frapper (Personnage $cible) // Définit le type du parametre attendu
//     {
//         $cible -> _degats += $this -> _force ;
//     }

//     public static function parler()
//     {
//         echo "Je vais vous tuer !! <br>";
//     }
//     //Setter ou mutateur permet de modifier les attributs d'une classe
//     public function setVie ($pv)
//     {
//         //le mot clef self agit sur la classe et non a l'objet et permet d'accéder entre autre aux constantes de la classe
//         if(in_array($pv,[self::VIE_GRANDE,self::VIE_MOYENNE,self::VIE_PETITE]))
//         {
//             $this -> _vie = $pv;
//         }
//     }
//     public function setForce ($force)
//     {   
//         if(!is_int($force))
//         {
//             trigger_error("La force d'un personnage doit être un nombre entier", E_USER_WARNING);
//             return;
//         }
//         if ($force > 100 )
//         {
//             trigger_error("LA force d'un personnage ne peut dépasser 100", E_USER_WARNING);
//             return;
//         }
//         $this -> _force = $force;
//     }

//     public function setDegats ($degat)
//     {
//         if(!is_int($degat))
//         {
//             trigger_error("Les degats doivent être un nombre entier",E_USER_WARNING);
//             return;
//         }
//         if($degat > 100)
//         {
//             trigger_error("Les degats ne peuvent être supérieur a 100",E_USER_WARNING);
//             return;
//         }
//         $this -> _degats = $degat;
//     }

//     public function setexperience ($experience)
//     {
//         if(!is_int($experience))
//         {

//             trigger_error("L'experience d'un personnage doit être un nombre entier",E_USER_WARNING);
//             return;
//         }
//         if($experience > 100 )
//         {
//             trigger_error("L'experience ne doit pas dépasser 100",E_USER_WARNING);
//             return;
//         }
//         return $this -> _experience = $experience;
//     }
//     //Getter ou accesseur permet d'accéder aux attributs de la classe
//     public function degats ()
//     {
//         return $this -> _degats;
//     }

//     public function experience ()
//     {
//         return $this -> _experience;
//     }

//     public function vie ()
//     {
//         return $this -> _vie;
//     }
//     public function force ()
//     {
//         return $this -> _force;
//     }
// };



// $perso1 = new Personnage(10,20,Personnage::VIE_GRANDE);
// $perso2 = new Personnage(15,30,Personnage::VIE_PETITE);

// $perso1::parler();
// $perso1 -> frapper($perso2);
// $perso1 -> gagnerExperience();

// $perso2::parler();
// $perso2 -> frapper($perso1);

// $perso2 -> gagnerExperience();

// echo "Perso 2 a " . $perso2 -> force() . " de force et "  . $perso2 -> degats() . " de dégats avec " . $perso2 -> vie() . " de PV et "  . $perso2 -> experience() . " d'experiences. <br>";

// echo "Perso 1 a " . $perso1 -> force() . " de force et "  . $perso1 -> degats() . " de dégats avec " . $perso1 -> vie() . " de PV et " . $perso1 -> experience() . " d'experiences.";



// class Compteur
// {
//     private static $_compteur = 0;


//     public function __construct()
//     {
//         $this -> setCompteur();
//     }

//     //getter
//     public static function compteur ()
//     {
//         return self::$_compteur;
//     }

//     //setter

//     public function setCompteur()
//     {
//         self::$_compteur ++;


//     }
// }

// $test1 = new Compteur();
// $test2 = new Compteur();
// $test3 = new Compteur();

// // NomDeClasse::element de la classe || MonObjet -> element de l'objet
// echo "La classe a été instanciée " . Compteur::compteur() . " fois .";