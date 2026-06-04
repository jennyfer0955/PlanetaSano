const comentario = document.querySelector("#coment");
var mensaje = document.getElementById("resultado")
document.getElementById("btn").onclick = function (){
	var a = comentario.value;

	if (a === "") {
		mensaje.innerHTML = "Error: debes introducir un valor";
	} else { 
		mensaje.innerHTML = "Gracias por tu comentario";
	}
}