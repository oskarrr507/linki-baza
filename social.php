<?php
function social_links($polaczenie){
	$menu = '';	
	if ($result = $polaczenie -> query("SELECT * FROM linki")) {
		while($wiersz = mysqli_fetch_assoc($result)){
                $menu = $menu.'<a href='.$wiersz['tresclink'].'>'.$wiersz['nazwalink'].'</a><br>';
                }
		$result -> free_result();
		}
	return $menu;
   }
?>