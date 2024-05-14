<?php
include_once __DIR__ . '/MaterialeBibliotecario.php';

class Libro extends MaterialeBibliotecario
{
    //attributi
    public $titolo;
    public $autore;
    public $annoPubblicazione;


    //metodo statico per contare i libri
    public static function contalibri()
    {
        return self::$contatoreMateriali;
    }

    // Creare istanze di libri
}
$libro1 = new Libro();
$libro1->titolo = "Il Signore degli Anelli";
$libro1->autore = "J.R.R. Tolkien";
$libro1->annoPubblicazione = 1954;
Libro::$contatoreMateriali++;

$libro2 = new Libro();
$libro2->titolo = "Harry Potter e la Pietra Filosofale";
$libro2->autore = "J.K. Rowling";
$libro2->annoPubblicazione = 1997;
Libro::$contatoreMateriali++;


echo "Libro 1: {$libro1->titolo} - Autore: {$libro1->autore} - Anno di pubblicazione: {$libro1->annoPubblicazione}<br>";
echo "<br>Libro 2: {$libro2->titolo} - Autore: {$libro2->autore} - Anno di pubblicazione: {$libro2->annoPubblicazione}<br>";

// Stampare il numero di libri
echo "<br>Numero libri: " . Libro::contalibri();