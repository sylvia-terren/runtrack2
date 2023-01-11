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
        session_start();

        if (!isset($_SESSION['nbvisites'])) {
            $_SESSION['nbvisites'] = 1; 
        }
        
        else {
            $_SESSION['nbvisites']++;
        }

        if (isset($_POST['reset'])) {
            $_SESSION['nbvisites'] = 0;
        }

        echo "Il y a eu ".$_SESSION['nbvisites']." visite(s).";
   ?>

    <form action="index.php" method="post">
        <input type="submit" name="reset" value="Reset" />
    </form>

</body>
</html>