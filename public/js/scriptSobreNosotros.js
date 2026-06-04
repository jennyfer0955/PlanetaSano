var myBoton = true; 
if (myBoton) {
	var buttonElement = document.getElementById("resulBut");
	buttonElement.src = " ";
} else {
	var buttonimagen = document.getElementById("resulBut");
	buttonimagen.src = "../imagenes/mapaDeSitio.png";
	buttonimagen.className = "img-fluid rounded";
}
function BotEstatus() {
	if (myBoton) {
		myBoton = false;
		var buttonimagen = document.getElementById("resulBut");
		buttonimagen.src = "../imagenes/mapaDeSitio.png";
		buttonimagen.className = "img-fluid rounded";
	} else {
		myBoton = true;
		var buttonElement = document.getElementById("resulBut");
		buttonElement.src = " ";
	}
}
