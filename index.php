<?php

/*
1: Create un file index.php in cui.
2: Definire una classe ‘Movie’
    => all'interno della classe sono dichiarate delle variabili d'istanza
    => all'interno della classe è definito un costruttore
    => all'interno della classe è definito almeno un metodo
3:vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà  
*/
class Movie
{
    /* variabili d'istanza */
    private $name;
    private $director;
    private $length;
    private $genre;

    public function __construct($_name, $_length, $_genre)
    {
        $this->$_name;
        /* $this->$_director; -------> Opzionale, non lo metto, mi va bene null come default*/
        $this->$_length;
        $this->$_genre;
    }
}

?>