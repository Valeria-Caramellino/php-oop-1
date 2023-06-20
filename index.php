<?php 
class Movie{
    public $titolo;
    public $durata= 0;
    public $lingua;

    function __construct($titolo , $lingua)
    {
        $this->titolo = $titolo;
        $this->lingua = $lingua;
        
    }
    public function getDurata($durata){
        $this->durata= $durata;
        if($durata < 30){
            $this->durata = 'cortometraggio';
        }elseif ($durata >= 30 && $durata <= 90){
            $this->durata = 'film';
        }else{
            $this->durata = 'pippone';
        }
    }

}

$film = new Movie("mia","ita");
$film->getDurata(100);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ES_20/06</title>
    <style>
        body{
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <header>
       <h1>ESERCITAZIONE</h1>
    </header>
    <main>
         <h2>RECUPERO PAROLE</h2>
        <p>Il titolo è : <br><?php echo $film->titolo ?></p>
       
        <p>La lingua è: <br> <?php echo $film->lingua  ?> </p>

        <h2>ESEGUO UN METODO E RECUPERO PAROLA</h2>
        <p>
            la durata è : <br> <?php echo $film->durata ?>
        </p>
    </main>
</body>
</html>