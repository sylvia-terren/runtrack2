<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        if (isset($_GET["style"])) {
            switch ($_GET["style"]) {
            case 'style1' :
    ?>
                <link rel="stylesheet" href="<?php echo $_GET["style"] . ".css"; ?>">
    <?php   break;
            case 'style2' :
    ?>
                <link rel="stylesheet" href="<?php echo $_GET["style"] . ".css"; ?>">
    <?php   break;
            case 'style3' :
    ?>
                <link rel="stylesheet" href="<?php echo $_GET["style"] . ".css"; ?>">
    <?php   break; 
            }
        } ?>

    <title>Changement de style</title>
</head>
<body>
    <form action="index.php" method="get">
        <select name="style">
            <option value="style1">style 1</option>
            <option value="style2">style 2</option>
            <option value="style3">style 3</option>
        </select>
        <input type="submit" class="button">
    </form>
</body>
</html>