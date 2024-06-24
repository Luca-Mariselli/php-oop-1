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

    // public function getPaese(){
    //     if $this->paese; = 1
    //     $this->paese = 'Italia';
    // }

}

$film1 = new Movie ("Spiderman", 1.4, "USA", 100);
$film2 = new Movie ("Prova2", 1.5, "Italia", 1000);
$film3 = new Movie ("Hellboy", 2, "Afghanistan", 100);
$film4 = new Movie ("The Last of Us", 2.2, "USA", 100);
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
    
</body>
</html>