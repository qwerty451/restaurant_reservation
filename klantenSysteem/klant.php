<html>
    <head>
        <title>Bon Temps Klanten Overzicht</title>
        <style>
            table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            }
        </style>
    </head>
    <body>
        <h2>Bons Temps - Klanten Overzicht</h2>
        <a href="../reservering.php">Terug naar reservering</a><br><br>
        <a href="maak_klant.php">Nieuwe Klant</a><br><br>
        <p>Lijst van alle klanten</p>
        <table style="width:80%">
            <tr>
                <th>id</th>
                <th>Naam</th>
                <th>Adres</th>
                <th>Plaats</th>
                <th>Nummer</th>
                <th>Email</th>
                <th>Postcode</th>
                <th>Edit</th>
            </tr>
            <?php
                include '../framework/database.php';
                $klantenArray = $query->retrieve_all('klant'
                );
                foreach ($klantenArray as $klant) {
                    echo "<tr>";
                    echo "<td>" . $klant['id'] . "</td>";
                    echo "<td>" . $klant['naam'] . "</td>";
                    echo "<td>" . $klant['adres'] . "</td>";
                    echo "<td>" . $klant['plaats'] . "</td>";
                    echo "<td>" . $klant['nummer'] . "</td>";
                    echo "<td>" . $klant['email'] . "</td>";
                    echo "<td>" . $klant['postcode'] . "</td>";
                    echo "<td>" . "EditLinkHere" . "</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>
