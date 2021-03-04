#!/usr/bin/env php
<?php

use Alura\BuscadorDeCursos\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

require_once "vendor/autoload.php";


$cliente = new Client(["base_uri" => "https://www.alura.com.br"]);
$crawler = new Crawler();

$Buscador = new Buscador($cliente, $crawler);
$cursos = $Buscador->buscador("/cursos-online-mobile/android");

foreach ($cursos as $curso) {
    echo $curso . PHP_EOL;
}