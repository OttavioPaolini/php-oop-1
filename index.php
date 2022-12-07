<?php

class Movie
{
    public $name;
    public $category;
    public $duration;
    public $trame;


    /**
     * @param String $name movie title
     * @param String $category movie
     * @param Int $duration in minuts
     * @param String $trame description
     */
    public function __construct(String $name, String $category, Int $duration, String $trame)
    {
        $this->name = $name;
        $this->category = $category;
        $this->duration =  $duration;
        $this->trame = $trame;
    }

    public function print()
    {
        return "Nome del film $this->name categoria $this->category la durata è di $this->duration la trama $this->trame .";
    }
}

$movie = [
    new Movie("300", "Fantasy", "160", "La battaglia di Leonida contro Serse"),
    new Movie("Scimino Revolution", "Fantasy", "200", "La storia di una scimmia che conosce bene i pitoni"),
    new Movie("300", "Fantasy", "160", "La battaglia di Leonida contro Serse")

];
foreach ($movie as $stocazzo) {
    echo $stocazzo->print() . "<br>";
}
