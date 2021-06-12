<?php

// class Personnage
// {

//     private $_nom;
//     private $_degat;


//     //constructeur

//     public function __construct($nom)
//     {
//         $this -> setNom($nom);
//     }

//     //frapper un autre personnage en lui infligeant des degats

//     public function frapper (Personnage $perso)
//     {
//         return "Vous avez reçu " . $this -> _degat . " de degats !";
//     }   

//     // recevoir des degats augmente la variable degats

//     public function recevoir ()
//     {
//         $this -> setDegat(5);

//         if($this -> _degat >= 100)
//         {
//             return "Le personnage $this -> _nom est mort !";
//         }
//         else
//         {
//             return "Le personnage $this -> _nom a été touché !";
//         }
//     }
//     //getter
//     public function nom ()
//     {
//         return $this -> _nom;
//     }
//     public function degat ()
//     {
//         return $this -> _degat;
//     }
//     //setter

//     public function setNom ($nom)
//     {
//         $this -> _nom = $nom;
//     }

//     public function setDegat ($degats)
//     {
//         $this -> _degat = $degats;
//     }
    
// }