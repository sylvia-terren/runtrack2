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
        <input type="text" name="prenom" />
        <input type="submit" name="send"/>
        <input type="reset" name="reset"/>
    </form>

    <?php
        session_start();

        if (isset($_GET['prenom'])) {
            


        }

    ?>
</body>
</html>