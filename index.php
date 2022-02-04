<?php 

$url = "https://www.canalti.com.br/api/pokemons.json";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$pokemons = json_decode(curl_exec($ch));

require_once __DIR__.'/includes/header.php';
require_once __DIR__.'/includes/consumo.php';
require_once __DIR__.'/includes/footer.php';

?>