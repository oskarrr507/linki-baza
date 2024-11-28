<?php
include ('db_config.php');
mysqli_query($polaczenie, "DELETE FROM podstrony WHERE nazwapodstr = 'boink' AND tresc = 'badaboi'");
mysqli_close($polaczenie);
?>