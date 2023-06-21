<?php 
require __DIR__ . '/genere.php';
require __DIR__ . '/movie.php';



$film = new Movie('mia','ita', new Genere('sci-fi','icons'));
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
            La durata è : <br> <?php echo $film->durata ?>
        </p>

        <h2>Genere</h2>
        <p>il tipo di genere: <br><?php echo $film->gen->nome ?> </p>
        <p><?php echo $film->gen->icona ?></p>
    </main>
</body>
</html>