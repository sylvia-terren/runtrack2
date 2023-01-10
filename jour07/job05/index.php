<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 05</title>
</head>
<body>
    
    <?php
        function occurences($str, $char) {
            $compteur = 0;
        for ($i = 0, isset($str[$i]), $i++) {
                if ($str[$i] == $char) {
                    $compteur++;
                }
        }
        }
        
        return occurences("Wil s'inquiète pour lui.", "i");
        ?>

</body>
</html>