<?php
    // Creare una variabile con un paragrafo di testo a vostra scelta.
    $text = "Siate affamati, siate folli, perchè solo coloro che sono abbastanza folli da pensare di poter cambiare il mondo lo cambiano davvero (S. J.)";

    // Una parola da censurare viene passata dall'utente tramite parametro GET.
    $new_text =  str_replace($_GET["word"], "***", $text);
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <!-- Stampare a schermo il paragrafo e la sua lunghezza. -->
        <h2><?php echo $text;?></h2>
        <h3>Lunghezza stringa: <?php echo strlen($text)?> caratteri.</h3>
        <!-- Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->
        <h2><?php echo $new_text;?></h2>
        <h3>Lunghezza stringa: <?php echo strlen($new_text)?> caratteri.</h3>
    </body>
</html>