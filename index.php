<?php 
// - è definita una classe ‘Movie’
//      => all'interno della classe sono dichiarate delle variabili d'istanza
//      => all'interno della classe è definito un costruttore
//      => all'interno della classe è definito almeno un metodo
// - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
class Movie {
    public $title;
    public $genre;
    public $year;
    public $cast;

    function __construct($_title) {
        $this -> title = $_title;
    }

    public function insertActors($_cast) {
        $this-> cast[] = $_cast;
    }
}

$movie1 = new Movie("Titanic");
// $movie1 -> title = "Titanic";
$movie1 -> genre = "Drama, Romance, Disaster";
$movie1 -> year = 1997;
$movie1 -> insertActors("Leonardo DiCaprio");
$movie1 -> insertActors("Kate Winslet");
var_dump($movie1);

$movie2 = new Movie("Ray");
// $movie2 -> title = "Titanic";
$movie2 -> genre = "Drama, Biographical, Musical";
$movie2 -> year = 2004;
$movie2 -> insertActors("Jamie Foxx");
$movie2 -> insertActors("Kerry Washington");
var_dump($movie2);
?>