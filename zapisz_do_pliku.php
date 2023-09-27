<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $imie = $_POST["imie"];
    $nazwisko = $_POST["nazwisko"];
    $los = $_POST["los"];

    $linia = $imie.",".$nazwisko.",".$los."\n";
    $plik = fopen("dane.txt", "a");
    fwrite($plik, $linia);
    fclose($plik);
}
?>
<br>
<a href="index.php">Powrót</a>
<?php
    $plik = fopen("dane.txt", "r");
    $tablica = array();
    if ($plik){
        echo "<br>";
        while(($linia = fgets($plik)) !== false){
            $dane = explode(",", $linia);
            
            array_unshift($tablica, $dane);

            
        }
    }
    else{
        echo "Nie udało się otworzyć pliku";
    } 

    foreach($tablica as $t){
        $imie = $t[0];
        $nazwisko = $t[1];
        echo "Imię: ".$imie."<br>";
        echo "Nazwisko: ".$nazwisko."<br><br>";
    }
?>
