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
?>