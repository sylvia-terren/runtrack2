<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 8 | Job 02</title>
</head>
<body>
    <?php
        $nbvisites = 1;

        if(isset($_COOKIE['count'])) {$
            $nbvisites = $_COOKIE['count']; 
            $nbvisites++;
        }

        setcookie('count', $nbvisites);
        echo "Le site comptabilise ".$nbvisites." visites(s).";

        #unset($_COOKIE['nbvisites']);
        #echo $_COOKIE['nbvisites'];
    ?>
</body>
</html>