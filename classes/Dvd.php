<?php
include_once __DIR__ . '/MaterialeBibliotecario.php';

class Dvd extends MaterialeBibliotecario
{
    //attributi
    public $titolo;
    public $regista;
    public $annoPubblicazione;


    //metodo statico per contare i Dvd
    public static function contadvd()
    {
        return self::$contatoreMateriali;
    }
}

$dvd1 = new DVD();
$dvd1->titolo = "Inception";
$dvd1->regista = "Christopher Nolan";
$dvd1->annoPubblicazione = 2010;
DVD::$contatoreDvd++;

$dvd2 = new DVD();
$dvd2->titolo = "Interstellar";
$dvd2->regista = "Christopher Nolan";
$dvd2->annoPubblicazione = 2014;
DVD::$contatoreDvd++;



// Stampare le informazioni sui DVD
echo "<br><br>DVD 1: {$dvd1->titolo} - Regista: {$dvd1->regista} - Anno di pubblicazione: {$dvd1->annoPubblicazione}<br>";
echo "<br>DVD 2: {$dvd2->titolo} - Regista: {$dvd2->regista} - Anno di pubblicazione: {$dvd2->annoPubblicazione}<br>";

echo "<br>Numero DVD: " . DVD::contaDVD();