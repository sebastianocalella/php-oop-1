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


        public function __construct($name,$cast,$length){
            $this->name = $name;
            $this->cast = $cast;
            $this->length = $length;
        }

    }



?>


</body>
</html>