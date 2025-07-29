<?php
// EXEMPLE (mis en commentaires pour conflit):
// class Chat {  

//     // Variable
//     private $race;
//     private $typePoil;
//     private $couleurPoils;
//     private $couleurYeux;
//     private $genre;


//     // Construct
//     public function __construct($race, $typePoil, $couleurPoils, $couleurYeux, $genre) {
//         $this->race = $race;
//         $this->typePoil = $typePoil;
//         $this->couleurPoils = $couleurPoils;
//         $this->couleurYeux = $couleurYeux;
//         $this->genre = $genre;
//     }

//     // Getter
//     public function getRace(){
//         return $this->race;
//     }
//     public function getTypePoil(){
//         return $this->typePoil;
//     }
//     public function getCouleurPoils(){
//         return $this->couleurPoils;
//     }
//     public function getCouleurYeux(){
//         return $this->couleurYeux;
//     }
//     public function getGenre(){
//         return $this->genre;
//     }
    
//     // Setter
//     public function setRace($race){
//         return $this->race = $race;
//     }
//     public function setTypePoil($typePoil){
//         return $this->typePoil = $typePoil;
//     }
//     public function setCouleurPoils($couleur){
//         return $this->couleurPoils = $couleur;
//     }
//     public function setCouleurYeux($couleur){
//         return $this->couleurYeux = $couleur;
//     }
//     public function setGenre($genre){
//         return $this->genre = $genre;
//     }
    
//     // Methode

//     public function test(){
//         echo "<p>je fais un test</p>";
//     }
// }

// $chat = new Chat('Persan', "Long", "blanc", "orange", "femelle");
// var_dump($chat);

// EXERCICE :
// Crée une classe Chien qui a deux propriétés :
// nom
// race

// Ajoute à cette classe :
// Un constructeur pour initialiser le nom et la race.
// Une méthode aboyer() qui affiche "Woof! Je suis [nom]".

// Ensuite :
// Crée un objet $chien1 de la classe Chien avec le nom "Rex" et la race "Berger Allemand".
// Affiche le nom et la race du chien.
// Change le nom du chien en "Max".
// Fais aboyer le chien avec la méthode aboyer().

class Chien {
    public $nom;
    public $race;

    // Constructeur 
    public function __construct($nom, $race)
    {
        $this->nom = $nom;
        $this->race = $race;
    }

    // Getter
    // public function getNom

    // Setter
 public function setNom($nom){
       return $this->nom = $nom;
  }

    // METHODE

    public function aboyer(){
        echo "Woof ! Je suis " . $this->nom . '<br>';
    }
}

$chien1 = new Chien('Rex','Berger Allemand');


var_dump($chien1);
echo "<br>";

$chien1->aboyer();

$chien1->setNom('Max');

$chien1->aboyer();



