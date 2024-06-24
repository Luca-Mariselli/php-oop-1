<?php
class Movie {
    public $titolo;
    public $durata;
    public $paese;
    public $prezzo;

    public function __construct($dato1, $dato2, $dato3, $dato4){
        $this->titolo = $dato1;
        $this->durata = $dato2;
        $this->paese = $dato3;
        $this->prezzo = $dato4;
    }

    public function getFilm(){
        return "<li class='my-li'>" . "$this->titolo" . "</li>" . "<li class='my-li'>" ."$this->durata" . "</li>" . "<li class='my-li'>" . "$this->paese" . "</li>" . "<li class='my-li'>" . "$this->prezzo". "</li>";
    }

}

$film1 = new Movie ("Spiderman", 1.4, "USA", 100);
$film2 = new Movie ("Prova2", 1.5, "Italia", 1000);
$film3 = new Movie ("Hellboy", 2, "Afghanistan", 103);
$film4 = new Movie ("The Last of Us", 2.2, "USA", 140);

$films = [$film1, $film2, $film3, $film4];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <ul>
    <?php foreach($films as $film) { ?>
        <li><?php echo $film->getFilm()?></li>
    <?php } ?>  
   </ul> 
</body>
</html>