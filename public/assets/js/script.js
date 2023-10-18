function changecolortheme(){
	var changer=document.getElementById('changecolortheme');
	if (changer.checked) {
		document.body.style.background = 'black';
		document.body.style.color = 'white';
	} else {
		document.body.style.background = 'gray';
	}
}
