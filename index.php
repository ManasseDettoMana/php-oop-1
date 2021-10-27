<?php

class Movie{

    private $title;
    public $director;
    public $genre;
    public $runtime;
    public $tickets = true;

    function __construct($title, $director, $genre, $runtime){

        $this->setTitle($title);
        $this->director = $director;
        $this->genre = [$genre];
        $this->runtime = $runtime;
    }
    


    public function getTitle(){
        return $this->title;
    }

    public function setTitle($title){
        if(is_string($title)){
            $this->title = $title;
        }else{
            $this->title = '';
        }
    }

    public function getDirector(){
        return $this->director;
    }

    public function getGenre(){
        return $this->genre;
    }
    public function addGenre($newGenre){
        if(is_string($newGenre) && !in_array($newGenre, $this->genre)){
            $this->genre[] = $newGenre;
        }
    }

    // public function removeGenre($genre){
    //     if(in_array($genre)){

    //     }
    // }

    public function getRuntime(){
        return $this->runtime;
    }



}

$dune = new Movie('Dune', 'Denis Villeneuve', 'sci-fi', 155);
$lotr_1 = new Movie('The Lord Of The Rings - The Fellwship of the Ring', 'Peter Jackson', 'fantasy', 178);
$dune->addGenre('avventura');

$movies = [$dune, $lotr_1];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php foreach($movies as $movie){  ?>

        <div>
            <h2><?= $movie->getTitle() ?></h2>
            <h3><?= $movie->getDirector() ?></h3>
            <h4><?php foreach($movie->getGenre() as $genre){ echo $genre.' '; }?> </h4>
        </div>

    <?php } ?>
   
</body>
</html>