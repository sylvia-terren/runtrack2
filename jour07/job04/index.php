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
        function calcule($a, $operation, $b) {
            if ($operation == "+") {
                echo ($a + $b);
            }
            elseif ($operation == "-") {
                echo ($a - $b);
            }
            elseif ($operation == "*") {
                echo ($a * $b);
            }
        }
     
        return calcule(2, "*", 2);
    ?>

</body>
</html>