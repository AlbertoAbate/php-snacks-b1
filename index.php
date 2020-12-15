<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-snacks-b1</title>
</head>
<body>
    
    <?php
    // esercizio numero 2
    // ?email=alberto.abate87@gmail.com
    if ( empty($_GET ["email"]) ) {
        echo "Errore, nessun paramentro per l'indirizzo email";
    }
    elseif ( strpos($_GET["email"], '@') === false || strpos($_GET["email"], '.') === false) {
        echo "Accesso negato";
    }
    else {
        echo "Accesso riuscito";
    }

    ?>

</body>
</html>