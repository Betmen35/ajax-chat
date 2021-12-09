<?php

session_start();
include('nedmin/ayar.php');

date_default_timezone_set('Europe/Istanbul');

?>







<?php
$tarih=     date("H:i:s");
$name=        $_SESSION['adi'];
$yarbay=     $_SESSION['rutbe'];
$mesal=      htmlspecialchars(strip_tags(@$_POST['mesal']));
$role_id=     $_SESSION['role_id'];


if(!$mesal){



}
else{

$yaz= "\t"."<span style='color:green;'>".$tarih."</span>"."\t"."<i class='far fa-user'></i>"."<span style='color:red;'>&nbsp".$name."</span>"."\t"."&nbsp"."\t"."<span style='color:orange;'>".$yarbay."</span>"."\t"."<span style='background-color: white; border-radius: 20px;'>".$mesal."</span>"."<br>"."\n";






?>

<?php
$dosya = fopen("sohbetcik/chat.txt","ab");

fwrite($dosya,$yaz,500);

fclose($dosya);

$file= file("sohbetcik/chat.txt");

$toplam= count($file);

if($toplam == 99){

unlink("sohbetcik/chat.txt");
touch("sohbetcik/chat.txt");




}


}



?>



