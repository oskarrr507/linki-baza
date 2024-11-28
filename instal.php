<?php
include('db_config.php');

$polaczenie = mysqli_connect("localhost", "root", "", "db4php");

// Sprawdzenie, czy połączenie jest udane
if (!$polaczenie) {
    die('Błąd połączenia z bazą danych: ' . mysqli_connect_error());
}

$query = 'CREATE TABLE linki(
	id INT NOT NULL AUTO_INCREMENT,
	PRIMARY KEY(id),
	nazwalink CHAR(255) NOT NULL,
	tresclink CHAR(255) NOT NULL)';
		
if (!$result=@mysqli_query($polaczenie,$query)){ 
	echo 'Blad tworzenia tabeli MySQL, odpowiedz serwera: '.mysqli_error($polaczenie);   
	}
else {
	echo $result;
	echo "<br>Tabelę utworzono! Dadawanie danych:<br>";
	mysqli_query($polaczenie,"INSERT INTO linki (nazwalink,tresclink)VALUES ('Youtube','https://www.youtube.com/')");
	mysqli_query($polaczenie,"INSERT INTO linki (nazwalink,tresclink)VALUES ('Tiktok','https://www.tiktok.com/pl-PL/')");
	mysqli_query($polaczenie,"INSERT INTO linki (nazwalink,tresclink)VALUES ('X','https://www.X.com/')");
	
	echo "Dane chyba dodane!<br>";
	mysqli_close($polaczenie);
	}

	
?>