<!-- Descrizione
Stampare a schermo i dischi musicali (file allegato) in due modi diversi:
- Solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi. Teniamo i dati dei dischi in un file separato.
- Utilizzando Html, JS, Vue e Axios (CDN), PHP: Al caricamento della pagina axios chiederà attraverso una chiamata API i dischi a file PHP e li stamperà attraverso Vue.
Pensate al CSS solo come fase finale, se vi resta tempo.
Nella repo potete creare due cartelle: una per la versione solo PHP e una per la versione AJAX. -->

<?php
include '../data/database.php';
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
<header class="d-flex justify-content-center align-items-center">
            <img class="logo m-2" src="../assets/logo.png" alt="">
            <h1>Esercizio Dischi PHP-AJAX</h1>
        </header>

    <main class="pt-5">
        <div class="container justify-content-center px-5">
            <div class="row justify-content-center">
                
            <?php
            foreach ($database as $element) { ?>
                <div class="col-3 mx-4 my-3 card-container text-center">
                    <div class="img-container p-2 mt-2 px-0">
                        <img src=" <?php echo $element['poster'] ?> " alt="">
                    </div>

                    <div class="text-container text-center my-3">
                        <h5> <?php echo $element['title'] ?> </h5>
                        <div> <?php echo $element['author'] ?></div>
                        <div> <?php echo $element['year'] ?></div>
                        <div> <?php echo $element['genre'] ?></div>
                    </div>
                </div>
            <?php } ?>

            </div>
        </div>
    </main>
</body>
</html>