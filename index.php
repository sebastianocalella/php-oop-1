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


        public function __construct($name,Array $cast,$length){
            $this->name = $name;
            $this->cast = $cast;
            $this->length = $length;
        }

        public function getMovie(){
            return [$this->name,$this->cast,$this->length];
        }
    }

    $movieList=[];

    $la_teoria_del_tutto = new Movie('La Teoria del Tutto',['Eddie Readmayne', 'Felicity Jones'],'140');
    array_push($movieList,$la_teoria_del_tutto);
    $pretty_woman = new Movie('Pretty Woman', ['Julia Roberts', 'Richard Gere', 'Laura San Giacomo'],'179');
    array_push($movieList,$pretty_woman);
?>

<h1>Movies</h1>


<?php
    //echo '<h2>Titolo: '.$la_teoria_del_tutto->getMovie()[0].'</h2>
    //<p>Cast: '.$la_teoria_del_tutto->getMovie()[1].'<br>
    //Length: '.$la_teoria_del_tutto->getMovie()[2].' minutes</p>';

    foreach($movieList as $movieElement){
        echo '<h2>Titolo: '.$movieElement->getMovie()[0].'</h2>
        <p>Cast: ';
        foreach($movieElement->getMovie()[1] as $actor){
            echo $actor.', ';
        }
        echo'<br>
        Length: '.$movieElement->getMovie()[2].' minutes</p>';
    }
?>



</body>
</html>