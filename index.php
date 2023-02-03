<?php 
    require_once __DIR__.'/models/Movie.php';
    require_once __DIR__.'/models/movieList.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php-oop-1</title>
</head>
<body>

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