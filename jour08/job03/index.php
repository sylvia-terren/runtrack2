<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 8 | Job 03</title>
</head>
<body>

    <form action="index.php" method="get">
        <!-- texte -->
        <input type="text" name="text" />
        <!-- bouton envoyer -->
        <input type="submit" name="send"/>
        <!-- bouton reset -->
        <input type="reset" name="reset"/>
    </form>

    <?php
        session_start();
        // session_destroy();
        //var_dump($_SESSION);

        if (isset($_GET['text'])) {
            $_SESSION['list_prenom'][] = $_GET['text'];
        }

        echo $_SESSION['list_prenom'];
    ?>
</body>
</html>