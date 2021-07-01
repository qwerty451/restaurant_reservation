<?php
    include 'framework/database.php';
?>
<html>
    <head>
        <title>Bon Temps Informatie Systeem</title>
    </head>
    <body>
        <h2>Bons Temps - Reservering Systeem</h2>
        <a href="klantenSysteem/maak_klant.php">Maak een nieuwe klant</a><br><br>
        <a href="klantenSysteem/klant.php">Klantenoverzicht</a><br><br>
        <a href="menuSysteem/menu.php">Menuoverzicht</a><br><br>
        <label for="email">Email klant:</label>
        <select name="email" id="email">
        <?php
            $klantenArray = $query->retrieve_all('klant'
            );
            foreach ($klantenArray as $klant) {
                echo "<option value='" . $klant['id'] . "'>" . $klant['email'] . "</option>";
            }
        ?>
        </select>
    </body>
</html>