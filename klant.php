<html>
    <head>
        <title>Bon Temps Klanten Overzicht</title>
    </head>
    <body>
        <h2>Bons Temps - Klanten Overzicht</h2>
        <p> Hier komen alle gegevens van de klanten.</p>
        <a href="maak_klant.php">Nieuwe Klant</a>
    </body>
</html>

<?php
    include 'framework/database.php';
    $klantenArray = $query->retrieve_all('klant'
    );
    foreach ($klantenArray as $klant) {
        echo "<br>";
        echo $klant['naam'] . "  -  " . $klant['nummer'];
    }
    
?>