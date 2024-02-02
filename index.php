<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php oop1</title>
</head>

<body>
    
    <?php

    //classe
    class Movie {
        //variabili
        public $title;
        public $originalTitle;
        public $genre;
        public $year;
        public $lenght;

        //costruttore
        public function __construct($title, $originalTitle, $genre, $year, $lenght) {
        $this->title = $title;
        $this->orinalTitle = $originalTitle;
        $this->genre = $genre;
        $this->year = $year;
        $this->lenght = $lenght;
        }

        //metodo
        public function getMovieInfo() {
        return 
        "Titolo: {$this -> title},
        Titolo originale: {$this -> originalTitle}
        Genere: {$this -> genre}, 
        Anno: {$this -> year},
        Durata: {$this -> lenght}";
        }
    }

    //oggetti
    $movie1 = new Movie("Ritorno al funturo", "Back to the future", "Fantascienza", "1985", "156Min");
    $movie2 = new Movie("Indiana Jones e i Predatori dell'Arca Perduta","Indiana Jones and the Raiders of the Lost Ark", "Avventura", "1981", "155Min");

    echo $movie1->getMovieInfo();
    echo "<br>";
    echo "<br>";
    echo $movie2->getMovieInfo();
    ?>

</body>
</html>