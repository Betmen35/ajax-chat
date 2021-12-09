<?php
session_start();

$dosya= fopen("sohbetcik/chat.txt","r");
while ( $oku= fread($dosya,500)) {
	

echo $oku;

}


fclose($dosya);


?>

