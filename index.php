<?php

class Movie{
    public $title;
    public $director;
    public $genre;
    public $runtime;
    public $tickets = true;

    function __construct($title, $director, $genre, $runtime){
        $this->title = $title;
        $this->director = $director;
        $this->genre = $genre;
        $this->runtime = $runtime;
    }
    
    public function getTitle(){
        return $this->title;
    }
    public function getDirector(){
        return $this->direcor;
    }
    public function getGenre(){
        return $this->genre;
    }
    public function getRuntime(){
        return $this->runtime;
    }



}

$dune = new Movie('Dune', 'Denis Villeneuve', 'sci-fi', 155);

$lotr_1 = new Movie('The Lord Of The Rings - The Fellwship of the Ring', 'Peter Jackson', 'fantasy', 178);

var_dump($dune);
var_dump($dune->title);

?>