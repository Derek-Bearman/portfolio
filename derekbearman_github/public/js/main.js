function removeAlert() {
	var $alertMsg = document.querySelector(".alert");
	var speed = 1000/60;
	var opacity = 100;
	function fadeOut() {
	    opacity--;
	    $alertMsg.style.opacity = opacity/100;
	    if (opacity > 0){
	        setTimeout(fadeOut, speed);
    	}
	}

	fadeOut();
}

function scrollIntoView() {
	var $formAlert = document.querySelector("#contact-lens");
	$formAlert.scrollIntoView({ behavior: 'auto', block: 'end' });
	setTimeout(removeAlert, 4000);
}

var i=0;
function toggleEditing() {
	
	if (!i) {
		document.querySelector(".long-answer").style.display = "block";
		i=1;
	} else if (i==1){
		document.querySelector(".long-answer").style.display = "none";
		i=0;
	}

}