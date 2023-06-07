<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La mia prima pagina PHP</title>
    <style>
        body {
            background: #222;
            color: white;
            font-family: sans-serif;
        }

        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }

        header, main, footer {
            width: 100%;
            padding: 1rem 0;
        }

        header {
            background: crimson;
        }
        main {
            background: lightblue;
        }
        footer {
            background: cadetblue;
        }

        h1, h2, h3, p, span, div {
            padding: 0.5rem 0;
        }
    </style>
</head>
<body>
    
    <?php
        //Questo è un commento su singola linea
        /* questo è un commento
        su più righe */

        //Stampa informazioni riguardo PHP e il server
        //phpinfo();
    ?>

    <?php 
    
        //Dichiariamo una variabile 'nome' con valore "Luca"
        $nome = 'Luca';

    ?>

    <header>
        <!-- Stampiamo la variabile -->
        <h1>Hello <?php echo $nome ?> into PHP World</h1>

        <?php 

            //Cambiamo il valore della variabile
            $nome = "Matteo";
        ?>
        <!-- Stampiamo di nuovo la variabile, ma con il nuovo valore -->
        <h2>Benvenuto anche a <?php echo $nome ?></h2>

        <!-- Stampiamo dati arrivati dai parametri GET -->
        <h3>L'ospite del giorno (<?php echo $_GET["giorno"] ?>) è <?php echo $_GET["ospite"] ?></h3>
        <p>
        Questa parte richiede di richiamare la pagina con i parametri GET<br>
        Esempio: http://localhost:PORTA/CARTELLA/helloword.php?giorno=Martedi&ospite=Giorgio
        </p>
    </header>

    <main>
        <?php
            $nomi = ['Matteo', 'Valeria', 'Giorgio'];
        ?>

        <h2>I nomi sono:
            <?php
                $lunghezza = strlen( $nomi[1] );
                echo $lunghezza;
            ?>
        </h2>

        <pre><?php var_dump($nomi); ?></pre>
    </main>

    <footer>
        <h2>Esempi di manipolazione delle stringhe</h2>
        <h3>Concatenazione</h3>
        <?php 
            $string = 'lorem ipsum ...';

            //primo esempio: concatenazione
            echo $string . 'E altro testo' . '<br>';
        ?>

        <h3>Esplosioni hollywoodiane</h3>
        <pre>
            <?php
                //Esplodiamo in un array. Per ora php ci scrive array, avremmo bisogno var dump ma lo vedremo più avanti, non importa per ora
                $stringaEsplosa = explode('...', $string);
                var_dump($stringaEsplosa);
            ?>
        </pre>

        <h3>Replace, length e primo carattere maiuscolo</h3>
        <?php
            //Togliamo i 3 punti e mettiamo un punto esclamativo
            $replacedString = str_ireplace('...', '!', $string);
            echo $replacedString . '<br>';

            //proviamo ad usare metodi dentro echo
            echo 'La stringa è lunga: ' . strlen($string) . ' caratteri <br>';

            //Con la prima lettere maiuscola
            echo ucfirst($string) . '<br>';

        ?>
    </footer>
</body>
</html>