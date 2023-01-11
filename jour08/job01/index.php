<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 8 | Job 01</title>
</head>
<body>

    <?php
        //start the session
        session_start();

        //met le compteur à 1 s'il n'a jamais été lancé avant
        if (!isset($_SESSION['nbvisites'])) {
            $_SESSION['nbvisites'] = 1;
        }
        //comptabilise les visites à chaque chargement de la page
        else {
            $_SESSION['nbvisites']++;
        }
        //reset le compteur à 0 si on clique dessus
        if (isset($_POST['reset'])) {
            //$_SESSION['nbvisites'] = 0;
            unset($_SESSION['nbvisites']);
        } 
        // elseif (isset($_SESSION['nbvisites']) == 0) {
        //     $_SESSION['nbvisites']++;
        // }

   ?>
    <!-- boutton reset -->
    <form action="index.php" method="post">
        <input type="submit" name="reset" value="Reset" />
    </form>

</body>
</html>