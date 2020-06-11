window.addEventListener("load", cargaPagina);
function cargaPagina() {
    var btn = document.getElementById("user").addEventListener("click", cambiaValores);
    var btn1 = document.getElementById("user1").addEventListener("click", cambiaValores1);
    var btn2 = document.getElementById("user2").addEventListener("click", cambiaValores2);
    var btn3 = document.getElementById("user3").addEventListener("click", cambiaValores3);
    var btn4 = document.getElementById("user4").addEventListener("click", cambiaValores4);
}

function cambiaValores() {
    var inputNombre = document.getElementById("nombre");
    inputNombre.value = "user.png";
}
function cambiaValores1() {
    var inputNombre1 = document.getElementById("nombre");
    inputNombre1.value = "user1.png";
}
function cambiaValores2() {
    var inputNombre2 = document.getElementById("nombre");
    inputNombre2.value = "user2.png";
}
function cambiaValores3() {
    var inputNombre2 = document.getElementById("nombre");
    inputNombre2.value = "user3.png";
}
function cambiaValores4() {
    var inputNombre2 = document.getElementById("nombre");
    inputNombre2.value = "user4.png";
}