<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php-oop-1</title>
</head>
<body>
    

<?php
    class Movie{
        public $name;
        public $cast;
        public $length;
        public $type;


        public function __construct($name,Array $cast,$length){
            $this->name = $name;
            $this->cast = $cast;
            $this->length = $length;
            $this->type;
        }

        public function getMovieElement($element){
            return $this->$element;
        }
    }

    $movieList=[];

    $la_teoria_del_tutto = new Movie('La Teoria del Tutto',['Eddie Readmayne', 'Felicity Jones'],'140');
    $la_teoria_del_tutto->type=['drama','romance','historical drama'];
    array_push($movieList,$la_teoria_del_tutto);
    $pretty_woman = new Movie('Pretty Woman', ['Julia Roberts', 'Richard Gere', 'Laura San Giacomo'],'179');
    $pretty_woman->type=['romance','romantic comedy','comedy'];
    array_push($movieList,$pretty_woman);
?>

<h1>Movies</h1>


<?php

    foreach($movieList as $movieElement){
        echo '<h2>Titolo: '.$movieElement->getMovieElement('name').'</h2>
        <p>Cast: ';
        foreach($movieElement->getMovieElement('cast') as $actor){
            echo $actor.', ';
        }
        echo'<br>
        Length: '.$movieElement->getMovieElement('length').' minutes<br>
        Genre: ';
        foreach($movieElement->getMovieElement('type') as $genre){
            echo $genre.', ';
        }
        echo'</p>';
        
    }
?>



</body>
</html>