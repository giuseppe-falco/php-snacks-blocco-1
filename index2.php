<!-- PHP Snack 2:
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. che mail contenga un punto e una chiocciola
3. e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

    $name = (isset($_GET['name']) && strlen($_GET['name']) > 2) ? ($_GET['name']) : 'nome non valido';
    $age = (isset($_GET['age']) && is_numeric($_GET['age'])) ? ($_GET['age']) : 'inserisci eta';
    $login = false;
    
    
    
    if(strpos($_GET['mail'], '@') && strpos($_GET['mail'], '.')) {
            $mail = $_GET['mail'];
            $login = true;
    }else if(isset($_GET['mail'])){ 
            $mail = 'inserisci mail';
    }else{
            $mail = "mail non valida";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h2>Dati di accesso</h2>
    <ul>
        <?php 

            echo "<li>" . "NOME : ". $name . "</li>";
            echo "<li>" . "MAIL : ". $mail . "</li>";
            echo "<li>" . "ETA : ". $age . "</li>";
            
            if($login){
                echo "<h2 style=color:green>" . "Login success" . "</h2>";
            }else{
                echo "<h2 style=color:red>" . "Login failed" . "</h2>";
            }

        ?>
    </ul>
</body>
</html>