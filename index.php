<?php

// exo 1
$stringExo1 = "Ajourd'hui il fait -1000 degrés";
$slashedStringExo1 = addslashes($stringExo1);

// exo 2

$stringExoMin2 = "le texte de votre choix, le tout en minuscules";

echo ucfirst($stringExoMin2)."<br>";
echo ucwords($stringExoMin2)."<br>";
echo strtoupper($stringExoMin2)."<br>";
echo "<br><br>";

$stringExoMaj2 = "le texte de votre choix, le tout en majuscules";

echo lcfirst($stringExoMaj2)."<br>";
echo strtolower($stringExoMaj2)."<br>";

// exo 3

$stringExo3 = "mot mot mot mot mot mot mot mot mot mot mot mot mot mot mot mot mot mot mot mot mot mot mot mot mot";

echo str_word_count($stringExo3)."<br><br>";

// exo 4

$stringExo4 = "le texte de votre choix";

foreach (explode(" ",$stringExo4) as $word) {
    echo $word."<br>";
}

echo "<br><br>";

// exo 5

$wordArrayExo5 = ["une", "liste", "de", "mots"];

echo implode(" ", $wordArrayExo5);

// exo 6

$stringExo6 = "le texte de votre choix";
echo strrev($stringExo6)."<br>";
echo str_shuffle($stringExo6)."<br><br>";

// exo 7

$stringExo7 = "<b>Hello</b>, nous apprenons <span style='color: blue'> PHP </span>";
echo $stringExo7."<br>";
echo strip_tags($stringExo7)."<br><br>";

// exo 8

$stringExo8 = "le texte de votre choix";
echo str_pad($stringExo8, 500, "|", STR_PAD_LEFT)."<br><br>";

// exo 9

$stringExo9 = "le texte de votre choix";
foreach (str_split($stringExo9) as $letter) {
    echo $letter."<br>";
}
echo "<br>";

// exo 10

$stringExo10 = "le texte de votre choix";
echo str_replace("votre","world", $stringExo10)."<br><br>";

// exo 11

$stringExo11 = "le test de votre choix";
if (strpos($stringExo11, "test")) {
    echo "'test' se trouve dans la chaine de caractére.<br><br>";
}


// exo 12

function isAtTheStringBegining (String $substring, String $string): Bool {
    if (strpos($string, $substring) === 0) {
        return true;
    }
    else {
        return false;
    }
}

// exo 13

function isAtTheStringEnd (String $substring, String $string): Bool {
    if (strpos($string, $substring) === (strlen($string) -1)) {
        return true;
    }
    else {
        return false;
    }
}