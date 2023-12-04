$(document).ready(function(){
	
	// Убираем модальное окно об успешной отправки данных
	$("#background-msg").click(function(){
		$("#background-msg, #message").fadeOut();
	});
	
	/* Wow animated */
	new WOW().init();
});

/* Messengers 2 */
function clickMessengers2Button() {
	var mes1Right = document.getElementById('messenger-1').style.right;
	//var mes2Right = document.getElementById('messenger-2').style.right;
	if ( mes1Right == "0px" || mes1Right == 0 ) {
		document.getElementById('messenger-1').style.right = "80px";
		//document.getElementById('messenger-2').style.right = "160px";
		document.getElementById('messengers-2-button').style.background = "url(images/icons/close-icon.png) center";
		document.getElementById('messengers-2-button').style.backgroundSize = "contain";
	} else {
		document.getElementById('messenger-1').style.right = "0px";
		//document.getElementById('messenger-2').style.right = "0px";
		document.getElementById('messengers-2-button').style.background = "url(images/icons/messenger.png) center";
		document.getElementById('messengers-2-button').style.backgroundSize = "contain";
	}
}
/* End Messengers 2 */