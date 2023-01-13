<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="index.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 10 | Job03</title>
</head>
<body>
    <?php
        //On se connecte
        $mysqli = new mysqli('localhost', 'root', '', 'jour09');
        //on fait la requête
        $request = $mysqli-> query('SELECT nom, prenom, naissance FROM etudiants WHERE sexe = "Femme"');
        
        echo'<table>
                <tr>
                    <td>Nom</td>
                    <td>Prenom</td>
                    <td>Date de naissance</td>
                </tr>';
        
        while($row = $request->fetch_assoc()) {
            echo '<tr><td>'.$row['nom'].'</td><td>'.$row['prenom'].'</td><td>'.$row['naissance'].'</td></tr>';
        }

        echo'</table>';
    ?>
</body>
</html>