<?php
$random = mt_rand(0, 400);
const API_URL = "https://bobsburgers-api.herokuapp.com/characters/";
$result = file_get_contents(API_URL);
$data = json_decode($result, true);
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Probando la API de BoB</title>
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>
  <h2>Conoce un Personaje de Bob's Burgers al azar</h2> 
  <main>      
    <div class="column">      
      <img height="300" src="<?= $data[$random]['image'] ?>" />
    </div>
    <div class="column">
      <h3>FICHA</h3> 
      <p>Nombre: <?=$data[$random]['name'] ?></p>
      <p>Cabello: <?=$data[$random]['hair'] ?? '' ?></p>
      <p>Género: <?=$data[$random]['gender'] ?? '' ?></p>
      <p>Ocupación: <?=$data[$random]['occupation'] ?? '' ?></p>
      <p>Primer episodio: <?=$data[$random]['firstEpisode'] ?? '' ?></p>  
    </div>
    
  </main>
  <button onclick="location.reload()">Recargar</button>
</body>
</html>
