<?php

include __DIR__ . '/classes/utente.php';
include __DIR__ . '/classes/articolo.php';
include __DIR__ . '/classes/post.php';

$utenti = [
    new Utente('mario', 'rossi', 4, 2),
    new Utente('fabrizio', 'verdi', 7, 9),
    new Utente('carlo', 'bianchi', 2, 3),
];

$articoli = [
    new Articolo('Il ritorno di Draghi', 'Politica'),
    new Articolo('Fashion Week di Milano', 'Moda'),
    new Articolo('La prossima Tesla volerà', 'tecnologia'),
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    <main>
        <!-- inserimento delle istanze php tramite foreach in html -->
        <?php foreach ($utenti as $utente) { ?>
            <p>Nome: <?php echo $utente->nome?></h1>
            <p>Cognome: <?php echo $utente->cognome?></p>
            <p>Post Generati: <?php echo $utente->post_generati?></p>
            <p>Risposte: <?php echo $utente->risposte?></p>
            <hr>
        <?php } ?>
    </main>  
</body>
</html>