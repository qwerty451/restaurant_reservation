<html>
    <head>
        <title>Bon Temps Informatie Systeem</title>
    </head>
    <body>
        <h2>Bons Temps - Maak een nieuwe klant</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <label for="naam">Naam</label><br>
            <input type="text" id="naam" name="naam"><br>
            <label for="adres">Adres</label><br>
            <input type="text" id="adres" name="adres"><br>
            <label for="plaats">Plaats</label><br>
            <input type="text" id="plaats" name="plaats"><br>
            <label for="nummer">Nummer</label><br>
            <input type="text" id="nummer" name="nummer"><br>
            <label for="email">Email</label><br>
            <input type="text" id="email" name="email"><br>
            <label for="postcode">Postcode</label><br>
            <input type="text" id="postcode" name="postcode"><br>
            <input type="submit" value="send">
        </form>
    </body>
</html>

<?php
    include '../framework/database.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $naam = $_POST['naam'];
        $adres = $_POST['adres'];
        $plaats = $_POST['plaats'];
        $nummer = $_POST['nummer'];
        $email = $_POST['email'];
        $postcode = $_POST['postcode'];
        if (!empty($postcode)) {
            $insert = $query->insert_row('klant',[
                'naam' => "'$naam'",
                'adres' => "'$adres'",
                'plaats' => "'$plaats'",
                'nummer' => "'$nummer'",
                'email' => "'$email'",
                'postcode' => "'$postcode'",
            ]);
        }
    }
?>