function infoClose() {
    d1 = document.getElementById("info");
    d1.style.display = "none";
}

function bajaConfirmar() {

	var x;
	var r=confirm("Para confirmar presiones el botón Aceptar\nDe lo contrario presione el botón Cancelar");
	
	if (r==true) {
  	
  		x="You pressed OK!";
  		//document.getElementById("formbajas").submit(); 
  		formbajas.submit();
  	}
	
	else {
  		x="You pressed Cancel!";
		//document.getElementById("demo").innerHTML=x;
  	}

}