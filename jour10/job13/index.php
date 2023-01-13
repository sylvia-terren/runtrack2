<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="index.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 10 | Job13</title>
</head>
<body>
    <?php

        //On se connecte
        $mysqli = new mysqli('localhost', 'root', '', 'jour09');
        //on fait la requête
        $request = $mysqli-> query('SELECT etages.nom as nom_etage, salles.nom as nom_salle FROM etages INNER JOIN salles ON salles.id = etages.id;');
        
        echo'<table>
                <tr>
                    <td>Nom étage</td>
                    <td>Nom salle</td>
                </tr>';
        
        while($row = $request->fetch_assoc()) {
            echo '<tr><td>'.$row['nom_etage'].'</td><td>'.$row['nom_salle'].'</td></tr>';
        }

        echo'</table>';
    ?>
</body>
</html>