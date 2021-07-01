<html>
    <head>
        <title>Bon Temps Informatie Systeem</title>
    </head>
    <body>
        <h2>Bons Temps - Maak een nieuw menu</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <label for="voorgerecht">Voorgerecht</label><br>
            <input type="text" id="voorgerecht" name="voorgerecht"><br>
            <label for="hoofdgerecht">Hoofdgerecht</label><br>
            <input type="text" id="hoofdgerecht" name="hoofdgerecht"><br>
            <label for="nagerecht">Nagerecht</label><br>
            <input type="text" id="nagerecht" name="nagerecht"><br>
            <label for="prijs">Prijs</label><br>
            <input type="text" id="prijs" name="prijs"><br>
            <input type="submit" value="send">
        </form>
    </body>
</html>

<?php
    include '../framework/database.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $voorgerecht = $_POST['voorgerecht'];
        $hoofdgerecht = $_POST['hoofdgerecht'];
        $nagerecht = $_POST['nagerecht'];
        $prijs = $_POST['prijs'];
        if (!empty($prijs)) {
            $insert = $query->insert_row('menu',[
                'voorgerecht' => "'$voorgerecht'",
                'hoofdgerecht' => "'$hoofdgerecht'",
                'nagerecht' => "'$nagerecht'",
                'prijs' => "'$prijs'",
            ]);
        }
    }
?>