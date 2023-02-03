<?php 
    require_once __DIR__.'/models/Movie.php';
    require_once __DIR__.'/models/movieList.php';
    require_once __DIR__.'/data.php';
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

    /*foreach($movieList as $movieElement){
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
    */


    foreach($movieListTwo as $movieElement){
        $$movieElement->movie_element = new Movie ($$movieElement->movie_info->name,$$movieElement->movie_info->cast,$$movieElement->movie_info->length);
    }
?>



</body>
</html>