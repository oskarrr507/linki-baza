<?php
include ('db_config.php');
mysqli_query($polaczenie,"INSERT INTO podstrony (nazwapodstr,tresc)VALUES ('boink','badaboi')");
mysqli_close($polaczenie);
?>