<?php
error_reporting(E_ALL); //dodatkowe opcje, dzieki ktorym wiadomo gdy cos jest nie tak z kodem
ini_set('display_errors', '1');//to samo jak wyzej
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>cybermil | Główna</title>  
</head>

<body>
       
    <form action="zapisz_do_pliku.php" method="post">
        <label>Imię:</label>
        <input type="text" id="imie" name="imie"><br>

        <label>Nazwisko:</label>
        <input type="text" id="nazwisko" name="nazwisko"><br>

        <label>Losowy tekst: </label>
        <input type="text" id="los" name="los"><br>

        <input type="submit" value="Wyślij">
	</form>

<script>

</script> 

</body>
</html>