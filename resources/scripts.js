/* Ventana para agregar figuritas a la lista de faltantes */
function opvenadd() {
	document.getElementById('ventAdd').style.display = 'block';
}function clvenadd() {
	document.getElementById('ventAdd').style.display = 'none';
}
/* Ventana para eliminar figuritas de la lista de faltantes */
function opvenrem() {
	document.getElementById('ventRem').style.display = 'block';
}function clvenrem() {
	document.getElementById('ventRem').style.display = 'none';
}
/* Contenedor con búsqueda */
var busqb = function() { return document.getElementById('busq'); }
function opbusq() {
	busqb().style.display = 'block';
	document.getElementById('btnbusq').style.display = 'none';
	document.getElementById('cbusq').style.display = 'inline';
}
function clbusq() {
	busqb().style.display = 'none';
	document.getElementById('btnbusq').style.display = 'inline';
	document.getElementById('cbusq').style.display = 'none';
}
/* Cerrar mensaje de confirmación y error */
function clready() {
	document.getElementById('ready').style.display = 'none';
}
function clerror() {
	document.getElementById('error').style.display = 'none';
}
/* Abrir/Cerrar menú de la versión Mobile */
let menust = false;
function memobAc() {
	if (menust) {
		document.getElementById('menumob').style.display = 'none';
		menust = !menust;
	} else {
		document.getElementById('menumob').style.display = 'inline';
		menust = new Boolean(true);
	}
}
function enterP(elem, event) {
    if (event.keyCode == 13) {
        siExiste(elem.value);
	}
}
function siExiste(fign) {
	if (fign.length == 0) {
		document.getElementById('existentes').innerHTML = "...";
	} else {
        xmlh = new XMLHttpRequest();
        xmlh.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById('existentes').innerHTML = this.responseText;
            }
        };
		xmlh.open("GET", "datfigsubmit.php?fig=" + fign, true)
		xmlh.send();
	}
}
