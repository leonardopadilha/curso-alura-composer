<?php

require 'vendor/autoload.php';
require 'src/Buscador.php';

use Alura\BuscadorDeCursos\Buscador;
//use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$httpClient = new \GuzzleHttp\Client([
    'base_uri' => 'https://www.alura.com.br',
    'verify' => false
]);

$crawler = new Crawler();

$buscador = new Buscador($httpClient, $crawler);
$cursos = $buscador->buscar('/cursos-online-programacao/php');

foreach ($cursos as $curso) {
    echo $curso . PHP_EOL;
}
