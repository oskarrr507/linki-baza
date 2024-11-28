<?php
include('db_config.php');
echo mysqli_fetch_assoc(mysqli_query($polaczenie, "SELECT nazwapodstr FROM podstrony WHERE nazwapodstr = 'hobby'"))['nazwapodstr'];
?>