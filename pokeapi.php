<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <h1>HOLA </h1>
    <form action="pokeapi.php" method="POST">
        <input type="text" name="pokemon">
        <input type="submit" value="Buscar">
    </form>
    <?php
        $url = "https://pokeapi.co/api/v2/pokemon/";
        if ( isset( $_POST["pokemon"] ) ) {
            $pokemon = $_POST['pokemon'];
            $ch = curl_init($url.$pokemon);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
            // realiza la peticion GET
            $result = curl_exec($ch);
            // decodifica la respuesta y la almacena en un array asociativo
            $datos_pokemon = json_decode($result, true);
            curl_close($ch); 

            echo "<div class='tarjeta'>
                    <h2>".$datos_pokemon['name']."</h2>
                    <h2> ID: ".$datos_pokemon['id']."</h2>
                    <h2> Altura: ".$datos_pokemon['height']."</h2>
                    <h2> Peso: ".$datos_pokemon['weight']."</h2>
                    <img src='".$datos_pokemon['sprites']['front_default']."'>
                </div>

            ";

        }

    ?>
</body>
</html>