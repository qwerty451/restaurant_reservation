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
        <a href="maak_menu.php">Nieuw menu</a><br><br>
        <p>Lijst van alle klanten</p>
        <table style="width:80%">
            <tr>
                <th>id</th>
                <th>voorgerecht</th>
                <th>hoofdgerecht</th>
                <th>nagerecht</th>
                <th>prijs</th>
                <th>Edit</th>
            </tr>
            <?php
                include '../framework/database.php';
                $klantenArray = $query->retrieve_all('menu'
                );
                foreach ($klantenArray as $klant) {
                    echo "<tr>";
                    echo "<td>" . $klant['id'] . "</td>";
                    echo "<td>" . $klant['voorgerecht'] . "</td>";
                    echo "<td>" . $klant['hoofdgerecht'] . "</td>";
                    echo "<td>" . $klant['nagerecht'] . "</td>";
                    echo "<td>" . $klant['prijs'] . "</td>";
                    echo "<td>" . "EditLinkHere" . "</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>
