<?php

    $avatar = new Movie ("Avatar", "James Cameron", "Sci-fi/Azione", "2009");
    $deadpool = new Movie ("Deadpool", "Tim Miller", "Azione/Commedia", "2016");
    $venom = new Movie ("Venom", "Ruben Fleischer", "Azione/Sci-fi", "2018");

    $movies = array($avatar, $deadpool, $venom);

    class Movie {
        public $filmName;
        public $director;
        public $type;
        public $year;

        public function __construct($nome, $regista, $genere, $anno){
            $this->filmName = $nome;
            $this->director = $regista;
            $this->type = $genere;
            $this->year = $anno;
        }
    
        public function getDescription(){
            return $result = "Name: " . $this->filmName . " Director: " . $this->director . " Type: " . $this->type . " Year: " . $this->year;
        }
    }
?>