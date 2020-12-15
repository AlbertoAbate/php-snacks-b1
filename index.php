<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-snacks-b1</title>
</head>
<body>
    
    <?php
     $name = $_GET['name'];
     $email = $_GET['email'];
     $age = $_GET['age'];

    // esercizio numero 1
    // ?name=alberto
    if ( empty($name)  ) {
        echo "Errore, nessun parametro per name";
    }
    elseif (strlen($name) > 3) {
        echo "accesso riuscito";
    }
    else {
        echo "accesso negato";
    }
    // esercizio numero 2
    // ?email=alberto.abate87@gmail.com
    if ( empty($email) ) {
        echo "Errore, nessun parametro per l'indirizzo email";
    }
    elseif ( strpos($email, '@') === false || strpos($email, '.') === false) {
        echo "Accesso negato";
    }
    else {
        echo "Accesso riuscito";
    }
    // esercizio numero 3
    // ?age=33
    if (is_numeric ($age )) {
        echo "accesso riuscito";
    } else {
        echo "Accesso negato";
    }

    var_dump($name);
    var_dump($email);
    var_dump($age);
    
    ?>

</body>
</html>