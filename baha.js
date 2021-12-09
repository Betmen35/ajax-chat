
	
document.onkeydown= mesalgonder;
function mesalgonder(x){

var tus;

tus= x.which;
if (tus == 13) {



$("textarea[name=mesal]").attr("disabled","disabled");

var mesal = $("textarea[name=mesal]").val();

if (mesal == "") {


swal("işler iyi gitmedi!", "hoops boş mesaj gönderme!!!", "success");


}

else{

$.ajax({

type: "POST",
url: "chat.php",
data: {"tip":"gonder","mesal":mesal},
success:function(sonuc){

if (sonuc == "") {

alert("lütfen boş mesaj göndermeyin");

$("textarea[name=mesal]").removeAttr("disabled");

}

else{

$("textarea[name=mesal]").removeAttr("disabled");
$("textarea[name=mesal]").val("");

sohbetguncelle();

}
}


});

}// burasi bosluk kontrolu

}



}

function sohbetguncelle(){


$.ajax({


type: "POST",
url: "fgets.php",
data: {"tip":"guncelle"},
success:function(sonuc){


$('#sohbeticerik').html(sonuc);


}



});




}







sohbetguncelle();

setInterval(function(){

$(function(){

$('#sohbeticerik').scrollTop($('#sohbeticerik').prop("scrollHeight"));




});


sohbetguncelle();


},1000



);





