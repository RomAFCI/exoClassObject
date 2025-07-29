<?php


class Humain {

    public $nom;
    public $genre;
    public $ethnie;

    // Constructeur 
    public function __construct($nom, $genre, $ethnie)
    {
        $this->nom = $nom;
        $this->genre = $genre;
        $this->ethnie = $ethnie;
    }
}


class Homme extends Humain {

public function __construct($nom, $genre, $ethnie) {
    $nom->nom = "Dupont";
    $genre->genre = "Masculin";
    $ethnie->ethnie = "Européen";

}
}


class Femme extends Humain {

public function __construct($nom, $genre, $ethnie) {
    $nom->nom = "Takahashi";
    $genre->genre = "Féminin";
    $ethnie->ethnie = "Japonaise";

}
}